<?php
	session_start();
	ini_set('session.cookie_lifetime',  0);


	if(!isset($_SESSION['usrno']) || $_SESSION['lev']!='initiation')
	{
		header('Location:validate.php');
	}
	else 
	{
	?> 
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		
		<link rel="stylesheet" type="text/css" href="css/componentopening.css" />

	</head>
	<body>
		 <div id="loadingpage" style="display:visible; position:absolute; left:0%; top:0%; z-index:100; background-color:white;  height:100%; width:100%;">
    <img src="../logo/loader.gif" style="position:relative;display:block;  top:35%; margin-left:auto; margin-right:auto;">
 </div>
		<div class="container">	
			<audio autoplay onended="gogogo()">
  				<source src="sound/kryptointrogodfather.mp3" type="audio/mpeg"/>
  				<source src="sound/kryptointrogodfather.ogg" type="audio/ogg"/>
			</audio>
			<div class="os-phrases" id="os-phrases">
				<h2>Sometimes</h2>
				<h2>the closer</h2>
				<h2>you look</h2>
				<h2>the less you see</h2>
				<h2>Kryptos</h2>
				<h2>Get Ready.</h2>

			</div>
		</div><!-- /container -->
		<script type="text/javascript" src="js/jquery-1.6.js"></script>
		<script src="js/jquery.lettering.js"></script>
		<script>
			$(window).load(function() {
				$("#loadingpage").css("display","none");
				$("#os-phrases > h2").lettering('words').children("span").lettering().children("span").lettering(); 
			});
			function gogogo()
			{
			setTimeout(function(){
			var values="answer=0";
			$.ajax({
				type:"POST",
                url: '../ans.php',
                data: values,
                success: function(data, status){
                	var obj=JSON.parse(data);
                	if(obj.resp=="39a04db82a0cf3aee49a13304e987f37")
                	{
                		window.location.replace('../validate.php');
                	}
                	else
                	{
                		window.location.replace('../validate.php');
                	}
        },
        error: function(){
        alert("There was an error in passing....please excuse us.");
        }
    });},3000);
		}
		</script>
	
	</body>
</html>
<?php
}
?>