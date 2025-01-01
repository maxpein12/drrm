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
const correctAnswer2 = "correct"; // Correct answer for scenario 2
const correctAnswer3 = "correct"; // Correct answer for scenario 3
const correctAnswer4 = "correct"; // Correct answer for scenario 4 (Move to a stronger building)
const correctAnswer5 = "correct"; // Correct answer for scenario 5
const correctAnswer6 = "correct"; // Correct answer for scenario 6
const correctAnswer7 = "correct"; // Correct answer for scenario 7
const correctAnswer8 = "correct"; // Correct answer for scenario 8
let timerStart = new Date();
let timerInterval;
let elapsedTime = 0;  // Track elapsed time globally

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
        showPopup("Correct! Moving to the next scenario.");
        setTimeout(() => {
            scenario1.style.display = "none";
            scenario2.style.display = "flex";
            
        }, 2000);
        
    } else {
        showPopup("Wrong answer. Try again!");
    }
});

// Button options for Scenario 2
const buttonOptions = document.querySelectorAll("#scenario-2 .btn-option");
buttonOptions.forEach(button => {
    button.addEventListener("click", () => {
        const answer = button.getAttribute("data-answer");
        if (answer === correctAnswer2) {
            showPopup("Correct! Moving to the next scenario.");
            setTimeout(() => {
                scenario2.style.display = "none";
                scenario3.style.display = "flex";
            }, 2000);
        } else {
            showPopup("Wrong answer. Try again!");
        }
    });
});

// Button options for Scenario 3
const buttonOptions3 = document.querySelectorAll("#scenario-3 .btn-option");
buttonOptions3.forEach(button => {
    button.addEventListener("click", () => {
        const answer = button.getAttribute("data-answer");
        if (answer === correctAnswer3) {
            showPopup("Correct! Moving to the next scenario.");
            setTimeout(() => {
                scenario3.style.display = "none";
                scenario4.style.display = "flex";
            }, 2000);
        } else {
            showPopup("Wrong answer. Try again!");
        }
    });
});

// Button options for Scenario 4
const buttonOptions4 = document.querySelectorAll("#scenario-4 .btn-option");
buttonOptions4.forEach(button => {
    button.addEventListener("click", () => {
        const answer = button.getAttribute("data-answer");
        if (answer === correctAnswer4) {
            showPopup("Correct! Moving to the next scenario.");
            setTimeout(() => {
                scenario4.style.display = "none";
                scenario5.style.display = "flex";
            }, 2000);
        } else {
            showPopup("Wrong answer. Try again!");
        }
    });
});

// Button options for Scenario 5
const buttonOptions5 = document.querySelectorAll("#scenario-5 .btn-option");
buttonOptions5.forEach(button => {
    button.addEventListener("click", () => {
        const answer = button.getAttribute("data-answer");
        if (answer === correctAnswer5) {
            showPopup("Correct! Moving to the next scenario.");
            setTimeout(() => {
                scenario5.style.display = "none";
                scenario6.style.display = "flex";
            }, 2000);
        } else {
            showPopup("Wrong answer. Try again!");
        }
    });
});

// Button options for Scenario 6
const buttonOptions6 = document.querySelectorAll("#scenario-6 .btn-option");
buttonOptions6.forEach(button => {
    button.addEventListener("click", () => {
        const answer = button.getAttribute("data-answer");
        if (answer === correctAnswer6) {
            showPopup("Correct! Moving to the next scenario.");
            setTimeout(() => {
                scenario6.style.display = "none";
                scenario7.style.display = "flex";
            }, 2000);
        } else {
            showPopup("Wrong answer. Try again!");
        }
    });
});

// Button options for Scenario 7
const buttonOptions7 = document.querySelectorAll("#scenario-7 .btn-option");
buttonOptions7.forEach(button => {
    button.addEventListener("click", () => {
        const answer = button.getAttribute("data-answer");
        if (answer === correctAnswer7) {
            showPopup("Correct! Moving to the next scenario.");
            setTimeout(() => {
                scenario7.style.display = "none";
                scenario8.style.display = "flex";
            }, 2000);
        } else {
            showPopup("Wrong answer. Try again!");
        }
    });
});

// Button options for Scenario 8
const buttonOptions8 = document.querySelectorAll("#scenario-8 .btn-option");
buttonOptions8.forEach(button => {
    button.addEventListener("click", () => {
        const answer = button.getAttribute("data-answer");
        if (answer === correctAnswer3) {
            showPopup("Basta Congrats Message toh tas yung time: " + formatTime(elapsedTime));
            setTimeout(() => {
                scenario8.style.display = "none";
                scenario8.style.display = "flex";
            }, 2000);
            stopTimer();
        } else {
            showPopup("Wrong answer. Try again!");
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

// Start the timer initially
startTimer();