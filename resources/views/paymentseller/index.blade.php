@extends('dashboardseller.master')
@section('nav')
      @include('dashboardseller.nav')
@endsection
@section('page', 'Pembayaran')
@section('main')
      @include('dashboardseller.main')

 <!-- Table -->
 <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Pembayaran</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No. Order</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No. Sewa</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal Bayar</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Metode Bayar</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jumlah</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                      <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">E</th>
                      <th class="text-secondary opacity-7"></th> -->
                    </tr>
                  </thead>
                  <tbody>
                         @foreach ($paymentseller as $idx => $data)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                                {{ $idx + 1 . '. ' }}
                                        </div>
                                    </td>
                                    <td>
                                      {{ $data->order_sellers_id }}
                                    </td>
                                    <td>
                                        {{ $data->sewa_sellers_id}}
                                    </td>
                                    <td>
                                        {{ $data->payment_date}}
                                    </td>
                                    <td>
                                        {{ $data->payment_method}}
                                    </td>
                                    <td>
                                        {{ $data->amount}}
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group me-2">
                                            <a href="{{ route('paymentseller.edit', $data) }}"  class="btn btn-warning btn-sm">Ubah</a>
                                    <form action="{{ route('paymentseller.destroy', $data->id) }}" method="POST" onsubmit="return confirm('Apakah kamu yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                        </tbody>
                    </table>
              </div>
            </div>
          </div>
        </div>
      </div>  

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
    <input type="hidden" id="sts" class="form-control" value="@isset($status){{$status}}@endisset" />
    <input type="hidden" id="psn" class="form-control" value="@isset($status){{$pesan}}@endisset" />
    <script>
      const body = document.getElementById('master')
      const sts = document.getElementById("sts")
      const psn = document.getElementById("psn")
      function pesan_simpan(){
        if(sts.value === "simpan")
        swal("Good Job!", psn.value, "success")
      }
    {
      body.onload = function(){
        pesan_simpan()
      }
    }
    </script>
    @endsection