document.addEventListener("DOMContentLoaded", function () {
  const loadingScreen = document.getElementById("loading-screen");
  const startScreen = document.getElementById("start-screen");
  const quizScreen = document.getElementById("quiz-screen");
  const resultScreen = document.getElementById("result-screen");
  const startButton = document.getElementById("start-button");
  const retryButton = document.getElementById("retry-button");
  const startOverButton = document.getElementById("start-over-button");
  const questionContainer = document.getElementById("question-container");
  const progressBar = document.getElementById("progress-bar");
  const progressCount = document.getElementById("progress-count");
  const scoreText = document.getElementById("score-text");
  const congratulationsText = document.getElementById("congratulations-text");

  let questions = [];
  let currentQuestionIndex = 0;
  let correctAnswers = 0;

  function showLoading() {
    loadingScreen.classList.remove("hidden");
    startScreen.classList.add("hidden");
    quizScreen.classList.add("hidden");
    resultScreen.classList.add("hidden");
  }

  function showStartScreen() {
    loadingScreen.classList.add("hidden");
    startScreen.classList.remove("hidden");
    quizScreen.classList.add("hidden");
    resultScreen.classList.add("hidden");
  }

  function showQuizScreen() {
    loadingScreen.classList.add("hidden");
    startScreen.classList.add("hidden");
    quizScreen.classList.remove("hidden");
    resultScreen.classList.add("hidden");
  }

  function showResultScreen() {
    loadingScreen.classList.add("hidden");
    startScreen.classList.add("hidden");
    quizScreen.classList.add("hidden");
    resultScreen.classList.remove("hidden");

    if (correctAnswers === 20) {
      congratulationsText.classList.remove("hidden");
    } else {
      congratulationsText.classList.add("hidden");
    }
  }

  function fetchQuestions() {
    fetch("https://opentdb.com/api.php?amount=20")
      .then((response) => response.json())
      .then((data) => {
        // console.log("fetch QUESTIONS:", data);
        questions = data.results;
        localStorage.setItem("questions", JSON.stringify(questions));
        localStorage.setItem("currentQuestionIndex", 0);
        localStorage.setItem("correctAnswers", 0);
        showStartScreen();
      })
      .catch((error) => {
        console.error("Error fetching questions:", error);
        alert("Failed to load questions. Please try again later.");
      });
  }

  function startQuiz() {
    currentQuestionIndex = 0;
    correctAnswers = 0;
    localStorage.setItem("currentQuestionIndex", currentQuestionIndex);
    localStorage.setItem("correctAnswers", correctAnswers);
    showQuizScreen();
    showNextQuestion();
    window.location.hash = `#question-1`;
  }

  function showNextQuestion() {
    if (currentQuestionIndex < questions.length) {
      const question = questions[currentQuestionIndex];
      const answers = [
        ...question.incorrect_answers,
        question.correct_answer,
      ].sort(() => Math.random() - 0.5);

      questionContainer.innerHTML = `
              <h2>${question.question}</h2>
              ${answers
                .map(
                  (answer) =>
                    `<button class="ms-3  mt-4 answer-button btn btn-outline-dark">${answer}</button>`
                )
                .join("")}</div>
                <div class="text-start bg light p-3 mt-3 border ">${
                  question.category
                } </div>
          `;
      console.log(question.correct_answer);
      document.querySelectorAll(".answer-button").forEach((button) => {
        button.addEventListener("click", () =>
          handleAnswer(button.textContent)
        );
      });

      const progressPercent = (currentQuestionIndex / questions.length) * 100;
      progressBar.style.width = `${progressPercent}%`;
      progressBar.textContent = `${currentQuestionIndex}/20`;
      progressCount.textContent = `Completed: ${currentQuestionIndex}/20`;

      window.location.hash = `#question-${currentQuestionIndex + 1}`;
    } else {
      showResultScreen();
      window.location.hash = "#question-result";
      scoreText.textContent = `Total Correct Answers: ${correctAnswers}/${questions.length}`;
    }
  }

  function handleAnswer(selectedAnswer) {
    const question = questions[currentQuestionIndex];
    if (selectedAnswer === question.correct_answer) {
      correctAnswers++;
    }
    currentQuestionIndex++;
    localStorage.setItem("currentQuestionIndex", currentQuestionIndex);
    localStorage.setItem("correctAnswers", correctAnswers);
    showNextQuestion();
  }

  window.addEventListener("hashchange", function () {
    const hash = window.location.hash;
    if (hash.startsWith("#question-")) {
      const index = parseInt(hash.split("-")[1], 10) - 1;
      if (index >= 0 && index < questions.length) {
        currentQuestionIndex = index;
        showQuizScreen();
        showNextQuestion();
      }
    } else if (hash === "#start") {
      showStartScreen();
    } else if (hash === "#question-result") {
      showResultScreen();
    } else if (!hash) {
      showStartScreen();
    }
  });

  startButton.addEventListener("click", startQuiz);
  retryButton.addEventListener("click", () => {
    localStorage.clear();
    location.reload();
  });
  startOverButton.addEventListener("click", () => {
    location.hash = "";
    localStorage.clear();
    window.location.hash = "#start";
  });

  if (localStorage.getItem("questions")) {
    questions = JSON.parse(localStorage.getItem("questions"));
    currentQuestionIndex = parseInt(
      localStorage.getItem("currentQuestionIndex"),
      10
    );
    correctAnswers = parseInt(localStorage.getItem("correctAnswers"), 10);

    if (currentQuestionIndex === 0) {
      showLoading();
      showStartScreen();
    } else {
      showQuizScreen();
      showNextQuestion();
    }
  } else {
    showLoading();
    fetchQuestions();
  }
});
