<!-- CREATE TABLE profiles (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  position VARCHAR(255) NOT NULL,
  address VARCHAR(255) NOT NULL,
  phone VARCHAR(20) NOT NULL,
  email VARCHAR(255) NOT NULL,
  image VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
); -->


<div class="row" style="padding:20px;margin:20px;">
    <?php
    $server = "db";
    $user = "MYSQL_USER";
    $password = "MYSQL_ROOT_PASSWORD";
    $database = "MYSQL_DATABASE"; // Change 'database_name' to the name of your database
    $con = mysqli_connect($server, $user, $password, $database);
    if (!$con) {
        die("Connection to the database failed due to: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM profiles";
    $query = mysqli_query($con, $sql);

    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $name = $row["name"];
            $designation = $row["designation"];
            $address = $row["address"];
            $phone = $row["phone"];
            $email = $row["email"];
            $image = $row["image"];
            $website = $row["website"];

            echo '<div class="col-sm-12">';
            echo '<div class="w3-card-4 profile-card">';
            echo '<header class="w3-container w3-grey">';
            echo '<h3 style="margin:0px;padding:0px;"><a href="'.$website.'">'.$name.'</a></h3>';
            echo '<p>'.$designation.'</p>';
            echo '</header>';
            echo '<div class="w3-container">';
            echo '<br>';
            echo '<div class="profile-pic" style="background-image: url('.$image.');"></div>';
            echo '<p>';
            echo '<b>Address:</b><br>';
            echo $address.'<br><br>';
            echo '<b>Contact No:</b><br>';
            echo 'Phone: '.$phone.'<br>';
            echo 'Email: '.$email.'<br>';
            echo '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo "No records found.";
    }

    mysqli_close($con);
    ?>
</div>