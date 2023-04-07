<!-- CREATE TABLE books (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  link VARCHAR(255) NOT NULL
); -->

<h4>Books</h4>
<ul>
    <?php
    $server = "db";
    $user = "MYSQL_USER";
    $password = "MYSQL_ROOT_PASSWORD";
    $database = "MYSQL_DATABASE"; // Change 'database_name' to the name of your database
    $con = mysqli_connect($server, $user, $password, $database);
    if (!$con) {
        die("Connection to the database failed due to: " . mysqli_connect_error());
    }
    $sql = "SELECT title, link FROM books";
    $query = mysqli_query($con, $sql);
    if ($query->num_rows > 0) {
        while ($row = $query->fetch_assoc()) {
            $title = $row["title"];
            $link = $row["link"];
            echo "<li><a href='$link'>$title</a></li>";
        }
    } else {
        echo "<li>Sorry, no data available!</li>";
    }
    ?>
</ul>