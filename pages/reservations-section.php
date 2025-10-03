<?php
// reservations-section.php
// Show all reservations except completed
include_once '../server/db.php';
$sql = "SELECT * FROM reservation WHERE status != 'completed' ORDER BY reservation_date DESC, reservation_time DESC";
$result = $conn->query($sql);
?>
<table class="reservations-table">
    <thead>
        <tr>
            <th>Customer</th>
            <th>Date & Time</th>
            <th>Guests</th>
            <th>Table</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
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
                $status = $row['status'];
                $badgeClass = 'status-badge ';
                $badgeText = '';
                if ($status === 'pending') {
                    $badgeClass .= 'status-pending';
                    $badgeText = 'Pending';
                } else if ($status === 'placed') {
                    $badgeClass .= 'status-confirmed-custom';
                    $badgeText = 'Placed';
                } else if ($status === 'completed') {
                    $badgeClass .= 'status-confirmed-final';
                    $badgeText = 'Completed';
                } else if ($status === 'rejected') {
                    $badgeClass .= 'status-rejected';
                    $badgeText = 'Order Rejected';
                }
                echo '<td><span class="' . $badgeClass . '">' . $badgeText . '</span></td>';

                // Action buttons logic
                echo '<td>';
                echo '<div class="action-buttons">';
                if ($status === 'pending') {
                    // Accept/Reject
                    echo '<form method="post" style="display:inline;">';
                    echo '<input type="hidden" name="reservation_id" value="' . $row['id'] . '">';
                    echo '<input type="hidden" name="update_status" value="1">';
                    echo '<button type="submit" name="new_status" value="placed" class="action-btn edit" title="Accept"><i class="fas fa-check"></i></button>';
                    echo '<button type="submit" name="new_status" value="rejected" class="action-btn cancel" title="Reject"><i class="fas fa-times"></i></button>';
                    echo '</form>';
                } else if ($status === 'placed') {
                    // Mark as Completed
                    echo '<form method="post" style="display:inline;">';
                    echo '<input type="hidden" name="reservation_id" value="' . $row['id'] . '">';
                    echo '<input type="hidden" name="update_status" value="1">';
                    echo '<button type="submit" name="new_status" value="completed" class="action-btn action-btn-confirmed-final" title="Mark as Completed"><i class="fas fa-check-double"></i></button>';
                    echo '</form>';
                } else {
                    // No actions for completed or rejected
                    echo '<span style="color:#888;font-size:0.95em;">No actions</span>';
                }
                echo '</div>';
                echo '</td>';
                echo '</tr>';
            }
        } else {
            echo '<tr><td colspan="6" style="text-align:center;">No reservations found.</td></tr>';
        }
        ?>
    </tbody>
</table>
