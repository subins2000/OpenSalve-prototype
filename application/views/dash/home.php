<div class="card-title">
    <h3>Overview</h3>
    <h5></h5>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
<canvas id="myChart" width="400" height="100"></canvas>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var data = {
    labels: ["Water Bottles", "Rice", "Eggs"],
    datasets: [
        {
            label: "Required",
            backgroundColor: 'rgba(255, 99, 132, 0.8)',
            data: [150,100,210]
        },
        {
            label: "Current",
            backgroundColor: 'rgba(255, 206, 86, 0.8)',
            data: [50, 47, 87]
        },
    ]
};

var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: {
        barValueSpacing: 40,
        scales: {
            yAxes: [{
                ticks: {
                    min: 0,
                }
            }]
        }
    }
});
</script>
