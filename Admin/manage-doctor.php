<?php

include('../Backend/connection.php');

$query = "SELECT did, name, education, speciality FROM doctor;";
$result = $connection->query($query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Dr Appoint</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="..\Styles\doctors.css" />
    <link rel="stylesheet" href="../Styles/nav-bar.css">
    <link rel="stylesheet" href="../Styles/admin-index.css">
    <style>
        .doctors {
            margin-top: 2rem;
            margin-left: 5rem;
            height: 100%;
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            row-gap: 3rem;
        }
    </style>
</head>

<body>
    <nav>
        <img class="logo" src="../Assets/Images/DA_Logo_Large.png" alt="Logo">
        <span id="admin-panel">Admin Panel</span>
        <div class="menus">
            <span class="menu-item under_hover"><a href="./index.html">Admin Home</a></span>
            <span class="menu-item under_hover"><a href="./appointment.html">Appointments</a></span>
            <span class="menu-item under_hover"><a href="./manage-doctor.php">Doctors</a></span>
            <span class="menu-item under_hover"><a href="./speciality.html">Specialities</a></span>
            <span class="profile"><a href="./login.html">Logout</a></span>
        </div>
    </nav>

    <section class="content">
        <div class="top-section">
            <button><a href="./add.php">Add Doctor</a></button>
        </div>
        <div class="heading">All Doctors</div>

        <div class="doctors">

            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>

                    <div class="doc">
                        <a href="./edit.php?id=<?php echo $row["did"] ?>">
                            <div class="doc-img">
                                <img src="../Assets/Images/doctor.png">
                            </div>
                            <div class="doc-info">
                                <div class="doc-name">Dr. <?php echo $row["name"]; ?></div>
                                <div class="doc-qual"><?php echo $row["education"]; ?></div>
                                <div class="doc-spec">General Physician</div>
                            </div>
                        </a>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </section>
    <script src="../Scripts/jquery-3.7.1.min.js"></script>
    <!-- <script>
        var isDisplaying = true;

        $(document).ready(function() {
            $(".bx-collapse-horizontal").click(function() {
                if (isDisplaying) {
                    //if true then hide on click
                    $(".text").fadeOut(100);
                    $(".sidepanel").animate({
                        width: 90
                    });
                    isDisplaying = false;
                } else {
                    $(".sidepanel").animate({
                        width: 261
                    });
                    $(".text").show(1000);
                    isDisplaying = true;
                }
            })
        })
    </script> -->
</body>

</html>