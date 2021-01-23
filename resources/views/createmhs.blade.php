@extends('AdminLayouts/index')
@section('ini content') 
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Create Data Mahasiswa</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="POST" action="/store">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">NPM Anda</label>
          <input type="text" class="form-control" id="npm" name="npm">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Nama Anda</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        
        <div class="form-group">
          <label for="exampleInputEmail1">Kelas Anda</label>
          <input type="text" class="form-control" id="class" name="class">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Alamat Anda</label>
          <input type="text" class="form-control" id="alamat" name="alamat">
        </div>
        
        <div class="form-group">
            <label>Pilih Organisasi</label>
            <select class="custom-select" organization_id = "organization_id" name = "organization_id">
                <option value="0">Tidak Berorganisasi</option>
                @foreach ($org as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>    
                @endforeach
            </select>
          </div>

      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Kirimkan</button>
      </div>
    </form>
  </div>
@endsection