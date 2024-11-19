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
                <div class="header">
                    <h4>Profile</h4>
                </div>
                <div class="content-card">
                    <div class="student-table">
                        <table>
                            <thead>
                                <tr>
                                    <th style="width:30%;">Teacher ID</th>
                                    <th style="width:35%;">Teacher Name</th>
                                    <th style="width:35%;">Subject</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (mysqli_num_rows($std_data) > 0) {
                                    while ($stdetail = mysqli_fetch_assoc($std_data)) {
                                ?>
                                        <tr>
                                            <td><?php echo $i; ?> <span class="s" style="opacity: 0;"><?php echo $stdetail['sid']; ?></span></td>
                                            <td><?php echo $stdetail['sname']; ?></td>
                                            <td><?php echo $stdetail['course']; ?></td>
                                            <td><?php
                                                foreach ($timezones as $val => $disp) {
                                                    if ($val == $stdetail['tzone'])
                                                        echo $disp;
                                                }
                                                ?>
                                            </td>
                                            <td><?php echo $stdetail['fee'] . "$"; ?></td>

                                        </tr>
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
                                    <h4>Profile</h4>
                                </div>
                                <br>
                                <div class="container">
                                    <img src="https://www.kindpng.com/picc/m/171-1712282_profile-icon-png-profile-icon-vector-png-transparent.png" alt="profile-icon" style=" display: block; margin-left: auto; margin-right: auto; width:30%; max-width:200px; border-radius: 50%;">
                                    <br>
                                    <form action="../db/action.php" method="post">

                                        <label for="gender">Grade</label><br>
                                        <select name="Grade" id="Grade">
                                            <option selected="selected">Grade 01</option>
                                            <option selected="selected">Grade 02</option>
                                            <option selected="selected">Grade 03</option>
                                            <option selected="selected">Grade 04</option>
                                            <option selected="selected">Grade 05</option>
                                            <option selected="selected">Grade 06</option>
                                            <option selected="selected">Grade 07</option>
                                        </select>
                                        <div class="btn-holder">
                                            <button type="submit" id="bt-sub" name="addstud">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>

</html>