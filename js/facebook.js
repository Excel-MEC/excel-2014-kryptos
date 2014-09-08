var fbid=0; 
var loginFlag=0;

function statusChangeCallback(response) {
    if (response.status === 'connected') {
      testAPI();
    } else if (response.status === 'not_authorized') {
      console.log("Not Authorised");
    } else {
      console.log("Not Logged In to Facebook");
    }
  }

  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '1497221180514758',
    cookie     : true,                          
    xfbml      : true,  
    version    : 'v2.0' 
  });

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  function testAPI() {
    var fbid;
      
      FB.api('/me?fields=ids_for_business,first_name,last_name, picture.width(150).height(150).type(square)', function(response) {
      loginFlag=1;
      $("#fblogin").removeAttr("onclick");
      $("#fblogin").html("Loading...");
      for(i=0;i<response.ids_for_business.data.length;i++) {
        if(response.ids_for_business.data[i].app.name=="Excel2014")
          fbid=response.ids_for_business.data[i].id;
      }
      $.post("http://excelmec.org/excel2014/sign/kryptosregister.php", {fbhash: fbid}, function(data, status){
        if(data == 0) {
          alert("You haven't registered for Excel 2014");
          window.location.assign("http://excelmec.org/excel2014/sign/Signup.html");
        }
        else if(data == 1) {
          alert("Please Register at Excel Page for unified Access using facebook");
          window.location.assign("http://excelmec.org/excel2014/sign/Signup.html");
        }
        else if(data == 2) {
          var flag=1;
          $.post("loginverify.php", {fbid:fbid,firstname:response.first_name,lastname:response.last_name}, function(data, status){
            
            if(data=="1"||data==1)
            {
              $("#fblogin").css("left","40%");
              $("#fblogin").html("Play");
              $("#fblogin").click(function(){
                window.location.assign("validate.php");
              });
            }
          });
        }
      });
    });
  }

  function fb_login() {
    FB.login(function(response) {
        testAPI();
      });
    }                 
                            
                            
                            
                            
                            
                            