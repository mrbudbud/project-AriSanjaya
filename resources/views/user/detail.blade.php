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
        <img src="{{asset('img/' . $data->images)}}" class="img-fluid" alt="...">
      </div>
      <h1 class="display-4 font-italic">{{$data->name}}</h1>
      <br>
      <p class="font-weight-bold">Solusi Penyakit:</p>
        <p class="lead my-3">{!! $data->solusi_penyakit !!}.</p>
    </div>
    
  </div>

  <!-- FOOTER -->
  {{-- <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2017-2020 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer> --}}
  @include('user.partials.scripts')
</main>
</html>
