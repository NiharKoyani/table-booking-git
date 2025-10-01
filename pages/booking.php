<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Restaurant | Table Reservations</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary: #2c3e50;
            --secondary: #34495e;
            --accent: #e67e22;
            --light: #ecf0f1;
            --dark: #2c3e50;
            --text: #333;
            --text-light: #7f8c8d;
            --success: #27ae60;
        }

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

        /* Table Selection */
        .table-selection {
            border-top: 1px solid #eee;
        }

        .table-selection h4 {
            margin-bottom: 15px;
            color: var(--primary);
        }

        .table-options {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .table-option {
            flex: 1;
            min-width: 120px;
            text-align: center;
            padding: 10px;
            border: 2px solid #ddd;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .table-option:hover {
            border-color: var(--accent);
        }

        .table-option.selected {
            border-color: var(--accent);
            background-color: rgba(230, 126, 34, 0.1);
        }

        .table-icon {
            font-size: 1.5rem;
            margin-bottom: 5px;
            color: var(--secondary);
        }

        .table-option.selected .table-icon {
            color: var(--accent);
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
                        <p><strong>Email:</strong> reservations@bistroelegante.com</p>
                        <p><strong>Address:</strong> 123 Gourmet Avenue, Culinary District</p>
                    </div>
                </div>

                <div class="booking-form">
                    <h3 class="form-title">Reserve Your Table</h3>
                    <form id="bookingForm">
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="name">Full Name<span>*</span></label>
                                <input type="text" id="name" class="form-control" placeholder="Enter your name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address<span>*</span></label>
                                <input type="email" id="email" class="form-control" placeholder="Enter your email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number<span>*</span></label>
                                <input type="tel" id="phone" class="form-control" placeholder="Enter your phone number" required>
                            </div>
                            <div class="form-group">
                                <label for="date">Date<span>*</span></label>
                                <input type="date" id="date" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="time">Time<span>*</span></label>
                                <input type="time" id="time" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="guests">Number of Guests<span>*</span></label>
                                <select id="guests" class="form-control" required>
                                    <option value="" disabled selected>Select number of guests</option>
                                    <option value="1">1 Person</option>
                                    <option value="2">2 People</option>
                                    <option value="3">3 People</option>
                                    <option value="4">4 People</option>
                                    <option value="5">5 People</option>
                                    <option value="6">6 People</option>
                                    <option value="7">7+ People</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="occasion">Special Occasion (Optional)</label>
                                <select id="occasion" class="form-control">
                                    <option value="" selected>No special occasion</option>
                                    <option value="birthday">Birthday</option>
                                    <option value="anniversary">Anniversary</option>
                                    <option value="business">Business Dinner</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="requests">Special Requests (Optional)</label>
                                <textarea id="requests" class="form-control" rows="3" placeholder="Any special requests?"></textarea>
                            </div>
                        </div>
                        
                        <section id="Preference" class="table-selection">
                            <h4>Table Preference</h4>
                            <div class="table-options">
                                <div class="table-option" data-type="standard">
                                    <div class="table-icon">
                                        <i class="fas fa-chair"></i>
                                    </div>
                                    <option>Standard</option>
                                </div>
                                <div class="table-option" data-type="booth">
                                    <div class="table-icon">
                                        <i class="fas fa-couch"></i>
                                    </div>
                                    <option>Booth</option>
                                </div>
                                <div class="table-option" data-type="window">
                                    <div class="table-icon">
                                        <i class="fas fa-window-restore"></i>
                                    </div>
                                    <option>Window</option>
                                </div>
                                <div class="table-option" data-type="private">
                                    <div class="table-icon">
                                        <i class="fas fa-door-closed"></i>
                                    </div>
                                    <option>Private</option>
                                </div>
                            </div>
                        </section>
                        
                        <div class="form-submit">
                            <button type="submit" class="btn">Book Now</button>
                        </div>
                    </form>
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

        // Phone number validation function
function validatePhoneNumber(phone) {
    // Remove all non-digit characters except + at the beginning
    const cleaned = phone.replace(/^(?:\+)?([^\d+])/g, '');
    
    // Common phone number patterns
    const patterns = {
        international: /^\+\d{10,15}$/, // + followed by 10-15 digits
        us: /^\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$/, // (123) 456-7890 or 123-456-7890
        basic: /^\d{10}$/ // 1234567890
    };
    
    return patterns.international.test(cleaned) || 
           patterns.us.test(phone) || 
           patterns.basic.test(cleaned);
}

// Real-time phone validation with visual feedback
function setupPhoneValidation() {
    const phoneInput = document.getElementById('phone');
    
    if (!phoneInput) return;
    
    // Format phone number as user types
    phoneInput.addEventListener('input', function(e) {
        const value = e.target.value.replace(/\D/g, '');
        
        if (value.length <= 3) {
            e.target.value = value;
        } else if (value.length <= 6) {
            e.target.value = `(${value.slice(0, 3)}) ${value.slice(3)}`;
        } else {
            e.target.value = `(${value.slice(0, 3)}) ${value.slice(3, 6)}-${value.slice(6, 10)}`;
        }
        
        // Update validation styling
        updatePhoneValidationStyle(e.target);
    });
    
    // Validate on blur
    phoneInput.addEventListener('blur', function(e) {
        updatePhoneValidationStyle(e.target);
    });
    
    // Validate before form submission
    const form = document.getElementById('bookingForm');
    if (form) {
        form.addEventListener('submit', function(e) {
            if (!validatePhone(phoneInput.value)) {
                e.preventDefault();
                showPhoneError('Please enter a valid phone number');
                phoneInput.focus();
            }
        });
    }
}

// Update visual style based on validation
function updatePhoneValidationStyle(input) {
    const value = input.value.replace(/\D/g, '');
    
    if (value.length === 0) {
        input.style.borderColor = '#ddd';
        input.style.boxShadow = 'none';
    } else if (validatePhone(input.value)) {
        input.style.borderColor = '#27ae60';
        input.style.boxShadow = '0 0 0 2px rgba(39, 174, 96, 0.2)';
    } else {
        input.style.borderColor = '#e74c3c';
        input.style.boxShadow = '0 0 0 2px rgba(231, 76, 60, 0.2)';
    }
}

// Enhanced phone validation function
function validatePhone(phone) {
    if (!phone) return false;
    
    // Remove all non-digit characters except + at start
    const cleaned = phone.replace(/[^\d+]/g, '');
    
    // Check if it's an international format
    if (cleaned.startsWith('+')) {
        return cleaned.length >= 11 && cleaned.length <= 16; // +1 to +15 digits
    }
    
    // US/Canada format (10 digits)
    const digitsOnly = cleaned.replace(/\D/g, '');
    return digitsOnly.length === 10;
}

// Show error message
function showPhoneError(message) {
    // Remove existing error message
    const existingError = document.querySelector('.phone-error');
    if (existingError) {
        existingError.remove();
    }
    
    // Create error message element
    const errorElement = document.createElement('div');
    errorElement.className = 'phone-error';
    errorElement.style.color = '#e74c3c';
    errorElement.style.fontSize = '0.875rem';
    errorElement.style.marginTop = '5px';
    errorElement.innerHTML = `<i class="fas fa-exclamation-circle"></i> ${message}`;
    
    // Insert after phone input
    const phoneInput = document.getElementById('phone');
    phoneInput.parentNode.appendChild(errorElement);
}

// Alternative: Simple phone validation (basic version)
function simplePhoneValidation(phone) {
    // Remove all non-digit characters
    const digitsOnly = phone.replace(/\D/g, '');
    
    // Check if it has 10 digits (US/Canada format)
    return digitsOnly.length === 10;
}

// Initialize phone validation when page loads
document.addEventListener('DOMContentLoaded', function() {
    setupPhoneValidation();
    
    // Add CSS for validation states
    const style = document.createElement('style');
    style.textContent = `
        .phone-valid {
            border-color: #27ae60 !important;
            box-shadow: 0 0 0 2px rgba(39, 174, 96, 0.2) !important;
        }
        
        .phone-invalid {
            border-color: #e74c3c !important;
            box-shadow: 0 0 0 2px rgba(231, 76, 60, 0.2) !important;
        }
        
        .phone-error {
            color: #e74c3c;
            font-size: 0.875rem;
            margin-top: 5px;
            display: flex;
            align-items: center;
            gap: 5px;
        }
    `;
    document.head.appendChild(style);
});

        // Form submission
        document.getElementById('bookingForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
        // Validate phone number
        const phone = document.getElementById('phone').value;
        if (!validatePhone(phone)) {
        showPhoneError('Please enter a valid 10-digit phone number');
        document.getElementById('phone').focus();
        return;
    }

            // Get form values
            const name = document.getElementById('name').value;
            const date = document.getElementById('date').value;
            const time = document.getElementById('time').value;
            const guests = document.getElementById('guests').value;
            const occasion = document.getElementById('occasion').value;
            const requests = document.getElementById('requests').value;
            
            // Get selected table type
            const selectedTable = document.querySelector('.table-option.selected');
            const tableType = selectedTable ? selectedTable.getAttribute('data-type') : 'Not specified';
            
            // Format date for display
            const formattedDate = new Date(date).toLocaleDateString('en-US', {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });
            
            // Format time for display
            const formattedTime = new Date(`2000-01-01T${time}`).toLocaleTimeString('en-US', {
                hour: 'numeric',
                minute: '2-digit',
                hour12: true
            });
            
            // Update confirmation details
            document.getElementById('confirm-name').textContent = name;
            document.getElementById('confirm-date').textContent = formattedDate;
            document.getElementById('confirm-time').textContent = formattedTime;
            document.getElementById('confirm-guests').textContent = `${guests} ${guests === '1' ? 'person' : 'people'}`;
            document.getElementById('confirm-table').textContent = tableType.charAt(0).toUpperCase() + tableType.slice(1);
            
            // Hide form and show confirmation
            document.querySelector('.booking').style.display = 'none';
            document.getElementById('confirmation').style.display = 'block';
            
            // Add some animation to the confirmation
            const confirmation = document.getElementById('confirmation');
            confirmation.style.animation = 'none';
            setTimeout(() => {
                confirmation.style.animation = 'fadeInUp 0.8s ease';
            }, 10);
        });

        // New booking button
        document.getElementById('newBooking').addEventListener('click', function() {
            // Show booking section and hide confirmation
            document.querySelector('.booking').style.display = 'block';
            document.getElementById('confirmation').style.display = 'none';
            
            // Reset form
            document.getElementById('bookingForm').reset();
            document.querySelectorAll('.table-option').forEach(opt => {
                opt.classList.remove('selected');
            });
            
            // Add animation to the booking section
            const bookingSection = document.querySelector('.booking');
            bookingSection.style.animation = 'none';
            setTimeout(() => {
                bookingSection.style.animation = 'fadeInUp 0.8s ease';
            }, 10);
            
            // Scroll to booking section
            window.scrollTo({
                top: bookingSection.offsetTop - 80,
                behavior: 'smooth'
            });
        });

        // Set minimum date to today
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('date').setAttribute('min', today);

    </script>
</body>
</html>