<div class="flex flex-col flex-1">
    <div class="flex flex-1">
        <div class="flex w-full flex-col items-center justify-center rounded-lg border border-gray-200 p-5">
            <canvas></canvas>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const data = {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", ],
        datasets: [{
            label: 'Registered users in the last 30 days',
            backgroundColor: 'rgba(255, 99, 132, 0.3)',
            borderColor: 'rgb(255, 99, 132)',
            data: [100, 200, 100, 300, 500, 500, 300],
        }]
    };
    const config = {
        type: 'pie',
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom' // posisi legenda di bawah chart
                }
            }
        }
    };
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>