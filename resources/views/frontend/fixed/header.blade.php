<section class="header">
    <nav style=" height: 100px;">
      <a href="{{route('web.home')}}">
        <img src="{{url('/frontend/image/mexon_logo.png')}}" alt="" style="background: none; width:110px">
      </a>
      <div class="nav-links" id="navLinks">
        <i class="fa fa-times" onclick="hideMenu()"></i>
        <ul>
          <li> <a href="{{url('/#service')}}"> Services</a></li>


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{route('products.list')}}" id="navbarDropdown" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Products
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <!-- <li><a class="dropdown-item" href="#">Automotive</a></li>
              <li><a class="dropdown-item" href="#">Industrial</a></li> -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{route('products.auto')}}" id="navbarDropdown" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Automotive
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{route('products.motorbike')}}">Motorbike</a></li>
                  <li><a class="dropdown-item" href="{{route('products.gasoline')}}">Gasoline</a></li>
                  <li><a class="dropdown-item" href="{{route('products.diesel')}}">Diesel</a></li>

                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{route('products.industrial')}}" id="navbarDropdown" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Industrial
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{route('product.diesel')}}">Diesel </a></li>
                  <li><a class="dropdown-item" href="{{route('products.grease')}}">Grease</a></li>

                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="" href="" id="navbarDropdown" role=""
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Marine and Offshore
                </a>
               
              </li>
              <li class="nav-item dropdown">
                <a class="" href="" id="navbarDropdown" role=""
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Speciality Grades
                </a>
               
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Others
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Transmission</a></li>
                  <li><a class="dropdown-item" href="#">Brake</a></li>
                  <li><a class="dropdown-item" href="#">Coolant</a></li>
                  <!-- <li><a class="dropdown-item" href="#">Grease</a></li> -->
                </ul>
              </li>

            </ul>
          </li>

          <li> <a href="{{url('/#business_promotion')}}"> Business Promotion</a></li>
          <li> <a href="{{route('contact')}}"> Contacts</a></li>
          <a href="https://bosssend.com/" target="_blank" class="buy-btn"> Buy Online</a>
        </ul>

      </div>
      <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <!-- header-area end -->
  </section>