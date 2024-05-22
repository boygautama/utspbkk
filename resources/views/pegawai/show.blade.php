@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Data {{ ucwords($data->nama_pegawai) }}
            </div>
            <div class="card-body">
                <table class="">
                    <tbody>
                        <tr>
                            <th width="200">Nama Pegawai</th>
                            <td>{{ ucwords($data->nama_pegawai) }}</td>
                        </tr>
                        <tr>
                            <th width="200">Alamat</th>
                            <td>{{ ucwords($data->alamat) }}</td>
                        </tr>
                        <tr>
                            <th width="200">Nomor HP</th>
                            <td>{{ ucwords($data->no_hp) }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
    </div>
@endsection