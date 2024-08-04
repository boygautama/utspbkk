@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Menambah {{ __('Layanan') }}</div>

                    <div class="card-body">
<form action="{{ route('layanan.store') }}" method="POST"  >
                          @csrf
                            <div class="form-group">
                                <label for="nama">Nama Layanan</label>
                                <input type="text" autocomplete="off" name="namalayanan" class="form-control" id="namalayanan" placeholder="Nama Layanan">
                                @error('namalayanan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                              <label for="nohp">Durasi</label>
                              <input type="text" autocomplete="off" name="durasi" class="form-control" id="nama_member" aria-describedby="durasi" placeholder="Lama Pengerjaan">

                              @error('durasi')
                              <div class="alert alert-danger mt-2">
                                  {{ $message }}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">HArga</label>
                                <input type="text" autocomplete="off" name="harga" class="form-control" id="harga" placeholder="Harga">

                                @error('harga')
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
