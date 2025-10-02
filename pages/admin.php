<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | Bistro Elegante</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./css/universal.css">
    
    <style>
        body {
            background-color: #f5f7fa;
            color: var(--text);
            line-height: 1.6;
            display: flex;
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            background: var(--sidebar);
            color: white;
            height: 100vh;
            position: fixed;
            transition: all 0.3s;
            z-index: 100;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar-header {
            padding: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
        }

        .sidebar-header .logo {
            font-size: 1.5rem;
            font-weight: 700;
            display: flex;
            align-items: center;
        }

        .sidebar-header .logo i {
            margin-right: 10px;
            color: var(--accent);
        }

        .sidebar-menu {
            padding: 15px 0;
        }

        .menu-item {
            padding: 12px 20px;
            display: flex;
            align-items: center;
            color: #bdc3c7;
            text-decoration: none;
            transition: all 0.3s;
            border-left: 3px solid transparent;
        }

        .menu-item:hover, .menu-item.active {
            background: var(--sidebar-hover);
            color: white;
            border-left: 3px solid var(--accent);
        }

        .menu-item i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }

        .menu-item.active i {
            color: var(--accent);
        }

        /* Main Content */
        .main-content {
            flex: 1;
            margin-left: 250px;
            padding: 20px;
            transition: all 0.3s;
        }

        /* Header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid #e1e8ed;
        }

        .header h1 {
            color: var(--primary);
            font-size: 1.8rem;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--accent);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }

        /* Stats Cards */
        .stats-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
            transition: transform 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-size: 1.5rem;
        }

        .stat-icon.total {
            background: rgba(52, 152, 219, 0.1);
            color: #3498db;
        }

        .stat-icon.pending {
            background: rgba(243, 156, 18, 0.1);
            color: var(--warning);
        }

        .stat-icon.confirmed {
            background: rgba(46, 204, 113, 0.1);
            color: var(--success);
        }

        .stat-icon.cancelled {
            background: rgba(231, 76, 60, 0.1);
            color: var(--error);
        }

        .stat-info h3 {
            font-size: 1.8rem;
            margin-bottom: 5px;
            color: var(--primary);
        }

        .stat-info p {
            color: var(--text-light);
            font-size: 0.9rem;
        }

        /* Filters */
        .filters {
            background: white;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            align-items: center;
        }

        .filter-group {
            display: flex;
            flex-direction: column;
        }

        .filter-group label {
            font-size: 0.8rem;
            color: var(--text-light);
            margin-bottom: 5px;
            font-weight: 500;
        }

        .filter-control {
            padding: 8px 12px;
            border: 1px solid #e1e8ed;
            border-radius: 6px;
            background: white;
            font-size: 0.9rem;
        }

        .btn {
            padding: 8px 16px;
            border-radius: 6px;
            border: none;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary {
            background: var(--accent);
            color: white;
        }

        .btn-primary:hover {
            background: #d35400;
        }

        .btn-outline {
            background: transparent;
            border: 1px solid var(--primary);
            color: var(--primary);
        }

        .btn-outline:hover {
            background: var(--primary);
            color: white;
        }

        /* Reservations Table */
        .reservations-container {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .table-header {
            padding: 20px;
            border-bottom: 1px solid #e1e8ed;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .table-header h2 {
            color: var(--primary);
            font-size: 1.3rem;
        }

        .table-actions {
            display: flex;
            gap: 10px;
        }

        .reservations-table {
            width: 100%;
            border-collapse: collapse;
        }

        .reservations-table th {
            background: #f8f9fa;
            padding: 15px;
            text-align: left;
            font-weight: 600;
            color: var(--primary);
            border-bottom: 1px solid #e1e8ed;
        }

        .reservations-table td {
            padding: 15px;
            border-bottom: 1px solid #e1e8ed;
        }

        .reservations-table tr:last-child td {
            border-bottom: none;
        }

        .reservations-table tr:hover {
            background: #f8f9fa;
        }

        .customer-info {
            display: flex;
            flex-direction: column;
        }

        .customer-name {
            font-weight: 600;
            color: var(--primary);
        }

        .customer-contact {
            font-size: 0.85rem;
            color: var(--text-light);
        }

        .status-badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
            display: inline-block;
        }

        .status-pending {
            background: rgba(243, 156, 18, 0.1);
            color: var(--warning);
        }

        .status-confirmed {
            background: rgba(46, 204, 113, 0.1);
            color: var(--success);
        }

        .status-cancelled {
            background: rgba(231, 76, 60, 0.1);
            color: var(--error);
        }

        .status-completed {
            background: rgba(52, 152, 219, 0.1);
            color: #3498db;
        }

        .action-buttons {
            display: flex;
            gap: 8px;
        }

        .action-btn {
            width: 32px;
            height: 32px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
            border: none;
        }

        .action-btn.view {
            background: rgba(52, 152, 219, 0.1);
            color: #3498db;
        }

        .action-btn.edit {
            background: rgba(46, 204, 113, 0.1);
            color: var(--success);
        }

        .action-btn.cancel {
            background: rgba(231, 76, 60, 0.1);
            color: var(--error);
        }

        .action-btn:hover {
            transform: scale(1.1);
        }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            background: white;
            border-radius: 10px;
            width: 90%;
            max-width: 600px;
            max-height: 90vh;
            overflow-y: auto;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            animation: modalFadeIn 0.3s;
        }

        @keyframes modalFadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .modal-header {
            padding: 20px;
            border-bottom: 1px solid #e1e8ed;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-header h2 {
            color: var(--primary);
        }

        .close-modal {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--text-light);
        }

        .modal-body {
            padding: 20px;
        }

        .reservation-details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .detail-group {
            margin-bottom: 15px;
        }

        .detail-label {
            font-size: 0.8rem;
            color: var(--text-light);
            margin-bottom: 5px;
            font-weight: 500;
        }

        .detail-value {
            font-weight: 500;
            color: var(--primary);
        }

        .modal-footer {
            padding: 20px;
            border-top: 1px solid #e1e8ed;
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .sidebar {
                width: 70px;
            }
            
            .sidebar .menu-text {
                display: none;
            }
            
            .main-content {
                margin-left: 70px;
            }
            
            .sidebar-header .logo span {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .reservation-details {
                grid-template-columns: 1fr;
            }
            
            .stats-cards {
                grid-template-columns: 1fr;
            }
            
            .filters {
                flex-direction: column;
                align-items: stretch;
            }
            
            .reservations-table {
                display: block;
                overflow-x: auto;
            }
        }
    </style>
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
            <a href="#" class="menu-item active">
                <i class="fas fa-tachometer-alt"></i>
                <span class="menu-text">Dashboard</span>
            </a>
            <a href="#" class="menu-item">
                <i class="fas fa-calendar-check"></i>
                <span class="menu-text">Reservations</span>
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
            <h1>Reservation Management</h1>
            <div class="user-info">
                <div class="user-avatar">AJ</div>
                <div>
                    <div>Admin User</div>
                    <div style="font-size: 0.8rem; color: var(--text-light);">Administrator</div>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="stats-cards">
            <div class="stat-card">
                <div class="stat-icon total">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <div class="stat-info">
                    <h3>42</h3>
                    <p>Total Reservations</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon pending">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="stat-info">
                    <h3>8</h3>
                    <p>Pending Approval</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon confirmed">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="stat-info">
                    <h3>28</h3>
                    <p>Confirmed</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon cancelled">
                    <i class="fas fa-times-circle"></i>
                </div>
                <div class="stat-info">
                    <h3>6</h3>
                    <p>Cancelled</p>
                </div>
            </div>
        </div>

        <!-- Filters -->
        <div class="filters">
            <div class="filter-group">
                <label for="date-filter">Date</label>
                <input type="date" id="date-filter" class="filter-control">
            </div>
            <div class="filter-group">
                <label for="status-filter">Status</label>
                <select id="status-filter" class="filter-control">
                    <option value="all">All Statuses</option>
                    <option value="pending">Pending</option>
                    <option value="confirmed">Confirmed</option>
                    <option value="cancelled">Cancelled</option>
                    <option value="completed">Completed</option>
                </select>
            </div>
            <div class="filter-group">
                <label for="search">Search</label>
                <input type="text" id="search" class="filter-control" placeholder="Customer name or phone">
            </div>
            <button class="btn btn-primary">
                <i class="fas fa-filter"></i> Apply Filters
            </button>
            <button class="btn btn-outline">
                <i class="fas fa-redo"></i> Reset
            </button>
        </div>

        <!-- Reservations Table -->
        <div class="reservations-container">
            <div class="table-header">
                <h2>Recent Reservations</h2>
                <div class="table-actions">
                    <button class="btn btn-primary">
                        <i class="fas fa-plus"></i> New Reservation
                    </button>
                    <button class="btn btn-outline">
                        <i class="fas fa-download"></i> Export
                    </button>
                </div>
            </div>
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
                    <tr>
                        <td>
                            <div class="customer-info">
                                <div class="customer-name">Michael Johnson</div>
                                <div class="customer-contact">michael@example.com • (555) 123-4567</div>
                            </div>
                        </td>
                        <td>Oct 15, 2023 • 7:00 PM</td>
                        <td>4</td>
                        <td>Window #5</td>
                        <td><span class="status-badge status-confirmed">Confirmed</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-btn view" onclick="openReservationModal(1)">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="action-btn edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="action-btn cancel">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="customer-info">
                                <div class="customer-name">Sarah Williams</div>
                                <div class="customer-contact">sarahw@example.com • (555) 987-6543</div>
                            </div>
                        </td>
                        <td>Oct 16, 2023 • 6:30 PM</td>
                        <td>2</td>
                        <td>Booth #3</td>
                        <td><span class="status-badge status-pending">Pending</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-btn view" onclick="openReservationModal(2)">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="action-btn edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="action-btn cancel">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="customer-info">
                                <div class="customer-name">Robert Chen</div>
                                <div class="customer-contact">robertc@example.com • (555) 456-7890</div>
                            </div>
                        </td>
                        <td>Oct 14, 2023 • 8:00 PM</td>
                        <td>6</td>
                        <td>Private Room</td>
                        <td><span class="status-badge status-completed">Completed</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-btn view" onclick="openReservationModal(3)">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="action-btn edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="action-btn cancel">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="customer-info">
                                <div class="customer-name">Jennifer Lopez</div>
                                <div class="customer-contact">jlopez@example.com • (555) 234-5678</div>
                            </div>
                        </td>
                        <td>Oct 17, 2023 • 7:30 PM</td>
                        <td>5</td>
                        <td>Standard #8</td>
                        <td><span class="status-badge status-cancelled">Cancelled</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-btn view" onclick="openReservationModal(4)">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="action-btn edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="action-btn cancel">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="customer-info">
                                <div class="customer-name">David Miller</div>
                                <div class="customer-contact">davidm@example.com • (555) 345-6789</div>
                            </div>
                        </td>
                        <td>Oct 18, 2023 • 6:00 PM</td>
                        <td>3</td>
                        <td>Window #2</td>
                        <td><span class="status-badge status-confirmed">Confirmed</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-btn view" onclick="openReservationModal(5)">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="action-btn edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="action-btn cancel">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Reservation Details Modal -->
    <div class="modal" id="reservationModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Reservation Details</h2>
                <button class="close-modal" onclick="closeReservationModal()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="reservation-details">
                    <div class="detail-group">
                        <div class="detail-label">Reservation ID</div>
                        <div class="detail-value" id="modal-reservation-id">#RES-001</div>
                    </div>
                    <div class="detail-group">
                        <div class="detail-label">Status</div>
                        <div class="detail-value">
                            <span class="status-badge status-confirmed" id="modal-status">Confirmed</span>
                        </div>
                    </div>
                    <div class="detail-group">
                        <div class="detail-label">Customer Name</div>
                        <div class="detail-value" id="modal-customer-name">Michael Johnson</div>
                    </div>
                    <div class="detail-group">
                        <div class="detail-label">Email</div>
                        <div class="detail-value" id="modal-email">michael@example.com</div>
                    </div>
                    <div class="detail-group">
                        <div class="detail-label">Phone</div>
                        <div class="detail-value" id="modal-phone">(555) 123-4567</div>
                    </div>
                    <div class="detail-group">
                        <div class="detail-label">Date</div>
                        <div class="detail-value" id="modal-date">October 15, 2023</div>
                    </div>
                    <div class="detail-group">
                        <div class="detail-label">Time</div>
                        <div class="detail-value" id="modal-time">7:00 PM</div>
                    </div>
                    <div class="detail-group">
                        <div class="detail-label">Number of Guests</div>
                        <div class="detail-value" id="modal-guests">4</div>
                    </div>
                    <div class="detail-group">
                        <div class="detail-label">Table Preference</div>
                        <div class="detail-value" id="modal-table">Window #5</div>
                    </div>
                    <div class="detail-group">
                        <div class="detail-label">Special Occasion</div>
                        <div class="detail-value" id="modal-occasion">Anniversary</div>
                    </div>
                    <div class="detail-group full-width">
                        <div class="detail-label">Special Requests</div>
                        <div class="detail-value" id="modal-requests">We're celebrating our 10th anniversary. Can we have a table with a view?</div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-outline" onclick="closeReservationModal()">Close</button>
                <button class="btn btn-primary">
                    <i class="fas fa-edit"></i> Edit Reservation
                </button>
            </div>
        </div>
    </div>

    <script>
        // Sample reservation data
        const reservations = {
            1: {
                id: "#RES-001",
                status: "confirmed",
                customerName: "Michael Johnson",
                email: "michael@example.com",
                phone: "(555) 123-4567",
                date: "October 15, 2023",
                time: "7:00 PM",
                guests: "4",
                table: "Window #5",
                occasion: "Anniversary",
                requests: "We're celebrating our 10th anniversary. Can we have a table with a view?"
            },
            2: {
                id: "#RES-002",
                status: "pending",
                customerName: "Sarah Williams",
                email: "sarahw@example.com",
                phone: "(555) 987-6543",
                date: "October 16, 2023",
                time: "6:30 PM",
                guests: "2",
                table: "Booth #3",
                occasion: "Date Night",
                requests: "Can we have a quiet table?"
            },
            3: {
                id: "#RES-003",
                status: "completed",
                customerName: "Robert Chen",
                email: "robertc@example.com",
                phone: "(555) 456-7890",
                date: "October 14, 2023",
                time: "8:00 PM",
                guests: "6",
                table: "Private Room",
                occasion: "Business Dinner",
                requests: "We'll need the projector for a presentation."
            },
            4: {
                id: "#RES-004",
                status: "cancelled",
                customerName: "Jennifer Lopez",
                email: "jlopez@example.com",
                phone: "(555) 234-5678",
                date: "October 17, 2023",
                time: "7:30 PM",
                guests: "5",
                table: "Standard #8",
                occasion: "Birthday",
                requests: "Can you arrange for a birthday cake?"
            },
            5: {
                id: "#RES-005",
                status: "confirmed",
                customerName: "David Miller",
                email: "davidm@example.com",
                phone: "(555) 345-6789",
                date: "October 18, 2023",
                time: "6:00 PM",
                guests: "3",
                table: "Window #2",
                occasion: "None",
                requests: "No special requests"
            }
        };

        // Open reservation modal
        function openReservationModal(reservationId) {
            const reservation = reservations[reservationId];
            if (!reservation) return;
            
            // Populate modal with reservation data
            document.getElementById('modal-reservation-id').textContent = reservation.id;
            document.getElementById('modal-status').textContent = reservation.status.charAt(0).toUpperCase() + reservation.status.slice(1);
            document.getElementById('modal-status').className = `status-badge status-${reservation.status}`;
            document.getElementById('modal-customer-name').textContent = reservation.customerName;
            document.getElementById('modal-email').textContent = reservation.email;
            document.getElementById('modal-phone').textContent = reservation.phone;
            document.getElementById('modal-date').textContent = reservation.date;
            document.getElementById('modal-time').textContent = reservation.time;
            document.getElementById('modal-guests').textContent = reservation.guests;
            document.getElementById('modal-table').textContent = reservation.table;
            document.getElementById('modal-occasion').textContent = reservation.occasion;
            document.getElementById('modal-requests').textContent = reservation.requests;
            
            // Show modal
            document.getElementById('reservationModal').style.display = 'flex';
        }

        // Close reservation modal
        function closeReservationModal() {
            document.getElementById('reservationModal').style.display = 'none';
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('reservationModal');
            if (event.target === modal) {
                closeReservationModal();
            }
        }
    </script>
</body>
</html>