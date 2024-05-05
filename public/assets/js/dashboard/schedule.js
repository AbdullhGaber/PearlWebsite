document.addEventListener('DOMContentLoaded', function () {
    try {
        $('#datepicker-container').datepicker();
    } catch (error) {
        console.error('Error initializing Datepicker:', error);
    }
});

function handleAction(cancel, name, cancelButton, confirmBtn) {
    if (confirm(`Are you sure you want to cancel the appointment for ${name}?`)) {
        cancelButton.textContent = 'Cancelled';
        cancelButton.classList.remove('cancel');
        cancelButton.classList.add('disabled');
        cancelButton.disabled = true;
    }
}