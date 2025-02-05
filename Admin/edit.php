<?php

include('../Backend/connection.php');

$id = "";

if (isset($_GET["id"])) {
    $id = $_GET["id"];
}

$query = "SELECT * FROM doctor WHERE did = $id";
$result = $connection->query($query);
$row = $result->fetch_assoc();

$today = date("Y")/*."-".date("m")."-".date("d")*/;
$start = $row["workstart"];
$startyear= explode("-",$start );
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Styles/nav-bar.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../Styles/admin-index.css">
    <link rel="stylesheet" href="../Styles/dr.css">
</head>

<body>
    <!-- navigation bar -->
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

    <!-- end of navigation bar -->


    <div class="booking-container">
        <div class="doctor-img">
            <img src="../Assets/Images/doctor.png" alt="doctor-image">
        </div>

        <div class="booking-info">
            <div class="dr-info">
                <div class="doc-name">Dr. <?php echo $row["name"]; ?> <img src="../Assets/Images/verified.svg"></div>
                <div class="doc-desc">
                    <span class="qualif"><?php echo $row["education"]; ?> from <?php echo $row["university"]; ?></span>
                    <span class="exp"><?php echo $today - $startyear[0]; ?> Years of Experience</span>
                </div>
                <div class="doc-about">
                    <span>About</span>
                    <p><?php echo $row["bio"]; ?></p>
                    <div class="a-fee">Appointment Fee: Rs. <?php echo $row["fee"] ?></div>
                </div>
            </div>
            <div class="booking-slot">
                <span>Choose your preferable slot</span>
                <div class="appoint_day">
                    <button type="button" id="ap_btn1" class="ap_btn">
                        <h3>SUN 1</h3>
                    </button>
                    <button type="button" id="ap_btn2" class="ap_btn">
                        <h3>SUN 2</h3>
                    </button>
                    <button type="button" id="ap_btn3" class="ap_btn">
                        <h3>SUN 3</h3>
                    </button>
                    <button type="button" id="ap_btn4" class="ap_btn">
                        <h3>SUN 4</h3>
                    </button>
                    <button type="button" id="ap_btn5" class="ap_btn">
                        <h3>SUN 5</h3>
                    </button>
                    <button type="button" id="ap_btn6" class="ap_btn">
                        <h3>SUN 6</h3>
                    </button>
                    <button type="button" id="ap_btn7" class="ap_btn">
                        <h3>SUN 7</h3>
                    </button>
                </div>

                <div id="ap_time">
                    <button type="button" class="ap_time_btn" id="ap_time_btn1"><span>5:00 am</span></button>
                    <button type="button" class="ap_time_btn" id="ap_time_btn2"><span>5:30 am</span></button>
                    <button type="button" class="ap_time_btn" id="ap_time_btn3"><span>6:00 am</span></button>
                    <button type="button" class="ap_time_btn" id="ap_time_btn4"><span>6:30 am</span></button>
                    <button type="button" class="ap_time_btn" id="ap_time_btn5"><span>7:00 am</span></button>
                    <button type="button" class="ap_time_btn" id="ap_time_btn6"><span>8:00 am</span></button>
                    <button type="button" class="ap_time_btn" id="ap_time_btn7"><span>9:00 am</span></button>
                </div>

                <div id="bok_appoint">
                    <button type="button" class="ap_book">Book an Appointment</button>
                </div>



            </div>
        </div>
        <!-- button  -->
    </div>

    </div>
    <!-- end of footer  -->
    <script src="../Scripts/dr.js"></script>
    <script src="../Scripts/showMenu.js"></script>
</body>

</html>