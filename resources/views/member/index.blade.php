@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Member') }}</div>

                    <div class="card-body">
                        <a href="{{ route('member.create') }}" class="btn btn-sm btn-info mb-3">TAMBAH</a>
                        <table class="table table-sm table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">No Identitas</th>
                                    <th scope="col">Nama member</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">No Hp</th>
                                    <th scope="col" style="width: 20%">#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $index => $member)
                                    <tr>
                                        <td class="text-center">
                                            {{ ++$index }}
                                        </td>
                                        <td>{{ $member->no_identitas }}</td>
                                        <td>{{ $member->nama_member }}</td>
                                        <td>{{ $member->alamat }}</td>
                                        <td>{{ $member->no_hp }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('member.destroy', $member->id) }}" method="POST">
                                                <a href="{{ route('member.show', $member->id) }}"
                                                    class="btn btn-sm btn-dark">SHOW</a>
                                                <a href="{{ route('member.edit', $member->id) }}"
                                                    class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data Member Belum Ada.
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