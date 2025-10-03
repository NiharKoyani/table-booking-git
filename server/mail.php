<?php
// Recipient email address
$to = "koyaninihar10thb@gmail.com"; // send to

// Subject of the email
$subject = "Table Booking Confirmation -  Royal Restaurant";

// HTML email message
$message = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation -  Royal Restaurant</title>
    <style>
        /* Reset styles for email compatibility */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333333;
            background-color: #f5f7fa;
            margin: 0;
            padding: 0;
        }

        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .email-header {
            background: linear-gradient(135deg, #2c3e50, #34495e);
            color: white;
            padding: 30px 20px;
            text-align: center;
        }

        .logo {
            font-size: 28px;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
        }

        .email-title {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .email-subtitle {
            font-size: 16px;
            opacity: 0.9;
        }

        .email-body {
            padding: 30px;
        }

        .confirmation-icon {
            text-align: center;
            margin-bottom: 25px;
        }

        .greeting {
            font-size: 18px;
            margin-bottom: 25px;
            color: #2c3e50;
        }

        .booking-details {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 25px;
            border-left: 4px solid #e67e22;
        }

        .detail-row {
            display: flex;
            margin-bottom: 12px;
            padding-bottom: 12px;
            border-bottom: 1px solid #e9ecef;
        }

        .detail-row:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .detail-label {
            flex: 0 0 40%;
            font-weight: 600;
            color: #2c3e50;
        }

        .detail-value {
            flex: 1;
            color: #495057;
        }

        .special-requests {
            background-color: #fff9e6;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 25px;
            border-left: 4px solid #f39c12;
        }

        .special-requests h3 {
            color: #e67e22;
            margin-bottom: 10px;
            font-size: 16px;
        }

        .restaurant-info {
            background-color: #e8f4fd;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 25px;
            border-left: 4px solid #3498db;
        }

        .restaurant-info h3 {
            color: #2c3e50;
            margin-bottom: 15px;
            font-size: 16px;
        }

        .info-item {
            display: flex;
            margin-bottom: 8px;
        }

        .actions {
            text-align: center;
            margin: 30px 0;
        }

        .btn {
            display: inline-block;
            background: #e67e22;
            color: white;
            padding: 12px 25px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            margin: 0 10px 10px;
            transition: all 0.3s;
        }

        .btn-outline {
            background: transparent;
            border: 2px solid #2c3e50;
            color: #2c3e50;
        }

        .cancellation-policy {
            background-color: #fdedec;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 25px;
            border-left: 4px solid #e74c3c;
        }

        .cancellation-policy h3 {
            color: #e74c3c;
            margin-bottom: 10px;
            font-size: 16px;
        }

        .footer {
            background-color: #2c3e50;
            color: white;
            padding: 25px;
            text-align: center;
        }

        .social-links {
            margin: 20px 0;
        }

        .social-links a {
            display: inline-block;
            width: 36px;
            height: 36px;
            background-color: #34495e;
            border-radius: 50%;
            margin: 0 5px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }

        .contact-info {
            margin-bottom: 20px;
            font-size: 14px;
        }

        .contact-info div {
            margin-bottom: 5px;
        }

        .copyright {
            font-size: 12px;
            color: #bdc3c7;
            margin-top: 20px;
        }

        /* Responsive styles */
        @media (max-width: 600px) {
            .email-container {
                border-radius: 0;
            }
            
            .email-body {
                padding: 20px;
            }
            
            .detail-row {
                flex-direction: column;
            }
            
            .detail-label {
                margin-bottom: 5px;
            }
            
            .btn {
                display: block;
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            <div class="logo">
                <span style="margin-right: 10px;">🍽️</span>
                <span> Royal Restaurant</span>
            </div>
            <h1 class="email-title">Reservation Confirmed!</h1>
            <p class="email-subtitle">We\'re excited to welcome you to  Royal Restaurant</p>
        </div>

        <!-- Body -->
        <div class="email-body">
            <!-- Confirmation Icon -->
            <div class="confirmation-icon">
                <span style="font-size: 60px; color: #27ae60;">✓</span>
            </div>

            <!-- Greeting -->
            <div class="greeting">
                <p>Dear <strong>Michael Johnson</strong>,</p>
                <p>Thank you for choosing  Royal Restaurant. Your reservation has been confirmed, and we look forward to serving you!</p>
            </div>

            <!-- Booking Details -->
            <div class="booking-details">
                <h2 style="color: #2c3e50; margin-bottom: 20px;">Reservation Details</h2>
                
                <div class="detail-row">
                    <div class="detail-label">Reservation ID:</div>
                    <div class="detail-value">#RES-230815-001</div>
                </div>
                
                <div class="detail-row">
                    <div class="detail-label">Date & Time:</div>
                    <div class="detail-value">Saturday, October 15, 2023 at 7:00 PM</div>
                </div>
                
                <div class="detail-row">
                    <div class="detail-label">Number of Guests:</div>
                    <div class="detail-value">4 people</div>
                </div>
                
                <div class="detail-row">
                    <div class="detail-label">Table Preference:</div>
                    <div class="detail-value">Window Table</div>
                </div>
                
                <div class="detail-row">
                    <div class="detail-label">Special Occasion:</div>
                    <div class="detail-value">Anniversary Celebration</div>
                </div>
            </div>

            <!-- Special Requests -->
            <div class="special-requests">
                <h3>Special Requests</h3>
                <p>We\'re celebrating our 10th anniversary. Can we have a table with a nice view and possibly a small dessert surprise?</p>
            </div>

            <!-- Restaurant Information -->
            <div class="restaurant-info">
                <h3>Restaurant Information</h3>
                
                <div class="info-item">
                    <span style="margin-right: 10px; color: #e67e22; width: 20px;">📍</span>
                    <div>123 Gourmet Avenue, Culinary District, NY 10001</div>
                </div>
                
                <div class="info-item">
                    <span style="margin-right: 10px; color: #e67e22; width: 20px;">📞</span>
                    <div>(555) 123-4567</div>
                </div>
                
                <div class="info-item">
                    <span style="margin-right: 10px; color: #e67e22; width: 20px;">🕒</span>
                    <div>Monday - Thursday: 11:00 AM - 10:00 PM<br>
                         Friday - Saturday: 11:00 AM - 11:00 PM<br>
                         Sunday: 10:00 AM - 9:00 PM</div>
                </div>
                
                <div class="info-item">
                    <span style="margin-right: 10px; color: #e67e22; width: 20px;">ℹ️</span>
                    <div>Complimentary valet parking available Thursday-Saturday evenings</div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="actions">
                <a href="#" class="btn" style="color: white; text-decoration: none;">
                    📅 Add to Calendar
                </a>
                <a href="#" class="btn btn-outline" style="text-decoration: none;">
                    ✏️ Modify Reservation
                </a>
            </div>

            <!-- Cancellation Policy -->
            <div class="cancellation-policy">
                <h3>Cancellation Policy</h3>
                <p>We require 24 hours notice for cancellation of reservations. For parties of 6 or more, we require 48 hours notice. Late cancellations may be subject to a fee. To cancel or modify your reservation, please call us at (555) 123-4567.</p>
            </div>

            <!-- Final Message -->
            <div style="text-align: center; margin: 30px 0;">
                <p>If you have any questions or special requirements, please don\'t hesitate to contact us.</p>
                <p style="margin-top: 15px; font-weight: 600; color: #2c3e50;">We look forward to welcoming you to  Royal Restaurant!</p>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div class="contact-info">
                <div>📍 123 Gourmet Avenue, Culinary District</div>
                <div>📞 (555) 123-4567</div>
                <div>✉️ reservations@bistroelegante.com</div>
            </div>
            
            <div class="social-links">
                <a href="#" style="color: white;">f</a>
                <a href="#" style="color: white;">t</a>
                <a href="#" style="color: white;">in</a>
                <a href="#" style="color: white;">T</a>
            </div>
            
            <div class="copyright">
                <p>&copy; 2023  Royal Restaurant. All rights reserved.</p>
                <p>This email was sent to michael@example.com because you made a reservation at  Royal Restaurant.</p>
            </div>
        </div>
    </div>
</body>
</html>
';

// Set content-type header for HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From:  Royal Restaurant <noreply@bistroelegante.com>' . "\r\n";
$headers .= 'Reply-To: reservations@bistroelegante.com' . "\r\n";

// Send email
if(mail($to, $subject, $message, $headers)){
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}
?>