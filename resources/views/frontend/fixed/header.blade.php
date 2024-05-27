<section class="header">
    <nav style=" height: 100px;">
        <a href="{{ route('web.home') }}" class="logo">
            <img src="{{ $settings->logo }}" alt="" style="background: none; width:110px">
        </a>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
                <li> <a href="{{ url('/#service') }}"> Services</a></li>

                <li class="dropdown">
                    <a href="#" class=" d-block d-md-none dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
                    <a href="{{ route('products.list') }}" class="  d-none d-md-block dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>

                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                        <li class="dropdown @if ($category->childs->count() > 0) dropdown-submenu @endif">
                            <a href="#" class=" d-block d-md-none dropdown-toggle" data-toggle="dropdown">{{ $category->name }}</a>

                            <a href="{{ url('/category-wise-product/' . $category->slug) }}" class=" d-none d-md-block @if ($category->childs->count() > 0) dropdown-toggle @endif" data-toggle="dropdown"> {{ $category->name }}</a>
                            @if ($category->childs->count() > 0)
                            <ul class="dropdown-menu">
                                @foreach ($category->childs as $childCategory)
                                <li><a href="{{ url('/category-wise-product/' . $childCategory->slug) }}">{{ $childCategory->name }}</a>
                                </li>
                                @endforeach
                            </ul>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </li>
                <li> <a href="{{ url('/#business_promotion') }}"> Business Promotion</a></li>
                <li> <a href="{{ route('contact') }}"> Contacts</a></li>
                <a href="https://bosssend.com/" target="_blank" class="buy-btn"> Buy Online</a>
            </ul>

        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav> 
    <!-- header-area end -->
 </section>



 


        