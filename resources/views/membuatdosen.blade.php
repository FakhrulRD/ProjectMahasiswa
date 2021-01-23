@extends('AdminLayouts/index')
@section('ini content') 
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Create Data Dosen</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="POST" action="/gudang">
      @csrf
      <class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">NIP</label>
          <input type="text" class="form-control" id="nip" name="nip">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Nama Dosen</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Alamat Dosen</label>
          <input type="text" class="form-control" id="alamat" name="alamat">
        </div>
        
      <div class="form-grup">
          <label>Pilih Mata Kuliah</label>
          <select class="custom-select" matkul_id = "matkul_id" name = "matkul_id">
            <option value="0">Tidak Memilih</option>
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