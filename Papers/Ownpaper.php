<?php
include '../db/config.php';
$i = 1;
$sql_q = "SELECT * FROM std_info ORDER BY course";
$std_data = mysqli_query($conn, $sql_q);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>papers</title>
</head>

<body>
    <div class="home">
        <div class="wrapper">
            <?php include_once('../nav.php') ?>
            <div class="main-content">
                <div class="add-student">
                    <div class="add-student-form">
                        <div class="title">
                            <h1>
                                <center>Own papers</center>
                            </h1>
                        </div>
                        <br>
                        <div class="container">
                            <img src="tution2.jpg" alt="profile-icon" style=" display: block; margin-left: auto; margin-right: auto; width:30%; max-width:400px; border-radius: 50%;">
                            <br>
                            <form action="../db/action.php" method="post">
                                <label for="year">
                                    <center>
                                        <h2>Year</h2>
                                    </center>
                                </label><br>
                                <label for="gender">Grade</label><br>
                                <select name="Grade" id="Grade">
                                    <option selected="selected">Grade 01</option>
                                    <option selected="selected">Grade 02</option>
                                    <option selected="selected">Grade 03</option>
                                    <option selected="selected">Grade 04</option>
                                    <option selected="selected">Grade 05</option>
                                    <option selected="selected">Grade 06</option>
                                    <option selected="selected">Grade 07</option>
                                </select><br><br>
                               <label for="gender">Subject</label><br>
                            <select name="subject" id="subject">
                               
                            </select>
                            <div class="btn-holder">
                                <button type="submit" id="bt-sub" name="addstud">Search</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</body>

</html>