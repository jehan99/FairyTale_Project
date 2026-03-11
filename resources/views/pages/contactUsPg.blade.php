@extends('layouts.app')

@section('title','ContactUs_page')

@section('content')

<div class="contact-img-background " >

<div class="container" >
  <div class=" d-flex flex-column justify-content-center align-items-center " style="min-height: 70vh;">
 
  <div class="col-8 text-center ">
  <h1 class="animate">CONTACT US</h1>
<p class="animate mt-3 fs-5">"“If you feel ready to share your story, we’re here to listen. Please don’t hesitate to reach out.”</p>

  </div>
  </div>
</div>

</div>



<div class="contact-sec-2 container mt-5 ">
  <div class="row align-items-center">

    <!-- Google Map -->
    <div class="col-12 col-md-6 mb-4 mb-md-0">
      <div class="ratio ratio-4x3">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.5202410349084!2d79.92716277476042!3d6.828048119549848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25100638a933f%3A0x83d42a85911b11d4!2sFairytale%20Photography!5e0!3m2!1sen!2slk!4v1771442609073!5m2!1sen!2slk"
          style="border:0;"
          allowfullscreen
          loading="lazy">
        </iframe>
      </div>
    </div>

    <!-- Contact Info -->
    <div class="col-12 col-md-6">
      <p>
        We don’t photograph every wedding we’re invited to capture. It’s important to us that we work with couples who truly connect with our brand and share our values.
        <br><br>
        We’d love to learn more about you and your story. Reach out to us, and we’ll be in touch as soon as humanly possible.
      </p>

      <div class="row mt-4">

        <!-- Left Column -->
        <div class="col-12 col-sm-6 mb-4">
          <div class="d-flex align-items-center mb-2">
            <i class="fa-solid fa-phone fs-4 me-3"></i>
            <h5 class="mb-0">Contact Us</h5>
          </div>
          <p class="ms-5 mb-1">+94 774697735</p>

          <div class="d-flex align-items-center mt-4 mb-2">
            <i class="fa-solid fa-location-dot fs-4 me-3"></i>
            <h5 class="mb-0">Location</h5>
          </div>
          <p class="ms-5">
            533/1/D, Sethsiri Mawatha, Arawwala - Bokundara Rd, Pannipitiya
          </p>
        </div>

        <!-- Right Column -->
        <div class="col-12 col-sm-6">
          <div class="d-flex align-items-center mb-2">
            <i class="fa-solid fa-envelope fs-4 me-3"></i>
            <h5 class="mb-0">Write Us</h5>
          </div>
          <p style="margin-left: 48px;">
          <a href="https://mail.google.com/mail/?view=cm&fs=1&to=weddingsbyfairytale@gmail.com" 
          target="_blank">weddingsbyfairytale@gmail.com 
        </a> 
        </p>

          <div class="d-flex align-items-center mt-4 mb-2">
            <i class="fa-regular fa-clock fs-4 me-3"></i>
            <h5 class="mb-0">Working Hours</h5>
          </div>
          <p class="ms-5">Mon - Sat 9AM to 6PM</p>
        </div>

      </div>
    </div>

  </div>
</div>



@endsection