<?php
// Handle reservation status update actions
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_status'], $_POST['reservation_id'], $_POST['new_status'])) {
    include_once '../server/db.php';
    $id = intval($_POST['reservation_id']);
    $new_status = $_POST['new_status'];
    $allowed = ['pending', 'placed', 'completed', 'rejected'];
    if (in_array($new_status, $allowed)) {
        $stmt = $conn->prepare("UPDATE reservation SET status=? WHERE id=?");
        $stmt->bind_param("si", $new_status, $id);
        $stmt->execute();
        $stmt->close();
    }
    // Redirect to avoid form resubmission
    header('Location: ' . strtok($_SERVER['REQUEST_URI'], '?'));
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | Bistro Elegante</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../css/universal.css">
    <link rel="stylesheet" href="../css/universal.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <div class="logo">
                <img src="../assert/img/royal-restaurant-logo.jpg" alt="Royal Restaurant Logo" style="width:48px;height:48px;border-radius:50%;object-fit:cover;box-shadow:0 2px 8px rgba(0,0,0,0.08);">
                <span style="font-weight:bold;font-size:1.1rem;color:#fff;margin-left:10px;white-space:nowrap;">Royal Restaurant</span>
            </div>
        </div>
        <div class="sidebar-menu">
            <a href="#dashboard" class="menu-item active" id="menu-dashboard">
                <i class="fas fa-tachometer-alt"></i>
                <span class="menu-text">Dashboard</span>
            </a>
            <a href="#reservations" class="menu-item" id="menu-reservations">
                <i class="fas fa-calendar-check"></i>
                <span class="menu-text">Reservations</span>
            </a>
            <a href="#orders" class="menu-item" id="menu-orders">
                <i class="fas fa-receipt"></i>
                <span class="menu-text">Orders</span>
            </a>
            <a href="#" class="menu-item">
                <i class="fas fa-users"></i>
                <span class="menu-text">Customers</span>
            </a>
            <a href="#" class="menu-item">
                <i class="fas fa-utensils"></i>
                <span class="menu-text">Menu Management</span>
            </a>
            <a href="#" class="menu-item">
                <i class="fas fa-cog"></i>
                <span class="menu-text">Settings</span>
            </a>
            <a href="#" class="menu-item">
                <i class="fas fa-sign-out-alt"></i>
                <span class="menu-text">Logout</span>
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="header">
            <h1>Admin Dashboard</h1>
            <div class="user-info">
                <div class="user-avatar">AJ</div>
                <div>
                    <div>Admin User</div>
                    <div style="font-size: 0.8rem; color: var(--text-light);">Administrator</div>
                </div>
            </div>
        </div>

        <!-- Dashboard Section -->
        <section id="dashboard">
            <div class="stats-cards">
                <?php
                include_once '../server/db.php';
                $total = $conn->query("SELECT COUNT(*) as c FROM reservation")->fetch_assoc()['c'];
                $pending = $conn->query("SELECT COUNT(*) as c FROM reservation WHERE status='pending'")->fetch_assoc()['c'];
                $placed = $conn->query("SELECT COUNT(*) as c FROM reservation WHERE status='placed'")->fetch_assoc()['c'];
                $completed = $conn->query("SELECT COUNT(*) as c FROM reservation WHERE status='completed'")->fetch_assoc()['c'];
                $rejected = $conn->query("SELECT COUNT(*) as c FROM reservation WHERE status='rejected'")->fetch_assoc()['c'];
                ?>
                <div class="stat-card">
                    <div class="stat-icon total"><i class="fas fa-calendar-alt"></i></div>
                    <div class="stat-info">
                        <h3><?php echo $total; ?></h3>
                        <p>Total Reservations</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon pending"><i class="fas fa-clock"></i></div>
                    <div class="stat-info">
                        <h3><?php echo $pending; ?></h3>
                        <p>Pending</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon placed"><i class="fas fa-arrow-right"></i></div>
                    <div class="stat-info">
                        <h3><?php echo $placed; ?></h3>
                        <p>Orders</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon confirmed"><i class="fas fa-check-circle"></i></div>
                    <div class="stat-info">
                        <h3><?php echo $completed; ?></h3>
                        <p>Completed Orders</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon cancelled"><i class="fas fa-ban"></i></div>
                    <div class="stat-info">
                        <h3><?php echo $rejected; ?></h3>
                        <p>Rejected</p>
                    </div>
                </div>
            </div>
            <style>
            .stats-cards { display: flex; gap: 24px; margin-bottom: 30px; }
            .stat-card { background: #fff; border-radius: 16px; padding: 32px 36px; box-shadow: 0 4px 24px rgba(0,0,0,0.07); display: flex; align-items: center; min-width: 220px; }
            .stat-icon { width: 56px; height: 56px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 2rem; margin-right: 20px; }
            .stat-icon.total { background: #e3f0fa; color: #3498db; }
            .stat-icon.pending { background: #fff5e1; color: #f39c12; }
            .stat-icon.confirmed { background: #e6f7ef; color: #27ae60; }
            .stat-icon.cancelled { background: #fdeaea; color: #e74c3c; }
            .stat-icon.placed { background: #eaf1fb; color: #2980b9; }
            .stat-info h3 { margin: 0; font-size: 2.1rem; color: #2d3a4a; font-weight: 700; }
            .stat-info p { margin: 0; color: #7b8a9a; font-size: 1.1rem; font-weight: 500; }
            </style>
        <!-- Reservations Section -->
        <section id="reservations" style="margin-top:40px;">
            <div class="table-header">
                <h2>Recent Reservations</h2>
            </div>
            <div class="reservations-container">
                <?php include 'reservations-section.php'; ?>
            </div>
        </section>

        <!-- Orders Section -->
        <section id="orders" style="margin-top:40px;">
            <div class="table-header">
                <h2>Completed Orders</h2>
            </div>
            <div class="reservations-container">
                <?php include 'orders-section.php'; ?>
            </div>
        </section>