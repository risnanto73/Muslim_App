@extends('template')
@section('content')
<div class="col-12">
    <div class="card recent-sales overflow-auto">

     
      
      <div class="card-body">
        
         <div class="d-flex justify-content-end" style="margin-block-start: -0.5%"  ><a class="btn btn-primary" href="{{route('toFormEmas')}}" > <i class="bi bi-plus"></i></a></div>
        <h5 class="card-title ">API Emas <span> | Zona Umum</span></h5>

        <table class="table table-borderless datatable">
          <thead>
            <tr>

              <th scope="col">id</th>
              <th scope="col">Harga Emas</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Action</th>
              
            </tr>
          </thead>
          <tbody>

            @foreach ($emas as $d)
            <tr>
                <th scope="row"><a href="#">{{$d->id}}</a></th>
                <td>Rp. {{number_format($d->hargaemas)}}</td>
                <td>{{$d->created_at}}</td>

              </tr>
            @endforeach


          </tbody>
        </table>

      </div>

    </div>
  </div><!-- End Recent Sales -->
@endsection
