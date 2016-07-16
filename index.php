<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Hello World!</title>
</head>
<body>
    <h1>Hello World!</h1>
    <p>
        <?php
            $con = mysqli_connect(getenv('OPENSHIFT_MYSQL_DB_HOST'), getenv('OPENSHIFT_MYSQL_DB_USERNAME'), 
              getenv('OPENSHIFT_MYSQL_DB_PASSWORD'), getEnv('OPENSHIFT_APP_NAME'), getEnv('OPENSHIFT_MYSQL_DB_PORT'));
            if (mysqli_connect_errno()) {
                echo "Database connection failed: " . mysqli_connect_error();	
                exit();
            }
	
            $result = mysqli_query($con, "SELECT * FROM Place");

            if (mysqli_num_rows($result)==0) {	
                echo "No places to display. Please add some to the database.";
	    } else {
                echo "Warm greetings in particular to:";
                echo "<ul>";
                while($row = mysqli_fetch_array($result)) {
                    echo "<li>" . $row['PlaceName'] . "</li>";
                }
                echo "</ul>";
            }
            mysqli_close($con);
        ?>
    </p>
</body>
</html>
