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