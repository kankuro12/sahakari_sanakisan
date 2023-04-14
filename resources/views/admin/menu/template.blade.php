<!-- Navbar Start -->
<div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
    @includeIf('front.layout.top')

    <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="display-5 text-primary m-0">{{env('APP_NAME')}}</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">

                @foreach ($menus as $menu)
                    @if ($menu->is_header)
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ $menu->name }}</a>
                        <div class="dropdown-menu border-light m-0">
                            @foreach ($menu->childs() as $child)
                                <a href="{{$child->link}}" class="dropdown-item">{{$child->name}}</a>
                            @endforeach
                        </div>
                    </div>
                    @else
                        <a href="{{ $menu->link }}" class="nav-item nav-link">{{ $menu->name }}</a>
                    @endif
                @endforeach
            </div>

            @includeIf('front.includes.headersocial')
        </div>
    </nav>
</div>
<!-- Navbar End -->
