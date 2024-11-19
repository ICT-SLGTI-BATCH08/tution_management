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
    <title>Entrollment</title>
</head>

<body>
    <div class="home">
        <div class="wrapper">
            <?php include_once('../nav.php') ?>
            <div class="main-content">
                <div class="add-student">
                    <div class="add-student-form">
                        <div class="title">
                            <h1><center>Pastpapers</center></h1>
                        </div>
                        <br>
                        <div class="container">
                            <img src="tution2.jpg" alt="profile-icon" style=" display: block; margin-left: auto; margin-right: auto; width:30%; max-width:400px; border-radius: 50%;">
                            <br>
                            <form action="../db/action.php" method="post">

                                <label for="year"><center><h2>Year</h2></center></label><br>
                                <select name="year" id="year">
                                    <option selected="selected">2010</option>
                                    <option selected="selected">2011</option>
                                    <option selected="selected">2012</option>
                                    <option selected="selected">2013</option>
                                    <option selected="selected">2014</option>
                                    <option selected="selected">2015</option>
                                    <option selected="selected">2016</option>
                                    <option selected="selected">2017</option>
                                    <option selected="selected">2018</option>
                                    <option selected="selected">2019</option>
                                    <option selected="selected">2020</option>
                                    <option selected="selected">2021</option>
                                    <option selected="selected">2022</option>
                                    <option selected="selected">2023</option>
                                    <option selected="selected">2024</option>
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