<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
   <title>Document</title>
</head>
<body>
   
   <h1>Sending data from JS to PHP</h1>

   <script type="text/javascript">
      var subject = {};
      subject.id = 1;
      subject.name = "Pranav";
      subject.profession = "Programmer";

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
         data: {cartItems : JSON.stringify( cartItems ) },
         success: function(res){
            console.log(res);
         }
      })
  
   </script>
</body>
</html>


      
