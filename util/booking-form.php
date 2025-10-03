<?php session_start(); ?>

<form action="./server/reservation.php" method="post" id="bookingForm">
    <div class="form-grid">
        <?php if(!isset($_SESSION['username'])){ ?>
        <div class="form-group">
            <label for="name">Full Name<span>*</span></label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required>
        </div>
        <div class="form-group">
            <label for="email">Email Address<span>*</span></label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number<span>*</span></label>
            <input
                required
              type="tel"
              id="phone"
              name="phone"
              class="form-control"
              placeholder="+91 9876543210"
              pattern="^\+91[6-9]\d{9}$"
              title="Enter a valid Indian phone number with country code, e.g. +91 9876543210"
            >
        </div>
        <?php } else {
            $firstName = htmlspecialchars($_SESSION['username']['firstName']);
            $lastName = htmlspecialchars($_SESSION['username']['lastName']);
            $email = htmlspecialchars($_SESSION['username']['email']);
            $phoneNumber = htmlspecialchars($_SESSION['username']['phoneNumber']);
        ?>
            <input type="text" hidden name="name" id="name" class="form-control" value="<?php echo $firstName . ' ' . $lastName; ?>" readonly>
            <input type="email" hidden name="email" id="email" class="form-control" value="<?php echo $email; ?>" readonly>
            <input type="tel" hidden name="phone" id="phone" class="form-control" value="<?php echo $phoneNumber; ?>" readonly>
        <?php } ?>
        <div class="form-group">
            <label for="date">Date<span>*</span></label>
            <input type="date" name="date" id="date" class="form-control" required min="<?php echo date('Y-m-d'); ?>">
        </div>
        <div class="form-group">
            <label for="time">Time<span>*</span></label>
            <input type="time" id="time" name="time" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="guests">Number of Guests<span>*</span></label>
            <select id="guests" name="guests" class="form-control" required>
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
            <select id="occasion" name="occasion" class="form-control">
                <option value="" selected>No special occasion</option>
                <option value="birthday">Birthday</option>
                <option value="anniversary">Anniversary</option>
                <option value="business">Business Dinner</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="requests">Special Requests (Optional)</label>
            <textarea id="requests" name="requests" class="form-control" rows="3" placeholder="Any special requests?"></textarea>
        </div>
    </div>
    
    <section id="Preference" class="table-selection">
        <label>Table Preference</label>
        <select id="table_preference" name="table_preference" class="form-control">
            <option value="all">Any</option>
            <option value="standard">Standard</option>
            <option value="booth">Booth</option>
            <option value="window">Window</option>
            <option value="private">Private</option>
        </select>
    </section>
    
    <div class="form-submit">
        <button type="submit" class="btn">Book Now</button>
    </div>
</form>
