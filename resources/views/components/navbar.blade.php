


<nav class="navbar navbar-expand-lg navbar-dark main-navbar sticky-top">


  <div class="container-fluid">


  

<a href="{{ route('directHomePg') }}">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="logo">
</a>

  
  <button class="navbar-toggler mb-3" type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01"
        aria-expanded="false"
        aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>
</button>

  

    <div class="collapse navbar-collapse " id="navbarTogglerDemo01">

   
    <button class="btn-close btn-close-white ms-auto d-lg-none"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarTogglerDemo01"
        aria-label="Close">
</button>






      <ul class="navbar-nav mx-auto mb-3 mb-lg-0">
    
    
      <li class="nav-item mb-3">
          <a class="nav-link {{ request()->routeIs('directHomePg') ? 'active' : '' }}" aria-current="page" href="{{route('directHomePg')}}" >HOME</a>
        </li>  
      <li class="nav-item mb-3">
          <a class="nav-link {{ request()->routeIs('directServicesPg') ? 'active' : '' }}" aria-current="page" href="{{route('directServicesPg')}}">SERVICES</a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link {{ request()->routeIs('directAboutUsPg') ? 'active' : '' }}" href="{{route('directAboutUsPg')}}">ABOUT US</a>
        </li>
  
        <li class="nav-item mb-3">
          <a class="nav-link  {{ request()->routeIs('directContactUsPg') ? 'active' : '' }}" href="{{route('directContactUsPg')}}">CONTACT US</a>
        </li>

        <li class="nav-item mb-3">
          <a class="nav-link  {{ request()->routeIs('directPakagesPg') ? 'active' : '' }}" href="{{route('directPakagesPg')}}">OUR PACKAGES</a>
        </li>



      </ul>

        <a href="{{route('directRequestQuotePg')}}"><button class="btn-req " type="submit">REQUEST A QUOTE</button> </a>
      


    </div>


  </div>



</nav>



<script>
window.addEventListener('DOMContentLoaded', () => {
    const navbar = document.querySelector('.main-navbar');
    navbar.classList.add('show'); // Add class to slide down
});
</script>