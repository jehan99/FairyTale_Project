@extends('layouts.app')

@section('title','Home_Page')

@section('content')



<!-- Image Section -->
<div id="carouselExampleCaptions" class="carousel slide carousel-fade animate " data-bs-ride="carousel" style="margin-top: -90px;">
<div class="carousel-indicators">
  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
</div>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('img/Photo1.jpg')}}" class="d-block w-100 image1" alt="photo1" style="height:900px; object-fit: cover;">
      <div class="carousel-caption text-center w-75">
        <h5>FAIRYTALE PHOTOGRAPY PRODUCTION</h5>
        <p>“We Capture Moments of Happiness”</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/Photo2.jpg')}}" class="d-block w-100 image2" alt="..." style="height:900px; object-fit: cover;">
      <div class="carousel-caption text-center w-75">
      <h5>FAIRYTALE PHOTOGRAPY PRODUCTION</h5>
      <p>We Capture Your Happiness</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/Photo3.jpg')}}" class="d-block w-100 image3" alt="..." style="height:900px; object-fit: cover;">
      <div class="carousel-caption text-center w-75">
      <h5>FAIRYTALE PHOTOGRAPY PRODUCTION</h5>
      <p>We Capture Your Happiness</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="{{asset('img/Photo4.jpg')}}" class="d-block w-100 image4" alt="..." style="height:900px; object-fit: cover;">
      <div class="carousel-caption text-center w-75">
      <h5>FAIRYTALE PHOTOGRAPY PRODUCTION</h5>
      <p>We Capture Your Happiness</p>
      </div>
    </div>
    
    <div class="carousel-item">
      <img src="{{asset('img/Photo5.jpg')}}" class="d-block w-100" alt="..." style="height:900px; object-fit: cover;">
      <div class="carousel-caption text-center w-75">
      <h5>FAIRYTALE PHOTOGRAPY PRODUCTION</h5>
      <p>We Capture Your Happiness</p>
      </div>
    </div>
    

    

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



<div class="cart-sec sec2">

<h1 style="text-align: center; margin-bottom:40px;"> Our Services</h1>

<div class="container">
  <div class="row justify-content-center animate">

    <div class="col-12 col-md-6 col-lg-3 mb-4">
      <div class="card shadow h-100">
        <img src="{{asset('img/bridal.png')}}" class="card-img-top img-fluid" alt="">
        <div class="card-body text-center">
          <h4>WEDDINGS</h4>
          <p class="card-text">
          Every love story is one-of-a-kind and deserves to be shared in its own special way.
          </p>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-3 mb-4">
      <div class="card shadow h-100">
        <img src="{{asset('img/wedding.png')}}" class="card-img-top img-fluid" alt="">
        <div class="card-body text-center">
          <h4>ENGAGEMENTS</h4>
          <p class="card-text">
          Your engagement marks a beautiful chapter in both of your lives.
          </p>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-3 mb-4">
      <div class="card shadow h-100">
        <img src="{{asset('/img/rose.png')}}" class="card-img-top img-fluid" alt="">
        <div class="card-body text-center">
          <h4>CASUAL SHOOTS</h4>
          <p class="card-text">
          Casual shoots are a perfect way to ease doubts and calm any fears.
          </p>
        </div>
      </div>
    </div>

  </div>
</div>

<div class="d-flex justify-content-center btn1">
   <a href="{{route('directServicesPg')}}"> <button class="btn btn-secondary">KNOW MORE</button> </a>
</div>


</div>


<!-- image cart section --->
<div class="sec3 py-5">
  <div class="container">
    <div class="row justify-content-center">
      
      <div class="col-12 col-md-8 col-lg-12 text-center">

        <h3 class="animate mb-5">FAIRYTALE PHOTOGRAPY</h3>

        <div class="i-sec mb-5 col-12 col-lg-5 animate">
          <i >
            "Capturing moments where reality meets magic, and every frame tells a story worth dreaming about."
          </i>
        </div>

        <p class="animate col-lg-12 mt-5" style="text-align: center;">
        At Fairytale Photography, we’re excited to make your special day truly one-of-a-kind. We promise a stress-free, relaxed,
         and fun experience with an amazing team by your side.
        </p>

      </div>

    </div>
  </div>
