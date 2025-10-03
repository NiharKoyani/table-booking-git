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
                <i class="fas fa-utensils"></i>
                <span>Bistro Elegante</span>
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
    </div>reservation mee css kha gya dhanse kro 

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
                    <div class="stat-icon total">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <div class="stat-info">
                        <h3><?php echo $total; ?></h3>
                        <p>Total Reservations</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon pending">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="stat-info">
                        <h3><?php echo $pending; ?></h3>
                        <p>Pending</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon confirmed">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="stat-info">
                        <h3><?php echo $placed; ?></h3>
                        <p>Placed</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon cancelled">
                        <i class="fas fa-times-circle"></i>
                    </div>
                    <div class="stat-info">
                        <h3><?php echo $completed; ?></h3>
                        <p>Completed</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon cancelled">
                        <i class="fas fa-ban"></i>
                    </div>
                    <div class="stat-info">
                        <h3><?php echo $rejected; ?></h3>
                        <p>Rejected</p>
                    </div>
                </div>
            </div>
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