@extends ('layout.app')

@section('title')
 home
 @endsection

 @section('content')
  <div class="row g-2 text -center">
    <div class="col-3">
      <div class="p-3 border bg-light mt-3">5 Barang<i
      class="fa fa-boxes"></i>
    </div>
</div>
    
    <div class="col-3">
      <div class="p-3 border bg-light mt-3">5 kategori<i
      class="fa fa-tag"></i>
    </div>
</div>

      <div class="col-3">
      <div class="p-3 border bg-light mt-3">5 Suplier<i
      class="fa fa-truck"></i>
    </div>
    </div>

    <div class="col-3">
      <div class="p-3 border bg-light mt-3">5 member<i class="fa-solid fa-user-large"></i>
    </div>
    </div>

    <div class="col-3">
      <div class="p-3 border bg-light mt-3">1 Pembelian<i class="fa-solid fa-basket-shopping"></i>
    </div>
    </div>

    <div class="col-3">
      <div class="p-3 border bg-light mt-3">1 penjualan<i class="fa-solid fa-shop"></i>
    </div>
    </div>

 @endsection