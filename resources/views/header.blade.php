<div class="custome-header-panel">
    <nav class="navbar navbar-expand-sm bg-white navbar-white shadow-sm sticky-top">
        <!-- Brand -->
        <a class="navbar-brand text-primary" href="/"><i class="fad fa-store"></i> STORE<span class="text-dark">ADMIN</span></a>
        
        <!-- Navbar links -->
        <ul class="navbar-list ml-auto">
            <li class="h-item mr-2 mt-1"><a class="bg-light text-primary border border-primary" href="javascript:void(0)" title="Notification"><i class="fad fa-bell"></i></a></li>
            <li class="h-item dropdown mt-1">
                <a class="dropdown-toggle text-primary bg-light border border-primary" data-toggle="dropdown" href="javascript:void(0)"><i class="fad fa-user"></i> {{Session::get('user')['username']}}</a>
                <div class="dropdown-menu dropdown-menu-right rounded-0 shadow-sm">
                    <a class="dropdown-item" href="javascript:void(0)"><i class="fad fa-user-alt"></i> Profile</a>
                    <a class="dropdown-item" href="javascript:void(0)"><i class="fad fa-cogs"></i> Reset Password</a>
                    <a class="dropdown-item" href="javascript:void(0)"><i class="fad fa-sliders-v-square"></i> Setting <i class="fad fa-angle-down list-arrow"></i></a>
                    <a class="dropdown-item" href="logout"><i class="fad fa-sign-out-alt"></i> Logout</a>
                </div>
            </li>
        </ul>
    </nav>
</div>
<div class="custome-side-panel">
    <nav class="navbar navbar-expand-md bg-white navbar-white p-0">
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <i class="fad fa-bars"></i>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav bg-white">
                <li class="nav-item"><a class="nav-link" href="/"><i class="fad fa-tachometer-alt-fastest"></i> Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="Favorites"><i class="fad fa-home-heart"></i> Favorites</a></li>
                <li class="dropdown-header font-16">Store Management</li>
                <li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="fad fa-store"></i> Stores <i class="fad fa-angle-down list-arrow"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="fad fa-folders"></i> Categories <i class="fad fa-angle-down list-arrow"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="fad fa-flag"></i></i> Brands <i class="fad fa-angle-down list-arrow"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="fad fa-cube"></i> Products <i class="fad fa-angle-down list-arrow"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="fad fa-briefcase"></i> Orders <i class="fad fa-angle-down list-arrow"></i></a></li>
                <li class="dropdown-header font-16">Vivzon Management</li>
                <li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="fad fa-ad"></i> Banners <i class="fad fa-angle-down list-arrow"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="fad fa-address-card"></i> About <i class="fad fa-angle-down list-arrow"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="fad fa-info-square"></i> Help <i class="fad fa-angle-down list-arrow"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="fad fa-bookmark"></i> Policy <i class="fad fa-angle-down list-arrow"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="fad fa-share-alt"></i> Share On</a></li>
            </ul>
        </div>
    </nav>
</div>