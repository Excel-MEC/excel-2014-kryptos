<?php
date_default_timezone_set('Asia/Calcutta');
$dest = mktime(20,00,00,9,14,2013); 
//echo $dest;echo "<br>";
$date = new DateTime();
//echo $date->getTimestamp();echo "<br>";
//echo TIME();echo "<br>";
$dif=$dest-TIME();
$b4time=TIME()-1600000; //is the equivalent of dest. dont forget to change before upload
if($dif<=0)
{
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="css/mainstyles.css"  />
<link rel="stylesheet" type="text/css" href="css/flame.css"  />
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

</script>
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
#bub0
{
	position: absolute;
	visibility: hidden;
	height: 20px;
	width: 20px;
}

</style>
<script src='//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.8.4/TweenMax.min.js'></script>
<script>
var tween,tl;
$(document).ready(function() {

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
$(window).resize(function ()
{
var size=jqUpdateSize();
var delay=0;
var delay2=2;
var quantity=40;
var duration=20;
var quantity2=20;
var duration2=10;
var scalex=size[0]/1920;
var scaley=size[1]/1080;

var path=[{x:420*scalex, y:550*scaley}, {x:750*scalex, y:350*scaley}, {x:1020*scalex, y:540*scaley}, {x:1300*scalex, y:520*scaley}, {x:1140*scalex, y:900*scaley}, {x:620*scalex, y:820*scaley},{x:420*scalex, y:550*scaley}];
$(".xmark").hide();
TweenMax.killAll(true,true,true,true);
animate_curve(quantity,duration,path,size,delay);
});     // When the browser changes size    // When the browser changes size

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
      dot = $("<img />", {id:"dot"+i, src:"img/footl.png"}).addClass("dot").css({left:position.x+xoffset+"px", top:position.y-yoffset+"px"}).appendTo(".main"); //create a new dot, add the .dot class, set the position, and add it to the body.
      x= $("<img />", {id:"dot"+i, src:"img/footr.png"}).addClass("dot").css({left:position.x-xoffset+"px", top:position.y+yoffset+"px"}).appendTo(".main");
      xmark= $("<img />", {id:"xmark"+i,src: 'images/x.png', alt:'MyAlt'}).addClass("xmark").css({left:position.x-13+"px", top:position.y-17+"px"}).appendTo(".main");
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
				tl.set(xmark, {visibility:"hidden"}, ((12+i) * (duration / quantity)));
			}
			else
			{
			tl.set(xmark, {visibility:"hidden"}, ((1+i) * (duration / quantity)));
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
</script>
<body>
<div class="main"  style="border-color:white;border-style:solid;">
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
</div>
<div id="container">
</div>
</body>
</html>
<?php
}

else
 echo "Sorry Buddy your clock is too fast... We will unlock in ".$dif."Seconds";
?>