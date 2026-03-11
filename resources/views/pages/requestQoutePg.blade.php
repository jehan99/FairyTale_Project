@extends('layouts.app')

@section('title','RequestQoute_Page')

@section('content')


@if(session('success'))
<div  id="successAlert"
class="alert alert-success position-fixed start-50 translate-middle-x mt-3  text-center shadow fade show"
       style="z-index: 9999; min-width:300px; margin-top:40px"> 

    {{ session('success') }}   

  </div>
@endif



<div class="rq-img-background">




<div class="container" >
  <div class=" d-flex flex-column justify-content-center align-items-center " style="min-height: 70vh;">
 
  <div class="col-8 text-center ">
  <h1 class="animate">REQUEST QUOTE</h1>
<p class="animate mt-3 fs-5">"Check Detailed Pricing and Availability”</p>

  </div>
  </div>
</div>



</div>

<div class="rq-sec-2 col-8 container  mt-5 text-center animate fs-5">


<p style="font-weight: bold;">We love getting to know our clients so we can ensure we’re the perfect fit for each other.</p>

<p>If you could take just one minute to answer the following questions.</p>


<div class="mt-4 d-flex flex-wrap justify-content-center">
 <span class="badge text-bg-light me-2 shadow me-2 mb-2">WEDDINGS</span>
 <span class="badge text-bg-light me-2 shadow me-2 mb-2">ENGAGEMENTS</span>
 <span class="badge text-bg-light shadow me-2 mb-2">CASUAL SHOOTS</span>
</div>

</div>


<!--Form section-->

<div class="container d-flex justify-content-center align-items-center rq-sec-3 shadow animate " style="margin-top:50px;">
  <form action="{{ route('form.submit') }}" method="POST"  class="w-100 needs-validation" novalidate >
@csrf
    <div class="row justify-content-center">
      <div class="col-md-5 mb-3"> <!-- increased from col-md-6 to col-md-8 -->
        <label class="form-label text-start d-block">BRIDE'S NAME </label>
       <input type="text"   name="bride_name" class="form-control form-control-lg"  required > 
       <div class="invalid-feedback">
           Please enter bride's name.
              </div>

      </div>


      <div class="col-md-5 mb-3">
        <label class="form-label text-start d-block">GROOM'S NAME </label>
        <input type="text" name="groom_name" class="form-control form-control-lg" required>
      
        <div class="invalid-feedback">
           Please enter groom's name.
              </div>
      </div>

      <div class="col-md-5 mb-3"> <!-- increased from col-md-6 to col-md-8 -->
        <label class="form-label text-start d-block">EMAIL</label>
        <input type="email" name="email" class="form-control form-control-lg" required>

        <div class="invalid-feedback">
           Please enter valid email.
              </div>

      </div>
      <div class="col-md-5 mb-3">
        <label class="form-label text-start d-block">WEDDING DATE</label>
        <input type="date" name="wedding_date" class="form-control form-control-lg" required>

        <div class="invalid-feedback">
           Please enter wedding date.
              </div>

      </div>

      <div class="col-md-5 mb-3"> <!-- increased from col-md-6 to col-md-8 -->
        <label class="form-label text-start d-block">TIME</label>
        <input type="time" name="time" class="form-control form-control-lg" required>


        <div class="invalid-feedback">
           Please enter time.
              </div>

      </div>
      <div class="col-md-5 mb-3">
        <label class="form-label text-start d-block">WEDDING LOCATION (RECEPTION)</label>
        <input type="text" name="wedding_location" class="form-control form-control-lg" required>


        <div class="invalid-feedback">
           Please enter wedding location.
              </div>

      </div>


      <div class="col-md-5 mb-3"> <!-- increased from col-md-6 to col-md-8 -->
        <label for="categorySelect" class="form-label text-start d-block">TYPE OF THE CEREMONY</label>
        <select name="ceremony_type" class="form-select" id="categorySelect" style="height: 50px;" required>


    <option value="">Select...</option>
    <option value="weddings">Weddings</option>
    <option value="engagements">Engagements</option>
    <option value="preshoots">Preshoots</option>
    <option value="homecomming">Homecommings</option>
    <option value="cenematography">Cenematography</option>
  </select>

  <div class="invalid-feedback">
           Please enter type of ceromony.
              </div>

      </div>



      <div class="col-md-5 mb-3">
        <label class="form-label text-start d-block">NUMBER OF GUESTS</label>
        <input type="number" name="guests_num" class="form-control form-control-lg" required>


        <div class="invalid-feedback">
           Please enter guest number.
              </div>
        
      </div>

      <div class="col-md-5 mb-3"> <!-- increased from col-md-6 to col-md-8 -->
        <label class="form-label text-start d-block">MAKE UP ARTIST</label>
        <input type="text" name="makeup_artist" class="form-control form-control-lg" required>

        <div class="invalid-feedback">
           Please enter make up artist.
              </div>

      </div>
      <div class="col-md-5 mb-3">
        <label class="form-label text-start d-block">CONTACT NUMBER</label>
        <input type="tel" name="contact" class="form-control form-control-lg" id="num" required>
        <div class="invalid-feedback">
           Please enter contact number.
              </div>
  
              <div  id="incorrect_num"  style="display: none; color:red;font-size:13px">
           Please enter a valid phone number.
              </div>
      </div>


      <div class="col-md-10 mb-3">
        <label class="form-label text-start d-block">MESSAGE</label>
        <textarea   name="message" class="form-control form-control-lg" required placeholder="Please mention the package type and other information here."></textarea>

        <div class="invalid-feedback">
  Please enter your message.
</div>
      
      </div>


    </div>

    <div class="text-center">
      <button type="submit" class="rq-btn mt-4">REQUEST QUOTE</button>
    </div>
  </form>
</div>






<script>
document.addEventListener('DOMContentLoaded', function () {

const phoneInput = document.getElementById("num");
const phoneInvalid = document.getElementById("incorrect_num");

// Real-time input validation
phoneInput.addEventListener("input", function () {
  const pNum = this.value;

  if (!/^\+?[0-9\s-]{10,15}$/.test(pNum)) {
    phoneInvalid.style.display = "block";
  } else {
    phoneInvalid.style.display = "none";
  }
});

// Form submission validation
const forms = document.querySelectorAll('.needs-validation');

Array.from(forms).forEach(form => {
  form.addEventListener('submit', event => {

    const pNum = phoneInput.value;

    // Check phone number first
    if (pNum.length != 10) {
      phoneInvalid.style.display = "block";
      event.preventDefault(); // Stop submission
      event.stopPropagation();
    }

    // Check built-in HTML validation
    if (!form.checkValidity()) {
      event.preventDefault();
      event.stopPropagation();
    }

    form.classList.add('was-validated');
  }, false);
});

// Optional: auto-hide alert
const alertBox = document.getElementById('successAlert');
if (alertBox) {
  setTimeout(() => {
    alertBox.classList.remove('show');
    setTimeout(() => {
      alertBox.remove();
    }, 500);
  }, 3000);
}

});



</script>

@endsection