@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Edit Data {{ ucwords($data->nama_pegawai) }}
            </div>
            <div class="card-body">
                <form action="{{ route('pegawai.update', ['pegawai' => $data->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                <table class="">
                    <tbody>
                        <tr>
                            <th width="200">Email Pegawai</th>
                            <td>
                                <input type="text" name="email_pegawai" value="{{ $data->users->email }}" autocomplete="off" placeholder="Masukan Email Pegawai" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th width="200">Nama Pegawai</th>
                            <td>
                                <input type="text" name="nama_pegawai" value="{{ $data->nama_pegawai }}" autocomplete="off" placeholder="Masukan Nama Pegawai" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th width="200">Alamat</th>
                            <td>
                                <textarea name="alamat" class="form-control" cols="30" rows="5">{{ $data->alamat }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th width="200">Nomor HP</th>
                            <td>
                                <input type="number" autocomplete="off" class="form-control" value="{{ $data->no_hp }}" name="nomor_hp" placeholder="Masukan Nomor HP">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th width="200">Jabatan</th></th>
                            <td>
                                <select class="form-control" name="jabatan" id="jabatan">
                                    <option value="">-- Pilih Jabatan --</option>
                                    <option value="karyawan" {{ $data->users->jabatan == 'karyawan' ? 'selected' : '' }}>Karyawan</option>
                                    <option value="supervisi" {{ $data->users->jabatan == 'supervisi' ? 'selected' : '' }}>Sipervisi</option>
                                    <option value="admin" {{ $data->users->jabatan == 'administrator' ? 'selected' : '' }}>Administrator</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th width="200"></th>
                            <td>
                                <a href="{{ url()->previous() }}" class="btn btn-secondary">Kembali</a>
                                &nbsp;&nbsp;&nbsp;
                                <button type="submit" class="btn btn-success">Update</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
    </div>
@endsection