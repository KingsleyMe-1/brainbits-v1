<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="adminRanking.css">
     
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
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li>
                    <a href="adminUserManagement.php">
                    <i class="uil uil-user-square"></i>
                    <span class="link-name">User Management</span>
                </a></li>
                <li    style="background-color:#0E4BF1;" >
                    <a href="adminQuestion.php">
                    <i class="uil uil-file-question-alt"   style="color:#ffffff;"></i>
                    <span class="link-name"   style="color:#ffffff;">Question</span>
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
                    <span class="text">Question</span>
                </div>
            </div>
        </div>



    </section>

    <script src="adminDashboard.js"></script>
</body>
</html>