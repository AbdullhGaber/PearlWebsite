document.addEventListener('DOMContentLoaded', function () {
    try {
        $('#datepicker-container').datepicker();
    } catch (error) {
        console.error('Error initializing Datepicker:', error);
    }
});

function handleAction(status, name) {
    console.log(`User ${name} is now ${status}`);
}