document.addEventListener("DOMContentLoaded", function () {
    var dates = ["Acne", "Spots", "Wrinkles", "Pores"];
    var progressData1 = [60, 75, 90, 80];
    var progressData2 = [40, 65, 80, 70];

    var ctx = document.getElementById('skinProgressChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: dates,
            datasets: [
                {
                    label: 'Curve 1',
                    data: progressData1,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    fill: false,
                    tension: 0.5,
                },
                {
                    label: 'Curve 2',
                    data: progressData2,
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 2,
                    fill: false,
                    tension: 0.5,
                }
            ]
        },
        options: {
            scales: {
                x: [{
                    type: 'time',
                    time: {
                        unit: 'month'
                    }
                }],
                y: [{
                    ticks: {
                        beginAtZero: true,
                        max: 100
                    }
                }]
            }
        }
    });
});