<?php
date_default_timezone_set('Asia/Calcutta');
$dest = mktime(20,00,00,9,14,2013); 
//echo $dest;echo "<br>";
$date = new DateTime();
//echo $date->getTimestamp();echo "<br>";
//echo TIME();echo "<br>";
$dif=$dest-TIME();
$b4time=mktime(20,00,00,9,07,2014); //is the equivalent of dest. dont forget to change before upload
if($dif<=0)
{
?>
<!DOCTYPE html>
<html lang="en">
<meta name="description" content="Kryptos is an online Treasure hunt which is the best of its kind. Varied levels with puzzles, clues, cryptograohy, hacking is to be done for a true sherlock to win this game of Treasure hunt. Google and Wikipedia will help you to win this quest to win the bounty and find the treasure." />
<meta name="keywords" content="excelmec, excel, mec, excel2014, 2014, online treasure hunt,online games, techfest, souoth india, kerala, cochin, model engineering college, model, engineering college, college, academy, engineering, electronics, computer science, electrical, biomedical, bio-medical, technology, inspire, innovate, biggest, technical, symposium"/>
<link rel="icon" type="image/png" href="images/favicon.png" />
<link rel="stylesheet" type="text/css" href="css/normalize.css" />
<link rel="stylesheet" type="text/css" href="css/componenttable.css" />
<link rel="stylesheet" type="text/css" href="css/componentmodal.css" />
<link href="css/compass.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/default.css" />
<link rel="stylesheet" type="text/css" href="css/loginbuttoncomp.css" />    
<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/buttoncomponent.css" />

<link rel="stylesheet" type="text/css" href="css/mainstyles.css"  />
<link rel="stylesheet" type="text/css" href="css/flame.css"  />	
<script src='js/TweenMax.min.js'></script>
<script type="text/javascript" src="js/jquery-1.6.js"></script>
<script src="js/facebook.js"></script>
<script src="js/fss.min.js"></script>
	<!-- csstransforms3d-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-load --> 
<script src="js/modernizr.custom.25376.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/modernizr.js"></script>

<script>
var curtime=parseInt(new Date().getTime().toString().substring(0, 10));
var diff=curtime-<?php echo $b4time ?>;
if(diff<604800)
{
setTimeout(function(){document.getElementById("w1").style.opacity="1";document.getElementById("w1").style.filter="alpha(opacity=100)";},5400);
}
else if(diff<1209600)
{setTimeout(function(){document.getElementById("w2").style.opacity="1";document.getElementById("w1").style.filter="alpha(opacity=100)";},5400);
}
else if(diff<=1814400)
{setTimeout(function(){document.getElementById("w3").style.opacity="1";document.getElementById("w1").style.filter="alpha(opacity=100)";},5400);
}
else
{//time over. now what??
}
function jqflat(){
    // Get the dimensions of the viewport
    var widths = $("#flatshader").width();
    var heights = $("#flatshader").height();
    var set=[widths,heights];
    return set;
};
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54537876-1', 'auto');
  ga('send', 'pageview');
</script>
<style>
.dot{
	position: absolute;
	width: 2%;
	height: auto;
	visibility:hidden;
}
.x{
	position: absolute;
	width: 2%;
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
#bub0
{
	position: absolute;
	visibility: hidden;
	height: 20px;
	width: 20px;
}

</style>
<script>
var tween,tl;
$(document).ready(function() {
	fixcompass();
	var size=jqUpdateSize();
	//PATH 1
	var delay2=2;
	var quantity=40;
	var duration=20;
	var quantity2=20;
	var duration2=10;
	var scalex=size[0]/1920;
	var scaley=size[1]/1080;
	//x1=2/3*x y1=0.9*y
	var path=[{x:420*scalex, y:550*scaley}, {x:750*scalex, y:350*scaley}, {x:1020*scalex, y:540*scaley}, {x:1300*scalex, y:520*scaley}, {x:1140*scalex, y:900*scaley}, {x:620*scalex, y:820*scaley},{x:420*scalex, y:550*scaley}];
	//var path2=[{x:1200, y:300}, {x:1150, y:370}, {x:1180, y:520}, {x:1220, y:600}, {x:1320, y:550}, {x:1280, y:510}, {x:1260, y:380}, {x:1200, y:300}];
	animate_curve(quantity,duration,path,size);
	//animate_curve(quantity2,duration2,path2,delay2);
	//$(".xmark").hover(animate_bubble,animate_bubble_out);
	});

function jqUpdateSize(){
    // Get the dimensions of the viewport
    var widths = $(".main").width();
    var heights = $(".main").height();
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
});  // When the browser changes size    // When the browser changes size

function animate_curve(quantity,duration,path,size)
{
       //* updated to support rotation
         //tracks the current position, so we set it initially to the first node in the path. It's the target of the tween.
        var position = {x:path[0].x, y:[path[0].y], rotation:0},i, dot,x,bub0,bub1,bub2,bub3,delays=0;
        //** updated to support rotation
        tween = TweenMax.to(position, quantity, {bezier:{values:path, autoRotate:true}, ease:Linear.easeNone}); //this does all the work of figuring out the positions over time.
		tl = new TimelineMax({repeat:-1, yoyo:false}); //we'll use a TimelineMax to schedule things. You can then have total control of playback. pause(), resume(), reverse(), whatever.
		//we can remove the first point on the path because the position is already there and we want to draw the Bezier from there through the other points
		path.shift();
      
      var scalex=size[0]/1920;
	  var scaley=size[1]/1080;

      var xoffset=13*scalex;//+5*Math.cos(position.rotation*Math.PI);
      var yoffset=5*scaley;//+5*Math.sin(position.rotation*Math.PI);
      if(position.rotation<10&&position.rotation>-10)
      	{yoffset=-10*scaley;}

		for (i = 0; i < quantity; i++) {
			tween.time(i); //jumps to the appropriate time in the tween, causing position.x and position.y to be updated accordingly.
      dot = $("<img />", {id:"dot"+i, src:"img/footl.png"}).addClass("dot").css({left:position.x+xoffset+"px", top:position.y-yoffset+"px"}).appendTo(".main"); //create a new dot, add the .dot class, set the position, and add it to the body.
      x= $("<img />", {id:"dot"+i, src:"img/footr.png"}).addClass("dot").css({left:position.x-xoffset+"px", top:position.y+yoffset+"px"}).appendTo(".main");
      //** updated to easily handle rotation cross-browser (no vendor prefixes)
 
      if(i%2==0)
      {TweenLite.set(dot, {rotation:position.rotation});
 	  }
 	  else
      {TweenLite.set(x, {rotation:position.rotation});
   	  }


			if(i%2==0)
			{tl.set(dot, {visibility:"visible", opacity:"1"}, ((1+i) * (duration / quantity))); //toggle the visibility on at the appropriate time.
			tl.set(dot, {opacity:("0.9")}, ((3+i) * (duration / quantity))); //to erase the trail	
			tl.set(dot, {opacity:("0.8")}, ((4+i) * (duration / quantity))); //to erase the trail	
			tl.set(dot, {opacity:("0.7")}, ((5+i) * (duration / quantity))); //to erase the trail	
			tl.set(dot, {opacity:("0.6")}, ((6+i) * (duration / quantity))); //to erase the trail	
			tl.set(dot, {opacity:("0.5")}, ((7+i) * (duration / quantity))); //to erase the trail	
			tl.set(dot, {opacity:("0.4")}, ((8+i) * (duration / quantity))); //to erase the trail	
			tl.set(dot, {opacity:("0.3")}, ((9+i) * (duration / quantity))); //to erase the trail	
			tl.set(dot, {opacity:("0.2")}, ((10+i) * (duration / quantity))); //to erase the trail	
			tl.set(dot, {opacity:("0.1")}, ((11+i) * (duration / quantity))); //to erase the trail	
			tl.set(dot, {visibility:"hidden"}, ((12+i) * (duration / quantity))); //to erase the trail
			}
			else
			{tl.set(x, {visibility:"visible", opacity:"1"}, ((1+i) * (duration / quantity))); //toggle the visibility on at the appropriate time.
			tl.set(x, {opacity:("0.9")}, ((3+i) * (duration / quantity))); //to erase the trail	
			tl.set(x, {opacity:("0.8")}, ((4+i) * (duration / quantity))); //to erase the trail	
			tl.set(x, {opacity:("0.7")}, ((5+i) * (duration / quantity))); //to erase the trail	
			tl.set(x, {opacity:("0.6")}, ((6+i) * (duration / quantity))); //to erase the trail	
			tl.set(x, {opacity:("0.5")}, ((7+i) * (duration / quantity))); //to erase the trail	
			tl.set(x, {opacity:("0.4")}, ((8+i) * (duration / quantity))); //to erase the trail	
			tl.set(x, {opacity:("0.3")}, ((9+i) * (duration / quantity))); //to erase the trail	
			tl.set(x, {opacity:("0.2")}, ((10+i) * (duration / quantity))); //to erase the trail	
			tl.set(x, {opacity:("0.1")}, ((11+i) * (duration / quantity))); //to erase the trail	
			tl.set(x, {visibility:"hidden"}, ((12+i) * (duration / quantity))); //to erase the trail
			}
		}
}
function animate_bubble()
{
tl.pause();
}
function animate_bubble_out()
{
tl.resume();
}
$(window).load(function(){
	$("#loadingpage").css("display","none");
});
</script>
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
<div id="facebook_social" style="position:fixed; top:20%; left:2%; color:white;z-index:700;">
<p>Kryptos</p>
<div class="fb-like" data-href="https://www.facebook.com/thekryptosmec" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true" style="position:relative; height:40px; width:40px; top:0%; left:3%;"></div>
	<p>Excel</p>
<div class="fb-like" data-href="https://www.facebook.com/excelmec" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true" style="position:relative; height:40px; width:40px; top:0%; left:3%;"></div>
	
</div>

<div id="perspective" class="perspective effect-laydown">
<div class="container" id="container">
<div class="main"  style="border-color:white;border-style:solid;padding:0px;">
<img src="img/newmap.jpg" height="100%" width="100%">
<img id="fl1"  class="fire" src="img/simple-fire.gif"/>
<img id="fr1" class="fire" src="img/simple-fire.gif"/>
<img id="fl2" class="fire"  src="img/simple-fire.gif"/>
<img id="fr2" class="fire"  src="img/simple-fire.gif"/>
<img id="fl3" class="fire"  src="img/simple-fire.gif"/>
<img id="fr3" class="fire"  src="img/simple-fire.gif"/>
<img id="w1" class="flame" src="img/blue-flame.gif"/>
<img id="w2" class="flame" src="img/pink-flame.gif"/>
<img id="w3" class="flame" src="img/orange-flame.gif"/>
<!-- <a href="javascript:;" >&nbsp;&nbsp;Login Using Facebook</a> -->
<div class="bttn">
				<p>
					<center><button  style="position:fixed; top:45%; left:35%" id="fblogin" onclick="fb_login();" class="btn btn-1 btn-1e">Login Using Facebook</button></center>
				</p>

</div>

</div>
<div class="wrapper">		
</div><!-- wrapper -->


</div>



			<nav class="outer-nav top horizontal" style="transition:all 2s;">
				<a href="#"><img class="mbutton" src="img/homeg.png" alt="Home"/></a>
				<a href="leaderboard"><img class="mbutton" src="img/leadg.png" alt="Leaderboard"/></a>
				<a href="#"><img class="mbutton" src="img/fbg.png" alt="Facebook"/></a>
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
</script>


<div id="loadingpage" style="display:visible; position:absolute; left:0%; top:0%; z-index:100; background-color:white;  height:100%; width:100%;">
<img src="logo/loader.gif" style="position:relative;display:block;  top:35%; margin-left:auto; margin-right:auto;">
 </div>
</body>
</html>
<?php
}

else
 echo "Sorry Buddy your clock is too fast... We will unlock in ".$dif."Seconds";
?>