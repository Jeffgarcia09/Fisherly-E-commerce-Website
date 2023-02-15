       <?php
        require('functions.php');
        $selectedproduct = $product->getItemdata($_GET['id']);

        foreach ($selectedproduct as $item) {
            $item_brand = $item['item_brand'];
            $item_image = $item['item_image'];
            $item_price = $item['item_price'];
        }



        ?>

       <!DOCTYPE html>
       <html lang="en">

       <head>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
           <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
           <script src="js/cartjs.js"></script>
           <meta charset="UTF-8">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <title>Fisherly:Buy</title>

           <!-- Bootstrap CDN -->
           <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

           <!-- Owl-carousel CDN -->
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

           <!-- font awesome icons -->
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
           <link rel="stylesheet" href="css/home.css">



       </head>

       <body>



           <!-- start #header -->
           <header id="header">
               <div class="nav">
                   <img src="img/logo-fish1.png" class="brand-logo" alt="">
                   <div class="nav-items">
                       <div class="search">
                           <input type="text" class="search-box" placeholder="search brand, product">
                           <button class="search-btn">search</button>
                       </div>
                       <a href="#"><img src="img/user.png" alt=""></a>
                       <a href="#"><img src="img/cart.png" alt=""></a>
                   </div>
               </div>
               <ul class="links-container">
                   <li class="link-item"><a href="index.php" class="link">Home</a></li>
                   <li class="link-item"><a href="#best" class="link">Buy A Fish</a></li>
                   <li class="link-item"><a href="#about" class="link">Supplier</a></li>
                   <li class="link-item"><a href="#contact" class="link">Contact Us</a></li>
               </ul>

           </header>
           <!-- !start #header -->

           <!-- start #main-site -->
           <main id="main-site">

               <!-- Shopping cart section  -->
               <section" id="cart" class="py-3">
                   <div style="margin-top: 20px;" class="container-fluid w-75">
                       <h5 class="font-baloo font-size-20">Check Out</h5>

                       <!--  shopping cart items   -->
                       <div class="row">

                           <div class="col-sm-9">
                               <!-- cart item -->
                               <div class="row border-top py-3 mt-3">
                                   <div class="col-sm-2">
                                       <img src="<?php echo $item_image; ?>" style="height: 120px;" alt="cart1" class="img-fluid">
                                   </div>
                                   <div class="col-sm-8">
                                       <h5 class="font-baloo font-size-20"><?php echo $item_brand; ?></h5>

                                       <!-- product rating -->
                                       <div class="d-flex">

                                           <a href="#" class="px-2 font-rale font-size-14">How much kilo's</a>
                                       </div>
                                       <!--  !product rating-->

                                       <!-- product qty -->
                                       <div class="qty d-flex pt-2">
                                           <div class="d-flex font-rale w-25">
                                               <button id="qty-up" class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                               <input id="qty" type="text" data-id="pro1" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                               <button id="qty-down" data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                           </div>


                                       </div>
                                       <!-- !product qty -->

                                   </div>

                                   <div class="col-sm-2 text-right">
                                       <div class="font-size-20 text-danger font-baloo">
                                           ₱<span class="product_price"><?php echo $item_price; ?></span>
                                       </div>
                                   </div>
                               </div>
                               <!-- !cart item -->

                           </div>
                           <!-- subtotal section-->
                           <div class="col-sm-3">
                               <div style="margin-left: 40px;" class="sub-total border text-center mt-2">
                                   <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery.</h6>
                                   <div class="border-top py-4">
                                       <h5 class="font-baloo font-size-20">Total Amount of Payment:&nbsp; <span class="text-danger">₱<span class="text-danger" id="deal-price"><?php echo $item_price; ?></span> </span> </h5>
                                       <form action="paymentsec.php" method="POST">
                                           <script>
                                               $(document).ready(function() {
                                                   let $qty_up = $(".qty .qty-up");
                                                   let $qty_down = $(".qty .qty-down");
                                                   $qty_up.click(function(e) {
                                                       let x = $("#qty").val();
                                                       $("#passqty").val(x);
                                                   });
                                                   $qty_down.click(function(e) {
                                                       let x = $("#qty").val();
                                                       $("#passqty").val(x);
                                                   });
                                               });
                                           </script>

                                           <input type="hidden" name="qty" id="passqty" value="1">
                                           <input type="hidden" name="prod-id" value="<?php echo $_GET['id']; ?>">
                                           <button type="submit" name="buysec-btn" class="btn btn-warning mt-3">Proceed to Buy</button>
                                       </form>
                                   </div>
                               </div>
                           </div>
                           <!-- end form -->
                           <!-- !subtotal section-->
                       </div>
                       <!--  !shopping cart items   -->
                   </div>
                   </section>
                   <!-- !Shopping cart section  -->



           </main>
           <!-- !start #main-site -->

           <!-- start #footer -->


           <!-- !start #footer -->


       </body>



       </html>