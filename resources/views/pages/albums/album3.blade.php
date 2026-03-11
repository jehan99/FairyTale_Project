@extends('layouts.app')

@section('title','Album3_page')

@section('content')


<div class="album3-background animate">
  
<div class="headdings">
<h4 class="animate">ISABELLA & HARALD </h4>
<h5 class="animate">PRESHOOT SHOOT</h5>
</div>


</div>


<div class="container my-5">
  <div class="row">

    <div class="col-6 col-md-4 col-sm-6 mb-4 animate">
      <img src="{{asset('img/album3/1.jpg')}}"
     class="img-fluid rounded shadow gallery-img"
     data-bs-toggle="modal" 
     data-bs-target="#imageModal">
    </div>

      <div class="col-6 col-md-4 col-sm-6 mb-4 animate">
      <img src="{{asset('img/album3/2.jpg')}}" 
      class="img-fluid rounded shadow gallery-img"
     data-bs-toggle="modal" 
     data-bs-target="#imageModal">
    </div>

      <div class="col-6 col-md-4 col-sm-6 mb-4 animate">
      <img src="{{asset('img/album3/3.jpg')}}" 
    class="img-fluid rounded shadow gallery-img"
     data-bs-toggle="modal" 
     data-bs-target="#imageModal">
    </div>


      <div class="col-6 col-md-4 col-sm-6 mb-4 animate">
      <img src="{{asset('img/album3/4.jpg')}}"
      class="img-fluid rounded shadow gallery-img"
     data-bs-toggle="modal" 
     data-bs-target="#imageModal">
    </div>

    <div class="col-6 col-md-4 col-sm-6 mb-4 animate">
      <img src="{{asset('img/album3/5.jpg')}}" 
      class="img-fluid rounded shadow gallery-img"
     data-bs-toggle="modal" 
     data-bs-target="#imageModal">
    </div>



      <div class="col-6 col-md-4 col-sm-6 mb-4 animate">
      <img src="{{asset('img/album3/6.jpg')}}" 
      class="img-fluid rounded shadow gallery-img"
     data-bs-toggle="modal" 
     data-bs-target="#imageModal">
    </div>

      <div class="col-6 col-md-4 col-sm-6 mb-4 animate">
      <img src="{{asset('img/album3/7.jpg')}}" 
      class="img-fluid rounded shadow gallery-img"
     data-bs-toggle="modal" 
     data-bs-target="#imageModal">
    </div>




      <div class="col-6 col-md-4 col-sm-6 mb-4 animate">
      <img src="{{asset('img/album3/8.jpg')}}" 
      class="img-fluid rounded shadow gallery-img"
     data-bs-toggle="modal" 
     data-bs-target="#imageModal">
    </div>

      <div class="col-6 col-md-4 col-sm-6 mb-4 animate">
      <img src="{{asset('img/album3/9.jpg')}}"
    class="img-fluid rounded shadow gallery-img"
     data-bs-toggle="modal" 
     data-bs-target="#imageModal">
    </div>

  </div>
</div>


<!-- Image Popup Modal -->
<div class="modal fade" id="imageModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-transparent border-0">
      <div class="modal-body text-center">
        <img id="modalImage" src="" class="img-fluid rounded w-75">
      </div>
    </div>
  </div>
</div>



<script>
document.addEventListener("DOMContentLoaded", function () {
    const images = document.querySelectorAll(".gallery-img");
    const modalImage = document.getElementById("modalImage");

    images.forEach(img => {
        img.addEventListener("click", function () {
            modalImage.src = this.src;
        });
    });
});
</script>
@endsection