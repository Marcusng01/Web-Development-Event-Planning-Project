<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Now!</title>
    <link rel="icon" href="All Pages/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="Apply/apply-styles.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css"></link>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
        <div class="header-buttons">
            <div class="header-logo"><img src="All Pages/logo.png" alt="Logo"></div>
            <div class="header-logo-excluder">
                <div class="header-button" onclick="window.location.href = 'index.html'">Home</div>
                <div class="header-button header-dropdown-button" onclick="window.location.href = '#'">Events <span class='fas fa-angle-right'></span></div>
                <div class="header-button" onclick="window.location.href = 'about.html'">About</div>
                <div class="header-button" onclick="window.location.href = 'apply.php'">Apply</div>
            </div>
        </div>
        <ul class="header-dropdown-container">
            <li class="dropdown-item" onclick="window.location.href = 'annual-dinner.html'">Annual Dinner</li>
            <li class="dropdown-item" onclick="window.location.href = 'backdrop.html'">Backdrop</li>
            <li class="dropdown-item" onclick="window.location.href = 'wedding.html'">Wedding</li>
            <li class="dropdown-item" onclick="window.location.href = 'roadshow.html'">Roadshow</li>
            <li class="dropdown-item" onclick="window.location.href = 'sound-&-lighting.html'">Sound & Lighting</li>
            <li class="dropdown-item" onclick="window.location.href = 'fabrication.html'">Fabrication</li>
            <li class="dropdown-item" onclick="window.location.href = 'e-sport-campaigns.html'">E-Sport Campaigns</li>
        </ul> 
    </div>
    <div class="content" style="z-index: 0;">
        <div class="image-container">
            <img src="Apply/images/apply main.jpg" alt="Apply Now!">
        </div>
        <h1 style="margin-top: 10%; margin-bottom:3%">Apply Now!</h1>
        <div class="apply-container">
            <div class="contact-container">
                <div class="contact-header">
                    <h1>Contact Us</h1>
                    <p>We'd like to work with you!</p>
                </div>
                <div class="contacts">
                    <div class="contact">
                        <img src="Apply/icon/address.png" alt="#">
                        <div>
                            <h3>Address</h3>
                            <p>P2, Persiaran Jalil 8, Bukit Jalil, 57000 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur</p>
                        </div>
                    </div>
                    <div class="contact">
                        <img src="Apply/icon/phone.png" alt="#">
                        <div>
                            <h3>Phone Number</h3>
                            <p>+60124839152</p>
                        </div>
                    </div>
                    <div class="contact">
                        <img src="Apply/icon/email.png" alt="#">
                        <div>
                            <h3>E-mail</h3>
                            <p>event2u@hotmail.com</p>
                        </div>
                    </div>
                    <div class="location">
                        <h3>Location</h3>
                        <img src="Apply/images/location.png" alt="Logo">
                    </div>
                </div>
            </div>
            <div class="form-container">
                <h1>Enquiry Form</h1>
                <form action="" method="post">
                    <div class="form-row">
                        <div class="form-item">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name">
                        </div>
                        <div class="form-item">
                            <label for="state">State:</label>
                            <select name="state">
                                <option value="">Select a state</option>
                                <option value="Johor">Johor</option>
                                <option value="Kedah">Kedah</option>
                                <option value="Kelantan">Kelantan</option>
                                <option value="Melaka">Melaka</option>
                                <option value="Negeri Sembilan">Negeri Sembilan</option>
                                <option value="Pahang">Pahang</option>
                                <option value="Perak">Perak</option>
                                <option value="Perlis">Perlis</option>
                                <option value="Pulau Pinang">Pulau Pinang</option>
                                <option value="Sabah">Sabah</option>
                                <option value="Sarawak">Sarawak</option>
                                <option value="Selangor">Selangor</option>
                                <option value="Terengganu">Terengganu</option>
                                <option value="Wilayah Persekutuan Kuala Lumpur">Wilayah Persekutuan Kuala Lumpur</option>
                                <option value="Wilayah Persekutuan Labuan">Wilayah Persekutuan Labuan</option>
                                <option value="Wilayah Persekutuan Putrajaya">Wilayah Persekutuan Putrajaya</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-item">
                            <label for="mobile">Mobile Number:</label>
                            <input type="text" name="mobile" id="mobile">
                        </div>
                        <div class="form-item">
                            <label for="event-date">Event Date:</label>
                            <input type="date" name="event-date" id="event-date">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-item">
                            <label for="email">Email Address:</label>
                            <input type="email" name="email" id="email">
                        </div>
                        <div class="form-item">
                            <label for="event-type">Event Type:</label>
                            <input type="text" name="event-type" id="event-type">
                        </div>
                    </div>
                    <div class="form-notes">
                        <label for="notes">Additional Notes:</label>
                        <textarea name="notes" id="notes"></textarea>
                    </div>
                    <input id="submit-button" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer-logo"><img src="All Pages/logo.png" alt="Logo"></div>
        <div class="contact-text">For further enquiries, scan the QR code to contact us on WhatsApp</div>
        <div class="qr-code"></div>
    </div>

    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="Apply/apply-script.js"></script>
</body>
</html>