</div>




<!-- Section 4-->
<div class="sec4" >

<h3 style="margin-bottom: 30px;">FUEATURED ALBUMS</h3>
<p>We want to capture the way your relationship feels, the way your hands touch and faces meet. We want to capture the tears, the laugh from your gut moments, 
  and all stuff in between.</p>



<div id="carouselExampleAutoplaying" class="carousel slide carousel-sec" data-bs-ride="carousel">
<div class="d-flex justify-content-center">

  <div class="carousel-inner w-75 cart-imgs">
    <div class="carousel-item active">
    
  <!-- Cart Images -->
  
  <div class="container">

  <div class="card-group w-100">

  <!-- Image 1 -->

  <div class="card me-3">
  <a href="{{route('directAlbum1Pg')}}">

    <img src="{{asset('img/album1/2.jpg')}}" class="card-img-top" alt="..."  width="auto"> 
    </a>
    <h5 class="mt-2">Vindya & Dhananjaya</h5>

  </div>

  <div class="card me-3">
  <a href="{{route('directAlbum2Pg')}}">
    <img src="{{asset('img/album2/1.jpg')}}" class="card-img-top" alt="...">
  </a>
  <h5 class="mt-2">Hiruni & Chandima</h5>

  </div>


  <div class="card">
  <a href="{{route('directAlbum3Pg')}}">
    <img src="{{asset('img/album3/5.jpg')}}" class="card-img-top" alt="..." >  
  </a>
  <h5 class="mt-2">Iabella & Harald</h5>

  </div>


 


  <!-- end of cart images-->
   

</div>
  </div>

    </div>


    <div class="carousel-item">
<!-- Cart Images -->
  
<div class="card-group w-100">

  <div class="card me-3">
    <a href="{{route('directAlbum4Pg')}}">
      <img src="{{asset('img/album4/1.jpg')}}" class="card-img-top" alt="...">
    </a>
    <h5 class="mt-2">Hiruni & Isuru</h5>
  </div>

  <div class="card me-3">
    <a href="{{route('directAlbum5Pg')}}">
      <img src="{{asset('img/album5/1.jpg')}}" class="card-img-top" alt="...">
    </a>
    <h5 class="mt-2">Nadeera & Vishwanath</h5>
  </div>

  <div class="card">
    <a href="{{route('directAlbum6Pg')}}">
      <img src="{{asset('img/album6/2.jpg')}}" class="card-img-top" alt="...">
    </a>
    <h5 class="mt-2">Ashini & Thilan</h5>
  </div>

</div>

  <!-- end of cart images-->


  </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(1);"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(1);"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


</div>

</div>

<!-- SECTION 5 -->

<div class="sec5">

<h3>OUR AMAIZING WORK</h3>

<p>We aim to capture the true essence of your relationship—the way your hands intertwine, 
  the way your eyes meet. We want to preserve the tears, the laughter from the heart, and every precious moment in between.</p>



<div class="container mt-5">
<div class="card text-center">

  <!-- Tabs -->
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs" role="tablist">

      <li class="nav-item">
        <button class="nav-link active"
                data-bs-toggle="tab"
                data-bs-target="#album1"
                type="button">
          FINE ART
        </button>
      </li>

      <li class="nav-item">
        <button class="nav-link "
                data-bs-toggle="tab"
                data-bs-target="#album2"
                type="button">
          ARTISTIC
        </button>
      </li>

      <li class="nav-item">
        <button class="nav-link "
                data-bs-toggle="tab"
                data-bs-target="#album3"
                type="button">
         VINTAGE
        </button>
      </li>

    </ul>
  </div>

  <!-- Images Content -->
<!--Album1-->
<div class="card-body tab-content ">

  <!-- Album 1 -->
  <div class="tab-pane fade show active " id="album1">
    <div class="row">

      <div class="col-md-4 mb-3 ">
  <img src="img/finArt/1.jpg"
       class="img-fluid rounded"
       data-bs-toggle="modal"
       data-bs-target="#albumModal"
       data-album="album1">
