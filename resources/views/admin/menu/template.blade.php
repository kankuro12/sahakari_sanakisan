<style>
    .h-logo img {
        max-width: 90px;
        height: auto;
    }

    @media (max-width: 425px) {
        .h-logo {
            max-width: 70px;
        }

        .h-logo img {
            width: 100%;
        }

        .navbar-nav {
            flex-direction: column;
        }

        .nav-item {
            width: 100%;
        }

        .dropdown-menu {
            position: static;
            float: none;
            width: 100%;
            background-color: #077430;
        }

        .dropdown-item {
            color: white;
        }
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s"
    style="background-color:#077430 ">
    <div class="collapse navbar-collapse" id="navbarCollapse" style="padding: 0px 31px">
        <div class="navbar-nav  p-lg-0">
            @foreach ($menus as $menu)
                @if ($menu->is_header)
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle"
                            data-bs-toggle="dropdown">{{ $menu->name }}</a>
                        <div class="dropdown-menu border-light m-0">
                            @foreach ($menu->childs() as $child)
                                <a href="{{ $child->link }}" class=""
                                    class="dropdown-item">{{ $child->name }}</a>
                            @endforeach
                        </div>
                    </div>
                @else
                    <a href="{{ $menu->link }}" class="nav-item nav-link">{{ $menu->name }}</a>
                @endif
            @endforeach
        </div>
    </div>
</nav>
