<?php
    session_start();
    ini_set('session.cookie_lifetime',  0);


    if(!isset($_SESSION['usrno']) || $_SESSION['lev']!='level28.php?ModPagespeed=off')
    {
        header('Location:validate.php');
    }
    else 
    {
    ?> 

<!DOCTYPE HTML>
<html>
<head>

<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Level 28</title>
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="css/semanticinput.css"/>
    <link rel="stylesheet" type="text/css" href="css/newstyles.css"  />
    <link rel="stylesheet" type="text/css" href="css/styleman.css"  />
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/componenttable.css" />
    <link rel="stylesheet" type="text/css" href="css/componentmodal.css" />
    <link href="css/compass.css" rel="stylesheet">
    
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/buttoncomponent.css" />

    <script src="js/submitmodernizr.custom.js"></script>
    
    <script type="text/javascript" src="js/jquery-1.6.js"></script>
    <script src="js/facebook.js"></script>
    <script src="js/fss.min.js"></script>
        <!-- csstransforms3d-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-load --> 
    <script src="js/modernizr.custom.25376.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/modernizr.js"></script>

<script>

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
{   compassheight *= 0.2;
}
else
{   leftcompass=compasswidth*-1*0.046;
if(compasswidth<640)
{   compassheight *= 0.25;
}
else if(compasswidth<980)
{   compassheight *= 0.3;
}
else
{   compassheight *= 0.4;
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

<div class="main314"  style="border-color:white;border-style:solid;padding:0px;">

<div class="pKaxeEVg cmodal md-effect-3" id="slidein" align="center">
<div id="containment">
<div id="ks">

<div class="kb">
<span class="k">
<span class="k">
<span class="k">
<span class="k">
<span class="k">
</span>
</span>
</span>
</span>
</span>
</div>

<div class="kb2">
<span class="k">
<span class="k">
<span class="k">
<span class="k">
<span class="k">
</span>
</span>
</span>
</span>
</span>
</div>

<div class="kb1">
<span class="k">
<span class="k">
<span class="k">
<span class="k">
<span class="k">
<span class="k">
<span class="k">
<span class="k">
<span class="k">
<span class="k">
<span class="k">
<span class="k">
<span class="k">
<span class="k">
<span class="k">
<span class="k">
<span class="k">

    <span class="khdbk" style="position:absolute;left:-40px;top:-40px;">
    <span class="khdbk">
    <span class="khdbk">
    <span class="khdbk">
    <span class="khdbk">
    <span class="khdbk">
    <span class="khdbk">
    <span class="khdbk">
    </span>
    </span>
    </span>
    </span>
    </span>
    </span>
    </span>
    </span>

    <span class="khdfnt" style="position:absolute;left:-40px;top:100px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    </span>
    </span>
    </span>
    </span>
    </span>
    </span>
    </span>
    </span>
    <span class="khdfnt" style="position:absolute;left:-20px;top:100px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <section class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <section class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    </span>
    </span>
    </section>
    </section>
    </span>
    </span>
    </span>
    </span>
    <section class="khdfnt" style="position:absolute;left:0px;top:100px;">
    <section class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <section class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <section class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <section class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    </span>
    </span>
    </section>
    </section>
    </span>
    </section>
    </section>
    </section>
    <span class="khdfnt" style="position:absolute;left:20px;top:100px;">
    <section class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <section class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <section class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    </span>
    </span>
    </span>
    </span>
    </section>
    </section>
    </section>
    </span>
    <span class="khdfnt" style="position:absolute;left:40px;top:100px;">
    <section class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <section class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <section class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    </span>
    </span>
    </span>
    </span>
    </section>
    </section>
    </section>
    </span>
    <section class="khdfnt" style="position:absolute;left:60px;top:100px;">
    <section class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <section class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <section class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <section class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    </span>
    </span>
    </section>
    </section>
    </span>
    </section>
    </section>
    </section>
    <span class="khdfnt" style="position:absolute;left:80px;top:100px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <section class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <section class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    </span>
    </span>
    </section>
    </section>
    </span>
    </span>
    </span>
    </span>
    <span class="khdfnt" style="position:absolute;left:100px;top:100px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    <span class="khdfnt" style="position:absolute;left:0px;top:0px;">
    </span>
    </span>
    </span>
    </span>
    </span>
    </span>
    </span>
    </span>

</span>
</span>
</span>
</span>
</span>
</span>
</span>
</span>
</span>
</span>
</span>
</span>
</span>
</span>
</span>
</span>
</span>

</div>

</div>

<div id="ls">
<img src="img/dot.png" style="position:absolute;left:130px;top:130px;width:40px;height:40px;"/>
<div>
<img src="img/dot.png" style="position:absolute;left:120px;top:120px;width:60px;height:60px;"/>
<div>
<img src="img/dot.png" style="position:absolute;left:120px;top:120px;width:60px;height:60px;"/>
<div>
<img src="img/dot.png" style="position:absolute;left:120px;top:120px;width:60px;height:50px;"/>
<img src="img/dot.png" style="position:absolute;left:120px;top:170px;width:10px;height:10px;"/>
<section style="position:absolute;left:130px;top:170px;width:10px;height:10px;"></section>
<img src="img/dot.png" style="position:absolute;left:140px;top:170px;width:10px;height:10px;"/>
<img src="img/dot.png" style="position:absolute;left:150px;top:170px;width:10px;height:10px;"/>
<section style="position:absolute;left:160px;top:170px;width:10px;height:10px;"></section>
<img src="img/dot.png" style="position:absolute;left:170px;top:170px;width:10px;height:10px;"/>
<div>
<img src="img/dot.png" style="position:absolute;left:120px;top:120px;width:60px;height:60px;"/>
<div>
<table style="position:absolute;left:100px;top:100px;width:100px;height:100px;"></table>
<div>
<table style="position:absolute;left:90px;top:90px;width:120px;height:120px;"></table>
<div>
<table style="position:absolute;left:90px;top:90px;width:20px;height:20px;"></table>
<p style="position:absolute;left:110px;top:70px;width:80px;height:20px;"></p>
<table style="position:absolute;left:190px;top:90px;width:20px;height:20px;"></table>
<p style="position:absolute;left:90px;top:90px;width:120px;height:80px;"></p>
<table style="position:absolute;left:90px;top:190px;width:20px;height:20px;"></table>
<p style="position:absolute;left:110px;top:170px;width:80px;height:20px;"></p>
<table style="position:absolute;left:190px;top:190px;width:20px;height:20px;"></table>
<div>
<table style="position:absolute;left:80px;top:80px;width:20px;height:20px;"></table>
<p style="position:absolute;left:100px;top:60px;width:100px;height:20px;"></p>
<table style="position:absolute;left:200px;top:80px;width:20px;height:20px;"></table>
<p style="position:absolute;left:80px;top:80px;width:140px;height:100px;"></p>
<table style="position:absolute;left:80px;top:200px;width:20px;height:20px;"></table>
<p style="position:absolute;left:100px;top:180px;width:100px;height:20px;"></p>
<table style="position:absolute;left:200px;top:200px;width:20px;height:20px;"></table>
<div>
<table style="position:absolute;left:90px;top:90px;width:20px;height:20px;"></table>
<p style="position:absolute;left:110px;top:70px;width:80px;height:20px;"></p>
<table style="position:absolute;left:190px;top:90px;width:20px;height:20px;"></table>
<p style="position:absolute;left:90px;top:90px;width:120px;height:80px;"></p>
<table style="position:absolute;left:90px;top:190px;width:20px;height:20px;"></table>
<p style="position:absolute;left:110px;top:170px;width:80px;height:20px;"></p>
<table style="position:absolute;left:190px;top:190px;width:20px;height:20px;"></table>
<div>
<table style="position:absolute;left:90px;top:90px;width:120px;height:120px;"></table>
<div>
<table style="position:absolute;left:100px;top:100px;width:100px;height:100px;"></table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="containment">
<center>
<div class="ui input">
<input type="text" id="answer"/>
</div>
</center>
<div class="progress-button" style="position:relative;top:-64px;left:28%;">
    <button id="submitter"><span style="font-family: 'Montserrat', sans-serif; font-size:180%;">Go</span></button>
    <svg class="progress-circle" width="70" height="70"><path d="m35,2.5c17.955803,0 32.5,14.544199 32.5,32.5c0,17.955803 -14.544197,32.5 -32.5,32.5c-17.955803,0 -32.5,-14.544197 -32.5,-32.5c0,-17.955801 14.544197,-32.5 32.5,-32.5z"/></svg>
    <svg class="checkmark" width="70" height="70"><path d="m31.5,46.5l15.3,-23.2"/><path d="m31.5,46.5l-8.5,-7.1"/></svg>
    <svg class="cross" width="70" height="70"><path d="m35,35l-9.3,-9.3"/><path d="m35,35l9.3,9.3"/><path d="m35,35l-9.3,9.3"/><path d="m35,35l9.3,-9.3"/></svg>
</div><!-- /progress-button -->
</div>
</div>


</div>

<div class="wmodal md-effect-8" id="3dflip">
<div class="content">
<center>
<h2 id="wrongcontent">Wrong!!</h2>
<img id="wrongimg" src="wrong_answer/a (24).jpg" alt="Loading..."/>
<button id="redirect">Try Again</button>
</center>
</div>
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
                    var j=Math.floor(Math.random()*27);
                    var img="wrong_answer/a ("+j+").jpg";
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
                        FB.api('/me/feed', 'post', {caption: "Online Treasure Hunt: Excel2014", message: 'I Just unlocked Level 32 of Kryptos! Can you do better? Prizes worth 45K!!!', link: 'http://kryptos.excelmec.org', name: "Kryptos", picture: "http://kryptos.excelmec.org/images/favicon.png.pagespeed.ce.YLmIxTciuu.png"});
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


//question box
setTimeout(function(){classie.add( modal3, 'md-show' );},1500);
setTimeout(function(){$("#answer:text:visible:first").focus();},2000);

});
</script>
<!--http://www.depthcharge3d.com/images/3d-red-blue-glasses.jpg-->
</body>
</html>
<?php } ?>