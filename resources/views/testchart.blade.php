@extends('layout.template')


<div class="w-64 h-64">
    <canvas id="myChart" class="w-full h-full"></canvas>
</div>
<div class="w-64 h-64">
    <canvas id="secondChart"></canvas>

</div>



{{-- @push('script') --}}
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

<script>
    const data2 = {
        labels: ["Apr", "May", "Jun", "Jul", "Aug"],
        datasets: [{
            label: "Pemesanan dalam beberapa bulan",
            backgroundColor: 'rgba(255, 99, 132, 0.3)',
            borderColor: 'rgb(255, 99, 132)',
            data: [100, 200, 100, 300, 500, ],
        }]
    };
    const feature = {
        type: 'bar',
        data: data2
    }
    const secondChart = new Chart(
        document.getElementById('secondChart'),
        feature
    )
</script>
