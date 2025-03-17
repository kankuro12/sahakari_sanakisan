<style>
    .h-logo img {
        max-width: 90px;
        height: auto;
    }

    @media (max-width: 725px) {
        .mobile-view {
            display: block;
        }
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow " data-wow-delay="0.1s"
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
    <div class="mobile-view d-lg-none">
        <div class="px-3" onclick="openPannel()">
            <i class="fa fa-bars text-white"></i>
        </div>
        <div class="pannel px-4 py-2" id="pannel" style="display:none">
            @foreach ($menus as $menu)
                @if ($menu->is_header)
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link text-white dropdown-toggle"
                            data-bs-toggle="dropdown">{{ $menu->name }}</a>
                        <div class="dropdown-menu border-light m-0">
                            @foreach ($menu->childs() as $child)
                                <a href="{{ $child->link }}" class=""
                                    class="dropdown-item">{{ $child->name }}</a>
                            @endforeach
                        </div>
                    </div>
                @else
                    <a href="{{ $menu->link }}" class="nav-item nav-link text-white">{{ $menu->name }}</a>
                @endif
            @endforeach
        </div>
    </div>

</nav>
<script>
    function openPannel() {
        var pannel = $('#pannel');
        if (pannel.is(':visible')) {
            pannel.hide();
        } else {
            pannel.show();
        }
    }
</script>
