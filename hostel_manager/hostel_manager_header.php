<header>
    <div class="container agile-banner_nav">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <h1><a class="navbar-brand" href="home_manager.php">HMS <span class="display"></span></a></h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home_manager.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="allocate_room.php">Allocate Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="message_hostel_manager.php">Messages</a>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Rooms
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu agile_short_dropdown">
                            <li>
                                <a href="allocated_rooms.php">Allocated</a>
                            </li>
                            <li>
                                <a href="vacate_rooms.php">Vacate Rooms</a>
                            </li>
                        </ul>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="contact_manager.php">Contact</a>
                    </li> -->
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link"
                            data-toggle="dropdown"><?php echo $_SESSION['username']; ?>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu agile_short_dropdown">
                            <li>
                                <a href="manager_profile.php">My Profile</a>
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

