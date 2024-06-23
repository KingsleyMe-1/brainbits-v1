// Quiz data
const quiz = [
    {
      question: 'What is the capital of France?',
      choices: ['Paris', 'Madrid', 'Berlin'],
      correctAnswer: 0
    },
    {
      question: 'Which planet is known as the Red Planet?',
      choices: ['Mars', 'Venus', 'Jupiter'],
      correctAnswer: 0
    },
    {
      question: 'What is the chemical symbol for gold?',
      choices: ['Au', 'Ag', 'Cu'],
      correctAnswer: 0
    }
  ];
  
  // Get the elements
  const questionContainer = document.getElementById('question');
  const choicesContainer = document.getElementById('choices');
  const submitBtn = document.getElementById('submitBtn');
  const scoreContainer = document.getElementById('scoreContainer');
  const scoreElement = document.getElementById('score');
  const resetBtn = document.getElementById('resetBtn');
  
  // Quiz variables
  let currentQuestion = 0;
  let score = 0;
  
  // Load question
  function loadQuestion() {
    const currentQuiz = quiz[currentQuestion];
  
    // Display the question
    questionContainer.textContent = currentQuiz.question;
  
    // Clear choices
    choicesContainer.innerHTML = '';
  
    // Display choices
    currentQuiz.choices.forEach((choice, index) => {
      const listItem = document.createElement('li');
      listItem.textContent = choice;
      listItem.setAttribute('data-index', index);
      choicesContainer.appendChild(listItem);
    });
  }
  
  // Check answer and update score
  function checkAnswer(selectedIndex) {
    const currentQuiz = quiz[currentQuestion];
  
    if (selectedIndex === currentQuiz.correctAnswer) {
      score++;
    }
  
    // Move to the next question or display the final score
    if (currentQuestion < quiz.length - 1) {
      currentQuestion++;
      loadQuestion();
    } else {
      displayScore();
    }
  }
  
  // Display final score
  function displayScore() {
    questionContainer.textContent = 'Quiz completed!';
    choicesContainer.style.display = 'none';
    submitBtn.style.display = 'none';
  
    // Display the final score
    scoreElement.textContent = score;
    scoreContainer.style.display = 'block';
  
    // Store the score on the server-side component
    storeScore(score);
  }
  
  // Reset the quiz
  function resetQuiz() {
    currentQuestion = 0;
    score = 0;
    scoreContainer.style.display = 'none';
    choicesContainer.style.display = 'block';
    submitBtn.style.display = 'block';
    loadQuestion();
  }
  
  // Fetch the stored score from the server-side component
  function fetchScore() {
    // Fetch the score from the server using AJAX
    // Example:
    // fetch('/api/score')
    //   .then(response => response.json())
    //   .then(data => {
    //     score = data.score;
    //     scoreElement.textContent = score;
    //   })
    //   .catch(error => {
    //     console.error(error);
    //   });
  
    // Mock score retrieval for demonstration
    score = 0;
    scoreElement.textContent = score;
  }
  
  // Store the score on the server-side component
  function storeScore(score) {
    // Send the score to the server using AJAX
    // Example:
    // fetch('/api/score', {
    //   method: 'POST',
    //   body: JSON.stringify({ score }),
    //   headers: {
    //     'Content-Type': 'application/json'
    //   }
    // })
    // .then(response => response.json())
    // .then(data => {
    //   // Handle the response if needed
    //   console.log(data);
    // })
    // .catch(error => {
    //   // Handle errors
    //   console.error(error);
    // });
  
    // Mock score storage for demonstration
    console.log(`Score stored: ${score}`);
  }
  
  // Event listeners
  submitBtn.addEventListener('click', () => {
    const selectedChoice = choicesContainer.querySelector('li.selected');
    if (selectedChoice) {
      const selectedIndex = selectedChoice.getAttribute('data-index');
      checkAnswer(parseInt(selectedIndex));
    }
  });
  
  resetBtn.addEventListener('click', resetQuiz);
  
  // Initialize the quiz
  fetchScore();
  loadQuestion();
  