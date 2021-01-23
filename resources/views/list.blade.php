@extends('AdminLayouts/index')
@section('ini content') 
<div class="container">

    <div class="row">

    </div>

        Tabel Mahasiswa
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <td class="bg-info">NPM</td>
                <td class="bg-warning">Nama</td>
                <td class="bg-danger">Kelas</td>
                <td class="bg-info">Organisasi</td>
                <td class="bg-warning">Alamat</td>       
                <td scope="col">Action</td>

              
              </tr>
            </thead>
            <tbody>
                @foreach ($Mahasiswa as $item)          
                <tr>
                  <th scope="row">{{$loop->iteration}}</th>
                  <td class="bg-info"> {{$item->npm}} </td>
                  <td class="bg-warning"> {{$item->name}} </td>
                  <td class="bg-danger"> {{$item->class}} </td>
                  <td class="bg-info"> {{$item->organization->name}} </td>
                  <td class="bg-warning"> {{$item->alamat}} </td>
                  
                  <td> <a href="/list/detaill/{{$item->slug}}" class="btn btn-success btn-sm">ubah</a></td> 
                  <td>
                    <form action="/list/delete/{{$item->slug}}" method="POST">
                      @method('delete')
                      @csrf
                      <button type="submit" class="btn btn-danger btn-sm">hapus</button>
                      <form>
                  <td>
                </tr>
                
                @endforeach
            </tbody>
          </table>
        </div>
      </div>

      <div class="row">
        {{$Mahasiswa->links('AdminLayouts.pagination')}}
      </div>

        <div class="row">
            <a href="/createmhs" class="btn btn-success btn-sm"> Tambahkan</a>
        </div>
        


@endsection