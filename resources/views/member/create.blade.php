@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create {{ __('Member') }}</div>

                    <div class="card-body">
<form action="{{ route('member.store') }}" method="POST"  >
                          @csrf
                            <div class="form-group">
                                <label for="nama">No Identitas</label>
                                <input type="number" autocomplete="off" name="no_identitas" class="form-control" id="nama" placeholder="Nomor Identitas">

                                @error('no_identitas')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                              <label for="nohp">Nama Member</label>
                              <input type="text" autocomplete="off" name="nama_member" class="form-control" id="nama_member" aria-describedby="nama_member" placeholder="Nama Member">

                              @error('nama_member')
                              <div class="alert alert-danger mt-2">
                                  {{ $message }}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">Email</label>
                                <input type="email" autocomplete="off" name="email" class="form-control" id="email" placeholder="Email">

                                @error('email')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                @error('password')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" class="form-control"></textarea>
                            @error('alamat')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="form-group">
                                <label for="nama">Nomor HP</label>
                                <input type="number" autocomplete="off" name="nomor_hp" class="form-control" id="nomor_hp" placeholder="Nomor HP">

                                @error('no_hp')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                              <br/>
                              <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                              </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



<div>

</div>