<?php
include 'connect.php'; // Include the database connection

$query = "SELECT * FROM ENROLLMENT";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Enrollment History</title>
        <link rel="stylesheet" href="./index.css"/>
    </head>
    <body>
        <h1>Enrollment History</h1>
        <div class="w3-container" style="width: 70%;">
            <table border="1">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Roll No</th>
                        <th>Mobile No</th>
                        <th>Email</th>
                        <th>Course</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                <td>{$row['NAME']}</td>
                                <td>{$row['ROLLNO']}</td>
                                <td>{$row['MOBILE']}</td>
                                <td>{$row['MAIL']}</td>
                                <td>{$row['COURSE']}</td>
                            </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No records found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
