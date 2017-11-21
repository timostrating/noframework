<nav class="main-menu">
    <ul>
        <li>
            <a href="<?= PAGE_ADMIN_PATH ?>">
                <i class="fa fa-home fa-2x"></i>
                <span class="nav-text"> Dashboard</span>
            </a>
        </li>
        <li class="has-subnav">
            <a href="<?= ADMINUSER_INDEX_PATH ?>">
                <i class="fa fa-user fa-2x"></i>
                <span class="nav-text"> Gebruikers </span>
            </a>
        </li>
        <li>
            <a href="<?= ADMINBLOG_INDEX_PATH ?>">
                <i class="fa fa-file-text fa-2x"></i>
                <span class="nav-text"> Blogs </span>
            </a>
        </li>
    </ul>

    <ul class="logout">
        <li>
            <a href="<?= USER_LOGOUT_PATH ?>">
                <i class="fa fa-power-off fa-2x"></i>
                <span class="nav-text"> Logout </span>
            </a>
        </li>
    </ul>
</nav>