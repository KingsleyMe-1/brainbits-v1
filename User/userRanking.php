<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
 
   <link rel="stylesheet" href="userRanking1.css">
     
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
                </a></li>
                <li>
                    <a href="userDepartment.php">
                    <i class="uil uil-university"></i>
                    <span class="link-name" >Department</span>
                </a></li>
                <li  style="background-color:#0E4BF1;">
                    <a href="userRanking.php">
                    <i class="uil uil-chart"  style="color:#ffffff;"></i>
                    <span class="link-name" style="color:#ffffff;">Rankings</span>
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
            <a href="playDepartment.php" ><button><i class="uil uil-play" style="color:#fff; font-size: 30px"></i>Play Quiz</button></a>
            </div>
        </div>
        

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-chart"></i>
                    <span class="text" style="font-size: 40px;">Ranking</span>
                </div>
            </div>
        </div>
<div class="skill-outerbox">
        <div class="skill-bars">
            <h1>SOE</h1>
    <div class="bar">
      <div class="info">
        <span>Kingsley</span>
      </div>
      <div class="progress-line html">
        <span></span>
      </div>
    </div>
    <div class="bar">
      <div class="info">
        <span>Mark</span>
      </div>
      <div class="progress-line css">
        <span></span>
      </div>
    </div>
    <div class="bar">
      <div class="info">
        <span>Jhanos</span>
      </div>
      <div class="progress-line jquery">
        <span></span>
      </div>
    </div>
    <div class="bar">
      <div class="info">
        <span>Anthony</span>
      </div>
      <div class="progress-line python">
        <span></span>
      </div>
    </div>
    <div class="bar">
      <div class="info">
        <span>Dean</span>
      </div>
      <div class="progress-line mysql">
        <span></span>
      </div>
    </div>
  </div>

  <div class="skill-bars">
            <h1>STED</h1>
    <div class="bar">
      <div class="info">
        <span>Dean</span>
      </div>
      <div class="progress-line html">
        <span></span>
      </div>
    </div>
    <div class="bar">
      <div class="info">
        <span>Jhanos</span>
      </div>
      <div class="progress-line css">
        <span></span>
      </div>
    </div>
    <div class="bar">
      <div class="info">
        <span>Anthony</span>
      </div>
      <div class="progress-line jquery">
        <span></span>
      </div>
    </div>
    <div class="bar">
      <div class="info">
        <span>Mark</span>
      </div>
      <div class="progress-line python">
        <span></span>
      </div>
    </div>
    <div class="bar">
      <div class="info">
        <span>Kingsley</span>
      </div>
      <div class="progress-line mysql">
        <span></span>
      </div>
    </div>
  </div>


  <div class="skill-bars">
            <h1>SME</h1>
    <div class="bar">
      <div class="info">
        <span>Glenwishlee</span>
      </div>
      <div class="progress-line html">
        <span></span>
      </div>
    </div>
    <div class="bar">
      <div class="info">
        <span>Jhanos</span>
      </div>
      <div class="progress-line css">
        <span></span>
      </div>
    </div>
    <div class="bar">
      <div class="info">
        <span>Dean</span>
      </div>
      <div class="progress-line jquery">
        <span></span>
      </div>
    </div>
    <div class="bar">
      <div class="info">
        <span>Mark</span>
      </div>
      <div class="progress-line python">
        <span></span>
      </div>
    </div>
    <div class="bar">
      <div class="info">
        <span>Anthony</span>
      </div>
      <div class="progress-line mysql">
        <span></span>
      </div>
    </div>
  </div>
    
  
  </div> 
    </section>


    

    <script src="userDashboard.js"></script>
</body>
</html>