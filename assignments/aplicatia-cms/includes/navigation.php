<ul class="navbar-nav ms-auto mb-2 mb-lg-0">

    <li class="nav-item <?php if($page == 'home') echo 'active'; ?>">
        <a class="nav-link" href="index.php" >Home</a>
    </li>

    <li class="nav-item <?php if($page == 'register') echo 'active'; ?>">
        <a class="nav-link" href="register.php">Register</a>
    </li>

    <li class="nav-item <?php if($page == 'login') echo 'active'; ?>">
        <a class="nav-link" href="login.php">Login</a>
    </li>

    

    <li class="nav-item <?php if($page == 'profile') echo 'active'; ?>">
        <a class="nav-link" href="logout.php">Logout</a>
    </li>

</ul>