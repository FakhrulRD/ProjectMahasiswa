@extends('AdminLayouts/index')
@section('ini content') 
<div class="container">

  <div class="row">

  </div>
          Tabel Dosen
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <td class="bg-success">NIP</td>
                  <td class="bg-danger">Nama</td>
                  <td class="bg-success">Matkul</td>
                  <td class="bg-info">Alamat</td>
                  <td scope="col">Action</td>

                </tr>
              </thead>
              <tbody>
                  @foreach ($Dosen as $item)
                      
                  <tr>
                      <th scope="row">{{$loop->iteration}}</th>
                      <td class="bg-success"> {{$item->nip}} </td>
                      <td class="bg-danger"> {{$item->nama}}</td>
                      <td class="bg-success"> {{$item->matkul->name}}</td>
                      <td class="bg-info"> {{$item->alamat}}</td>

                      <td> <a href="/Dosen/rincian/{{$item->slug}}" class="btn btn-success btn-sm">ubah</a></td>
                      <td 
                        <form action="/Dosen/deletee/{{$item->slug}}" method="POST">
                          @method('delete')
                          @csrf
                          <button type="submit" class="btn btn-danger btn-sm">hapus</button>
                          <form>


                  <td>        
                  </tr>
                  
                  @endforeach
              </tbody>
            </table>

            <div class="row">
              {{$Dosen->links('AdminLayouts.pagination')}}
            </div>

            <div class="row">
              <a href="/membuatdosen" class="btn btn-success btn-sm"> Tambahkan</a>
            </div>
  </div>
@endsection