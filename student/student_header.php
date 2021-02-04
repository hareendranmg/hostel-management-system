<header>
    <div class="container agile-banner_nav">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <h1><a class="navbar-brand" href="home.php">HMS <span class="display"></span></a></h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Hostels</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="message_user.php">Message Received</a>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link"
                            data-toggle="dropdown"><?php echo $_SESSION['roll']; ?>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu agile_short_dropdown">
                            <li>
                                <a href="profile.php">My Profile</a>
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