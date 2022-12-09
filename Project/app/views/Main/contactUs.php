<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact Us</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php include 'app\views\includes\userHeader.php'; ?>
        <?php include 'app\views\includes\error.php'; ?>

        <div class="container mb-4">
            <!--Section heading-->
            <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.</p>

            <div class="row">
                <!--Grid column-->
                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="" method="POST">
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-floating mb-0">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                        </div>

                        <!--Grid row-->
                        <div class="row mb-4">
                            <!--Grid column-->
                            <div class="col-md-12">
                                <div class="form-floating mt-2">
                                    <textarea class="form-control"  name="content" placeholder="Content" style="height: 20em" required></textarea>
                                    <label for="content">Your message</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <div class="text-center text-md-right">
                            <button class="btn btn-dark w-50" type="submit" name="action">Send</a>
                        </div>
                    </form>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-3 text-center">
                    <ul class="list-unstyled mb-0">
                        <hr>
                        <li><i class="fas fa-map-marker-alt fa-2x"></i>
                            <p>821 Sainte Croix Ave, Saint-Laurent, Quebec H4L 3X9</p>
                        </li>
                        <hr>
                        
                        <li><i class="fas fa-phone mt-4 fa-2x"></i>
                            <p>(514) 111-2323</p>
                        </li>
                        <hr>

                        <li><i class="fas fa-envelope mt-4 fa-2x"></i>

                            <p>team@martwall.com</p>

                        </li>
                        <hr>
                    </ul>
                </div>
                <!--Grid column-->

            </div>
        <!--Section: Contact v.2-->
        </div>
    </body>
</html>