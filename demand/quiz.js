var quiz = {
  // (A) PROPERTIES 
  // (A1) QUESTIONS & ANSWERS
  // Q = QUESTION, O = OPTIONS, A = CORRECT ANSWER
  data: [
  {
    q : "The inverse relationship between price & quantity demaded of a good can be presented in three methods. Which of follwoing is the wrong method?",
    o : [
      "Demand Schedule",
      "Demand Factor",
      "Demand Curve",
      "Demand Equation"
    ],
    a : 1 // arrays start with 0, so answer is 70 meters
  },
  {
    q : "What is the correct supply equation?",
    o : [
      "f(P,C,T,Pn,Ex,G,N,O)",
      "f(R,C,T,Pn,Ex,G,S,O)",
      "f(P,Y,T,Pn,Ex,G,S,O)",
      "f(P,Y,T,Pn,Ex,G,N,O)"
    ],
    a : 0
  },
  {
    q : "There are three major types of demand elasticity. Which one is incorrect?",
    o : [
      "Price",
      "Unitary",
      "Cross-Price",
      "Income"
    ],
    a : 1
  },
  {
    q : "Qd=100-5P and Qs=-20+10P What is the correct answer for the consumer surplus?",
    o : [
      "970",
      "975",
      "960",
      "980"
    ],
    a : 2
  },
  {
    q : "During a recession, economies experience increased unemployment and a reduced level of activity. How would a recession be likely to affect the market demand for new cars?",
    o : [
      "Shift to the right",
      "Shift to the left",
      "Not shift, but the quantity will decrease",
      "Not shift, but the quantity will decrease"
    ],
    a : 1
  },
  {
    q : "People buy more of good 1 when the price of good 2 rises. These goods are",
    o : [
      "Normal goods",
      "Complements.",
      "Substitutes",
      "Inferior goods"
    ],
    a : 2
  },
  {
    q : "Because of increasing marginal cost, most supply curves",
    o : [
      "are horizontal",
      "are vertical",
      "have a negative slope",
      "have a positive slope"
    ],
    a : 3
  },
  {
    q : "The elasticity of demand of durable goods is:",
    o : [
      "Less than unity",
      "Greater than unity",
      "Equal to unity",
      "Zero"
    ],
    a : 1
  },
  {
    q : " In the short run, when the output of a firm increases, its average fixed cost:",
    o : [
      "Remains constant",
      "Decreases",
      "Increases",
      "First decreases and then rises"
    ],
    a : 1
  },
  {
    q : "Cost push inflation occurs because of:",
    o : [
      "Wage push",
      "Profit push",
      "Both A and B",
      "Ineffective policies of the government"
    ],
    a : 2
  }
  ],

  // (A2) HTML ELEMENTS
  hWrap: null, // HTML quiz container
  hQn: null, // HTML question wrapper
  hAns: null, // HTML answers wrapper

  // (A3) GAME FLAGS
  now: 0, // current question
  score: 0, // current score

  // (B) INIT QUIZ HTML
  init: function(){
    // (B1) WRAPPER
    quiz.hWrap = document.getElementById("quizWrap");

    // (B2) QUESTIONS SECTION
    quiz.hQn = document.createElement("div");
    quiz.hQn.id = "quizQn";
    quiz.hWrap.appendChild(quiz.hQn);

    // (B3) ANSWERS SECTION
    quiz.hAns = document.createElement("div");
    quiz.hAns.id = "quizAns";
    quiz.hWrap.appendChild(quiz.hAns);

    // (B4) GO!
    quiz.draw();
  },

  // (C) DRAW QUESTION
  draw: function(){
    // (C1) QUESTION
    quiz.hQn.innerHTML = quiz.data[quiz.now].q;

    // (C2) OPTIONS
    quiz.hAns.innerHTML = "";
    for (let i in quiz.data[quiz.now].o) {
      let radio = document.createElement("input");
      radio.type = "radio";
      radio.name = "quiz";
      radio.id = "quizo" + i;
      quiz.hAns.appendChild(radio);
      let label = document.createElement("label");
      label.innerHTML = quiz.data[quiz.now].o[i];
      label.setAttribute("for", "quizo" + i);
      label.dataset.idx = i;
      label.addEventListener("click", quiz.select);
      quiz.hAns.appendChild(label);
    }
  },
  
  // (D) OPTION SELECTED
  select: function(){
    // (D1) DETACH ALL ONCLICK
    let all = quiz.hAns.getElementsByTagName("label");
    for (let label of all) {
      label.removeEventListener("click", quiz.select);
    }

    // (D2) CHECK IF CORRECT
    let correct = this.dataset.idx == quiz.data[quiz.now].a;
    if (correct) { 
      quiz.score++; 
      this.classList.add("correct");
    } else {
      this.classList.add("wrong");
    }
  
    // (D3) NEXT QUESTION OR END GAME
    quiz.now++;
    setTimeout(function(){
      if (quiz.now < quiz.data.length) { quiz.draw(); } 
      else {
        quiz.hQn.innerHTML = `You have answered ${quiz.score} of ${quiz.data.length} correctly.`;
        quiz.hAns.innerHTML = "";
      }
    }, 1000);
  }
};
window.addEventListener("load", quiz.init);