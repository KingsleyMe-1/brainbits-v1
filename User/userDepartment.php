<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shorcut icon" type="image/png" href="Images/flogo.png">
    <link rel="stylesheet" href="userDepartment.css">


    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <title>User Ranking</title>

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
                <li>
                    <a href="userDashboardMain.php">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Dashboard</span>
                    </a>
                </li>
                <li style="background-color:#0E4BF1;">
                    <a href="userDepartment.php">
                        <i class="uil uil-university" style="color:#ffffff;"></i>
                        <span class="link-name" style="color:#ffffff;">Department</span>
                    </a>
                </li>
                <li>
                    <a href="userRanking.php">
                        <i class="uil uil-chart"></i>
                        <span class="link-name">Rankings</span>
                    </a>
                </li>
                <li>
                    <a href="userComment.php">
                        <i class="uil uil-comments"></i>
                        <span class="link-name">Comment</span>

                    </a>
                </li>
                <li>
                    <a href="userAbout.php">
                        <i class="uil uil-info-circle"></i>
                        <span class="link-name">About</span>
                    </a>
                </li>
            </ul>

            <ul class="logout-mode">
                <li><a href="index.php">
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
                <a href="playDepartment.php"><button><i class="uil uil-play"
                            style="color:#fff; font-size: 30px"></i>Play Quiz</button></a>
            </div>
        </div>


        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-university"></i>
                    <span class="text" style="font-size: 40px;">Department</span>
                </div>
            </div>
        </div>

        <div class="about-us" style="display: flex; align-items: center; width: 85%; margin: auto;">
        <img src="Images/SOE-logo.png" style="flex: 0 50px; max-width: 20%; height: auto;"/>
        <div class="about-content" style="padding: 35px;">
            <h2 style="color: #36455c; font-size: 24px; margin: 15px 0px;">School of Engineering</h2>
            <p style="color: #666; font-size: 18px; line-height: 1.5; margin: 15px 0px auto; text-align: justify;  ">The School of Engineering offers diverse programs, expert faculty, and hands-on
                learning to equip students with the skills needed for real-world engineering challenges.
                Through research and collaboration, it fosters innovation, critical thinking,
                and prepares graduates to make a positive impact on society.</p>
         </div>
         </div>

         <div class="about-us" style="display: flex; align-items: center; width: 85%; margin: auto;">
        <img src="Images/educ-removebg-preview.png" style="flex: 0 50px; max-width: 20%; height: auto;"/>
        <div class="about-content" style="padding: 35px;">
            <h2 style="color: #36455c; font-size: 24px; margin: 15px 0px;">School of Teachers Education</h2>
            <p style="color: #666; font-size: 18px; line-height: 1.5; margin: 15px 0px auto; text-align: justify;">The School of Teachers Education provides comprehensive programs 
            and training for aspiring teachers. With experienced faculty and a focus on practical learning, it prepares students with the
             skills and knowledge needed to excel in the field of education, 
            fostering effective teaching practices and professional development.</p>
               
         </div>
         </div>

         <div class="about-us" style="display: flex; align-items: center; width: 85%; margin: auto;">
        <img src="Images/sme-removebg-preview.png" style="flex: 0 50px; max-width: 20%; height: auto;"/>
        <div class="about-content" style="padding: 35px;">
            <h2 style="color: #36455c; font-size: 24px; margin: 15px 0px;">School of Management and Entrepreneurship</h2>
            <p style="color: #666; font-size: 18px; line-height: 1.5; margin: 15px 0px auto; text-align: justify;">The School of Management and Entrepreneurship offers 
            diverse programs and resources to develop business leaders and foster entrepreneurial skills. With a focus on practical learning,
             it equips students with the knowledge and tools to succeed in the dynamic
             world of business, innovation, and strategic decision-making.</p>
               
         </div>
         </div>


        

    </section>




    <script src="userDashboard.js"></script>
</body>

</html>