<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Wishlist</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php include 'app\views\includes\userHeader.php'; ?>
        <?php include 'app\views\includes\error.php'; ?>
        
        <div class='container mb-4'>
            <h2 class="h1-responsive font-weight-bold text-center my-4">Wishlist</h2>
                <?php 
                    if (!$data) {
                        echo "
                        <p class='lead text-center'>
                        There Are No Items in your Wishlist Right Now
                        </p>
                        ";
                    }
                ?>
            <div class="row mb-4">
                <?php
                    foreach ($data as $item) {
                        $product = new \app\models\Product();
                        $product = $product->getProductbyId($item->product_id);
                        echo "
                        <div class='col'>
                        <div class='card' style='width: 18rem;'>
                            <img style='width:100%; aspect-ratio:1/1; object-fit:contain;' src='/images/$product->product_image' class='card-img-top' name='product_img_preview' id='product_img_preview' style='max-width:200px;max-height:200px'>
                            
                            <div class='card-body'>
                                <div class='col-sm-10'>
                                    <h5 class='card-title'>$product->product_name</h5>
                                    <p>$$product->price</p>
                                </div>
                                <p class='card-text'>$product->description</p>
                                <a href='/Product/userProductDetails/$product->product_id' class='btn btn-dark'>View Product</a>
                                <a class='btn btn-danger' href='/Product/removeFromWishlist01/$item->product_id'>Remove</a>
                            </div>
                        </div>
                        </div>";
                    }
                ?>
                
                <script>
                    file = "" + "<?= $data->product_image ?>"
                    if (file != "") {
                        document.getElementById("product_img_preview").src = "/images/" + file;
                    }
                </script>
            </div>
            
            <div class='row mb-4 text-center'>
                <div class="col">
                    <a class="btn btn-dark w-50" href="/User/profile" role="button">Back</a>
                </div>
            </div>

        </div>
    </body>
</html>