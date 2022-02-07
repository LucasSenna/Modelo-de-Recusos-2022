
<nav class="navbar navbar-header navbar-expand navbar-light">
    <!-- BTN HAMBURGUER MENU LATERAL -->
    <!-- <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a> -->
    <a class="sidebar-toggler" href="#"><i style="color:#274F23" class="fas fa-bars fa-2x"></i></a>
    <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <!-- <div class="avatar mr-1">
                        <img src="assets/images/avatar/avatar-s-1.png" alt="" srcset="">
                    </div> -->
                    <div class="d-none d-md-block d-lg-inline-block"><?php echo "Olá, Nome_Usuario" ?></div>
                </a>
                <!-- <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                    <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                    <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i data-feather="log-out"></i> Logout</a>
                </div> -->
                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <div class="d-none d-md-block d-lg-inline-block"><?php echo "Ir para o Moodle" ?></div>
                </a>
            </li>
        </ul>
    </div>
</nav>