<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan Masyarakat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background: linear-gradient(45deg, #007bff, #6610f2);
            padding: 15px 20px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            position: fixed;
            top: 0;
            left: 220px;
            /* Sesuaikan dengan lebar sidebar */
            right: 0;
            z-index: 1000;
        }

        .navbar-brand {
            font-size: 22px;
            font-weight: bold;
            color: #ffffff !important;
        }

        .navbar h6 {
            margin-left: auto;
            font-size: 18px;
            color: #ffffff;
            font-weight: 500;
            margin-right: 15px;
        }

        .navbar .btn {
            margin-left: 10px;
        }

        .sidebar {
            background-color: #343a40;
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
            width: 220px;
            height: 100vh;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .sidebar a {
            color: #ffffff;
            display: block;
            padding: 12px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .content {
            margin-left: 220px;
            /* Sesuaikan dengan lebar sidebar */
            margin-top: 70px;
            /* Sesuaikan dengan tinggi navbar */
            padding: 20px;
        }

        .chart-container {
            display: flex;
            justify-content: space-between;
        }

        .chart-container canvas {
            width: 45% !important;
            height: auto !important;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    @if (auth()->user()->role !== 'admin')
        <script>
            window.location.href = "{{ url('/errors/404') }}";
        </script>
    @endif

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="{{ url('/admin') }}" class="active">Dashboard</a>
        <a href="{{ url('/admin/detail-staff') }}">Kelola Akun</a>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Halaman Admin</a>
            <div class="d-flex align-items-center ms-auto">
                <h6>Selamat Datang, {{ auth()->user()->name }}</h6>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-secondary">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Konten Utama -->
    <div class="content">
        <div class="chart-container">
            <canvas id="barChart" width="250" height="200"></canvas>

            <canvas id="pieChart" width="150" height="50"></canvas>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        @if (session('login_success'))
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('login_success') }}',
            });
        @endif

        const pengaduanDitanggapi = {{ $pengaduanDitanggapi }};
        const belumDitanggapi = {{ $belumDitanggapi }};
        const pengaduanDitolak = {{ $pengaduanDitolak }};

        // Bar Chart
        const ctxBar = document.getElementById('barChart').getContext('2d');
        const barChart = new Chart(ctxBar, {
            type: 'bar',
            data: {
                labels: ['Pengaduan Ditanggapi', 'Belum Ditanggapi', 'Pengaduan Ditolak'],
                datasets: [{
                    label: 'Jumlah Pengaduan',
                    data: [pengaduanDitanggapi, belumDitanggapi, pengaduanDitolak],
                    backgroundColor: ['#4caf50', '#ff9800', '#f44336'],
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Pie Chart
        const ctxPie = document.getElementById('pieChart').getContext('2d');
        const pieChart = new Chart(ctxPie, {
            type: 'pie',
            data: {
                labels: @json($provinceNames),
                datasets: [{
                    label: 'Jumlah Pengaduan',
                    data: @json($provinceCounts),
                    backgroundColor: [
                        '#FF6384',
                        '#36A2EB',
                        '#FFCE56',
                        '#4BC0C0',
                        '#9966FF',
                        '#FF9F40',
                        '#E7E9ED'
                    ],
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: '7 Provinsi dengan Pengaduan Terbanyak'
                    }
                }
            }
        });
    </script>
</body>

</html>
