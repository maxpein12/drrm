// DOM Elements
const scenario1 = document.getElementById("scenario-1");
const scenario2 = document.getElementById("scenario-2");
const scenario3 = document.getElementById("scenario-3");
const scenario4 = document.getElementById("scenario-4");
const scenario5= document.getElementById("scenario-5");
const scenario6= document.getElementById("scenario-6");
const scenario7= document.getElementById("scenario-7");
const scenario8 = document.getElementById("scenario-8"); 
const timerElement = document.getElementById("timer");
const timerElement2 = document.getElementById("timer-2");
const timerElement3 = document.getElementById("timer-3");
const timerElement4 = document.getElementById("timer-4"); // New timer for scenario 4
const timerElement5 = document.getElementById("timer-5");
const timerElement6 = document.getElementById("timer-6");
const timerElement7 = document.getElementById("timer-7");
const timerElement8 = document.getElementById("timer-8");
const correctAnswer1 = 3; // Correct answer for scenario 1 (Signal 3)
const correctAnswer2 = ["Flashlight", "Extra batteries", "First-aid kit", "Canned goods", "Bottled water"]; // Correct answer for scenario 2
const correctAnswer3 = "correct"; // Correct answer for scenario 3
const correctAnswer4 = "correct"; // Correct answer for scenario 4 (Move to a stronger building)
const correctAnswer5 = "correct"; // Correct answer for scenario 5
const correctAnswer6 = "correct"; // Correct answer for scenario 6
const correctAnswer7 = "correct"; // Correct answer for scenario 7
const correctAnswer8 = "correct"; // Correct answer for scenario 8
let timerStart = new Date();
let timerInterval;
let elapsedTime = 0;  // Track elapsed time globally
let scenario1Attempts = 0;
let scenario2Attempts = 0;
let scenario3Attempts = 0;
let scenario4Attempts = 0;
let scenario5Attempts = 0;
let scenario6Attempts = 0;
let scenario7Attempts = 0;
let scenario8Attempts = 0;

function getHintMessage(scenario) {
    const hints = {
        "Scenario 1": "For heavy rains and very strong winds, the correct answer lies between Signal No.2 and Signal No.4.",
        "Scenario 2": "Focus on items that will help you survive—those that provide light, food, water, or medical help during emergencies.",
        "Scenario 3": "The Department of Transportation deals only with transportation-related concerns",
        "Scenario 4": "Power outages may occur, so charging your devices is important",
        "Scenario 5": "Start by controlling the water and ensure you can reach the leak safely.",
        "Scenario 6": "There's a risk of electrical fires or shocks during flooding.",
        "Scenario 7": "By doing this step, the authorities know you and your family are safe and can provide you with proper assistance and supplies",
        "Scenario 8": "Hazards like fallen trees and wrecked cars can be dangerous."
    };

    return hints[scenario];
}


function showHint(scenario) {
    const hintMessage = getHintMessage(scenario);
    popupMessage.textContent = hintMessage;
    popup.classList.add("active");

    setTimeout(() => {
        popup.classList.remove("active");
    }, 5000);
}
// Timer function to format and display time
function formatTime(seconds) {
    const minutes = Math.floor(seconds / 60);
    const remainingSeconds = seconds % 60;
    return `${minutes < 10 ? '0' : ''}${minutes}:${remainingSeconds < 10 ? '0' : ''}${remainingSeconds}`;
}




// Start the timer
function startTimer() {
    const startTime = new Date() - elapsedTime * 1000;
    
    timerInterval = setInterval(() => {
        const elapsedSeconds = Math.floor((new Date() - startTime) / 1000);
        elapsedTime = elapsedSeconds;  // Update global elapsed time
        timerElement.textContent = formatTime(elapsedSeconds);
        timerElement2.textContent = formatTime(elapsedSeconds);
        timerElement3.textContent = formatTime(elapsedSeconds);
        timerElement4.textContent = formatTime(elapsedSeconds); // Update the new timer
        timerElement5.textContent = formatTime(elapsedSeconds);
        timerElement6.textContent = formatTime(elapsedSeconds);
        timerElement7.textContent = formatTime(elapsedSeconds);
        timerElement8.textContent = formatTime(elapsedSeconds);
       
    }, 1000);
   
    
     

}

document.addEventListener('DOMContentLoaded', function() {
    speakScenarioText(1);
  });
// Stop the timer
function stopTimer() {
    clearInterval(timerInterval);
    elapsedTime = Math.floor((new Date() - timerStart) / 1000);
}

// Slider interaction
const slider = document.getElementById("slider");
const choiceImages = document.querySelectorAll(".choice-image");
slider.addEventListener("input", () => {
    const value = slider.value;
    choiceImages.forEach(image => {
        image.classList.remove("active");
    });
    document.getElementById(`choice-${value}`).classList.add("active");
});

// Submit for Scenario 1
const submitBtn = document.getElementById("submit-btn");
submitBtn.addEventListener("click", () => {
    const selectedValue = parseInt(slider.value);
    if (selectedValue === correctAnswer1) {
        scenario1Attempts++;
        showPopup("Correct! Moving to the next scenario.");
        setTimeout(() => {
            scenario1.style.display = "none";
            scenario2.style.display = "flex";
            
          
        }, 2000);
       
    }  else {
        scenario1Attempts++;
        if (scenario1Attempts > 2) {
            showHint("Scenario 1");
        } else {
            showPopup("Wrong answer. Try again!");
        }
    }
});

// Button options for Scenario 2
// Button options for Scenario 2
const checkboxes = document.querySelectorAll("#scenario-2 input[type='checkbox']");
let selectedAnswers = [];

