@extends('layouts.app')

@section('content')
 <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron text-center">
            <h1> {{$title}} </h1>
    </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
            <h2>Brief Introduction</h2>
            <p> Billboard Property Management is a property management and sales company focused on delivering high quality and customized property sales and property management services to individuals in the private and public sectors in Kenya.  </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Core Values and Mission</h2>
            <p> To have and set the highest standards of performance in management and sale of residential and commercial properties for the success of our clients while ensuring all of our residents have the best quality, most comforting and affordable living experiences possible. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Vision</h2>
            <p> To continue to be the property management and sales company of choice, through the provision of unparalleled property management, property sales and care services to our clients, properties, and to our team members and setting the standard in the property management industry in Kenya. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->

    </main>

    <footer class="container">
      <p>&copy; Billboard Property Management 2018</p>
    </footer>
@endsection