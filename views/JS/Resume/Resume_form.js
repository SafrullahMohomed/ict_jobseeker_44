// get elements to perform button operations

// console.log("Hi I am from js");
const back_button = document.getElementById("back");
const next_button = document.getElementById("next");
const finish_button = document.getElementById("finish");
const content = document.getElementById("content");
const bullets = [...document.querySelectorAll(".bullet")];

const MAX_STEPS = 5;
let currentStep = 1;

next_button.addEventListener("click", () => {
  const currenBullet = bullets[currentStep - 1];
  currenBullet.classList.add("completed");
  currentStep += 1;
  back_button.disabled = false;
  if (currentStep == MAX_STEPS) {
    next_button.disabled = true;
    finish_button.disabled = false;
  }

  content.innerText = `Step Number ${currentStep}`;
});

back_button.addEventListener("click", () => {
  const previousBullet = bullets[currentStep - 2];
  previousBullet.classList.remove("completed");
  currentStep--;
  next_button.disabled = false;
  finish_button.disabled = true;
  if (currentStep == 1) {
    back_button.disabled = true;
  }

  content.innerText = `Step Number ${currentStep}`;
});

showTab(currentStep);
function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
}
