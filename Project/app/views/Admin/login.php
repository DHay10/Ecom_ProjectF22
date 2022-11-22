<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin Login</title>
        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/"/>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
            crossorigin="anonymous"
        />
        <link href="../styles/bootstrap.min.css" rel="stylesheet" />
    </head>

    <body>
        <?php
            if(isset($_GET['error'])){
        ?>
            <div class="alert alert-danger" role="alert">
                <?=$_GET['error']?>
            </div>
        <?php
            }
        ?>
        <?php
            if(isset($_GET['message'])){
        ?>
            <div class="alert alert-success" role="alert">
                <?=$_GET['message']?>
            </div>
        <?php
            }
        ?>
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card">
                            <h2 class="card-title text-center">Login as Admin</h2>
                            
                            <div class="navbar">
                                <a href="\User\index">Customer</a>
                                <a class="active" href="\Admin\login">Admin</a>
                            </div>

                            <hr>
                                <div class="card-body py-md-4">
                                    <form action='' method='post'>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                        </div>
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <a href="\Main\index">Back</a>
                                            <button name="action" type="submit" class="btn btn-primary">Login</button>
                                        </div>
                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
    <style>
        @import url('https://fonts.googleapis.com/css?family=PT+Sans');

        body{
            background: #fff;
            font-family: 'PT Sans', sans-serif;
        }
        h2{
            padding-top: 1.5rem;
        }
        .card{
            border: 0.40rem solid #f8f9fa;
            top: 10%;
        }
        .form-control{
            background-color: #f8f9fa;
            padding: 20px;
            padding: 25px 15px;
            margin-bottom: 1.3rem;
        }

        .form-control:focus {
            color: #000000;
            background-color: #ffffff;
            border: 3px solid #da5767;
            outline: 0;
            box-shadow: none;
        }
        .btn{
            padding: 0.6rem 1.2rem;
            background: #50c2d1;
            border: 2px solid #50c2d1;
        }
        .btn-primary:hover {
            background-color: #00D100;
            border-color: #00D100;
            transition: .3s;
        }

        /* Style the navigation menu */
        .navbar {
            width: 100%;
            background-color: rgb(255, 255, 255);
            overflow: auto;
        }

        /* Navigation links */
        .navbar a {
            float: left;
            padding: 10px;
            color: black;
            text-decoration: none;
            font-size: 17px;
            width: 50%; /* Four equal-width links. If you have two links, use 50%, and 33.33% for three links, etc.. */
            text-align: center; /* If you want the text to be centered */
        }

        /* Add a background color on mouse-over */
        .navbar a:hover {
            background-color: rgb(240, 240, 240);
        }

        /* Style the current/active link */
        .navbar a.active {
            background-color: rgb(230, 230, 230);
        }

        /* Add responsiveness - on screens less than 500px, make the navigation links appear on top of each other, instead of next to each other */
        @media screen and (max-width: 500px) {
        .navbar a {
            float: none;
            display: block;
            width: 100%;
            text-align: left; /* If you want the text to be left-aligned on small screens */
        }
        }

    </style>
</html>