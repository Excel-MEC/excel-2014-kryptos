<?php
	session_start();
	ini_set('session.cookie_lifetime',  0);


	if(!isset($_SESSION['usrno']) || $_SESSION['lev']!='level1.php')
	{
		header('Location:validate.php');
	}
	else 
	{
	?> 

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>

<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Level 1</title>
	<link rel="icon" type="image/png" href="images/favicon.png" />
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/semanticinput.css"/>
	<link rel="stylesheet" type="text/css" href="css/newstyles.css"  />
	<link rel="stylesheet" type="text/css" href="css/componenttable.css" />
	<link rel="stylesheet" type="text/css" href="css/componentmodal.css" />
	<link href="css/main_map.css" rel="stylesheet">
    <link href="css/compass.css" rel="stylesheet">
    
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/buttoncomponent.css" />
    <style>
.dot{
	position: absolute;
	width: 1%;
	height: auto;
	visibility:hidden;
}
.x{
	position: absolute;
	width: 1%;
	height: auto;
	visibility:hidden;
}
.xmark
{
	position:absolute;
	margin: auto;
	width:2%;
	height:3.9%;
	visibility:hidden;
}
    </style>
	<script src="js/submitmodernizr.custom.js"></script>
	
	<script src="js/oridomi.min.js"></script>
	<script src='js/TweenMax.min.js'></script>
	<script type="text/javascript" src="js/jquery-1.6.js"></script>
	<script src="js/facebook.js"></script>
	<script src="js/fss.min.js"></script>
		<!-- csstransforms3d-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-load --> 
	<script src="js/modernizr.custom.25376.js"></script>
	<script src="js/modernizr.custom.js"></script>
    <script src="js/modernizr.js"></script>

<script>
var tween,tl;

function animate_div1(){
var folded = new OriDomi(document.getElementsByClassName('map_main')[0]);
folded.disableTouch();
folded.setSpeed(0).stairs(-95);
setTimeout(function(){folded.setSpeed(2000).accordion(1);
},1000);
}
function animate_div2(){
var folded = new OriDomi(document.getElementsByClassName('map_main1')[0]);
folded.disableTouch();
folded.setSpeed(0).stairs(-95,'right');
setTimeout(function(){folded.setSpeed(2000).accordion(1,'right');
},1000);
}

function animate_curve(quantity,duration,path,size)
{
       //* updated to support rotation
         //tracks the current position, so we set it initially to the first node in the path. It's the target of the tween.
        var position = {x:path[0].x, y:[path[0].y], rotation:0},i, dot,x,xmark,bub0,bub1,bub2,bub3,delays=0;
        //** updated to support rotation
        tween = TweenMax.to(position, quantity, {bezier:{values:path, autoRotate:true}, ease:Linear.easeNone}); //this does all the work of figuring out the positions over time.
		tl = new TimelineMax({repeat:-1, yoyo:false}); //we'll use a TimelineMax to schedule things. You can then have total control of playback. pause(), resume(), reverse(), whatever.
		//we can remove the first point on the path because the position is already there and we want to draw the Bezier from there through the other points
		path.shift();
      
      var scalex=size[0]/1920;
	  var scaley=size[1]/1080;

      var xoffset=12*scalex;//+5*Math.cos(position.rotation*Math.PI);
      var yoffset=0*scaley;//+5*Math.sin(position.rotation*Math.PI);
      if(position.rotation<10&&position.rotation>-10)
      	{yoffset=-10*scaley;}

		for (i = 0; i < quantity; i++) {
			tween.time(i); //jumps to the appropriate time in the tween, causing position.x and position.y to be updated accordingly.
      dot = $("<img />", {id:"dot"+i, src:"img/footl.png"}).addClass("dot").css({left:position.x+xoffset+"px", top:position.y-yoffset+"px"}).appendTo(".map_float_control"); //create a new dot, add the .dot class, set the position, and add it to the body.
      x= $("<img />", {id:"dot"+i, src:"img/footr.png"}).addClass("dot").css({left:position.x-xoffset+"px", top:position.y+yoffset+"px"}).appendTo(".map_float_control");
      xmark= $("<img />", {id:"xmark"+i,src: 'images/x.png', alt:'MyAlt'}).addClass("xmark").css({left:position.x-13+"px", top:position.y-17+"px"}).appendTo(".map_float_control");
      //** updated to easily handle rotation cross-browser (no vendor prefixes)
 
      if(i%2==0)
      {TweenLite.set(dot, {rotation:position.rotation});
 	  }
 	  else
      {TweenLite.set(x, {rotation:position.rotation});
   	  }

			tl.set(xmark, {visibility:"visible"}, (i * (duration / quantity)));
			if(i==quantity-1)
			{
				tl.set(xmark, {visibility:"hidden"}, ((10+i) * (duration / quantity)));
			}
			else
			{
			tl.set(xmark, {visibility:"hidden"}, ((1+i) * (duration / quantity)));
			}

			if(i%2==0)
			{tl.set(dot, {visibility:"visible", opacity:"1"}, ((i) * (duration / quantity))); //toggle the visibility on at the appropriate time.
			tl.set(dot, {opacity:("0.9")}, ((1+i) * (duration / quantity))); //to erase the trail	
			tl.set(dot, {opacity:("0.8")}, ((2+i) * (duration / quantity))); //to erase the trail	
			tl.set(dot, {opacity:("0.7")}, ((3+i) * (duration / quantity))); //to erase the trail	
			tl.set(dot, {opacity:("0.6")}, ((4+i) * (duration / quantity))); //to erase the trail	
			tl.set(dot, {opacity:("0.5")}, ((5+i) * (duration / quantity))); //to erase the trail	
			tl.set(dot, {opacity:("0.4")}, ((6+i) * (duration / quantity))); //to erase the trail	
			tl.set(dot, {opacity:("0.3")}, ((7+i) * (duration / quantity))); //to erase the trail	
			tl.set(dot, {opacity:("0.2")}, ((8+i) * (duration / quantity))); //to erase the trail	
			tl.set(dot, {opacity:("0.1")}, ((9+i) * (duration / quantity))); //to erase the trail	
			tl.set(dot, {visibility:"hidden"}, ((10+i) * (duration / quantity))); //to erase the trail
			}
			else
			{tl.set(x, {visibility:"visible", opacity:"1"}, ((i) * (duration / quantity))); //toggle the visibility on at the appropriate time.
			tl.set(x, {opacity:("0.9")}, ((1+i) * (duration / quantity))); //to erase the trail	
			tl.set(x, {opacity:("0.8")}, ((2+i) * (duration / quantity))); //to erase the trail	
			tl.set(x, {opacity:("0.7")}, ((3+i) * (duration / quantity))); //to erase the trail	
			tl.set(x, {opacity:("0.6")}, ((4+i) * (duration / quantity))); //to erase the trail	
			tl.set(x, {opacity:("0.5")}, ((5+i) * (duration / quantity))); //to erase the trail	
			tl.set(x, {opacity:("0.4")}, ((6+i) * (duration / quantity))); //to erase the trail	
			tl.set(x, {opacity:("0.3")}, ((7+i) * (duration / quantity))); //to erase the trail	
			tl.set(x, {opacity:("0.2")}, ((8+i) * (duration / quantity))); //to erase the trail	
			tl.set(x, {opacity:("0.1")}, ((9+i) * (duration / quantity))); //to erase the trail	
			tl.set(x, {visibility:"hidden"}, ((10+i) * (duration / quantity))); //to erase the trail
			}
		}
}

function jqUpdateSize(){
    // Get the dimensions of the viewport
    var widths = $(".map_float_control").width();
    var heights = $(".map_float_control").height();
    var set=[widths,heights];
    return set;
};
function jqflat(){
    // Get the dimensions of the viewport
    var widths = $("#flatshader").width();
    var heights = $("#flatshader").height();
    var set=[widths,heights];
    return set;
};

function fixcompass(){
var compasswidth=$("body").width();
var compassheight=$("body").height();
var cwidth=161.469;
var cheight=131.75;
var leftcompass=0;
if(compasswidth<1500)
{
$("#icon-explore").css({height:cheight+"px"});
leftcompass=compasswidth*-1*0.05;
compasswidth*=0.2;
if(compasswidth<1200)
{
if(compasswidth<=480)
{	compassheight *= 0.2;
}
else
{	leftcompass=compasswidth*-1*0.046;
if(compasswidth<640)
{	compassheight *= 0.25;
}
else if(compasswidth<980)
{	compassheight *= 0.3;
}
else
{	compassheight *= 0.4;
}	
}
$("#icon-explore").css({height:compassheight+"px"});
}
$("#icon-explore").css({width:compasswidth+"px"});
$("#icon-explore").css({left:leftcompass+"px"});
}
else
{
$("#icon-explore").css({height:cheight+"px"});
$("#icon-explore").css({width:cwidth+"px"});
$("#icon-explore").css({left:leftcompass+"px"});
}
}


$(window).resize(function ()
{
fixcompass();
var size=jqUpdateSize();
var quantity=40;
var duration=20;
var quantity2=20;
var duration2=10;
var scalex=size[0]/1920;
var scaley=size[1]/1080;

var path=[{x:420*scalex, y:550*scaley}, {x:750*scalex, y:350*scaley}, {x:1020*scalex, y:540*scaley}, {x:1300*scalex, y:520*scaley}, {x:1140*scalex, y:900*scaley}, {x:620*scalex, y:820*scaley},{x:420*scalex, y:550*scaley}];
$(".xmark").hide();
TweenMax.killAll(true,true,true,true);
animate_curve(quantity,duration,path,size);
});     // When the browser changes size 
</script>

</head>

<body>
<svg version="1.1" id="icon-explore" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      viewBox="0 0 161.469 131.75" enable-background="new 0 0 161.469 131.75"
     xml:space="preserve" style="z-index:500;">
  <g id="group-2">
    <g id="showMenu">
      <g>
        <path class="circle-1" fill="#FFFFFF" d="M80.735,48.35c-20.301,0-36.816,16.517-36.816,36.816c0,20.301,16.516,36.816,36.816,36.816
          c20.3,0,36.816-16.516,36.816-36.816C117.551,64.867,101.036,48.35,80.735,48.35z M80.735,113.596
          c-15.676,0-28.428-12.753-28.428-28.429c0-15.675,12.752-28.428,28.428-28.428c15.676,0,28.428,12.753,28.428,28.428
          C109.163,100.843,96.411,113.596,80.735,113.596z"/>
      </g>
      <g>
        <path class="needle" fill="#FFFFFF" d="M89.284,72.968c-2.495-1.763-5.459-2.725-8.576-2.725c-3.983,0-7.729,1.551-10.545,4.366
          c-2.817,2.817-4.369,6.562-4.369,10.547c0,3.134,0.973,6.113,2.755,8.615l-5.842,8.801l8.694-5.771
          c2.634,2.114,5.88,3.27,9.307,3.27c3.981,0,7.728-1.551,10.545-4.369c5.407-5.407,5.778-13.965,1.129-19.812L98.18,67.1
          L89.284,72.968z M89.275,93.725c-2.289,2.289-5.332,3.549-8.567,3.549c-2.476,0-4.835-0.742-6.833-2.113l9.273-6.156
          l-6.873-6.873l-6.042,9.102c-1.065-1.827-1.644-3.905-1.644-6.076c0-3.237,1.261-6.279,3.55-8.568
          c2.289-2.288,5.332-3.549,8.568-3.549c2.149,0,4.21,0.568,6.024,1.613l-8.649,5.707l6.837,6.838l5.822-8.824
          C93.928,83.083,93.443,89.557,89.275,93.725z"/>
      </g>
      <g>
        <circle fill="#FFFFFF" cx="80.707" cy="64.183" r="3.097"/>
      </g>
      <g>
        <circle fill="#FFFFFF" cx="80.707" cy="106.129" r="3.097"/>
      </g>
    </g>
  </g>
</svg>

<div id="flatshader" style="position:absolute;height:100%;width:100%;"></div>
<a href="http://www.cabotsolutions.com/" style="position:absolute; top:6%; left:90.5%; z-index:100;"><img src="logo/sponsormin.png" style="width:100%;"></a>
<a href="http://www.excelmec.org/excel2014/" style="position:absolute; width:10%; top:84.5%; left:90.5%; z-index:100;"><img src="logo/excelmin.png" style="width:100%;"></a>
<a href="http://www.mec.ac.in" style="position:absolute; width:8%; top:83%; left:1%; z-index:100;"><img src="logo/mec.png" style="width:100%;"></a>
<a href="http://www.ieee.org" style="position:absolute; width:8%; top:74%; left:91%; z-index:100;"><img src="logo/ieee.png" style="width:100%;"></a>
<div id="loadingpage" style="display:visible; position:absolute; left:0%; top:0%; z-index:100; background-color:white;  height:100%; width:100%;">
    <img src="logo/loader.gif" style="position:relative;display:block;  top:35%; margin-left:auto; margin-right:auto;">
 </div>

<div id="perspective" class="perspective effect-laydown">
<div class="container" id="container">

<div class="map_float_control">
<div class="map_main"  style="border-color:white;border-top-style:solid;border-bottom-style:solid;border-right-style:solid;">
<img src="images/map2.jpg" height="100%" width="100%">
</div>
<div class="map_main1"  style="border-color:white;border-top-style:solid;border-bottom-style:solid;border-left-style:solid;">
<img src="images/map1.jpg" height="100%" width="100%">
</div>
</div>

<div class="wgPCHj cmodal md-effect-3" id="slidein" align="center">
<div class="content">
<div id="question">
</div>
<center>
<div class="ui input">
<input type="text" id="answer"/>
</div>
</center>
<div class="progress-button" style="position:relative;top:-64px;left:30%;">
	<button id="submitter"><span style="font-family: 'Montserrat', sans-serif; font-size:180%;">Go</span></button>
	<svg class="progress-circle" width="70" height="70"><path d="m35,2.5c17.955803,0 32.5,14.544199 32.5,32.5c0,17.955803 -14.544197,32.5 -32.5,32.5c-17.955803,0 -32.5,-14.544197 -32.5,-32.5c0,-17.955801 14.544197,-32.5 32.5,-32.5z"/></svg>
	<svg class="checkmark" width="70" height="70"><path d="m31.5,46.5l15.3,-23.2"/><path d="m31.5,46.5l-8.5,-7.1"/></svg>
	<svg class="cross" width="70" height="70"><path d="m35,35l-9.3,-9.3"/><path d="m35,35l9.3,9.3"/><path d="m35,35l-9.3,9.3"/><path d="m35,35l9.3,-9.3"/></svg>
</div><!-- /progress-button -->
</div>
</div>

<div class="wmodal md-effect-8" id="3dflip">
<div class="content">
<center>
<h2 id="wrongcontent">Wrong!!</h2>
<img id="wrongimg" src="wrong_answer/i0.jpg" alt="Loading..."/>
<button id="redirect">Try Again</button>
</center>
</div>
</div>
			<div class="wrapper">		
			</div><!-- wrapper -->
</div>


			<nav class="outer-nav top horizontal" style="transition:all 2s;">
				<a href="start.php"><img class="mbutton" src="img/homeg.png" alt="Home"/></a>
				<a href="leaderboard"><img class="mbutton" src="img/leadg.png" alt="Leaderboard"/></a>
				<a href="https://www.facebook.com/thekryptosmec"><img class="mbutton" src="img/fbg.png" alt="Facebook"/></a>
				<a href="#!/page_Rules" class="md-trigger" data-modal="modal-11"><img class="mbutton" src="img/rulesg.png" alt="Rules"/></a>
				<a href="#!/page_Contact" class="md-trigger" data-modal="modal-7"><img class="mbutton" src="img/contactg.png" alt="Contact"/></a>
				<a href="logout.php"><img class="mbutton" src="img/logoutg.png" alt="Logout"/></a>
			</nav>


<div class="md-modal md-effect-7" id="modal-7">
			<div class="md-content">
				<h3>Contacts</h3>
				<div>
					<ul>
						<li><b>Sanjay Thomas</b><br>
						sanjaythomas.mec@gmail.com<br>
						+91 9745845449<br></li>
						<li><b>Aju Mathew Thomas</b><br>
						ajumathewthomas@gmail.com<br>
						+91 9447191152<br></li>
						<li><b>Bhaswath N</b><br>
						bhaswath.n93@gmail.com<br>
						+91 9995517621<br></li>
						<li><b>Akhil T T</b><br>
						akhilthomasmec@gmail.com<br>
						+91 9037733975<br></li>
     					<li><b>Rahul Roy Mattam</b><br>
     					rahulroymattam@gmail.com<br>
     					+91 8089752008<br></li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		
		<div class="md-modal md-effect-11" id="modal-11">
			<div class="md-content">
				<h3>Rules</h3>
				<div>
					<p>If you're in here to play this twisted game, it would help if you gave these guidelines a good look.</p>
					<ul>
						<li>Answers can be entered in Uppercase or Lowercase. Spaces are also allowed. It doesn't Matter.</li>
						<li>Try to keep identities intact, i.e., mention full names for anything you enter. Eg. If the answer is Chandler Bing, then your entry should be &lsquo;chandlermurielbing&rsquo;.</li>
						<li>Google is your encyclopedia; it'll give you anything and everything that you want. But the admins are your &quot;go-to people&quot;; they're always there to help.</li>
						<li>New to Kryptos? There's basically just one rule. Do not leave any bit of the page unchecked. Change urls, check the source of the page, download files, click on random points,have your cookies try every trick in the book to find your clues. :P </li>
     					<li>Most importantly, think. All you need to do is try to make some sense of the questions, or sometimes, not make sense. :P</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>

<div class="md-overlay"></div><!-- the overlay element -->

</div>



<script src="js/classie.js"></script>
<script src="js/modalEffects.js"></script>
<script src="js/menu.js"></script>
<script src="js/uiProgressButton.js"></script>
<script>
	var container = document.getElementById('flatshader');
    var renderer = new FSS.SVGRenderer();
    var scene = new FSS.Scene();
    var light = new FSS.Light('#880066', '#FF8800');
    var now, start = Date.now();

    function initialise() {
    var sizes=jqflat();
	var geometry = new FSS.Plane(sizes[0],sizes[1], 10, 5);
    var material = new FSS.Material('#555555', '#FFFFFF');
    var mesh = new FSS.Mesh(geometry, material);

      scene.add(mesh);
      scene.add(light);
      container.appendChild(renderer.element);
      window.addEventListener('resize', resize);
    }

    function resize() {
      renderer.setSize(container.offsetWidth, container.offsetHeight);
      initialise();
    }

    function animate() {
      now = Date.now() - start;
      light.setPosition(300*Math.sin(now*0.001), 200*Math.cos(now*0.0005), 60);
      renderer.render(scene);
      requestAnimationFrame(animate);
    }

    initialise();
    resize();
    animate();

var state=0;
			[].slice.call( document.querySelectorAll( '.progress-button' ) ).forEach( function( bttn, pos ) {
				new UIProgressButton( bttn, {
					callback : function( instance ) {
						var progress = 0,
							interval = setInterval( function() {
								progress = 1;
								instance.setProgress( progress );

								if( progress === 1 ) {
									instance.stop( pos === 1 || pos === 3 ? -1 : 1 );
									clearInterval( interval );
								}
							}, 10 );
					}
				} );
			} );

//key events
$(document).keydown(function(e) {
     var key = e.which;
     	//enter key
        if(key==13) {
          if(state==0)
          {
          	$("#submitter").trigger("click");
          }
          if(state==1)
          {
          	$("#answer").val("");
          	$("#redirect").trigger("click");
          	setTimeout(function(){
          		$("#answer:text:visible:first").focus();
          	},500);
          }
          e.preventDefault();
          return false;
      }
      return true;
});

//ajax loading question content
$(window).load(function(){
	$("#loadingpage").css("display","none");
fixcompass();
var modal3 = document.getElementById("slidein");
var modal8 = document.getElementById("3dflip");
$("#question").load("content/1.txt");

$("#submitter").click(function(){
var answer=document.getElementById("answer").value;
var values="answer="+answer;
	$.ajax({
				type:"POST",
                url: 'ans.php',
                data: values,
                success: function(data, status){
                	var obj=JSON.parse(data);
                	if(obj.resp=="563b9ab8b16c5c96be563348975b9783")
                	{
                	var wrongans=["Bad Luck Dude....","are you KIDDING ME...","You deserve a medal 4 tat one...","Go Sleep...","Are you desperate???","No comments...","Try Harder next time...","So smart..."];
                	var i=Math.floor(Math.random()*8);
                	var j=Math.floor(Math.random()*12);
                	var img;
                	if(j<10)
                		img="wrong_answer/i"+j+".jpg";
                	else
                		img="wrong_answer/i"+j+".gif";
                	$("#wrongcontent").text(wrongans[i]);
                	$("#wrongimg").attr("src",img);
					setTimeout(function(){
					state=1;
					classie.remove( modal3, 'md-show' ); 
					classie.add( modal8, 'md-show' );
					},2000);
                	}
                	else
                	{
                		FB.api('/me/feed', 'post', {caption: "Online Treasure Hunt: Excel2014", message: 'I Just unlocked Level 2 of Kryptos! Can you do better? Prizes worth 45K!!!', link: 'http://kryptos.excelmec.org', name: "Kryptos", picture: "http://kryptos.excelmec.org/images/favicon.png.pagespeed.ce.YLmIxTciuu.png"});
                		window.location.replace('validate.php');
                	}
        },
        error: function(){
        alert("There was an error in passing....please excuse us.");
        }
    });
});

$("#redirect").click(function(){
	state=0;
	classie.remove(modal8, 'md-show' ); 
	classie.add(modal3, 'md-show' );
});

//Oridomi
animate_div1();
animate_div2();

//question box
setTimeout(function(){classie.add( modal3, 'md-show' );},3000);
setTimeout(function(){$("#answer:text:visible:first").focus();},3500);
//Greensock
var size=jqUpdateSize();
//PATH 1
var quantity=40;
var duration=20;
var quantity2=20;
var duration2=10;
var scalex=size[0]/1920;
var scaley=size[1]/1080;
//x1=2/3*x y1=0.9*y
var path=[{x:420*scalex, y:550*scaley}, {x:750*scalex, y:350*scaley}, {x:1020*scalex, y:540*scaley}, {x:1300*scalex, y:520*scaley}, {x:1140*scalex, y:900*scaley}, {x:620*scalex, y:820*scaley},{x:420*scalex, y:550*scaley}];
setTimeout(function(){animate_curve(quantity,duration,path,size);},4000);


});

</script>


</body>
</html>

<?php } ?>