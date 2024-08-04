@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Pegawai') }}</div>

                    <div class="card-body">
                        <a href="{{ route('pegawai.create') }}" class="btn btn-sm btn-info mb-3">TAMBAH</a>
                        <table class="table table-sm table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">No Hp</th>
                                    <th scope="col">Jabatan</th>
                                    <th scope="col" style="width: 20%">#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $index => $pegawai)
                                    <tr>
                                        <td class="text-center">
                                            {{ ++$index }}
                                        </td>
                                        <td>{{ $pegawai->nama_pegawai }}</td>
                                        <td>{{ $pegawai->users->email }}</td>
                                        <td>{{ $pegawai->no_hp }}</td>
                                        <td>{{ $pegawai->users->jabatan }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('pegawai.destroy', $pegawai->id) }}" method="POST">
                                                <a href="{{ route('pegawai.show', $pegawai->id) }}"
                                                    class="btn btn-sm btn-dark">SHOW</a>
                                                <a href="{{ route('pegawai.edit', $pegawai->id) }}"
                                                    class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data User Belum Ada.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<div>
</div>