</div>

  <div class="col-md-4 mb-3 ">
        <img src="img/finArt/2.jpg" 
        class="img-fluid rounded"
        data-bs-toggle="modal"
       data-bs-target="#albumModal"
       data-album="album1"
        >
      </div>

  <div class="col-md-4 mb-3 ">
        <img src="img/finArt/3.jpg" 
        class="img-fluid rounded"
        data-bs-toggle="modal"
       data-bs-target="#albumModal"
       data-album="album1"
        >
      </div>


  <div class="col-md-4 mb-3 ">
        <img src="img/finArt/4.jpg" 
        class="img-fluid rounded"
        data-bs-toggle="modal"
       data-bs-target="#albumModal"
       data-album="album1"
        >
      </div>


  <div class="col-md-4 mb-3 ">
        <img src="img/finArt/5.jpg" 
        class="img-fluid rounded"
        data-bs-toggle="modal"
       data-bs-target="#albumModal"
       data-album="album1"
        >
      </div>


  <div class="col-md-4 mb-3 ">
        <img src="img/finArt/6.jpg" 
        class="img-fluid rounded"
        data-bs-toggle="modal"
       data-bs-target="#albumModal"
       data-album="album1"
        >
      </div>


  <div class="col-md-4 mb-3 ">
        <img src="img/finArt/7.jpg" 
        class="img-fluid rounded"
        data-bs-toggle="modal"
       data-bs-target="#albumModal"
       data-album="album1"
        >
      </div>


  <div class="col-md-4 mb-3 ">
        <img src="img/finArt/8.jpg" 
        class="img-fluid rounded"
        data-bs-toggle="modal"
       data-bs-target="#albumModal"
       data-album="album1"
        >
      </div>


  <div class="col-md-4 mb-3 ">
        <img src="img/finArt/9.jpg" 
        class="img-fluid rounded"
        data-bs-toggle="modal"
       data-bs-target="#albumModal"
       data-album="album1"
        >
      </div>








    </div>
  </div>

  <!-- Album 2 -->
  <div class="tab-pane fade" id="album2">
    <div class="row">
      <div class="col-md-4 mb-3">
        <img src="img/artistic/1.jpg" class="img-fluid rounded"
        data-bs-toggle="modal"
       data-bs-target="#albumModal"
       data-album="album2">
      </div>
      <div class="col-md-4 mb-3">
        <img src="img/artistic/2.jpg" class="img-fluid rounded"
        data-bs-toggle="modal"
       data-bs-target="#albumModal"
       data-album="album2"
        >
      </div>
      <div class="col-md-4 mb-3">
        <img src="img/artistic/3.jpg" class="img-fluid rounded"
        data-bs-toggle="modal"
       data-bs-target="#albumModal"
       data-album="album2"
        >
      </div>

      <div class="col-md-4 mb-3">
        <img src="img/artistic/4.jpg" class="img-fluid rounded"
        data-bs-toggle="modal"
       data-bs-target="#albumModal"
       data-album="album2"
        >
      </div>

      <div class="col-md-4 mb-3">
        <img src="img/artistic/5.jpg" class="img-fluid rounded"
        data-bs-toggle="modal"
       data-bs-target="#albumModal"
       data-album="album2"
        >
      </div>

      <div class="col-md-4 mb-3">
        <img src="img/artistic/6.jpg" class="img-fluid rounded"
        data-bs-toggle="modal"
       data-bs-target="#albumModal"
       data-album="album2"
        >
      </div>

      <div class="col-md-4 mb-3">
        <img src="img/artistic/7.jpg" class="img-fluid rounded"
        data-bs-toggle="modal"
       data-bs-target="#albumModal"
       data-album="album2"
        >
      </div>

      <div class="col-md-4 mb-3">
        <img src="img/artistic/8.jpg" class="img-fluid rounded"
        data-bs-toggle="modal"
       data-bs-target="#albumModal"
       data-album="album2"
        >
      </div>

      <div class="col-md-4 mb-3">
        <img src="img/artistic/9.jpg" class="img-fluid rounded"
        data-bs-toggle="modal"
       data-bs-target="#albumModal"
       data-album="album2"
        >
      </div>

      <div class="col-md-4 mb-3">
        <img src="img/artistic/10.jpg" class="img-fluid rounded"
        data-bs-toggle="modal"
       data-bs-target="#albumModal"
       data-album="album2"
        >
      </div>

      

      
    </div>
  </div>

  <!-- Album 3 -->
  <div class="tab-pane fade" id="album3">
    <div class="row">
      <div class="col-md-4 mb-3">
        <img src="img/vintage/1.jpg" class="img-fluid rounded"
        data-bs-toggle="modal"
       data-bs-target="#albumModal"
       data-album="album3"
        >
      </div>
      <div class="col-md-4 mb-3">
        <img src="img/vintage/2.jpg" class="img-fluid rounded"
        data-bs-toggle="modal"
       data-bs-target="#albumModal"
       data-album="album3"
        >
      </div>
      <div class="col-md-4 mb-3">
        <img src="img/vintage/3.jpg" class="img-fluid rounded"
        data-bs-toggle="modal"
       data-bs-target="#albumModal"
       data-album="album3"
        >
      </div>

      <div class="col-md-4 mb-3">
        <img src="img/vintage/4.jpg" class="img-fluid rounded"
        data-bs-toggle="modal"
       data-bs-target="#albumModal"
       data-album="album3"
        >
      </div>

      <div class="col-md-4 mb-3">
        <img src="img/vintage/5.jpg" class="img-fluid rounded"
        data-bs-toggle="modal"
       data-bs-target="#albumModal"
       data-album="album3"
        >
      </div>

      <div class="col-md-4 mb-3">
        <img src="img/vintage/6.jpg" class="img-fluid rounded"
        data-bs-toggle="modal"
       data-bs-target="#albumModal"
       data-album="album3"
        >
      </div>

      <div class="col-md-4 mb-3">
        <img src="img/vintage/7.jpg" class="img-fluid rounded"
        data-bs-toggle="modal"
       data-bs-target="#albumModal"
       data-album="album3"
        >
      </div>

      <div class="col-md-4 mb-3">
        <img src="img/vintage/8.jpg" class="img-fluid rounded"
        data-bs-toggle="modal"
       data-bs-target="#albumModal"
       data-album="album3"
        >
      </div>

      <div class="col-md-4 mb-3">
        <img src="img/vintage/9.jpg" class="img-fluid rounded"
        data-bs-toggle="modal"
       data-bs-target="#albumModal"
       data-album="album3"
        >
      </div>









    </div>
  </div>

