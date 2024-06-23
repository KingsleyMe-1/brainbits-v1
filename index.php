<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brain Bits</title>
    <link rel="stylesheet" href="indexStyle.css">
</head>
<body>
    <main class="main">
        <header class="header">

            <a href="#" class="logo"><img src="Images/flogo.png" alt="#" style="height: 6%; width: 6%;">BrainBits</a>
            
            <nav class="navbar">
                <a href="landingRanking.php">Rankings</a>
                <a href="landingDepartment.php">Departments</a>
                <a href="landingContact.php">Contact</a>
                <a href="signUp.php">Sign Up</a>
                <a href="login.php">Login</a>
            </nav>
        </header>

        <div class="container">
            <section class="quiz-section">
                <div class="quiz-box">
                    <h1>Quick Quiz</h1>
                    <div class="quiz-header">
                        <span>Brain Bits Website</span>
                        <span class="header-score">Score: 0 / 5</span>
                    </div>

                    <h2 class="question-text">What does HTML stand for?</h2>

                    <div class="option-list">
                        <div class="option">
                            <span>A. Hyper Type Multi Language</span>
                        </div>
                        <div class="option">
                            <span>B. Hyper Text Multiple Language</span>
                        </div>
                        <div class="option">
                            <span>C. Hyper Text Markup Language</span>
                        </div>
                        <div class="option">
                            <span>D. Home Text Multi Language</span>
                        </div>
                    </div>

                    <div class="quiz-footer">
                        <span class="question-total">
                            1 of 5 Questions
                        </span>
                        <button class="next-btn">Next</button>
                    </div>
                </div>

                <div class="result-box">
                    <h2>Quiz Result!</h2>
                    <div class="percentage-container">
                        <div class="circular-progress">
                            <span class="progress-value">0%</span>
                        </div>

                        <span class="score-text">Your Score 0 out of 5</span>
                    </div>

                    <div class="buttons">
                        <button class="tryAgain-btn">Try Again</button>
                        <button class="goHome-btn">Go Home</button>
                    </div>
                </div>
            </section>

            <section class="home">
                <div class="home-content">
                    <h1>"Expand your knowledge"</h1>
                    <p>"Ready to level up your brain power? Dive into a world of thrilling quizzes, mind-bending challenges, and electrifying question. Show off your smarts, outsmart your friends, and embark on a quest to become the reigning champion of our quiz app. Get ready to quiz, laugh, and conquer - the adventure awaits!"</p>
                    <button class="start-btn">Quick Quiz</button>
                </div>
            </section>
        </div>
    </main>

    <div class="popup-info">
        <h2>Quiz Guide</h2>
        <span class="info">1. Test your knowledge with our engaging quizzes.</span>
        <span class="info">2. Compete for the top spot on our leaderboard.</span>
        <span class="info">3. Diverse quizzes for every interest and expertise.</span>
        <span class="info">4. Track progress, earn achievements, and unlock levels.</span>
        <span class="info">5. Learn and have fun with informative quizzes.</span>

        <div class="btn-group">
            <button class="info-btn exit-btn">Exit Quiz</button>
            <a href="#" class="info-btn continue-btn">Continue</a>
        </div>
    </div>

    <script src="script.js"></script>
    <script src="question.js"></script>
</body>
</html>