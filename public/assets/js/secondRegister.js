var timer;
var timeLeft = 30;

function updateTimer() {
    document.getElementById("timerText").textContent = "Time left: " + timeLeft + "s";
}

function handleResetTimer() {
    timeLeft = 30;
    clearInterval(timer);
    updateTimer();
    timer = setInterval(function () {
        timeLeft--;
        updateTimer();
        if (timeLeft <= 0) {
            clearInterval(timer);
        }
    }, 1000);
}

document.addEventListener("DOMContentLoaded", function () {
    handleResetTimer();
});