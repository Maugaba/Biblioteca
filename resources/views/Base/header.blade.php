<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
    <!--begin::Header Menu-->
    <div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile header-menu-layout-default">
        <!--begin::Header Nav-->
        <ul class="menu-nav">
            <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
                <a href="{{ url('/dashboard') }}" class="menu-link">
                    <span class="menu-text">Inicio</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            <li class="menu-item menu-item-submenu menu-item-rel">
                <a href="{{ url('/client') }}" class="menu-link">
                    <span class="menu-text">Clientes</span>
                    <span class="menu-desc"></span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
                <a href="{{ url('/user') }}" class="menu-link">
                    <span class="menu-text">Usuarios</span>
                    <span class="menu-desc"></span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
                <a href="{{ url('/book') }}" class="menu-link">
                    <span class="menu-text">Libros</span>
                    <span class="menu-desc"></span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            <li class="menu-item menu-item-submenu" data-menu-toggle="click" aria-haspopup="true">
                <a href="{{ url('/loan') }}" class="menu-link">
                    <span class="menu-text">Prestamos</span>
                    <span class="menu-desc"></span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
        </ul>
        <!--end::Header Nav-->
    </div>
    <!--end::Header Menu-->
</div>