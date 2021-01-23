@extends('AdminLayouts/index')
@section('ini content') 
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">ubah Data Dosen</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="POST" action="/Dosen/update/{{$Dosen->slug}}">
        @method('patch')
        @csrf
      <class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">NIP</label>
          <input type="text" class="form-control" id="nip" name="nip" value="{{$Dosen->nip}}">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Nama Dosen</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$Dosen->nama}}">
          </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Alamat Dosen</label>
          <input type="text" class="form-control" id="alamat" name="alamat" value="{{$Dosen->alamat}}">
        </div>
        
        <div class="form-group">
            <label>Pilih Mata Kuliah</label>
            <select class="custom-select" matkul_id = "matkul_id" name = "matkul_id">
                <option value="0" {{$Dosen->matkul_id == "0" ? 'selected' : ''}}>Tidak Memilih</option>
                <option value="1" {{$Dosen->matkul_id == "0" ? 'selected' : ''}}>ALJABAR LINIER</option>
                <option value="2" {{$Dosen->matkul_id == "0" ? 'selected' : ''}}>MANAJEMEN PROYEK PERANGKAT LUNAK</option>
                <option value="3" {{$Dosen->matkul_id == "0" ? 'selected' : ''}}>PEMROGRAMAN WEB</option>
                <option value="4" {{$Dosen->matkul_id == "0" ? 'selected' : ''}}>TEORI BAHASA OTOMATA</option>
                <option value="5" {{$Dosen->matkul_id == "0" ? 'selected' : ''}}>PENGEMBANGAN APLIKASI BERBASIS PLATFORM</option>

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