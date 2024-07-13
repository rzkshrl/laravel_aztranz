@extends('layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row mb-3">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                            <h3 class="font-weight-bold">Selamat Datang Di AZ Trans  </h3>
                            <h6 class="font-weight-normal mb-0">Halo Admin<span
                                    class="text-primary"></span></h6>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="card">
            <!-- <div class="col-md-6 grid-margin stretch-card">
                <div class="card tale-bg">
                    <div class="card-people mt-auto">
                        <img src="{{ asset('admin/images/dashboard/people.svg') }}" alt="people">
                        <div class="weather-info">
                            <div class="d-flex">
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="col-md-6 grid-margin transparent">
                <div class="row">
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-tale">
                            <div class="card-body">
                                <p class="mb-4">Total Data Mobil</p>
                                <p class="fs-30 mb-2">{{ $totalMobil }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-dark-blue">
                            <div class="card-body">
                                <p class="mb-4">Total Data User</p>
                                <p class="fs-30 mb-2">{{ $totalUser }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                        <div class="card card-light-blue">
                            <div class="card-body">
                                <p class="mb-4">Total Reservasi</p>
                                <p class="fs-30 mb-2">{{ $totalReservasi }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Total Pendapatan Per Bulan</h4>
                                <canvas id="pendapatanChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

            <div class="row g-4">
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-car fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Total Data Mobil</p>
                            <h6 class="mb-0">{{ $totalMobil }}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-user fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Total Data User</p>
                            <h6 class="mb-0">{{ $totalUser }}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-book fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Total Reservasi</p>
                            <h6 class="mb-0">{{ $totalReservasi }}</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 mt-3">
                <div class="col-sm-12 col-xl-6">
                    <div class="bg-light text-center rounded p-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-0">Total Pendapatan Per Bulan</h6>
                        </div>
                        <canvas id="pendapatanChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->

        <!-- partial -->
    </div>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var ctx = document.getElementById('pendapatanChart').getContext('2d');
        var pendapatanChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($bulan); ?>, // Array bulan
                datasets: [{
                    label: 'Total Pendapatan',
                    data: <?php echo json_encode($pendapatanLengkap); ?>, // Array pendapatan
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
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
    });
</script>
