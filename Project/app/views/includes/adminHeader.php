<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
    <!-- Container -->
    <div class="container-fluid">
        <!-- Brand -->
        <a class="navbar-brand" href="/Admin/index">MartWall</a>
        <span class="navbar-text">
            Admin
        </span>

        <!-- Collapse Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Nav Items -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Aligned -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                
                <?php if(isset($_SESSION['admin_id'])) { ?>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Product
                    </a>

                    <ul class="dropdown-menu">
                        <a class="dropdown-item" href="#">Product List</a>
                        <a class="dropdown-item" href="">Add Product</a>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Order List</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Customer Requests</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/Admin/logout">Log Out</a>
                </li>

                <?php } else { ?>

                <li class="nav-item">
                    <a class="nav-link" href="/User/login">Sign In</a>
                </li>

                <?php } ?>

            </ul>
        </div>
    </div>
</nav>