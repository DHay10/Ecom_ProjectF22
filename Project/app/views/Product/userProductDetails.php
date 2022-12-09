<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Product Detail</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php include 'app\views\includes\userHeader.php'; ?>
        <?php include 'app\views\includes\error.php'; ?>

        <div class='container mb-4'>
            <h2 class="h1-responsive font-weight-bold text-center my-4"><?= $data['product']->product_name;?></h2>

            <div class="row text-center mb-3">
                <div class="col">
                    <img class="img-fluid rounded" id='product_img_preview' src='/images/<?=$data['product']->product_image?>' />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <form class="form-floating">
                        <input type="text" class="form-control" name="product_id" placeholder="Product ID" value="<?= $data['product']->product_id;?>" readonly>
                        <label for="product_id">Product ID</label>
                    </form>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <form class="form-floating">
                        <input type="number" class="form-control" name="price" placeholder="Price" value="<?= $data['product']->price; ?>" readonly>
                        <label for="price">Price (CAD)</label>
                    </form>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <form class="form-floating">
                        <textarea class="form-control" name="description" placeholder="Description" style="height: 20em" readonly><?= $data['product']->description; ?></textarea>
                        <label for="description">Description</label>
                    </form>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <form class="form-floating">
                        <input type="text" class="form-control" name="category" placeholder="Category" value="<?= $data['category']->category_name; ?>" readonly>
                        <label for="category">Category</label>
                    </form>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <form class="form-floating" method="post" action="">
                        <input type="number" class="form-control" id='quantity' name="quantity" placeholder="quantity" value="1" >
                        <label for="quantity">Quantity</label>
                    </form>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col d-grid">
                    <a class="btn btn-dark w-2" href="/Product/index/" role="button">Back</a>
                </div>

                <div class="col d-grid">
                    <a class="btn btn-dark" role="button" onclick="addToCart(<?=$data['product']->product_id?>);">Add to Cart</a>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col d-grid">
                    <a href="/Product/addReview/<?=$data['product']->product_id?>" class="btn btn-dark" role="button" >Review</a>
                </div>

                <?php 
                if (isset($_SESSION['wishlist_id'])) {
                    $wishlist_items = new \app\models\Wishlist_Items();
                    if ($wishlist_items->getInstanceInWishlist($data['product']->product_id)) { 
                ?>
                    <div class="col d-grid">
                        <a href="/Product/removeFromWishlist02/<?=$data['product']->product_id?>" class="btn btn-danger" role="button" >Remove From Wishlist</a>
                    </div>
                    
                <?php } else { ?>
                        <div class="col d-grid">
                        <a href="/Product/addToWishlist/<?=$data['product']->product_id?>" class="btn btn-dark" role="button" >Add to Wishlist</a>
                        </div>

                <?php } } else { ?>
                    <div class="col d-grid">
                    <a href="/Product/addToWishlist/<?=$data['product']->product_id?>" class="btn btn-dark" role="button" >Add to Wishlist</a>
                    </div>
                <?php } ?>
                
                
                
            </div>

            <hr>

            <h3 class="h2-responsive font-weight-bold text-center my-4">Reviews</h3>

            <div class="row">
                <?php if($data['reviews'] != null) { 
                    foreach($data['reviews'] as $review) {
                        $user = new \app\models\User();
                        $user = $user->getByID($review->user_id);
                        $editB = "";
                        if (isset($_SESSION['user_id'])) {
                            if ($review->user_id == $_SESSION['user_id']) {
                                $editB = "<a href='/Product/editReview/$review->review_id'>Edit</a>";
                            }
                        }
                        echo "<figure class='text-center'>
                                <blockquote class='blockquote'>
                                <p>$review->comment</p>
                                </blockquote>
                                <figcaption class='blockquote-footer'>
                                $user->name, $review->rating/5 $editB
                                </figcaption>
                                </figure>";
                    }
                 } else { ?>
                    <p class="lead text-center">
                        There Are No Reviews Right Now
                    </p>
                <?php } ?>    
            </div>
        </div>

        
    </body>

    <script>
        product_image.onchange = evt => {
            const [file] = product_image.files
            if (file) {
                product_img_preview.src = URL.createObjectURL(file)
            }
        }


        function addToCart($product_id){
            $.ajax({type: "POST",
                    url: "/Product/addToCart/"+$product_id,
                    data: {quantity: $("#quantity").val()},
                    success:function(data){console.log(data)}})
                    alert('item has been added to cart');
        }





    </script>

</html>