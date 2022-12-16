<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Order Details</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php include 'app\views\includes\userHeader.php'; ?>
        <?php include 'app\views\includes\error.php'; ?>
        
        <section class="container-fluid " style="background-color: #eee;">
            <div class="container py-5">

                <div class="row mb-4 text-center">
                    <div class="col">
                        <h4>Order ID: <?=$data->order_id?></h4>
                    </div>

                    <div class="col">
                        <h4>Date: <?=$data->date?></h4>
                    </div>

                    <div class="col">
                        <h4>Total: $<?=$data->total?></h4>
                    </div>
                    
                    <div class="col">
                        <h4>Status: <?=$data->status?></h4>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <?php 
                            $order_item = new \app\models\Order_Item();
                            $order_items = $order_item->getAllByOrderID($data->order_id);
                            foreach ($order_items as $item) {
                                $product = new \app\models\Product();
                                $product = $product->getProductbyId($item->product_id);    
                        ?>

                        <div class="card rounded-4 text-center mb-4">
                            <div class="card-body">
                                <div class="row d-flex justify-content-between align-items-center">

                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                        <img style="width:100%; aspect-ratio:1/1; object-fit:contain;" src="/images/<?=$product->product_image?>" class="img-fluid rounded-3" alt="Cotton T-shirt">
                                    </div>

                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                        <p class="lead fw-normal mb-2"><?=$product->product_name?></p>
                                        <p style="overflow: hidden; max-width: 100ch;"><?=$product->description?></p>
                                    </div>

                                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                        <input id="form1" change="updateCart(<?=$item->cart_item_id?>)"min="0" id="quantity" name="quantity" value="<?=$item->qty?>" type="number" class="form-control form-control-sm" disabled/>
                                    </div>
                                    
                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                        <p class="lead fw-normal mb-2">Total:</p>
                                        <h5 class="mb-0">$<?=$item->unit_price*$item->qty?></h5>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <?php } ?>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col">
                        <a class="btn btn-dark w-50"href="/Admin/viewOrders">Back</a>
                    </div>
                </div>

            </div>
        </section>
    </body>
    
</html>
