@extends('layout.app')

@section('title')
Barang
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Tambah Barang</h5>

            <div class="card body">
                <form action="{{route('barang.store')}}" method="POST">
                    @csrf


                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="nama">Nama Barang</label>
                                <input type="text" name="nama" id="nama" value="{{old('nama') }}"
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
                                <input type="text" name="harga" id="nama" value="{{old('nama') }}"
                                    class="form-control @error ('harga') is-invalid @enderror">
                                @error('harga')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                                @enderror

                            </div>
                        </div>
                    </div>


                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="stock">stok</label>
                                <input type="number" name="stok" id="nama" value="{{old('nama') }}"
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
                                        @foreach ($suplier as $s)
                                        <option value="{{$s->id}}">{{$s->nama}}</option>
                                        @endforeach
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

        <div class="modal-footer">
            <button class="submit" class="btn btn-success"><i class="fa fa-save"></i>simpan</button>


            </form>
        </div>
    </div>
</div>
</div>
@endsection
