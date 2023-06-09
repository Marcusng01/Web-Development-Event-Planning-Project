<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order List</title>
    <link rel="icon" href="../All Pages/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap');
        *{
            margin: 0;
            padding: 0;
            font-family: 'Open Sans', sans-serif;
            font-size: 20px;
            color: white;
            user-select: none;
            -webkit-user-select: none; /* For Safari */
            -moz-user-select: none; /* For Firefox */
            -ms-user-select: none; /* For Internet Explorer/Edge */
            background-color: black;
        }
        body{
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: start;
        }
        body>*{
            margin: 30px;
        }

        table,tr,td,th{
            border: 1px solid rgb(29, 29, 29);
            border-collapse: collapse;
            padding: 5px;
        }
        tr,td,th{
            height: 100px;
        }
        input{
            margin-left: 20px;
        }
        .notes{
            width: 300px;
        }
    </style>
</head>
<body>
    <h1>List of Orders</h1>
    <?php
        //DB and file details
        $database = "event2u";
        $table = "event_applications";
        
        //Replace the details based on configuration of server
        $servername = "localhost";
        $username = "root";
        $password = "";
        
        // Create a new MySQLi object
        $conn = new mysqli($servername, $username, $password,$database); 

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            if (!empty($_POST)) {
                //get ID from Select Box
                $id = key($_POST);
                //get value from Select Box's option
                $status = $_POST[$id];
                //create query to alter data based on ID and new status value
                $query = "UPDATE $table SET status = '$status' WHERE id = '$id'";
                // Execute the SQL queries
                $conn->multi_query($query);
            }
        }

        // Retrieve data from the table
        $query = "SELECT * FROM $table";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            // Output the table headers
            echo "<table>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Name</th>";
            echo "<th>State</th>";
            echo "<th>Mobile Number</th>";
            echo "<th>Event Date</th>";
            echo "<th>Email</th>";
            echo "<th>Event Type</th>";
            echo "<th>Additional Notes</th>";
            echo "<th>Status</th>";
            echo "</tr>";

            // Output the table rows with data
            while ($row = $result->fetch_assoc()) {
                if ($row['status']==0){
                    $status = "Not Completed";
                }else if ($row['status']==1){
                    $status = "Completed";
                }else if ($row['status']==2){
                    $status = "Cancelled";
                }
                
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["name"]."</td>";
                echo "<td>".$row["state"]."</td>";
                echo "<td>".$row["mobile_number"]."</td>";
                echo "<td>".$row["event_date"]."</td>";
                echo "<td>".$row["email"]."</td>";
                echo "<td>".$row["event_type"]."</td>";
                echo "<td class='notes'><p>".$row["additional_notes"]."</p></td>";
                echo "<td>
                    <form method='post'>
                    <select name=".$row['id'].">
                        <option value=".$row['status']." disabled selected>".$status."</option>
                        <option value='0'>Not Completed</option>
                        <option value='1'>Completed</option>
                        <option value='2''>Cancelled</option>
                    </select>
                    <input type='submit' value='Apply Change'>
                    </form>
                </td>";
                echo "</tr>";
            }

            // Close the table
            echo "</table>";
        } else {
            echo "No data found in the table.";
        }
        // Close the connection
        $conn->close();
    ?>
</body>
</html>