@extends('template')
@section('content')
<div class="col-12">
    <div class="card recent-sales overflow-auto">

     
      
      <div class="card-body">
        
         <div class="d-flex justify-content-end" style="margin-block-start: -0.5%"  ><a class="btn btn-primary" href="{{route('toFormBerita')}}" > <i class="bi bi-plus"></i></a></div>
        <h5 class="card-title ">Berita Umum<span> | Zona Umum</span></h5>

        <table class="table table-borderless datatable">
          <thead>
            <tr>

              <th scope="col">id</th>
              <th scope="col">Judul</th>
              <th scope="col">Isi Berita </th>
              <th scope="col">Tanggal</th>
              <th scope="col">Action</th>
              
            </tr>
          </thead>
          <tbody>

            @foreach ($berita as $d)
            <tr>
                <th scope="row"><a href="#">{{$d->id}}</a></th>
                <td>{{$d->judul}}</td>
                <td>{{$d->isi}}</td>
                <td>{{$d->created_at}}</td>
                {{-- <td>{{$d->user_id}}</td> --}}

              </tr>
            @endforeach


          </tbody>
        </table>

      </div>

    </div>
  </div><!-- End Recent Sales -->
@endsection
