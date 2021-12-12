<!doctype html>
<html lang="en">
    @include('user.partials.head')
  <body>
    @include('user.partials.header')

<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">
    <div class="nav-scroller">
    </div><!-- /.container -->
    <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
      <div class="col-md-6 px-0">
        <h1 class="display-6 font-italic">Sistem Penunjang Keputusan</h1>
        <p class="lead my-3">Selamat datang di website sistem peunjang keputusan.</p>
        <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
      </div>
    </div>

    <div class="row">

      @foreach ($penyakit as $data)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <center><h5 class="card-title my-2">{{$data->name}}</h5></center>
            <img src="{{asset('img/' . $data->images)}}" class="bd-placeholder-img card-img-top" width="450" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
            <div class="card-body">
              <center><p class="card-text">Ciri-ciri penyakit.</p></center>
              <p class="card-text">{!! Str::limit($data->ciri_penyakit, 100) !!}.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="{{ url('detail/' . $data->id)}}" class="btn btn-sm btn-info">Detail</a>
                  {{-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> --}}
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
      @endforeach

      <nav aria-label="Page navigation example">
        {{ $penyakit->links('vendor\pagination\pagination') }}
      </nav>

    </div>
    
  </div>

  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2017-2020 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
  @include('user.partials.scripts')
</main>
</html>
