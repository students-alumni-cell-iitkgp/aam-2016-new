<head>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){

    $(".eventbtn").click(function(){
        $(".animate").toggleClass("wow fadeInLeft");
    });
    });
</script>
<link rel="stylesheet" href="css/animate.css">
    <script src="js/wow.js" ></script>
     <script>
              new WOW().init();
              </script>
<style>
img.two
{
    width: 210px;
    height: 175px;
    margin-bottom: 5px;
    box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.75);


}
.eventbtn
{
	background-color: transparent;
	border:none;
	text-align: left;
	color: blue;
}
.eventbtn after
{
	background-color: transparent;
	border-color: white;
	border:none;
}

.col-md-2
{
	margin-left: -7px;
}

p
{
	color:white;
	font-size: 22px;
}

.animate
{
	text-align: justify;
	width:500px;
	margin:0 auto;
}

h1
{
	color: white;
	font-size:38px;
}

#details h1
{
	font-size: 35px;
}

.btn-circle.btn-lg {
  width: 50px;
  height: 50px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 25px;
}
#event1
{
	background-color: white;
	padding: 5px;
	font-size: 22px;
	
}
</style>

<script type="text/javascript" src="js/events.js">
</script>

</head>


<body>
<div class="container-fluid">
<div class="row">
	<br><div class="wow fadeInLeft">

    <div class="col-md-6">
    	<div style="float:left">
    	<button type="button" class="btn btn-default btn-circle btn-lg" onclick="events()"><i class="glyphicon glyphicon-list"></i></button>
		<div id="event1">
			<!--Events button will be added here through JS -->
		</div>
		</div>
          <h1 style="color:white;text-align:center; font-size:40px;">EVENTS</h1>
    	<div class="animate"  id="details">
    			<h1 style="text-align:center;color:white;margin-left:5px;"> Inauguration Ceremony </h1>
    			<hr><br>
    	<p>A formal way to get started and welcome our alumni back to the campus. This auspicious occasion, with the invocation ceremony by the hands of the Director, marks the beginning of the three-day long event. There will be documentaries premiered on KGP to help you recapitulate of what had happened and what is happening in your college.</p>
    </div>
    </div></div>
    <br><div class="wow fadeInRight">
    <div class="col-md-2">
    <button class="eventbtn" onclick="func1()">
	<img src="images/events/inaug.JPG" class="two">
	</button>
	
	<button class="eventbtn" onclick="func4()">
	<img src="images/events/music.JPG" class="two">
	</button>
	
	<button class="eventbtn" onclick="func7()">
	<img src="images/events/2.JPG" class="two">
	</button>
	</div><br>
    <div class="col-md-2">
    <button class="eventbtn"onclick="func2()">
	<img src="images/events/tour.JPG" class="two">
	</button><br>
    <button class="eventbtn"onclick="func5()">
	<img src="images/events/arts.JPG" class="two">
	</button><br>
    <button class="eventbtn"onclick="func8()">
	<img src="images/events/enter.JPG" class="two">
	</button>	
	</div>

<br>
    <div class="col-md-2">
	<button class="eventbtn"onclick="func3()">
	<img src="images/events/visit.JPG" class="two">
	</button>
	<br>
	<button class="eventbtn"onclick="func6()">
	<img src="images/events/dj.JPG" class="two">
	</button>
	<br>
	<button class="eventbtn"onclick="func9()">
	<img src="images/events/close.JPG" class="two">
	</button>
	</div></div>
</div>


</div>


</body>
