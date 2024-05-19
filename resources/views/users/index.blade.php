@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Users') }}</div>

                    <div class="card-body">
                        <a href="{{ route('users.create') }}" class="btn btn-sm btn-info mb-3">TAMBAH</a>
                        <table class="table table-sm table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Email</th>
                                    {{-- <th scope="col">Password</th> --}}
                                    <th scope="col">Level</th>
                                    <th scope="col" style="width: 20%">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($user as $index => $pengguna)
                                    <tr>
                                        <td class="text-center">
                                            {{ ++$index }}
                                        </td>
                                        <td>{{ $pengguna->username }}</td>
                                        <td>{{ $pengguna->email }}</td>
                                        {{-- <td>{{ $pengguna->password }}</td> --}}
                                        <td>{{ $pengguna->level }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('users.destroy', $pengguna->id) }}" method="POST">
                                                <a href="{{ route('users.show', $pengguna->id) }}"
                                                    class="btn btn-sm btn-dark">SHOW</a>
                                                <a href="{{ route('users.edit', $pengguna->id) }}"
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
