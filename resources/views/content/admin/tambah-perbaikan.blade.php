@extends('layouts.user_type.auth')

@section('content')

<form>
    <div class="form-group">
        <label for="example-text-input" class="form-control-label">ID</label>
        <input class="form-control" type="text" value="" id="example-text-input">
    </div>
    <div class="form-group">
        <label for="example-search-input" class="form-control-label">Nama Barang</label>
        <input class="form-control" type="search" value="" id="example-search-input">
    </div>
    <div class="form-group">
        <label for="example-email-input" class="form-control-label">Nama Pelanggan</label>
        <input class="form-control" type="text" value="" id="example-email-input">
    </div>
    <div class="form-group">
        <label for="example-url-input" class="form-control-label">Kerusakan</label>
        <input class="form-control" type="url" value="" id="example-url-input">
    </div>
    <div class="form-group">
        <label for="example-tel-input" class="form-control-label">Kategori</label>
        <input class="form-control" type="text" value="" id="example-tel-input">
    </div>
    <div class="form-group">
        <label for="example-datetime-local-input" class="form-control-label">Tanggal Masuk</label>
        <input class="form-control" type="datetime-local" value="2018-11-23T10:30:00" id="example-datetime-local-input">
    </div>
    <div class="form-group">
        <label for="example-datetime-local-input" class="form-control-label">Estimasi Selesai</label>
        <input class="form-control" type="datetime-local" value="2018-11-23T10:30:00" id="example-datetime-local-input">
    </div>
    <div class="form-group">
        <div class="input-group">
          <span class="input-group-text">Solusi</span>
          <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>
        <div class="form-group">
        <div class="input-group mb-3">
            <span class="input-group-text">Harga</span>
            <span class="input-group-text">Rp.</span>
            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
          </div>
        </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Status</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Nama Teknisi</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Catatan Teknisi</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <a href="{{url('perbaikan')}}" class="btn btn-primary mb-0" type="submit">Tambah </a>

</form>

@endsection