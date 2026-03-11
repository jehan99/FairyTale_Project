@extends('layouts.app')

@section('title','AboutUs_page')

@section('content')

<div class="about-img-background"> 


<div class="container" >
  <div class=" d-flex flex-column justify-content-center align-items-end" style="min-height: 80vh;">
 
  <div class="col-12 col-md-6 text-center text-md-start el animate">
  <h1>ABOUT US</h1>
    <p class="fs-5">
    At Fairytale Photography, we are a family of passionate photographers, lucky enough to turn what we love into what we do every single day.
    </p>
  </div>
  </div>
</div>


</div>

<div class="about-sec-2 container mt-5 d-flex flex-column flex-md-row align-items-center justify-content-center">
  
  <!-- Video -->
  <video class="mb-4 mb-md-0 me-md-4 animate" 
         style="width: 100%; max-width: 400px;" 
         autoplay muted loop playsinline>
    <source src="{{ asset('vid/wedding.mp4') }}" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  
  <!-- Text -->
  <div class="text-content" style="max-width: 700px; margin:auto">
    <p>
    Hello and welcome! Let us share why we believe we have the most magical job in the world.
We are in love with love—enchanted by elegant brides, soft natural lighting, beautiful outdoor settings, and the sparkling
 personalities of every bride and groom. 
We are the artisans who capture the heartbeat of your wedding day and transform it into timeless visual memories.
    </p>
    <p>
    The Beyond Destiny family is a team of passionate photographers who were lucky enough to 
    turn our passion into a career. We love cracking jokes, staying down-to-earth, and keeping things
     fun (unless seriousness is required!). Listening to your story and understanding your vision is at
      the heart of what we do—no detail is too small.
    </p>
    <p>
    Our photographers are professionally trained, equipped with the latest cameras, and committed to capturing the perfect smile, pose, 
    or candid moment. With creativity, curiosity, and a touch of individuality, we ensure your wedding memories are preserved beautifully. 
    Humble yet high-achieving, we strive for excellence in everything we do—bringing you Beyond Destiny, where passion meets artistry.
    </p>
  </div>
  
</div>



@endsection