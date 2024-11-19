<?php
include '../db/config.php';
$i = 1;
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../img/favicon.png">
    <title>Dashboard</title>
</head>

<body>
    <div class="home">
        <div class="wrapper">
            <?php include_once('../nav.php') ?>
            <div class="main-content">
                <div class="header">
                    <h4>Teachers Attendance</h4>
                </div>

                <div class="content-card">
                    <div class="student-table">
                        <table>
                            <thead>
                                <tr>
                                    <th style="width:25%;">Teacher ID</th>
                                    <th style="width:25%;">Grade</th>
                                    <th style="width:25%;">Subject</th>
                                    <th style="width:25%;">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <?php

                                    if (mysqli_num_rows($sch_data) > 0) {
                                        while ($schdetail = mysqli_fetch_assoc($sch_data)) {

                                    ?>
                                            <tr <?php if ($schdetail['scstatus'] == 'Assigned') {
                                                    echo 'style="border-bottom: 1px solid #d7d7d7;"';
                                                } else if ($schdetail['scstatus'] == 'Completed') {
                                                    echo 'style="border-bottom: 1px solid #d7d7d7; background-color: #a7ffb3;"';
                                                } else if ($schdetail['scstatus'] == 'Partially completed') {
                                                    echo 'style="border-bottom: 1px solid #d7d7d7; background-color: #a7ffb3;"';
                                                } else if ($schdetail['scstatus'] == 'Cancelled') {
                                                    echo 'style="border-bottom: 1px solid #d7d7d7; background-color: rgb(255, 208, 208);"';
                                                }      ?>>

                                                <td><?php echo $i; ?> <span class="s" style="opacity: 0;"><?php echo $schdetail['sid'];
                                                                                                            $sid = $schdetail['sid']; ?></span></td>
                                                <td>
                                                    <?php
                                                    $sql = "SELECT sname, course FROM std_info WHERE sid ='$sid'";
                                                    $sql_q = mysqli_query($conn, $sql);
                                                    $sqldata = mysqli_fetch_assoc($sql_q);
                                                    echo $sqldata['sname'];
                                                    ?>
                                                </td>
                                                <td><?php echo date("H:i", strtotime($schdetail['sctime'])); ?></td>
                                                <td><?php echo $sqldata['course']; ?></td>
                                                <td>
                                                    <?php
                                                    if ($schdetail['scstatus'] == 'Assigned') {
                                                        echo '<a href="../report/form.php?scid=' . $schdetail['scid'] . '">Assigned</a>';
                                                    } else
                                                        echo $schdetail['scstatus'];
                                                    ?>
                                                </td>
                                        <?php
                                            $i++;
                                        }
                                    }
                                        ?>
                            </tbody>
                        </table>
                        <div class="add-student">
                            <div class="add-student-form">
                                <div class="title">
                                    <h4>Attendance</h4>
                                </div>
                                <div class="container">
                                <img src="https://www.kindpng.com/picc/m/171-1712282_profile-icon-png-profile-icon-vector-png-transparent.png" alt="profile-icon" style=" display: block; margin-left: auto; margin-right: auto; width:30%; max-width:200px; border-radius: 50%;">
                                <br>
                                    <form action="../db/action.php" method="post">

                                        <label for="sid">Teacher ID</label>
                                        <select name="ID" id="ID">
                                        </select>
                                        </select><br><br>

                                        <label for="sid">Grade</label><br>
                                        <select name="Grade" id="Grade">
                                            <option selected="selected">Grade 01</option>
                                            <option selected="selected">Grade 02</option>
                                            <option selected="selected">Grade 03</option>
                                            <option selected="selected">Grade 04</option>
                                            <option selected="selected">Grade 05</option>
                                            <option selected="selected">Grade 06</option>
                                            <option selected="selected">Grade 07</option>
                                        </select><br><br>

                                        <label for="sid">Subject</label><br>
                                        <select name="Grade" id="Grade">
                                        </select><br><br>

                                        <label for="sctime">Date</label><br>
                                        <input type="date" name="date" id="date" required><br>
                                        <div class="btn-holder">
                                            <button type="submit" id="bt-sub" name="addstud">Upload</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>