checkboxes.forEach(checkbox => {
    checkbox.addEventListener("change", () => {
        const answer = checkbox.getAttribute("data-answer");

        if (checkbox.checked) {
            selectedAnswers.push(answer);
        } else {
            selectedAnswers = selectedAnswers.filter(a => a !== answer);
        }

        console.log("Selected answers:", selectedAnswers);
        console.log("Correct answers:", correctAnswer2);

        if (selectedAnswers.length === 5) {
            if (correctAnswer2.every(a => selectedAnswers.includes(a))) {
                console.log("Correct answer detected!");
                scenario2Attempts++;
                showPopup("Correct! Moving to the next scenario.");
                setTimeout(() => {
                    scenario2.style.display = "none";
                    scenario3.style.display = "flex";
                   
                }, 2000);
               
            }else {
                scenario2Attempts++;
                if (scenario2Attempts > 2) {
                    showHint("Scenario 2");
                } else {
                    showPopup("Wrong answer. Try again.");
                }
            }
        }
    });
});

// Button options for Scenario 3
const buttonOptions3 = document.querySelectorAll("#scenario-3 .btn-option");
buttonOptions3.forEach(button => {
    button.addEventListener("click", () => {
        const answer = button.getAttribute("data-answer");
        if (answer === correctAnswer3) {
            scenario3Attempts++;
            showPopup("Correct! Moving to the next scenario.");
            setTimeout(() => {
                scenario3.style.display = "none";
                scenario4.style.display = "flex";
            }, 2000);
        } else {
            scenario3Attempts++;
            if (scenario3Attempts > 2) {
                showHint("Scenario 3");
            } else {
                showPopup("Wrong answer. Try again!");
            }
        }
    });
});

// Button options for Scenario 4
const buttonOptions4 = document.querySelectorAll("#scenario-4 .btn-option");
buttonOptions4.forEach(button => {
    button.addEventListener("click", () => {
        const answer = button.getAttribute("data-answer");
        if (answer === correctAnswer4) {
            scenario4Attempts++;
            showPopup("Correct! Moving to the next scenario.");
            setTimeout(() => {
                scenario4.style.display = "none";
                scenario5.style.display = "flex";
            }, 2000);
        } else {
            scenario4Attempts++;
            if (scenario4Attempts > 2) {
                showHint("Scenario 4");
            } else {
                showPopup("Wrong answer. Try again!");
            }
        }
    });
});

// Button options for Scenario 5
const buttonOptions5 = document.querySelectorAll("#scenario-5 .btn-option");
buttonOptions5.forEach(button => {
    button.addEventListener("click", () => {
        const answer = button.getAttribute("data-answer");
        if (answer === correctAnswer5) {
            scenario5Attempts++;
            showPopup("Correct! Moving to the next scenario.");
            setTimeout(() => {
                scenario5.style.display = "none";
                scenario6.style.display = "flex";
            }, 2000);
        } else {
            scenario5Attempts++;
            if (scenario5Attempts > 2) {
                showHint("Scenario 5");
            } else {
                showPopup("Wrong answer. Try again!");
            }
        }
    });
});

// Button options for Scenario 6
const buttonOptions6 = document.querySelectorAll("#scenario-6 .btn-option");
buttonOptions6.forEach(button => {
    button.addEventListener("click", () => {
        const answer = button.getAttribute("data-answer");
        if (answer === correctAnswer6) {
            scenario6Attempts++;
            showPopup("Correct! Moving to the next scenario.");
            setTimeout(() => {
                scenario6.style.display = "none";
                scenario7.style.display = "flex";
            }, 2000);
        } else {
            scenario6Attempts++;
            if (scenario6Attempts > 2) {
                showHint("Scenario 6");
            } else {
                showPopup("Wrong answer. Try again!");
            }
        }
    });
});

// Button options for Scenario 7
const buttonOptions7 = document.querySelectorAll("#scenario-7 .btn-option");
buttonOptions7.forEach(button => {
    button.addEventListener("click", () => {
        const answer = button.getAttribute("data-answer");
        if (answer === correctAnswer7) {
            scenario7Attempts++;
            showPopup("Correct! Moving to the next scenario.");
            setTimeout(() => {
                scenario7.style.display = "none";
                scenario8.style.display = "flex";
            }, 2000);
        } else {
            scenario7Attempts++;
            if (scenario7Attempts > 2) {
                showHint("Scenario 7");
            } else {
                showPopup("Wrong answer. Try again!");
            }
        }
    });
});

// Button options for Scenario 8
const buttonOptions8 = document.querySelectorAll("#scenario-8 .btn-option");
buttonOptions8.forEach(button => {
    button.addEventListener("click", () => {
        const answer = button.getAttribute("data-answer");
        if (answer === correctAnswer3) {
            scenario8Attempts++;
            showcongrats("Basta Congrats Message toh tas yung time: " + formatTime(elapsedTime));
            setTimeout(() => {
                scenario8.style.display = "none";
                scenario8.style.display = "flex";
            }, 10000);
            stopTimer();
        } else {
            scenario8Attempts++;
            if (scenario8Attempts > 2) {
                showHint("Scenario 8");
            } else {
                showPopup("Wrong answer. Try again!");
            }
        }
    });
});

// Popup logic
const popup = document.getElementById("popup");
const popupMessage = document.getElementById("popup-message");
const closePopup = document.getElementById("close-popup");

function showPopup(message) {
    popupMessage.textContent = message;
    popup.classList.add("active");

    setTimeout(() => {
        popup.classList.remove("active");
    }, 2000);
}
function showcongrats(message) {
    popupMessage.textContent = message;
    popup.classList.add("active");

    
}

// Start the timer initially
startTimer();



