<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="userDepartment.css">
     
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <title>User Dashboard</title>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="images/logo.png" alt="">
            </div>

            <span class="logo_name">BrainBits</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li style="background-color:#0E4BF1;" >
                <a href="#">
                    <i class="uil uil-tachometer-fast-alt" style="color:#ffffff;"></i>
                    <span class="link-name" style="color:#ffffff;">Dashboard</span>
                </a></li>
                <li>
                    <a href="userDepartment.php">
                    <i class="uil uil-university"></i>
                    <span class="link-name">Department</span>
                </a></li>
                <li>
                    <a href="userRanking.php">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Rankings</span>
                </a></li>
                <li>
                    <a href="userComment.php">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Comment</span>
                </a></li>
                <li>
                    <a href="userAbout.php">
                    <i class="uil uil-info-circle"></i>
                    <span class="link-name">About</span>
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
            <div class="play-quiz-btn">
            <?php
                session_start();
                $specificValue = $_SESSION['user_name1'];
                echo "<a href='playDepartment.php?user_name=$specificValue' class='editClass'><button><i class='uil uil-play' style='color:#fff; font-size: 30px'></i>Play Quiz</button></a>";
            ?>
            <!-- <a href="playDepartment.php?value=$user_name" ><button><i class="uil uil-play" style="color:#fff; font-size: 30px"></i>Play Quiz</button></a> -->
            </div>
        </div>
        

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text" style="font-size: 40px;">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-game-structure"></i>
                        <span class="text">Total Score</span>
                        <span class="number">25</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-graph-bar"></i>
                        <span class="text">Ranking</span>
                        <span class="number">1st</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-file-question-alt"></i>
                        <span class="text">Mistakes</span>
                        <span class="number">0</span>
                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Activity</span>
                </div>
            </div>
        </div>
    </section>

    

    <script src="userDashboard.js"></script>
</body>
</html>