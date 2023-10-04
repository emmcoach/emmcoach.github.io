


<?php

// Database connection settings
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'yourdatabase';

// Connect to the database
$conn = mysqli_connect($host, $user, $password, $database);

// Check if the connection was successful
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Query to fetch the staff member on duty on Monday
if(isset($_POST['submit'])){
    $name=$_POST['it'];
    
}
$sql="SELECT * FROM `my_table` WHERE `DEPARMENT`='FINANCE' AND `DAY`='MONDAY'";

// Execute the query
$result = mysqli_query($conn, $sql);

// Check if there are any results
if (mysqli_num_rows($result) > 0) {
    // Display the results
    while ($row = mysqli_fetch_assoc($result)) {
        echo "S_NAME: " . $row['name'] . "<br>";
        echo "Department: " . $row['department'] . "<br>";
    }
} else {
    echo "No staff member found on duty on Monday.";
}

// Close the database connection
mysqli_close($conn);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="s.css">
</head>
<body background="bg3.jpg" no-repeats>
    
    <a href="home.html"> <button class="button">  home</button></a>
     <center>
        <form action="post" method="get">
            <div class="select">
                <select name="format" id="format">
                    <OPtion selected disabled> <h4>CHOOSE A CLINIC</h4></OPtion>
                    <OPtion name="it" value="IT">IT</OPtion>
                    <OPtion name="" value="DENTAL">DENTAL</OPtion>
                    <OPtion name="" value="SURGICAL">SURGICAL</OPtion>
                    <OPtion name="" value="MEDICAL">MEDICAL</OPtion>
                    <OPtion name="" value="REGISTRATION">REGISTRATION</OPtion>
                    <OPtion name="" value="MCH">MCH</OPtion>
                    <OPtion name="" value="SOPC">SOPC</OPtion>
                    <OPtion name="" value="LAB">LAB</OPtion>
                    <OPtion name="" value="THEATRE">THEATRE</OPtion>
                    <OPtion name="" value="MARTENITY">MARTENITY</OPtion>
                    <OPtion name="" value="HDU">HDU</OPtion>
                    <OPtion name="" value="ENDOSCOPY">ENDOSCOPY</OPtion>
                    
                        
                    




                </select><br>
                <select>
                    <option disabled value="SELECT DAY">SELECT DAY</option>
                    <option value="monday">MONDAY</option>
                    <option value="tuesday">TUESDAY</option>
                    <option value="">WEDNESDAY</option>
                    <option value="">TURSDAY</option>
                    <option value="">FRIDAY</option>
                </select><BR></BR>
                <input type="submit">
                <table id="staffdisplay">
                    <th><b>NO.</b> </th>
                    <th><b>SFAFF.</b> </th>
                    <th><b>DEPARTNENT.</b> </th>
                    <th><b>DAY.</b> </th>
                     <tr>
                        <td>1</td>
                        <td>leonard</td>
                        <td>it</td>
                        <td>monday</td>
                     </tr>
                     <tr>
                     <tr>
                        <td>1</td>
                        <td>leonard</td>
                        <td>it</td>
                        <td>monday</td>
                     </tr>
                     </tr>
                     <tr></tr>
                     <tr></tr>
                </table>
                
                 </div>
                 <input type="submit" name="submit" id="submit">
         </form>
     </center>
</body>
</html>