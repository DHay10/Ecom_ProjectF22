<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Shopping Cart</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php include 'app\views\includes\userHeader.php'; ?>
        <?php include 'app\views\includes\error.php'; ?>

        <section class="h-100" style="background-color: #eee;">
            <div class="container h-100 py-5">
                <div class="row d-flex justify-content-center align-items-center h-100 mb-4">
                    <div class="col-10">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
                        </div>

                        <?php foreach ($data as $item) { 
                            $product = new \app\models\product();
                            $product = $product->getProductbyId($item->product_id);
                        ?>
                        <form action="/Product/cartUpdateQty/<?=$item->cart_item_id?>" method="post">
                            <div class="card rounded-3 mb-4">
                                <div class="card-body p-4">
                                    <div class="row d-flex justify-content-between align-items-center">
                                        <div class="col-md-2 col-lg-2 col-xl-2">
                                            <img style="width:100%; aspect-ratio:1/1; object-fit:contain;" src="/images/<?=$product->product_image?>" class="img-fluid rounded-3" alt="Cotton T-shirt">
                                        </div>

                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                            <p class="lead fw-normal mb-2"><?=$product->product_name?></p>
                                            <p><?=$product->description?></p>
                                        </div>

                                        
                                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                <input id="form1" change="updateCart(<?=$item->cart_item_id?>)"min="0" id="quantity" name="quantity" value="<?=$item->qty?>" type="number" class="form-control form-control-sm" />
                                            </div>
                                            
                                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                <p class="lead fw-normal mb-2">Total:</p>
                                                <h5 class="mb-0">$<?php echo (double)$product->price*(double)$item->qty?></h5>
                                            </div>

                                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                <a class="btn btn-danger" href="/Product/removeFromCart/<?=$item->product_id?>">Delete</a>
                                                <button name="action" type="submit" class="btn btn-dark">Update</button>
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php } ?>
                    </div>
                </div>

                <?php
                    if ($data) {
                ?>
                    <div class="row mb-4">
                        <div class="col d-grid">
                            <a class="btn btn-dark" href="/User/checkout" name="action">Checkout</a>
                        </div>
                    </div>
                <?php
                    } else {
                ?>
                    <p class="lead text-center">
                        There Are No Items in your Cart Right Now
                    </p>
                <?php
                    }
                ?>
            </div>

        </section>
    </body>

</html>