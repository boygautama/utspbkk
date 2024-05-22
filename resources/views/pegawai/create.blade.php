@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Pegawai') }}</div>

                    <div class="card-body">
<form action="{{ route('pegawai.store') }}" method="POST"  >
                          @csrf
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Pegawai">

                                @error('nama')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                              </div>
                            <div class="form-group">
                              <label for="nohp">Nomor HP</label>
                              <input type="text" name="nohp" class="form-control" id="nohp" aria-describedby="nohp" placeholder="Nomor HP">

                              @error('nohp')
                              <div class="alert alert-danger mt-2">
                                  {{ $message }}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="nohp">Email address</label>
                              <input type="email" name="email" class="form-control" id="email" aria-describedby="email" placeholder="Email">

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
                                <label for="jabatan">Level</label>
                                <select class="form-control" name="jabatan" id="jabatan">
                                  <option value="karyawan">Karyawan</option>
                                  <option value="supervisi">Sipervisi</option>
                                  <option value="administrator">Administrator</option>
                                 </select>
                                 @error('jabatan')
                                 <div class="alert alert-danger mt-2">
                                     {{ $message }}
                                 </div>
                                 @enderror
                              </div>
                               <div class="form-group">
                              <label for="alamat">Alamat</label>
                              <textarea name="alamat" class="form-control" ></textarea>
                              @error('alamat')
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
