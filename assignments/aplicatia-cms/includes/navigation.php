<ul class="navbar-nav ms-auto mb-2 mb-lg-0">

    <li class="nav-item ">
        <a class="nav-link" href="index.php">Home</a>
    </li>

    <?php if (!isset($_SESSION['user_session']) && empty($_SESSION['user_session'])) : ?>


        <li class="nav-item ">
            <a class="nav-link" href="register.php">Register</a>
        </li>

        <li class="nav-item ">
            <a class="nav-link" href="login.php">Login</a>
        </li>
    <?php endif; ?>

    <?php if (isset($_SESSION['user_session']) && !empty($_SESSION['user_session'])) : ?>       
        <li class="nav-item ">
            <a class="nav-link" href="logout.php">Logout</a>
        </li>
    <?php endif; ?>



</ul>