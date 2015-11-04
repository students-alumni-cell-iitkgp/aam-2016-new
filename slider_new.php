<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/animate.css">
  <script src="js/wow.js" ></script>
   <script>
              new WOW().init();
              </script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 200px;
      height: 150px;
  }

  #myCarousel{
    width: 200px;
  }
  </style>
</head>
<body>

<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active wow bounceInLeft">
        <img src="img/spons/2015/e1.png" alt="Chania" width="460" height="345">
      </div>

      <div class="item wow bounceInLeft">
        <img src="img/spons/2015/e2.png" alt="Chania" width="460" height="345">
      </div>
    
      <div class="item wow bounceInLeft">
        <img src="img/spons/2015/e3.png" alt="Flower" width="460" height="345">
      </div>

      <div class="item wow bounceInLeft">
        <img src="img/spons/2015/e4.png" alt="Flower" width="460" height="345">
      </div>
    </div>
  </div>
</div>

</body>
</html>
