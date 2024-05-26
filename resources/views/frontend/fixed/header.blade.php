<section class="header">
    <nav style=" height: 100px;">
        <a href="{{ route('web.home') }}">
            <img src="{{ $settings->logo }}" alt="" style="background: none; width:110px">
        </a>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
                <li> <a href="{{ url('/#service') }}"> Services</a></li>

                <li class="dropdown">
                    <a href="{{ route('products.list') }}" class="d-block d-md-none products-link">
                        Products
                    </a>
                    <a href="#" class="d-block d-md-none dropdown-toggle" data-toggle="dropdown" id="productsDropdownToggle">
                        <b class="caret"></b>
                    </a>
                    <a href="{{ route('products.list') }}" class="  d-none d-md-block dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b>
                    </a>

                    <ul class="dropdown-menu" style="width:auto">
                        @foreach ($categories as $category)
                        <li class="dropdown @if ($category->childs->count() > 0) dropdown-submenu @endif">
                            <a href="#" class=" d-block d-md-none dropdown-toggle" data-toggle="dropdown">{{ $category->name }}</a>

                            <a href="{{ url('/category-wise-product/' . $category->slug) }}" class=" d-none d-md-block category-link @if ($category->childs->count() > 0) dropdown-toggle @endif" data-toggle="dropdown"> {{ $category->name }}</a>
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var dropdownToggle = document.getElementById('productsDropdownToggle');
        dropdownToggle.addEventListener('click', function(event) {
            event.preventDefault();
            var dropdownMenu = this.nextElementSibling;
            if (dropdownMenu && dropdownMenu.classList.contains('dropdown-menu')) {
                dropdownMenu.classList.toggle('show');
            }
        });
    });
</script>
<style>
    .products-link, .category-link {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .caret-toggle {
        margin-left: 5px;
        cursor: pointer;
    }
    .dropdown-menu.show {
        display: block;
    }
</style>