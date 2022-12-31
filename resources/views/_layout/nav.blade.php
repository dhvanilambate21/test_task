<div class="nav-content d-flex">
    <!-- Logo Start -->
    <div class="logo position-relative">
        <a href="/">
            <!-- Logo can be added directly -->
            <!-- <img src="{{ asset('/img/logo/logo-white.svg') }}" alt="logo" /> -->

            <!-- Or added via css to provide different ones for different color themes -->
        <h6 class="text-white ">Admin Panel</h6>
        </a>
    </div>
    <!-- Logo End -->

    <!-- User Menu Start -->
    <div class="user-container d-flex">
        <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="profile" alt="profile" src="{{ asset('/img/profile/profile-8.jpg') }}" />
            <div class="name">Zayn Hartley</div>
        </a>
        <div class="dropdown-menu dropdown-menu-end user-menu wide">

            <div class="row mb-1 ms-0 me-0">

                                <div class="col-6 pe-1 ps-1">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">
                                <i data-cs-icon="gear" class="me-2" data-cs-size="17"></i>
                                <span class="align-middle">Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i data-cs-icon="logout" class="me-2" data-cs-size="17"></i>
                                <span class="align-middle">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- User Menu End -->

    <!-- Icons Menu Start -->
    
    <!-- Icons Menu End -->

    <!-- Menu Start -->
    <div class="menu-container flex-grow-1">
        <ul id="menu" class="menu">
            <li>
                <a href="/Dashboard">
                    <i data-cs-icon="shop" class="icon" data-cs-size="18"></i>
                    <span class="label">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="#products" data-href="/products/List">
                    <i data-cs-icon="cupcake" class="icon" data-cs-size="18"></i>
                    <span class="label">Products</span>
                </a>
                <ul id="products">
                    <li>
                        <a href="/products/Detail">
                            <span class="label">Manage Products</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#shop" data-href="/shop/Home">
                    <i data-cs-icon="screen" class="icon" data-cs-size="18"></i>
                    <span class="label">Shop</span>
                </a>
                <ul id="shop">
                    <li>
                        <a href="/shop/Detail">
                            <span class="label">Manage Shop</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="/Settings">
                    <i data-cs-icon="gear" class="icon" data-cs-size="18"></i>
                    <span class="label">Settings</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- Menu End -->

    <!-- Mobile Buttons Start -->
    <div class="mobile-buttons-container">
        <!-- Menu Button Start -->
        <a href="#" id="mobileMenuButton" class="menu-button">
            <i data-cs-icon="menu"></i>
        </a>
        <!-- Menu Button End -->
    </div>
    <!-- Mobile Buttons End -->
</div>
<div class="nav-shadow"></div>
