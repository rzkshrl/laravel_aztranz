@extends('layouts.master')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                        @if(session()->has('pesan'))
                        <!-- Tampilkan pesan session dalam bentuk Toastr saat dokumen dimuat -->
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                // Panggil metode Toastr
                                toastr.success("{{ session('pesan') }}");
                            });
                        </script>
                        @endif
                        @if(session()->has('hapus'))
                        <!-- Tampilkan pesan session dalam bentuk Toastr saat dokumen dimuat -->
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                // Panggil metode Toastr
                                toastr.warning("{{ session('hapus') }}");
                            });
                        </script>
                        @endif

                    </div>
                    <div class="card-body">
                        <form method="GET" action="{{ route('invoice.rekap') }}" class="form-inline">
                            <div class="form-group mb-2">
                                <label for="bulan" class="mr-2">Filter Bulan:</label>
                                <select name="bulan" id="bulan" class="form-control">
                                    <option value="">Semua</option>
                                    @for ($i = 1; $i <= 12; $i++)
                                        <option value="{{ $i }}">{{ date('F', mktime(0, 0, 0, $i, 1)) }}</option>
                                    @endfor
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary mb-2 ml-2">Filter</button>
                        </form>
                        <div class="table-responsive mt-3">
                            <table id="tablesiswa" class="display expandable-table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Total Pendapatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pendapatanPerBulan as $pendapatan)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ date('d F Y', strtotime($pendapatan->tanggalpesan_start)) }}</td>
                                        <td>Rp {{ number_format($pendapatan->harga, 0, ',', '.') }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="2" class="text-right">Total Keseluruhan:</th>
                                        <th>Rp {{ number_format($totalPendapatan, 0, ',', '.') }}</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#tablesiswa').DataTable();
    });
</script>

@endsection
