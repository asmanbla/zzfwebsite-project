@extends('dashboardseller.master')
@section('nav')
      @include('dashboardseller.nav')
@endsection
@section('page', 'Order Seller/ Edit')
@section('main')
      @include('dashboardseller.main')

 <!-- Table -->
 <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Form Order Seller</h6>
              <hr class="">
            </div>
            <div class="card-body px-0 pt-0 pb-2">

            <!-- FORM -->
              <div class="table-responsive p-0">
                <div class="card border-1 m-3 pt-3">
                <form action="{{route('orderseller.update', $orderseller)}}" method="POST" id="frmorderseller">
                @method('PUT')
                @csrf
                <div class="mb-3 ms-3 me-3">
                           
                <div class="mb-3 ms-3 me-3">
                        <label for="customers_id" class="form-label">Customers Id</label>
                        <select name="customers_id" id="customers_id" class="form-control" required>
    @foreach($customers as $pc)
        <option value="{{ $pc->id }}" {{ old('customers_id', $orderseller->customers_id) == $pc->id ? 'selected' : '' }}>{{ $pc->name }}</option>
    @endforeach
</select>
                     </div>
                <div class="mb-3 ms-3 me-3">
                        <label for="order_date" class="form-label">Order Date</label>
                        <input type="text" id="order_date" name="order_date" class="form-control" placeholder="Enter Your order_date" aria-label="order_date" required value="{{$orderseller->order_date ?? old('order_date')}}">
                     </div>
                     <div class="mb-3 ms-3 me-3">
                        <label for="total_amount" class="form-label">Amount</label>
                        <input type="text" id="total_amount" name="total_amount" class="form-control" placeholder="Enter Your total_amount" aria-label="total_amount" required value="{{$orderseller->total_amount ?? old('total_amount')}}">
                     </div>
                     <div class="mb-3 ms-3 me-3">
                      <label for="level" class="form-label">Status</label>
                      <select class="form-select" aria-label="Default select example" id="roles" name="status" required>
                        <option selected disabled>Pilih status</option>
                        <option value="waiting for payment" {{ old('status', $orderseller->status) == 'waiting for payment' ? 'selected' : '' }}>waiting for payment</option>
                        <option value="processed" {{ old('status', $orderseller->status) == 'processed' ? 'selected' : '' }}>processed</option>
                        <option value="completed" {{ old('status', $orderseller->status) == 'completed' ? 'selected' : '' }}>completed</option>
                      </select>
                     </div>
                     <label for="sellers_id" class="form-label"></label>
                            <input type="text" class="form-control" id="sellers_id" name="sellers_id" value="{{ Auth::user()->id }}" hidden>
                <div class="row ms-3 me-3 justify-content-end">
                <div class="col-3">
                    <a href="{{ route('orderseller.index') }}" class="btn bg-gradient-secondary w-100">Cancel</a>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn bg-gradient-danger w-100" id="save">Save</button>
                </div>
             </div>
          </div>
          </div> 

        <!-- END FORM -->

      <!-- End Table -->
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <script>
      const btnSimpan = document.getElementById("save")
      const nama = document.getElementById("nama")
      const pswd = document.getElementById("password")
      const lvl = document.getElementById("level")
      const form = document.getElementById("frmorderseller")
      let pesan = ""
      function simpan(){
        if(nama.value === ""){
          nama.focus()
            swal("Incomplete data", "Nama must be filled!", "error")
        }else if(pswd.value === ""){
          pswd.focus()
        swal("Incomplete data", "Password must be filled!", "error")
        }else if(lvl.value === ""){
          lvl.focus()
          swal("Incomplete data", "Level must be filled!", "error")
        }else{
          form.submit()
        }
          
      }
      btnSimpan.onclick = function(){
        simpan()
      }
    </script>
    @endsection
