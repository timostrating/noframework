<?php 
$cartCount = null;
if(isset($_SESSION["CART"])) { 
    foreach ($_SESSION["CART"] as $value) {
        $cartCount += intval($value["count"]);
    }
} 

?>


<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
            aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?= ROOT_PATH ?>">
            LOGO
        </a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li> <a href="<?= BLOG_INDEX_PATH ?>">Blog</a> </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown mt5 mr10">
                <button class="btn" type="button" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-user icon"></span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
    <?php if(isset($_SESSION['USER_ID']) == false){ ?>
                    <li align="center"> <a href="<?= USER_LOGIN_PATH ?>">Inloggen</a> </li>
                    <li align="center"> <a href="<?= USER_REGISTER_PATH ?>">Registreren</a> </li>
    <?php } else { ?>
                    <li align="center"> <a href="<?= USER_PROFILE_PATH ?>">Profiel</a> </li>
                    <li align="center"> <a href="<?= USER_LOGOUT_PATH ?>">Uitloggen</a> </li>
    <?php } ?>
                </ul>
            </li> <!-- ./dropdown -->
        </div> <!-- ./navbar-collapse -->
        </div> <!-- ./navbar-header -->
    </div>
</nav>