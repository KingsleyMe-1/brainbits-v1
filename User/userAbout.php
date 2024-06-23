<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="userAbout.css">
     
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <title>About Us</title>
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
                </a></li>
                <li>
                    <a href="userDepartment.php">
                    <i class="uil uil-university"></i>
                    <span class="link-name" >Department</span>
                </a></li>
                <li>
                    <a href="userRanking.php">
                    <i class="uil uil-chart"  ></i>
                    <span class="link-name" >Rankings</span>
                </a></li>
                <li>
                    <a href="userComment.php">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Comment</span>
                </a></li>
                <li  style="background-color:#0E4BF1;">
                    <a href="userAbout.php">
                    <i class="uil uil-info-circle" style="color:#ffffff;"></i>
                    <span class="link-name" style="color:#ffffff;">About</span>
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
            <a href="playDepartment.php" ><button><i class="uil uil-play" style="color:#fff; font-size: 30px"></i>Play Quiz</button></a>
            </div>
        </div>
        

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                <i class="uil uil-info-circle"></i>
                    <span class="text" style="font-size: 40px;">About Us</span>
                </div>

            <div class="main">
                <div class="first_div">
                    <h2>Features</h2>
                </div>

                <div class="features-div">
                    <ul>
                        <li>
                        <h3>Extensive Quiz Library</h3>
                        <p style="text-align: justify; margin-bottom: 20px;">With BrainBits Quiz Application, you'll never run out of quizzes to test your brainpower. Our extensive quiz library covers a diverse range of topics, including general knowledge, science, history, pop culture, sports, and much more. Whether you're a trivia enthusiast or simply looking to expand your knowledge, we have something for everyone.</p>
                        </li>
                        <li>
                        <h3>Multiple Difficulty Levels</h3>
                        <p style="text-align: justify; margin-bottom: 20px;">We understand that everyone has different skill levels, which is why we offer quizzes for beginners, intermediate players, and expert trivia masters. Choose the difficulty level that suits you best and start your journey to becoming a quiz champion.</p>
                        </li>
                        <li>
                        <h3>Time-Based Challenges</h3>
                        <p style="text-align: justify; margin-bottom: 20px;">Think you can answer questions under pressure? Put your skills to the test with our time-based challenges. Race against the clock and see how many questions you can answer correctly before time runs out. Challenge your friends to beat your score and claim the title of the ultimate quiz whiz.</p>
                        </li>
                        <li>
                        <h3>Personalized Profiles</h3>
                        <p style="text-align: justify; margin-bottom: 20px;">Create your own profile on BrainBits Quiz Application and track your progress as you conquer quizzes. Earn badges, unlock achievements, and compete with friends to showcase your expertise. With our personalized profiles, you can keep a record of your accomplishments and stay motivated to reach new milestones.</p>
                        </li>
                        <li>
                        <h3>Social Sharing</h3>
                        <p style="text-align: justify; margin-bottom: 20px;">Share your quiz results and achievements with your friends on social media platforms. Let the world know about your quiz prowess and challenge others to beat your scores. Connect with fellow trivia enthusiasts, join communities, and engage in friendly competitions to keep the excitement alive.</p>
                        </li>
                    </ul>
                </div>

                <div class="second-div">
                    <h2>How to Get Started</h2>
                </div>

                <div class="getStarted-div" >
                        <ol>
                            <li style="margin-bottom: 10px;" >Visit our website at <a href="index.php">www.brainbitsquiz.com</a>.</li>
                            <li style="margin-bottom: 10px;" >Sign up for a free account or log in if you already have one.</li>
                            <li style="margin-bottom: 10px;" >Browse our quiz categories or use the search feature to find quizzes that interest you.</li>
                            <li style="margin-bottom: 10px;">Choose your desired difficulty level and start answering questions.</li>
                            <li style="margin-bottom: 10px;">Track your progress, earn badges, and share your achievements with friends.</li>
                        </ol>
                </div>

            </div>

            </div>
        </div>
    </section>

    <script src="userDashboard.js"></script>
</body>
</html>