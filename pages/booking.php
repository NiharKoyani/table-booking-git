<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Restaurant | Table Reservations</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 <link rel="stylesheet" href="./css/booking-form.css">
    <link rel="stylesheet" href="./css/universal.css">
 
 <style>

        body {
            background-color: #f9f9f9;
            color: var(--text);
            line-height: 1.6;
            overflow-x: hidden;
        }
        

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .btn {
            display: inline-block;
            background: var(--accent);
            color: white;
            padding: 12px 30px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            background: #d35400;
        }

        /* Booking Section */
        .booking {
            padding: 100px 0;
            background-color: #f3f4f6;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--primary);
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--accent);
        }

        .booking-container {
            display: flex;
            gap: 50px;
            align-items: flex-start;
        }

        .booking-form {
            flex: 1;
            width: 100%;
            background: white;
            border-radius: 8px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            animation: slideInLeft 0.8s ease;
        }

        .booking-form span{
            padding-left: 2px;
            color: rgba(255, 0, 0, 0.72);
        }

        .form-title {
            margin-bottom: 30px;
            font-size: 1.8rem;
            color: var(--primary);
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--secondary);
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border-radius: 4px;
            border: 1px solid #ddd;
            background: white;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 2px rgba(230, 126, 34, 0.2);
        }

        .form-submit {
            text-align: center;
            margin-top: 20px;
        }

        .booking-info {
            flex: 1;
            animation: slideInRight 0.8s ease;
        }

        .info-card {
            background: white;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }

        .info-card h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: var(--primary);
            display: flex;
            align-items: center;
        }

        .info-card h3 i {
            margin-right: 10px;
            color: var(--accent);
        }

        .info-card p {
            margin-bottom: 15px;
            color: var(--text-light);
        }

        .hours-list {
            list-style: none;
        }

        .hours-list li {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }

        .hours-list li:last-child {
            border-bottom: none;
        }

        .hours-list .day {
            font-weight: 500;
        }

        .hours-list .time {
            color: var(--text-light);
        }

        /* Confirmation Section */
        .confirmation {
            display: none;
            text-align: center;
            padding: 60px 40px;
            background: white;
            border-radius: 8px;
            margin: 50px auto;
            max-width: 700px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            animation: fadeInUp 0.8s ease;
        }

        .confirmation i {
            font-size: 4rem;
            color: var(--success);
            margin-bottom: 20px;
        }

        .confirmation h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: var(--primary);
        }

        .confirmation p {
            margin-bottom: 15px;
            color: var(--text-light);
        }

        .booking-details {
            background: #f9f9f9;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
            text-align: left;
        }

        .booking-details h3 {
            margin-bottom: 15px;
            color: var(--primary);
        }

        .detail-row {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }

        .detail-row:last-child {
            border-bottom: none;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            
            .booking-container {
                flex-direction: column;
            }
            
            .table-options {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <section class="booking" id="booking">
        <div class="container">
            <div class="section-title">
                <h2>Table Reservation</h2>
            </div>
            <div class="booking-container">

                <div class="booking-info">
                    <div class="info-card">
                        <h3><i class="fas fa-info-circle"></i> Reservation Info</h3>
                        <p>We recommend making reservations at least 24 hours in advance for the best availability.</p>
                        <p>For groups larger than 8 people, please call us directly to make arrangements.</p>
                        <p>Reservations are held for 15 minutes past the booked time. Please call if you're running late.</p>
                    </div>
                    
                    <div class="info-card">
                        <h3><i class="fas fa-clock"></i> Opening Hours</h3>
                        <ul class="hours-list">
                            <li>
                                <span class="day">Monday - Thursday</span>
                                <span class="time">11:00 AM - 10:00 PM</span>
                            </li>
                            <li>
                                <span class="day">Friday - Saturday</span>
                                <span class="time">11:00 AM - 11:00 PM</span>
                            </li>
                            <li>
                                <span class="day">Sunday</span>
                                <span class="time">10:00 AM - 9:00 PM</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="info-card">
                        <h3><i class="fas fa-phone"></i> Contact Us</h3>
                        <p><strong>Phone:</strong> (555) 123-4567</p>
                        <p><strong>Email:</strong> Reservations@ROYAL.com</p>
                        <p><strong>Address:</strong> ROYAL Restaurant , Palace Road, Jamnagar, Gujarat - 361008</p>
                    </div>
                </div>

                <div class="booking-form">
                    <h3 class="form-title">Reserve Your Table</h3>
                    <?php include('./util/booking-form.php')?>
                </div>
            </div>
        </div>
    </section>

    <div class="confirmation" id="confirmation">
        <i class="fas fa-check-circle"></i>
        <h2>Reservation Confirmed!</h2>
        <p>Thank you for your reservation. We've sent a confirmation email with all the details.</p>
        
        <div class="booking-details">
            <h3>Reservation Details</h3>
            <div class="detail-row">
                <span>Name:</span>
                <span id="confirm-name"></span>
            </div>
            <div class="detail-row">
                <span>Date:</span>
                <span id="confirm-date"></span>
            </div>
            <div class="detail-row">
                <span>Time:</span>
                <span id="confirm-time"></span>
            </div>
            <div class="detail-row">
                <span>Guests:</span>
                <span id="confirm-guests"></span>
            </div>
            <div class="detail-row">
                <span>Table Type:</span>
                <span id="confirm-table"></span>
            </div>
        </div>
        
        <p>We look forward to serving you at Royal Restaurant!</p>
        <button class="btn" id="newBooking">Make Another Reservation</button>
    </div>
    <script>
        // Table selection functionality
        document.querySelectorAll('.table-option').forEach(option => {
            option.addEventListener('click', function() {
                document.querySelectorAll('.table-option').forEach(opt => {
                    opt.classList.remove('selected');
                });
                this.classList.add('selected');
            });
        });
        
        </script>
        <script>
    document.addEventListener('DOMContentLoaded', function() {
        var bookingForm = document.getElementById('bookingForm');
        if (bookingForm) {
            var dateInput = document.getElementById('date');
            var timeInput = document.getElementById('time');

            function setMinTime() {
                var today = new Date();
                var selectedDate = new Date(dateInput.value);
                if (dateInput.value && selectedDate.toDateString() === today.toDateString()) {
                    var hours = today.getHours().toString().padStart(2, '0');
                    var minutes = today.getMinutes().toString().padStart(2, '0');
                    timeInput.min = hours + ':' + minutes;
                } else {
                    timeInput.min = '';
                }
            }

            if (dateInput && timeInput) {
                dateInput.addEventListener('change', setMinTime);
                setMinTime();
            }

            bookingForm.addEventListener('submit', function(e) {
                // Basic validation example (customize as needed)
                var isValid = true;
                var requiredFields = bookingForm.querySelectorAll('[required]');
                requiredFields.forEach(function(field) {
                    if (!field.value) {
                        isValid = false;
                        field.classList.add('error');
                    } else {
                        field.classList.remove('error');
                    }
                });

                if (!isValid) {
                    e.preventDefault();
                    // Optionally show a message to the user
                    alert('Please fill in all required fields.');
                    return false;
                }
                // If valid, allow submit (or add AJAX logic here)

                    // Optionally, you can do AJAX here, but as requested, submit the form
                    bookingForm.submit();

            });
        }
    });
</script>
</body>
</html>