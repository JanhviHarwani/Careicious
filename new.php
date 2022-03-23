<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
   <!-- CSS ==================================================
================================================== -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <!-- Bootstrap js   -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/base.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/screen.css">
  <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" />

  <!-- Favicons ==================================================
================================================== -->

  <link rel="shortcut icon" href="images/favicon.png">
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

  <!-- Google Fonts ==================================================
================================================== -->
  <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
   <title>Document</title>
</head>
<body>
<section class="container1">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="index.html">Careicious</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.html">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="about.html">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="products.html">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="portfolio.html">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.html">Blogs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart.html">Cart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact us</a>
          </li>

        </ul>
      </div>
    </nav>
  </section>

  <div class="headingblock">
    <div class="container heading">
      <header>
        <h2>Your mail has been sent successfully.</h2>
      </header>
    </div>
    <!-- container ends here -->
    <hr class="separator1">
  </div>

  
   <script type="text/javascript">

      let name = localStorage.getItem("name");
      let email = localStorage.getItem("email");
      let phone = localStorage.getItem("phone");




      var cartItems = localStorage.getItem("cartList")
      cartItems = JSON.parse(cartItems);
      // var cart_names = [];
      // var cart_quantity = [];
      // for (var i = 0; i < cartItems.length; i++) {
      //    // console.log(cartItems[i].name);
      //    cart_names.push(cartItems[i].name);
      //    cart_quantity.push(cartItems[i].quantity);
      // }

      // console.log(cart_names);
      // console.log(cart_quantity);
      

      // console.log(cartItems[1].name);
     
      $.ajax({
         url:'process1.php',
         method:"post",
         data: {cartItems : JSON.stringify( cartItems ),name: name,email:email,phone:phone},
         success: function(res){
            console.log(res);
         }
      })
        localStorage.removeItem("cartList");
        localStorage.removeItem("name");
        localStorage.removeItem("phone");
        localStorage.removeItem("email");
        

   </script>
</body>
</html>


      
