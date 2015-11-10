<head>
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
#navbar1{
	background-color: white;
	text-align: center;
}
.eventbtn
{
	background-color: transparent;
	border:none;
	text-align: left;
	font-size: 1.2em;
	color:#006dcc;
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
	margin:10px auto;
}

h1
{
	color: white;
	font-size:38px;
}

#details h1
{
	font-size: 35px;
	color: white;
}


#event1
{
	background-color: white;
	padding: 5px;
	font-size: 22px;
	
}
#sidebar
{
	width: 250px;
	margin-right: 50px;
	margin-top: 30%;
	}
.show
{
	visibility: visible;
}
.hid
{
	visibility: hidden;
}
</style>

<script type="text/javascript" src="js/events.js">
</script>

</head>


<body>
<div class="container-fluid">
	<br>
	<div class="row"><div class="col-md-6"><div class="wow fadeInLeft"><h1 style="color:white">EVENTS</h1></div></div></div>
	<div class="row">
    <div id="navbar1" class="wow fadeInLeft">
           <button class='eventbtn' onclick='func1()'>Inauguration Ceremony</button> &nbsp;&nbsp;&nbsp;&nbsp;
           <button class='eventbtn' onclick='func3()'>Hall Visits</button>&nbsp;&nbsp;&nbsp;&nbsp;
           <button class='eventbtn' onclick='func4()'>Musical Night</button>&nbsp;&nbsp;&nbsp;&nbsp;
           <button class='eventbtn' onclick='func5()'>Fine Arts and Photography Exhibition</button>&nbsp;&nbsp;&nbsp;&nbsp;
			<button class='eventbtn' onclick='func6()'>Illumination and DJ Night</button>&nbsp;&nbsp;&nbsp;&nbsp;
			<button class='eventbtn' onclick='func7()'>Sports Events</button>&nbsp;&nbsp;&nbsp;&nbsp;
			<button class='eventbtn' onclick='func8()'>Entertania</button>&nbsp;&nbsp;&nbsp;&nbsp;
			<button class='eventbtn' onclick='func9()'>Closing Ceremony</button>&nbsp;&nbsp;&nbsp;&nbsp;	   
    </div>
</div>
<div class="row">
	<br><div class="wow fadeInLeft">
    <div class="col-md-6">
    	<div class="animate" id="details">
    			<h1 style="text-align:center;color:white;margin-left:5px;"> Inauguration Ceremony </h1>
    			<hr><br>
    	<p>A formal way to get started and welcome our alumni back to the campus. This auspicious occasion, with the invocation ceremony by the hands of the Director, marks the beginning of the three-day long event. There will be documentaries premiered on KGP to help you recapitulate of what had happened and what is happening in your college.</p>
    </div>
    </div></div>
    <br><div class="wow fadeInRight">
    <div class="col-md-2">
    <button class="eventbtn" onclick="func1()">
	<img src="images/events/inaug.jpg" class="two">
	</button>
	
	<button class="eventbtn" onclick="func4()">
	<img src="images/events/music.jpg" class="two">
	</button>
	
	<button class="eventbtn" onclick="func7()">
	<img src="images/events/2.jpg" class="two">
	</button>
	</div><br>
    <div class="col-md-2">
    <button class="eventbtn"onclick="func2()">
	<img src="images/events/tour.jpg" class="two">
	</button><br>
    <button class="eventbtn"onclick="func5()">
	<img src="images/events/arts.jpg" class="two">
	</button><br>
    <button class="eventbtn"onclick="func8()">
	<img src="images/events/enter.jpg" class="two">
	</button>	
	</div>

<br>
    <div class="col-md-2">
	<button class="eventbtn"onclick="func3()">
	<img src="images/events/visit.jpg" class="two">
	</button>
	<br>
	<button class="eventbtn"onclick="func6()">
	<img src="images/events/dj.jpg" class="two">
	</button>
	<br>
	<button class="eventbtn"onclick="func9()">
	<img src="images/events/close.jpg" class="two">
	</button>
	</div></div>
</div>
</div>
</body>
