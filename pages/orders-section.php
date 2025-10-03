<?php
// orders-section.php
// Show only completed orders
include_once '../server/db.php';
$ordersql = "SELECT * FROM reservation WHERE status='completed' ORDER BY reservation_date DESC, reservation_time DESC";
$orderresult = $conn->query($ordersql);
?>
<table class="reservations-table">
    <thead>
        <tr>
            <th>Customer</th>
            <th>Date & Time</th>
            <th>Guests</th>
            <th>Table</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($orderresult && $orderresult->num_rows > 0) {
            while ($row = $orderresult->fetch_assoc()) {
                echo '<tr>';
                echo '<td>';
                echo '<div class="customer-info">';
                echo '<div class="customer-name">' . htmlspecialchars($row['name']) . '</div>';
                echo '<div class="customer-contact">' . htmlspecialchars($row['email']) . ' • ' . htmlspecialchars($row['phone_number']) . '</div>';
                echo '</div>';
                echo '</td>';
                echo '<td>' . htmlspecialchars($row['reservation_date']) . ' • ' . htmlspecialchars(substr($row['reservation_time'],0,5)) . '</td>';
                echo '<td>' . htmlspecialchars($row['number_of_guests']) . '</td>';
                echo '<td>' . htmlspecialchars($row['table_preference']) . '</td>';
                $badgeClass = 'status-badge status-confirmed-final';
                $badgeText = 'Completed';
                echo '<td><span class="' . $badgeClass . '">' . $badgeText . '</span></td>';
                echo '</tr>';
            }
        } else {
            echo '<tr><td colspan="5" style="text-align:center;">No orders found.</td></tr>';
        }
        ?>
    </tbody>
</table>