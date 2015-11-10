function func1(){
	var x='<p>A formal way to get started and welcome our alumni back to the campus. This auspicious occasion, with the invocation ceremony by the hands of the Director, marks the beginning of the three-day long event. There will be documentaries premiered on KGP to help you recapitulate of what had happened and what is happening in your college.</p>';
	var t="<h1 align='center'> Inauguration Ceremony </h1><hr><br>"
	document.getElementById('details').innerHTML=t+x;
}

function func2(){
	var x='<p>The whole batch will be taken around the campus with our volunteers and will be updated about the current developments in the campus. You will be also visiting your departments and the old beauties of the campus.</p>'
	var t="<h1 align='center'> Campus Tour </h1><hr><br>"
	document.getElementById('details').innerHTML=t+x;

}

function func3(){
	var x='<p>A night is solely dedicated to your hall, where you can revisit your room and relive the best times of your college life. The halls would be organising events for their respective alumni and after that its all yours.</p>'
	var t="<h1 align='center'> Hall Visits </h1><hr><br>"

	document.getElementById('details').innerHTML=t+x;
}

function func4(){
	var x='<p>The mood transcends all senses as you go Gaga over Raga. A musical bonanza, where live performances shall floor you with their intoxicating blend of music and sounds, and perhaps get you closer to musical nirvana. So get ready to sway to some mesmerizing performances by the musicians of Kgp. Previous meets have set a precedent where mesmerised alumni take to the dais.</p>'
	var t="<h1 align='center'> Musical Night </h1><hr><br>"
	document.getElementById('details').innerHTML=t+x;
}

function func5(){
	var x='<p>Check out the skills of the students of IIT Kharagpur as they prepare paintings, sketches, models and click photographs for their dear alumni.The works will be put up for sale.</p>'
	var t="<h1 align='center'> Fine Art and Photography Exhibition </h1><hr><br>"
	document.getElementById('details').innerHTML=t+x;
}

function func6(){
	var x='<p>A mini-illu made by our team for our guests. You will be lighting the lamps and experiencing the innovation Kgp has had. There will be a DJ playing for your feet to tap and mind to rock.</p>'
	var t="<h1 align='center'> Illumination and DJ night </h1><hr><br>"
	document.getElementById('details').innerHTML=t+x;
}

function func7(){
	var x='<p>Here is a chance for you to stretch your muscles again and carry pictures back home for your children with a note- "Son I am equally good!". Do send us suggestions for your preference of events.</p>'
	var t="<h1 align='center'> Sports Events </h1><hr><br>"
	document.getElementById('details').innerHTML=t+x;
}

function func8(){
	var x='<p>It is going to be a surprise! But surely you will love what is going to happen.</p>'
	var t="<h1 align='center'> Entertania </h1><hr><br>"
	document.getElementById('details').innerHTML=t+x;
}

function func9(){
	var x='<p>The time to say Good Bye! We will leave you with memories in form of mementos and group photographs and some more nostalgia to carry back home. A special awards ceremony and a cultural program is also in store for the alumni.</p>'
	var t="<h1 align='center'> Closing Ceremony </h1><hr><br>"
	document.getElementById('details').innerHTML=t+x;
}

function events() {
	var x="<button class='eventbtn' onclick='func1()'>Inauguration Ceremony</button><br>";
	x=x+"<button class='eventbtn' onclick='func3()'>Hall Visits</button><br>";
	x=x+"<button class='eventbtn' onclick='func4()'>Musical Night</button><br>";
	x=x+"<button class='eventbtn' onclick='func5()'>Fine Art and <br>Photography Exhibition</button><br>";
	x=x+"<button class='eventbtn' onclick='func6()'>Illumination and <br> DJ Night</button><br>";
	x=x+"<button class='eventbtn' onclick='func7()'>Sports Events</button><br>";
	x=x+"<button class='eventbtn' onclick='func8()'>Entertania</button><br>";
	x=x+"<button class='eventbtn' onclick='func9()'>Closing Ceremony</button><br>";
	document.getElementById('event1').innerHTML=x;
}



