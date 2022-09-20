@extends('layout.app')

@section('title')
Barang
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Edit Barang</h5>

            <div class="card body">
                <form action="{{route('barang.update', $b->id) }}" method="POST">
                    @csrf
                    @method('PUT')


                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="nama">Nama Barang</label>
                                <input type="text" name="nama" id="nama" value="{{$b->nama}}"
                                    class="form-control @error ('nama') is-invalid @enderror">
                                @error('nama')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="text" name="harga" id="nama" value="{{$b ->harga}}"
                                    class="form-control @error ('harga') is-invalid @enderror">
                                @error('harga')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                                @enderror

                            </div>
                        </div>
                    </div>

<div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="stok">Stok</label>
                                <input type="number" name="stok" id="nama" value="{{$b->stok }}"
                                    class="form-control @error ('stok') is-invalid @enderror">
                                @error('stok')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="suplier" class="form-label">suplier_id</label>
                                    <select name="suplier_id" id="suplier_id" id="nama" value="{{old('nama') }}"
                                        class="form-control @error ('suplier_id') is-invalid @enderror">
                                        <option value="{{$b->suplier_id}}" selected>{{! empty($item->suplier->nama)? $item->suplier->nama: ''}}
                                    </option>
                                        @foreach ($suplier as $s)
                                        <option value="{{$s->id}}">{{$s->nama}}</option>
                                        @endforeach
                                        </select>
                                        @error('suplier_id')
                                        <div class="text-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </select>
                                </div>
                            </div>
                        </div>


                    <div class="col-lg-12">
                    <div class="form-group">
                        <label for="kategori" class="form-label">kategori_id</label>
                        <select name="kategori_id" id="kategori_id" id="nama" value="{{old('nama') }}"
                            class="form-control @error ('kategori_id') is-invalid @enderror">
                            <option value="{{$b->kategori_id}}" selected>{{! empty($item->kategori->nama)? $item->kategori->nama: ''}}</option>
                            @foreach ($kategori as $item)
                            <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach
                            @error('kategori_id')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </select>
                    </div>
            </div>
        </div>

        <div class="modal-footer mt-3">
            <button class="submit" class="btn btn-warning"><i class="fa fa-save"></i>updete</button>


            </form>
        </div>
    </div>
</div>
</div>
@endsection
