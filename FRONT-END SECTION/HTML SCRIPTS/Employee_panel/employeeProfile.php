<?php
session_start();
if (!isset($_SESSION['eID'])) {
   header("location:./employee login.php");
}

$se_id = $_SESSION['eID'];

require("../../Inc/function.php");

$query = "SELECT * FROM employee WHERE id = $se_id";
$result = mysqli_query($connect, $query);


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS SCRIPTS/employee_panel/employeeProfiledesign.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/workers.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>Employee Profile</title>
</head>

<body>
    <!--side-bar-->
    <div class="side-menu">
        <div class="company">
            <h1>HandyMan</h1>
        </div>
        <ul>
            <li><a href="dashboard.php"><img src="../../ICONS/dashboard5.png" alt="dashboard"> &nbsp; Dashboard</a></li>
            <li><a href="employeeProfile.php"><img src="../../ICONS/user.png" alt="profile">&nbsp; Profile</a></li>
            <li><a href="employeeWorkNotifications.html"><img src="../../ICONS/bell.png" alt="notifications"> &nbsp;
                    Working
                    Notification</a></li>
            <li><a href="employeeWorkinprogress.html"><img src="../../ICONS/workon.png" alt="notifications"> &nbsp; Work
                    In-progress</a></li>
            <li><a href="PaymentInformation.html"><img src="../../ICONS/paymentmethod.png" alt="notifications"> &nbsp;
                    Payment
                    Information</a></li>
            <li><a href="workingHistory.html"><img src="../../ICONS/workhistorydocument.png" alt="notifications"> &nbsp;
                    Working
                    History</a></li>
            <!--<li><a href="#" ><img src="messageIncome.png" alt="notifications" > &nbsp; Incoming-Messages</a></li>-->
            <li><a href="#"><img src="../../ICONS/settings.png" alt="settings">&nbsp; Settings</a></li>
            <li><a href="employeePrivacy&Policy.html"><img src="../../ICONS/privacy-policy.png" alt="policy">&nbsp;
                    Privacy &
                    Policy</a></li>
            <li><a href="employeeHelp.html"><img src="../../ICONS/help.png" alt="helpme">&nbsp; Help</a></li>
            <li><a href="../../Inc/e_logout.php"><img src="../../ICONS/logou.png" alt="logmeout">&nbsp; Log out</a></li>
        </ul>
    </div>
    <!--upper bar-->
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search...">
                    <button type="submit"><img src="../../ICONS/search.png" alt=""></button>
                </div>
                <div class="user">
                    <!--<a href="#" class="btn">Log Out</a>-->
                    <div class="img-case">
                        <img src="../../ICONS/workerp.png" alt="worker">
                    </div>
                </div>
            </div>
        </div>
        <div class="description">
            <h2>Worker Profile</h2>
        </div>
        <!--form-->
        <div class="profileform">
            <form method="POST">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
                <label for="phonenumber">Phone Number</label>
                <input type="text" id="phonenumber" name="phonenumber" required>
                <label for="company-name">Company-name</label>
                <select id="company-name" name="company-name">
                    <option value="50">None</option>
                    <option value="51">Stark Industries</option>
                    <option value="52">Pran</option>
                    <option value="53">RFL</option>
                    <option value="54">Wayne Enterprise</option>
                </select>
                <label for="employee-type">Employee-Type</label>
                <select id="employee-type" name="employee-type">
                    <option value="1">None</option>
                    <option value="2">AC Repairer</option>
                    <option value="3">Electrician</option>
                    <option value="4">Refrigerator Repairer</option>
                    <option value="5">Steel Bar Reinforcer</option>
                    <option value="6">Construction-site Garbage Cleaner</option>
                    <option value="7">Road-site Garbage Cleaner</option>
                    <option value="8">Sewerage-channel Cleaner</option>
                    <option value="9">Garage Cleaner</option>
                    <option value="10">Washroom Cleaner</option>
                </select>
                <label for="gender">Gender</label>
                <select id="Gender" name="Gender">
                    <option value="10">None</option>
                    <option value="11">Male</option>
                    <option value="13">Female</option>
                    <option value="14">None</option>
                </select>
                <label for="address">Your Address</label>
                <textarea id="address" name="address" style="height:100px"></textarea>
            </form>
        </div>
</body>

</html>