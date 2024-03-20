document.addEventListener('DOMContentLoaded', function () {
    try {
        $('#datepicker-container').datepicker();
    } catch (error) {
        console.error('Error initializing Datepicker:', error);
    }
});

const thisWeekData = [10, 30, 60, 5, 80, 15, 100];
const lastWeekData = [15, 40, 10, 55, 20, 70, 90];

const daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

const ctx1 = document.getElementById('weeklyChart').getContext('2d');
const weeklyChart = new Chart(ctx1, {
    type: 'line',
    data: {
        labels: daysOfWeek,
        datasets: [
            {
                label: 'This Week',
                data: thisWeekData,
                borderColor: '#219653',
                backgroundColor: '#219653',
                borderWidth: 2,
                fill: false,
            },
            {
                label: 'Last Week',
                data: lastWeekData,
                borderColor: '#F2994A',
                backgroundColor: '#F2994A',
                borderWidth: 2,
                fill: false,
            },
        ],
    },
    options: {
        plugins: {
            legend: {
                position: 'bottom',
            },
        },
    },
});

const onlineAppointments = [20, 15, 25, 18, 30, 22, 28, 35, 27, 32, 26, 30];
const offlineAppointments = [15, 10, 18, 12, 22, 16, 20, 25, 18, 24, 20, 22];

const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

const ctx2 = document.getElementById('monthlyAppointmentsChart').getContext('2d');
const monthlyAppointmentsChart = new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: months,
        datasets: [
            {
                label: 'Online Appointments',
                data: onlineAppointments,
                backgroundColor: '#6767F7',
                borderWidth: 1,
            },
            {
                label: 'Offline Appointments',
                data: offlineAppointments,
                backgroundColor: '#3CDE9A',
                borderWidth: 1,
            },
        ],
    },
    options: {
        plugins: {
            legend: {
                position: 'bottom',
                display: true,
                labels: {
                    boxWidth: 12,
                    usePointStyle: true,
                },
            },
        },
    },
});

$(document).ready(function () {
    $(".rateyo").rateYo({
        readOnly: true,
        halfStar: true,
        starWidth: "10px",
        ratedFill: "#FFD602",
        normalFill: "#D3D3D3",
    });
});

$(".custom-width").rateYo({
    readOnly: true,
    halfStar: true,
    starWidth: "15px",
    ratedFill: "#FFD602",
    normalFill: "#D3D3D3",
});

const genderData = [70, 30];

const genderLabels = ['Female', 'Male'];

const ctx = document.getElementById('genderDistributionChart').getContext('2d');
const genderDistributionChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: genderLabels,
        datasets: [{
            data: genderData,
            backgroundColor: ['#3CD856', '#3354F4'],
            borderWidth: 0,
        }],
    },
    options: {
        cutout: '70%',
        plugins: {
            legend: {
                position: 'right',
                display: true,
                labels: {
                    usePointStyle: true,
                },
            },
            layout: {
                padding: 30,
            },
        },
    },
});