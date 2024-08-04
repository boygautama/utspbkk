@extends('layouts.app')
@push('stylesheet')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush
@section('content')
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h3 class="card-title">Layanan</h3>
                    <a href="{{ route('layanan.create') }}"> <span class="fas fa-plus"></span>Tambah</a>
                </div>
            </div>
            <div class="card-body">
                <table id="tabledata" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Nama Layanan</th>
                            <th>Lama Pengerjaan</th>
                            <th>Harga</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $index => $layanan)
                            <tr>
                                <td class="text-center">
                                    {{ ++$index }}
                                </td>
                                <td>{{ $layanan->nama }}</td>
                                <td>{{ $layanan->durasi }}</td>
                                <td> {{ $layanan->harga }}</td>
                                <td>
                                     <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('layanan.destroy', $layanan->id) }}" method="POST">
                                                <a href="{{ route('layanan.show', $layanan->id) }}"
                                                    class="btn btn-sm btn-dark">SHOW</a>
                                                <a href="{{ route('layanan.edit', $layanan->id) }}"
                                                    class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card -->
    </section>
@endsection
@push('scripts')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

    <script>
        $(function() {
            $('#tabledata').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endpush
