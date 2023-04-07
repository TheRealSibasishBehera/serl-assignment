

<!-- 
CREATE TABLE research_papers (
    id INT(11) NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    PRIMARY KEY (id)
); -->

<div class="container">
    <?php
    $server = "db";
    $user = "MYSQL_USER";
    $password = "MYSQL_ROOT_PASSWORD";
    $database = "MYSQL_DATABASE"; // Change 'database_name' to the name of your database
        $con = mysqli_connect($server, $user, $password, $database);
        if (!$con) {
            die("Connection to the database failed due to: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM research_papers";
        $query = mysqli_query($con, $sql);

        if (mysqli_num_rows($query) > 0) {
            while ($row = mysqli_fetch_assoc($query)) {
                $title = $row["title"];
                $content = $row["content"];

                echo "<div class='publication'>";
                echo "<div class='title'><strong>$title</strong></div>";
                echo "<div class='content'>$content</div>";
                echo "</div>";
            }
        } else {
            echo "No records found.";
        }

        mysqli_close($con);
    ?>
</div>


<!-- CREATE TABLE international_conferences (
  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  authors VARCHAR(255),
  conference VARCHAR(255),
  location VARCHAR(255),
  year VARCHAR(4)
); -->

<div class="container">
    <h2>Details of International Conferences</h2>
    <ol>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "database_name"; // Change 'database_name' to the name of your database
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM international_conferences";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $authors = $row["authors"];
                $title = $row["title"];
                $conference = $row["conference"];
                $location = $row["location"];
                $year = $row["year"];

                echo '<li>';
                echo '<div class="contentText">'.$authors.', <b>'.$title.'</b>, presented at '.$conference.', '.$location.' ('.$year.').</div>';
                echo '</li>';
            }
        } else {
            echo "No records found.";
        }

        mysqli_close($conn);
        ?>
    </ol>
</div>



<!-- CREATE TABLE national_workshops (
  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  authors VARCHAR(255) NOT NULL,
  title VARCHAR(255) NOT NULL,
  event VARCHAR(255),
  date VARCHAR(255),
  location VARCHAR(255)
); -->



<div class="container">
    <h2>Details of National Workshops</h2>
    <ol>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "database_name"; // Change 'database_name' to the name of your database
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM national_workshops";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $authors = $row["authors"];
                $title = $row["title"];
                $event = $row["event"];
                $date = $row["date"];
                $location = $row["location"];

                echo '<li>';
                echo '<div class="contentText">'.$authors.', <b>'.$title.'</b>, presented at '.$event.', '.$location.' ('.$date.').</div>';
                echo '</li>';
            }
        } else {
            echo "No records found.";
        }

        mysqli_close($conn);
        ?>
    </ol>
</div>