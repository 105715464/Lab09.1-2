<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles.css">
<title>Cars List</title>
<body>
    

<h1>Cars Available</h1>
<?php
 require_once 'settings.php';
 $dbconn = @mysqli_connect($host, $username, $pwd, $database);
 if ($dbconn) {
    $query = 'SELECT * FROM cars';
    $result = mysqli_query($dbconn, $query);
    if ($result) { 
        echo "<table border='1' cellpadding='8' cellspacing='0'>";
            echo "<tr>
                    <th>Car ID</th>
                    <th>Make</th>
                    <th>Model</th>
                    <th>Price</th>
                    <th>Year of Manufacture</th>
                  </tr>";
       while ($row = mysqli_fetch_assoc($result)) {
           echo "<tr>";
           echo '<td> ' . $row['car_id'] . '</td> ';
           echo '<td> ' . $row['make'] . '</td> ';
           echo '<td> ' . $row['model'] . '</td> ';
           echo '<td> ' . $row['price'] . '</td> ';
           echo '<td> ' . $row['yom'] . '</td> ';
           echo "</tr>";
       }
    }
    else{
        echo '<p> "There are no cars to display" </p>';
    
    }
    mysqli_close($dbconn);
    }
    else {
        echo '<p> "Unable to connect to the database" </p>';
    }
?>
</body>
</html>