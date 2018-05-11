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
            <h2>Feel free to call us</h2>
             <p> <span class="phone"><strong>0721492762</strong></span></p>
              <p><span class="awe-time"></span> Location: 1st floor Ruaka business centre. Opening hours&gt;&gt; Monday - Friday(9AM - 5PM) &gt;&gt;Saturdays (8:30am to 1:00pm)</p>
          </div>
          <div class="col-md-4">
            <h2>Want to Meet & Talk Directly?</h2>
            <address>
                <p><span class="awe-home"></span>Email us: info@billboardproperties.co.ke</p>
                <p><span class="awe-time"></span> Location: 1st floor Ruaka business centre. Opening hours&gt;&gt; Monday - Friday(9AM - 5PM) &gt;&gt;Saturdays (8:30am to 1:00pm)</p>
              </address>
          </div>
          <div class="col-md-4">
            <h2>Get us on Social Media</h2>
          <p><a href="https://www.facebook.com/Billboard-Properties-LTD-1072992249505252/"><img style="height:25%;width:25%;" src="{{asset('/storage/facebook.png')}}"></a></p>
          <p><a href="https://twitter.com/mbuguandungu11"><img style="height:25%;width:25%;" src="{{asset('/storage/twitter.png')}}"></a></p>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->

    </main>

    <footer class="container">
      <p>&copy; Billboard Property Management 2018</p>
    </footer>
@endsection