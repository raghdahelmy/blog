@extends('Theme.master')
@section('title','Register')
@section('content')
@include('Theme.partials.hero', ['title'=>'Register','pageType'=>'Register page'])


  <!-- ================ contact section start ================= -->
  <section class="section-margin--small section-margin">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <form action="#/" class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <input class="form-control border" name="name" id="name" type="text" placeholder="Enter your name">
                </div>
                <div class="form-group">
                  <input class="form-control border" name="email" id="email" type="email" placeholder="Enter email address">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <input class="form-control border" name="password" id="name" type="password" placeholder="Enter your password">
                </div>
                <div class="form-group">
                  <input class="form-control border" name="password_confirmation" type="password" placeholder="Enter your password confirmation">
                </div>
              </div>
            </div>
            <div class="form-group text-center text-md-right mt-3">
              <button type="submit" class="button button--active button-contactForm">Register</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
	<!-- ================ contact section end ================= -->

    @endsection






</body>
</html>
