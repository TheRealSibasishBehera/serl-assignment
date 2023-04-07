<div class="row" style="padding:20px;margin:20px;">
    <?php
    $server = "db";
    $user = "MYSQL_USER";
    $password = "MYSQL_ROOT_PASSWORD";
    $database = "MYSQL_DATABASE";; // Change 'database_name' to the name of your database
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM researcher";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row["name"];
            $designation = $row["designation"];
            $address = $row["address"];
            $phone = $row["phone"];
            $email = $row["email"];
            $image = $row["image"];
            $website = $row["website"];

            echo '<div class="col-sm-12">';
            echo '<div class="w3-card-4" style="width:100%;background-color:#FFFFFF;">';
            echo '<header class="w3-container w3-grey"><br>';
            echo '<h3 style="margin:0px;padding:0px;">'.$name.'</h3><p>'.$designation.'</p>';
            echo '</header>';
            echo '<div class="w3-container">  <br>';
            echo '<p style="text-align: justify;text-justify: inter-word;">';
            echo '<img src="'.$image.'" alt="'.$name.'" style="width:180px;height:220px;margin-bottom:20px;margin-right:10px;" align="left"/>';
            echo $address.'<br><br>';
            echo '<h4>Contact Details</h4>';
            echo '<b>Mobile Number :</b> '.$phone.'<br>';
            echo '<b>Email ID :</b> '.$email.'<br>';
            echo '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo "No records found.";
    }

    mysqli_close($conn);
    ?>
</div>

<!-- 
CREATE TABLE researcher (
  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  designation VARCHAR(255),
  mentor VARCHAR(255),
  image VARCHAR(255),
  description TEXT,
  mobile VARCHAR(20),
  email VARCHAR(255)
); -->