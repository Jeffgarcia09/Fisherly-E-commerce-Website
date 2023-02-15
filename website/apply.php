<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src="js/cartjs.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Fisherly:Payment</title>
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
            <li class="link-item"><a href="#teams" class="link">Teams</a></li>
            <li class="link-item"><a href="#about" class="link">Supplier</a></li>
            <li class="link-item"><a href="#contact" class="link">Contact Us</a></li>
        </ul>

    </header>


    <form method="POST" style="margin-left: 20px; margin-right:20px;" class="row g-3">
        <h3>Apply form for Supplier</h3>
        <div class="col-md-6">

            <label for="inputname" class="form-label">Name</label>
            <input type="text" name="fname" class="form-control" id="inputname" required>
        </div>
        <div class="col-md-6">
            <label for="inputlname" class="form-label">Last Name</label>
            <input type="text" name="lname" class="form-control" id="inputlname" required>
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" name="address" class="form-control" id="inputAddress" placeholder="Iligan Main St" required>
        </div>
        <div class="col-12">
            <label for="inputpurok" class="form-label">TAX ID</label>
            <input type="text" name="purok" class="form-control" id="inputAddress2" placeholder="id no#" required>
        </div>
        <div class="col-12">
            <label for="inputpurok" class="form-label">Email</label>
            <input type="text" name="purok" class="form-control" id="inputAddress2" placeholder="@example.com" required>
        </div>

        <div class="col-md-6">
            <label for="inputnum" class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" id="inputnum required" placeholder="+63" required>
        </div>





        <div class="col-12">
            <div class="form-check">
                <input name="check" class="form-check-input" type="checkbox" id="gridCheck" value="true" required>
                <label class="form-check-label" for="gridCheck">
                    Agree!

                </label>
            </div>
            <button style="margin-top: 10px;" type="submit" id="sweetalert" name="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

    <!-------footer------>
    <footer id="footer" style="margin-top: 130px;" class="bg-dark text-white  py-3">
        <div class="container">
            <div class="copyright text-center bg-dark text-white py-2">
                <p class="font-rale font-size-14" style="margin-top: 15px;">&copy; Copyrights 2022. Design By <a href="#" class="color-second">Bs Computer Application</a></p>
            </div>
        </div>
    </footer>
    <!-- !start #header -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script>
        document.getElementById('sweetalert').addEventListener('click', function() {

            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1500
            })

        })
    </script>



</body>



</html>