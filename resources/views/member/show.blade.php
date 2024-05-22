@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Data {{ ucwords($data->nama_member) }}
            </div>
            <div class="card-body">
                <table class="">
                    <tbody>
                        <tr>
                            <th width="200">Nama Member</th>
                            <td>{{ ucwords($data->nama_member) }}</td>
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