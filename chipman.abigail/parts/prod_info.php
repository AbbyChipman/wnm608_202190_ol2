<div class="grid gap">
    <div class="col-xs-12 col-md-2">
        <div class="image-thumb">
            <?= $image_elements ?>
        </div>
    </div>
    <div class="col-xs-12 col-md-4">
        <div class="image-main">
            <img src="img/<?= $product->image_main ?>" alt="<?= $product->description ?>">
        </div>
    </div>
    <div class="col-xs-12 col-md-5">
        <div class="grid gap">
            <div class="col-xs-12 col-md-12">
                <h2><?= $product->title ?></h2>
                <p><?= $product->description?></p>
            </div>
            <div class="col-xs-12 col-md-5">
                <form method="post" action="cart_actions.php?action=add-to-cart">
                <input type="hidden" name="product-id" value="<?= $product->id ?>">
                <label for="color" class="form-label">color:</label>
                    <div class="form-select">
                        <select id="color"  name="color">
                            <option value="red">red</option>
                            <option value="blue">blue</option>
                            <option value="yellow">yellow</option>
                            <option value="purple">purple</option>
                            <option value="orange">orange</option>
                        </select>
                    </div>
            </div>
            <div class="col-xs-12 col-md-2"></div>
            <div class="col-xs-12 col-md-5">
                <label for="quantity" class="form-label">Amount:</label>
                    <div class="form-select">
                        <select id="quantity"  name="quantity">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
            </div>
            <div class="col-xs-12 col-md-9"></div>
            <div class="col-xs-12 col-md-3">
                <label for="price" class="form-label">Price Each:</label>
                <div class="checkout-price" id="price" name="price" style="text-align: right; text-size:1.5em;">&dollar;<?= $product->price ?></div>
            </div>
            <div class="col-xs-12 col-md-6"></div>
            <div class="col-xs-12 col-md-6">
                <input type="submit" class="form-button" value="Add to Cart">
            </div>
            </form>
        </div>
    </div>
</div>