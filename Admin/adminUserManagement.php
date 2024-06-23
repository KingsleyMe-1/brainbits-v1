<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="adminUserManagement.css">
     
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <title>Admin Server</title>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="images/logo.png" alt="">
            </div>

            <span class="logo_name">BrainBits</span>
        </div>

        <div style="text-align: center; background: linear-gradient(to bottom, #000033, #0000FF); color:#fff; font-size: 12px;"></i>ADMIN</div>
        

        <div class="menu-items">
            <ul class="nav-links">
                <li>
                <a href="adminDashboardMain.php">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="link-name" >Dashboard</span>
                </a></li>
                <li  style="background-color:#0E4BF1;" >
                    <a href="adminUserManagement.php">
                    <i class="uil uil-user-square"  style="color:#ffffff;"></i>
                    <span class="link-name" style="color:#ffffff;">User Management</span>
                </a></li>
                <li>
                    <a href="adminRanking.php">
                    <i class="uil uil-file-question-alt"></i>
                    <span class="link-name">Ranking</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="../index.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                <div class="mode-toggle">
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
        </div>
        

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-user-square" style="margin-left: 3%;"></i>
                    <span class="text">User Management</span>
                </div>

                <div class="user-table" >
                    <table width='85%' border=1 class="landingTable" style="margin: 3%;">
                        <tr>
                            <th>ID</th>
                            <th>USERNAME</th>
                            <th>PASSWORD</th>
                            <th>EMAIL</th>
                            <th>USER</th>
                            <th>SCORE</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </tr>

                        <?php

                            include_once("./config.php");
                            $result = mysqli_query($mysqli, "SELECT * FROM new_user");

                            while($user_data = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td style='text-align: center;'>" . $user_data['user_id'] . "</td>";
                                echo "<td style='text-align: center;'>" . $user_data['user_name'] . "</td>";
                                echo "<td style='text-align: center;'>" . $user_data['user_password'] . "</td>";
                                echo "<td style='text-align: center;'>" . $user_data['user_email'] . "</td>";
                                echo "<td style='text-align: center;'>" . $user_data['user_kind'] . "</td>";
                                echo "<td style='text-align: center;'>" . $user_data['user_score'] . "</td>";
                                echo "<td style='text-align: center;'><a href='adminEditData.php?user_id=$user_data[user_id]' class='editClass'>Edit</a></td>";
                                echo "<td style='text-align: center;'><a href='adminDeleteData.php?user_id=$user_data[user_id]' class='deleteClass'>Delete</a></td>";
                                echo "</tr>";
                            }
                        ?>
                    </table>
                </div>
            </div>



    </section>

    <script src="adminDashboard.js"></script>
</body>
</html>