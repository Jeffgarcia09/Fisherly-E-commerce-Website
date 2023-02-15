<!-- fish section -->

<?php
$product_shuffle = $product->getData();
?>
<section class="product" id="best">
    <h2 class="product-category">Best Selling</h2>
    <button class="pre-btn"><img src="img/arrow.png" alt=""></button>
    <button class="nxt-btn"><img src="img/arrow.png" alt=""></button>
    <div class="product-container">


        <?php
        foreach ($product_shuffle as $item) {
        ?>
            <div class="product-card">
                <div class="product-image">

                    <img src="<?php echo $item['item_image'] ?? "img/fish1.jpg" ?>" class="product-thumb" alt="">
                    <a href="buysec1.php?id=<?php echo $item['item_id'] ?>">
                        <button class="card-btn">Buy Now!</button>
                    </a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand"><?php echo $item['item_brand'] ?? "Unknown" ?></h2>
                    <p class="product-short-des">The milkfish is the sole living species in the family Chanidae</p>
                    <span class="price"><?php echo $item['item_price'] ?? '0'; ?></span>

                </div>

            </div>
        <?php } ?>







    </div>
</section>