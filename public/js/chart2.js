var ctx = document.getElementById('doughnut').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Search Engines', 'Direct Clicks', 'bookmarks Click'],

        datasets: [{
            label: 'Traffic Sources',
            data: [30, 30, 40],
            backgroundColor: [
                'rgba(206, 40, 40, 1)',
                'rgba(211, 186, 42, 1)',
                'rgba(53, 93, 224, 1)'

            ],
            borderColor: [
                'rgba(206, 40, 40, 1)',
                'rgba(211, 186, 42, 1)',
                'rgba(120, 46, 139,1)'

            ],
            borderWidth: 1
        }]

    },
    options: {
        responsive: true
    }
});