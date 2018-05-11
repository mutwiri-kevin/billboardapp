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
          <div class="col-md-3">
            <h2>Property Management</h2>
            <p> We offer Administration and management of both residential and commercial properties.
              We provide reliable management services, ensuring rents are collected and released in time as per agreement with the landlords accompanied by proper accounting and budgeting for each of the properties.
              We also advice landlords on all other matters relating to properties like taxation, legal matters that might arise, latest trends in property management, security amongst others, ensuring that landlords have peace of mind on their property investment
            </p>
            <p><a class="btn btn-secondary" href="/" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-3">
            <h2>Property Sales/Purchases</h2>
            <p>
               We have an experienced team ready to help you acquire or sell your properties.
               We work with you to provide detailed assessments and comparable analysis depending on market trends to determine the best deal for your sales or purchase needs 
            </p>
            <p><a class="btn btn-secondary" href="/" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-3">
            <h2>Graphic Design</h2>
            <p> At Billboard Property Management, you will find the best visual concepts that inspire, inform, and transform.
               We strive to always bring you the best as far as graphic design is concerned. Feel free to engage and help us help you choose the best solution for your needs.
            </p>
            <p><a class="btn btn-secondary" href="/" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-3">
            <h2>Architectural Drawings</h2>
            <p> For the best in technical drawings of buildings, we are your trusted partner.
               We have a variety of masterpieces to whet your appetite as you look for your dream architectural drawing.
            </p>
            <p><a class="btn btn-secondary" href="/" role="button">View details &raquo;</a></p>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->

    </main>

    <footer class="container">
      <p>&copy; Billboard Property Management 2018</p>
    </footer>
@endsection