<header>
    <div class="container agile-banner_nav">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <h1><a class="navbar-brand" href="admin_home.php">HMS <span class="display"></span></a></h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="admin_home.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hostels.php">Hostels</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="create_hm.php">Hostel Managers</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="students.php">Students</a>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link"
                            data-toggle="dropdown"><?php echo $_SESSION['username']; ?>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu agile_short_dropdown">
                            <li>
                                <a href="admin_profile.php">My Profile</a>
                            </li>
                            <li>
                                <a href="../includes/logout.inc.php">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </nav>
    </div>
</header>