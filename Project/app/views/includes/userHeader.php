<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
    
    <!-- Brand -->
    <a class="navbar-brand" href="/Main/index">Martwall</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Aligned -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/Main/index">Home<span class="sr-only">(current)</span></a>
            </li>
        
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Product
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">All</a>
                    <div class="dropdown-divider"></div>
                    <!-- Import Category Tables -->
                    <a class="dropdown-item" href="">Categories</a>
                </div>
            </li>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search a Product" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </ul>

        <!-- Right Aligned -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    More
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">About Us</a>
                    <a class="dropdown-item" href="#">FAQ</a>
                    <a class="dropdown-item" href="#">Contact Us</a>
                </div>
            </li>
            <?php if(isset($_SESSION['user_id'])) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="/User/profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/User/logout">Log Out</a>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="/User/index">Sign In</a>
                </li>
            <?php } ?>
        </ul>

    </div>
</nav>