<?php
// menu.php (backend for menu management and menu display)
include_once __DIR__ . '/db.php';

function get_menu_items($category = null, $only_active = true) {
    global $conn;
    $sql = "SELECT * FROM menu";
    $params = [];
    $types = '';
    $where = [];
    if ($only_active) {
        $where[] = "is_active=1";
    }
    if ($category && $category !== 'all') {
        $where[] = "category=?";
        $params[] = $category;
        $types .= 's';
    }
    if ($where) {
        $sql .= ' WHERE ' . implode(' AND ', $where);
    }
    $sql .= ' ORDER BY category, name';
    $stmt = $conn->prepare($sql);
    if ($params) {
        $stmt->bind_param($types, ...$params);
    }
    $stmt->execute();
    $result = $stmt->get_result();
    $items = [];
    while ($row = $result->fetch_assoc()) {
        $items[] = $row;
    }
    $stmt->close();
    return $items;
}

function set_menu_item_status($id, $on) {
    global $conn;
    $stmt = $conn->prepare("UPDATE menu SET is_active=? WHERE id=?");
    $active = $on ? 1 : 0;
    $stmt->bind_param('ii', $active, $id);
    $stmt->execute();
    $stmt->close();
}

// For AJAX: handle POST to toggle menu item
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['toggle_id'], $_POST['toggle_on'])) {
    set_menu_item_status((int)$_POST['toggle_id'], (int)$_POST['toggle_on']);
    echo 'OK';
    exit;
}
