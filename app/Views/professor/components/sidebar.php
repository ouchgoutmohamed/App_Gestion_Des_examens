<div class="app-menu">

<!-- Sidenav Brand Logo -->
<a href="/professor_dashboard" class="logo-box">
    <!-- Light Brand Logo -->
    <div class="logo-light">
        <img src="<?= base_url('assets/images/logo-light.png') ?>" class="logo-lg h-6" alt="Light logo">
        <img src="<?= base_url('assets/images/logo-sm.png') ?>" class="logo-sm" alt="Small logo">
    </div>

    <!-- Dark Brand Logo -->
    <div class="logo-dark">
        <img src="<?= base_url('assets/images/logo-dark.png') ?>" class="logo-lg h-6" alt="Dark logo">
        <img src="<?= base_url('assets/images/logo-sm.png') ?>" class="logo-sm" alt="Small logo">
    </div>

</a>

<!-- Sidenav Menu Toggle Button -->
<button id="button-hover-toggle" class="absolute top-5 end-2 rounded-full p-1.5">
    <span class="sr-only">Menu Toggle Button</span>
    <i class="mgc_round_line text-xl"></i>
</button>

<!--- Menu -->
<div class="srcollbar" data-simplebar>
    <ul class="menu" data-fc-type="accordion">
        <li class="menu-title">Menu</li>

        <li class="menu-item">
            <a href="/professor_dashboard" class="menu-link active">
                <span class="menu-icon"><i class="mgc_home_3_line"></i></span>
                <span class="menu-text"> Tableau de bord </span>
            </a>
        </li>

        <li class="menu-title">Pages</li>

        <li class="menu-item">
            <a href="/grades_management" class="menu-link">
                <span class="menu-icon"><i class="mgc_calendar_line"></i></span>
                <span class="menu-text"> Gestion des Notes</span>
            </a>
        </li>
        <li class="menu-item">
            <a href="/reclamations" class="menu-link">
                <span class="menu-icon"><i class="mgc_calendar_line"></i></span>
                <span class="menu-text"> Réclamations</span>
            </a>
        </li>
    </ul>

</div>
</div>