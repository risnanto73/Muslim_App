@extends('template')

@section('content')


    <div class="pagetitle">
      <h1>Form Elements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Berita</h5>

              <!-- General Form Elements -->
              <form action="{{route('storeBerita')}}" method="POST">
                @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Judul </label>
                  <div class="col-sm-10">
                    <input type="text" name="judul" value="" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Isi Berita</label>
                  <div class="col-sm-10">
                    <textarea type="text" name="isi" value="" class="form-control"></textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  
                  <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>


      </div>
    </section>
\


@endsection
