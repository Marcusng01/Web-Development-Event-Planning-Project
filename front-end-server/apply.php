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
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>
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
        <h1 style="margin-top: 10%; margin-bottom:3%">Apply Now&#10071;</h1>
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.165781930883!2d101.66609208436842!3d3.0502407458428293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4ae7f2b662d5%3A0x24640a80dedccc95!2sPavilion%20Bukit%20Jalil!5e0!3m2!1sen!2smy!4v1688404465585!5m2!1sen!2smy" width="620" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="form-container">
                <h1>Enquiry Form</h1>
                <form action="" method="post">
                    <div class="form-row">
                        <div class="form-item">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" required>
                        </div>
                        <div class="form-item">
                            <label for="state">State:</label>
                            <select name="state" required>
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
                            <input type="text" name="mobile" id="mobile" required pattern="[0-9]*" inputmode="numeric" title="Please enter only numeric values">
                        </div>
                        <div class="form-item">
                            <label for="event-date">Event Date:</label>
                            <input type="date" name="event-date" id="event-date" min="<?php echo date('Y-m-d', strtotime('+7 day')); ?>" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-item">
                            <label for="email">Email Address:</label>
                            <input type="email" name="email" id="email" required>
                        </div>
                        <div class="form-item">
                            <label for="event-type">Event Type:</label>
                            <select name="event-type" required>
                                <option value="">Select a Type</option>
                                <option value="Annual Dinner">Annual Dinner</option>
                                <option value="Backdrop">Backdrop</option>
                                <option value="Wedding">Wedding</option>
                                <option value="Roadshow">Roadshow</option>
                                <option value="Sound & Lighting">Sound & Lighting</option>
                                <option value="Fabrication">Fabrication</option>
                                <option value="E-Sport Campaigns">E-Sport Campaigns</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-notes" required>
                        <label for="notes">Additional Notes:</label>
                        <textarea name="notes" id="notes"></textarea>
                    </div>
                    <input id="submit-button" type="submit" value="Submit">
                </form>
                <p style="margin-top:20px">*Events have to be booked at least 1 week in advance!</p>
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

<?php 
    //Only run the code here if the HTTP has a post requests
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){

        //DB and file details
        $database = "event2u";
        $table = "event_applications";    

        //Data from form
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $state = $_POST['state'];
        $date = $_POST['event-date'];
        $type = $_POST['event-type'];
        $notes = $_POST['notes'];
        
        //Replace the details based on configuration of server
        $servername = "localhost";
        $username = "root";
        $password = "";
        
        // Create a new MySQLi object
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        //Create Query
        $query="-- Create database if it doesn't exist
CREATE DATABASE IF NOT EXISTS $database;

-- Use the database
USE $database;

-- Create table if it doesn't exist
CREATE TABLE IF NOT EXISTS $table (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    state VARCHAR(255) NOT NULL,
    mobile_number VARCHAR(255) NOT NULL,
    event_date VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    event_type VARCHAR(255) NOT NULL,
    additional_notes TEXT,
    status INT(1) NOT NULL
);

-- Insert data
INSERT INTO $table (name, state, mobile_number, event_date, email, event_type, additional_notes, status) VALUES ('$name', '$state', '$mobile', '$date', '$email', '$type', '$notes', 0);
";
        // Execute the SQL queries
        $conn->multi_query($query);

        // Close the connection
        $conn->close();
        echo '<script type="text/javascript">';
        echo ' alert("Your application has been submitted!")';
        echo '</script>';
    }
?>