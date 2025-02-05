<?php 
if(isset($_GET["msg"])){
    $msg = $_GET["msg"];
    echo "<script>alert(\"Status = $msg\");</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Dr Appoint</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../Styles/nav-bar.css">
    <link rel="stylesheet" href="../Styles/admin-index.css">
    <link rel="stylesheet" href="../Styles/login.css">
    <style>

        .form-container .form-group select{
            width: 102%;
            height: 3rem;
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
        <div class="login">
            <div class="form-container">
                <h2>Add Doctor</h2>
                <form action="../Backend/db-add-doctor.php" method="POST">
                    <div class="form-group">
                        <label for="doc-name">Doctor Name</label>
                        <input type="text" id="doc-name" name="doc-name">
                    </div>

                    <div class="form-group">
                        <label for="pass">Education</label>
                        <select name="doc-edu">
                            <option value="select">Select</option>
                            <option value="mbbs">MBBS</option>
                            <option value="md">MD</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="pass">University</label>
                        <select name="doc-uni">
                            <option value="select">Select</option>
                            <option value="tu">Tribhuvan</option>
                            <option value="ku">Kathmandu</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="doc-workstart">Work Start Date</label>
                        <input type="date" id="doc-workstart" name="doc-workstart">
                    </div>

                    <div class="form-group">
                        <label for="doc-appfee">Appointment Fee</label>
                        <input type="number" id="doc-appfee" name="doc-appfee">
                    </div>

                    <div class="form-group">
                        <input type="submit" name="submit" value="Add">
                    </div>
                </form>
            </div>
        </div>

    </section>
    <script src="../Scripts/jquery-3.7.1.min.js"></script>
    <script>
        var isDisplaying = true;

        $(document).ready(function () {
            $(".bx-collapse-horizontal").click(function () {
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
    </script>
</body>

</html>