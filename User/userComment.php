<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="UserComment.css">
    <link rel="shorcut icon" type="image/png" href="Images/flogo.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <title>User Comment</title>
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
                <li>
                    <a href="userDepartment.php">
                        <i class="uil uil-university"></i>
                        <span class="link-name">Department</span>
                    </a>
                </li>
                <li>
                    <a href="userRanking.php">
                        <i class="uil uil-chart"></i>
                        <span class="link-name">Rankings</span>
                    </a>
                </li>
                <li style="background-color:#0E4BF1;">
                    <a href="userComment.php">
                        <i class="uil uil-comments" style="color:#ffffff;"></i>
                        <span class="link-name" style="color:#ffffff;">Comment</span>
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
                    <i class="uil uil-comments"></i>
                    <span class="text" style="font-size: 40px;">Comment</span>
                </div>
            </div>
        </div>
        <div class="wrapper">
    <header>Send us a Message</header>
    <form action="#">
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="name" placeholder="Enter your name">
          <i class='fas fa-user'></i>
        </div>
        <div class="field">
          <input type="text" name="email" placeholder="Enter your email">
          <i class='fas fa-envelope'></i>
        </div>
      </div>
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="phone" placeholder="Enter your phone">
          <i class='fas fa-phone-alt'></i>
        </div>
        <div class="field">
          <input type="text" name="website" placeholder="Enter your website">
          <i class='fas fa-globe'></i>
        </div>
      </div>
      <div class="message">
        <textarea placeholder="Write your message" name="message"></textarea>
        <i class="material-icons">message</i>
      </div>
      <div class="button-area">
        <button type="submit">Send Message</button>
        <span></span>
      </div>
    </form>
  </div>

 
    </section>
    <script src="comment.js"></script>
    <script src="userDashboard.js"></script>
</body>

</html>