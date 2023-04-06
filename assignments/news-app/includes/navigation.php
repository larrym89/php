<ul class="navbar-nav">
    <li class="nav-item <?php if($page == 'home') echo 'active'; ?>">
        <a class="nav-link" href="index.php">Home</a>
    </li>
    <?php if(!$userLoggedIn): ?>
    <li class="nav-item <?php if($page == 'login') echo 'active'; ?>">
        <a class="nav-link" href="login.php">Login</a>
    </li>
    <li class="nav-item <?php if($page == 'register') echo 'active'; ?>">
        <a class="nav-link" href="register.php">Register</a>
    </li>
    <?php endif; ?>
    <?php if($userLoggedIn): ?>
    <li class="nav-item <?php if($page == 'profile') echo 'active'; ?>">
        <a class="nav-link" href="profile.php">Profile</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
    </li>
    <?php endif; ?>
</ul>
