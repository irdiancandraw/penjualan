@extends('layout.app')

@section('title')
    suplier
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>EDIT Suplier</h5>
        </div>
    </div>

    <div class="card-body">
        <form action="{{ route('suplier.update', $s->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col lg-6">
                    <div class="form-group">
                        <label for="nama">Nama Suplier</label>
                        <input type="text" name="nama" value="{{$s->nama}}" class="form-control @error ('nama') is invalid @enderror">
                        @error('nama')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col lg-6">
                    <label for = "nama">Telepon</label>
                    <input type="text" name="telepon" value="{{$s->telepon}}" class="form-control @error ('telepon') is invalid @enderror">
                    @error('telepon')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                </div>

                <div class="row">
                    <div class="col lg-4">
                        <div class="form-group">
                            <label for="stock" class="form-label">Alamat</label>
                            <input type="text" name="alamat" value="{{$s->alamat}}" class="form-control @error ('nama') is invalid @enderror">
                            @error('alamat')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>                    
                </div>
            </div>

            <div class="modal-footer mt-3">
                <button class="btn btn-warning" type="submit"><i class="fa fa-save"></i>Update</button>
            </div>  
        </form>
    </div>
</div>




@endsection