</div>
<!--end -->



<!-- Universal Album Modal -->
<div class="modal fade" id="albumModal" tabindex="-1">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content bg-dark">
      <div class="modal-body p-0">

        <div id="albumCarousel" class="carousel slide">
          <div class="carousel-inner"></div>

          <button class="carousel-control-prev"
                  type="button"
                  data-bs-target="#albumCarousel"
                  data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>

          <button class="carousel-control-next"
                  type="button"
                  data-bs-target="#albumCarousel"
                  data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>

        </div>

      </div>
    </div>
  </div>
</div>



</div>


<script>
document.addEventListener('DOMContentLoaded', function() {
  const albumModal = document.getElementById('albumModal');
  const carouselInner = document.querySelector('#albumCarousel .carousel-inner');

  // When an album image is clicked
  document.querySelectorAll('[data-bs-toggle="modal"][data-bs-target="#albumModal"]').forEach(img => {
    img.addEventListener('click', function() {
      const albumId = this.dataset.album; // e.g., "album1"
      const albumImages = document.querySelectorAll(`#${albumId} img`);
      
      // Clear previous carousel items
      carouselInner.innerHTML = '';

      // Populate carousel
      albumImages.forEach((image, index) => {
        const activeClass = (image.src === this.src) ? 'active' : '';
        const itemDiv = document.createElement('div');
        itemDiv.className = `carousel-item ${activeClass}`;
        
        const newImg = document.createElement('img');
        newImg.src = image.src;
        newImg.className = 'd-block w-100';
        itemDiv.appendChild(newImg);
        carouselInner.appendChild(itemDiv);
      });
    });
  });
});




</script>


@endsection