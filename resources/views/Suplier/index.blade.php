@extends('layout.app')

@section('title')
Suplier
@endsection

@section('content')
    <div class="card mt-3">
        <div class="card-header">
<div class="card-title">
    <h5>Data Suplayer</h5>

    <button typo="button" class="btn btn-success btn-sm float-end"  data-bs-toggle="modal" data-bs-target=#modalTambah><i class="fa fa-plus"></i></button>
    </div>
</div>
<div class="card-body">
<table class ="table table-striped ">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
           <th>telepon</th>
           <th>alamat</th>
    <th>aksi</th>
</tr>
</thead>
 @foreach($suplier as $item)
 <tbody>
    <tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$item->nama}}</td>
    <td>{{$item->telepon}}</td>
    <td>{{$item->alamat}}</td>
 
        <td>
            <a href="/suplier/edit/{{$item->id}}" class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i></a>
            <a href="/suplier/hapus/{{$item->id}}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-arrow-up"></i>
</a>
            </td>
    </tr>
    @endforeach
 </tbody>
</tbody>
</table>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{route('suplier.store')}}" method="POST">
          @csrf

          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id ="nama" 
            class="form-control @error('nama') is-invalid @enderror">
          </div>

          <div class="form-group">
            <label for="nama">telepon</label>
            <input type="text" name="telepon" id ="telepon" 
            class="form-control @error('telepon') is-invalid @enderror">
          </div>

          <div class="form-group">
            <label for="alamat">alamat</label>
            <input type="text" name="alamat" id ="alamat" 
            class="form-control @error('alamat') is-invalid @enderror">
          </div>
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success">Simpan</button>
      </div>
</form>
    </div>
  </div>
</div>
@endsection
