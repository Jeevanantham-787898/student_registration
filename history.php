<?php
$servername = "localhost";
$username = "root";
$pass = "787898";
$db = "STUDENT";
$conn = new mysqli($servername,$username,$pass,$db);
$query = "SELECT * FROM ENROLLMENT";
$result = $conn->query($query);
?>
<html>
    <head>
        <title>COURSE REGISTARTION</title>
        <link rel="stylesheet" href="./index.css"/>
    </head>
    <body>
        <h1>ENROLLMENT HISTORY</h1>
        <div class="w3-container" style="width: 70%;">
            <table>
            <thead>
                <tr>
                    <td>NAME</td>
                    <td>ROLLNO</td>
                    <td>MOBILE NO</td>
                    <td>EMAIL</td>
                    <td>COURSE</td>
                </tr>
            </thead>
            <tbody>
                <?php
                if( $result->num_rows > 0) {
                    while($row = $result->fetch_assoc()){
                        ?>
                        <tr>
                        <td><?php echo $row['NAME']?></td>
                        <td><?php echo $row['ROLLNO']?></td>
                        <td><?php echo $row['MOBILE']?></td>
                        <td><?php echo $row['MAIL']?></td>
                        <td><?php echo $row['COURSE']?></td>
                    </tr><?php
                    }
                }
                ?>
            </tbody>
            </table>
        </div>
    </body>
</html>