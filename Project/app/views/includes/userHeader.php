<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">

    <div class="container-fluid">
        <!-- Brand -->
        <a class="navbar-brand" href="/Main/index">Martwall</a>
        <!-- Collapse Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Nav Items -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Aligned -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                    <a class="nav-link active" aria-current="page" href="/Main/index">Home</a>
                </li>
            
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Product
                    </a>                

                    <ul class="dropdown-menu">
                        <a class="dropdown-item" href="/Product/index">All</a>
                        <div class="dropdown-divider"></div>
                        <?php
                        $category = new \app\models\Category();
                        $categories = $category->getCategories();
                        foreach ($categories as $category) {
                            echo "<a class='dropdown-item' href='/Product/byCategory/$category->category_id'>$category->category_name</a>";
                        }
                        ?>
                    </ul>
                </li>

                <form class="d-flex" role="search" action='/Product/searchByName' method='post'>
                    <input class="form-control me-2" name='search' type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </ul>

            <!-- Right Aligned -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        More
                    </a>

                    <ul class="dropdown-menu">
                        <a class="dropdown-item" href="/Main/aboutUs">About Us</a>
                        <a class="dropdown-item" href="/Main/faq">FAQ</a>
                        <a class="dropdown-item" href="/Main/contactUs">Contact Us</a>
                    </ul>
                </li>

                <?php if(isset($_SESSION['user_id'])) { ?>

                <li class="nav-item">
                    <a class="nav-link" href="/User/cart">Cart</a>
                </li>

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
    </div>
</nav>