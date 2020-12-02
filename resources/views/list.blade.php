@extends('AdminLayouts/index')
@section('ini content') 
Tabel Mahasiswa
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <td class="bg-info">npm</td>
        <td class="bg-warning">name</td>
        <td class="bg-danger">class</td>
        <th scope="col">organization</th>
        <td class="bg-success">alamat</td>
      </tr>
    </thead>
    <tbody>
        @foreach ($Mahasiswa as $item)          
        <tr>
          <th scope="row">{{$loop->iteration}}</th>
          <td class="bg-info"> {{$item->npm}} </td>
          <td class="bg-warning"> {{$item->name}} </td>
          <td class="bg-danger">{{$item->class}} </td>
          <td>{{$item->organization}}</td>
          <td class="bg-success"> {{$item->alamat}}</td>
        </tr>
        
        @endforeach
    </tbody>
  </table>
@endsection