<div class="grid gap">
    <div class="col-xs-12 col-md-2">
        <div class="image-thumb">
            <?= $image_elements ?>
        </div>
    </div>
    <div class="col-xs-12 col-md-4">
        <div class="image-main">
            <img src="lib/img/<?= $product->image_main ?>" alt="<?= $product->description ?>">
        </div>
    </div>
    <div class="col-xs-12 col-md-5">
        <div class="grid gap">
            <div class="col-xs-12 col-md-12">
                <h2><?= $product->title ?></h2>
                <p><?= $product->description?></p>
            </div>
            <div class="col-xs-12 col-md-8"></div>
            <div class="col-xs-12 col-md-3">
                <div class="checkout-price" style="text-align: right; text-size:1.5em;">&dollar;<?= $product->price ?></div>
            </div>
            <div class="col-xs-12 col-md-1"></div>
            <div class="col-xs-12 col-md-6"></div>
            <div class="col-xs-12 col-md-6">
                <a href="cart.php" class="form-button">Add to Cart</a>
            </div>
        </div>
    </div>
</div>