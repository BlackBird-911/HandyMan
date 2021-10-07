<?php
require("../../Inc/function.php");
session_start();
if (!isset($_SESSION['aID'])) {
    header("location:./adminlogin.php");
}



if (isset($_POST['send'])) {
    $o_id = $_POST['o_id'];
    $msg = $_POST['msg'];

    $query = "INSERT INTO message(o_id, msg) VALUES ('$o_id', '$msg')";
    mysqli_query($connect, $query);
}





?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../CSS SCRIPTS/admin_panel/AdminMessageBoxDesign.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/adminbro3.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Box</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxs-building-house'></i>
            <span class="logo_name">HANDYMAN</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="admindashboard.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Admin Dashboard</span>
                </a>
            </li>
            <li>
                <a href="AdminProfile.php">
                    <i class='bx bx-box'></i>
                    <span class="links_name">Profile</span>
                </a>
            </li>
            <li>
                <a href="orderlist.php">
                    <i class='bx bx-list-ul'></i>
                    <span class="links_name">Order list</span>
                </a>
            </li>
            <li>
                <a href="customerlist.php">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Customer List</span>
                </a>
            </li>
            <li>
                <a href="workerlist.php">
                    <i class='bx bx-coin-stack'></i>
                    <span class="links_name">Worker List</span>
                </a>
            </li>
            <li>
                <a href="ComplaintList.php">
                    <i class='bx bxs-file-import'></i>
                    <span class="links_name">Complaint List</span>
                </a>
            </li>

            <!--send message link-->
            <li>
                <a href="AdminMessageBox.php" class="active">
                    <i class='bx bxs-message-alt-edit'></i>
                    <span class="links_name">Message Box</span>
                </a>
            </li>
            <!--send message link-->
            <!--Message history link-->
            <li>
                <a href="AdminMessageHistory.php">
                    <i class='bx bx-history'></i>
                    <span class="links_name">Message History</span>
                </a>
            </li>
            <!--Message History link-->

            <li class="log_out">
                <a href="../../Inc/admin_logout.php">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Message Box</span>
            </div>
            <div class="search-box">
                <!-- <input type="text" placeholder="Search...">
                    <i class='bx bx-search'></i> -->
            </div>
            <div class="profile-details">
                <span class="admin_name">Muktadir Mazumder</span>
            </div>
        </nav>
        <div class="home-content">
            <div class="sales-boxes">
                <div class="recent-sales box">
                    <!-- <div class="title">Complaint List</div> -->
                    <div class="sales-details">
                        <div class="sales-details" style="margin-top: 23px;">
                            <div class="Description">
                                <!--new code-->
                                <div class="card">
                                    <div class="bio-of-founder">
                                        <form method="POST">
                                            <h3>
                                                <img src="../../ICONS/adminmessage.png">
                                                <p style="float: right;">Date: 05 May, 2021</p>
                                            </h3>
                                            <hr>

                                            <!-- Order ID -->
                                            <h3 style="margin-top: 20px;">
                                                <label for="OrderID">Order ID</label>
                                                <input type="text" id="OrderID" name="OrderID">

                                            </h3>
                                            <t style="font-size: small; color:red;">hello fuck me
                                            </t>
                                            <!--message part-->
                                            <label for="address">
                                                <h3 style="margin-top: 12px;">Message</h3>
                                            </label>

                                            <textarea id="address" name="address" style="height:120px"></textarea>

                                            <!--message part-->

                                            <input name="send" type="button" value="Send">
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
    </section>
</body>

</html>