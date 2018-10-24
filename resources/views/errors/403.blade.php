<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Creating an Animated 403 Page | Tutorialzine Demo</title>
<!-- Internet Explorer HTML5 enabling script: -->
<!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>
<div id="rocket"></div>
<hgroup>
    <h1>403 Page Not Found</h1>
    <h2>We couldn't find what you were looking for.</h2>
</hgroup>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="script.js"></script>
<style type="text/css">
#rocket {
 width:100%;
 height:350px;
 background:url('http://demo.tutorialzine.com/2010/08/animated-404-not-found-page-css-jquery/img/rocket.png') no-repeat;
 margin:50px auto 50px;
 position:relative;
}

/* Two steam classes. */
.steam1,
.steam2 {
 position:absolute;
 bottom:78px;
 left:50px;
 width:80px;
 height:80px;
 background:url('http://demo.tutorialzine.com/2010/08/animated-404-not-found-page-css-jquery/img/steam.png') no-repeat;
 opacity:0.8;
}

.steam2 {
/* .steam2 shows the bottom part (dark version) of the background image. */
 background-position:left bottom;
}

hgroup {
 /* Using the HTML4 hgroup element */
 display:block;
 margin:0 auto;
 font-family:'Century Gothic',Calibri,'Myriad Pro',Arial,Helvetica,sans-serif;
 text-align:center;
}

h1 {
 color:#76D7FB;
 font-size:60px;
 text-shadow:3px 3px 0 #3D606D;
 white-space:nowrap;
}

h2 {
 color:#9FE3FC;
 font-size:18px;
 font-weight:normal;
 padding:25px 0;
}
</style>
<script type="text/javascript">
$(window).load(function(){
 
   // We are listening for the window load event instead of the regular document ready.
 function animSteam(){
  
   // Create a new span with the steam1, or steam2 class:
  $('',{
   className:'steam'+Math.floor(Math.random()*2 + 1),
   css:{
    
  // Apply a random offset from 10px to the left to 10px to the right
    marginLeft : -10 + Math.floor(Math.random()*20)
   }
  }).appendTo('#rocket').animate({
   left:'-=58',
   bottom:'-=100'
  }, 120,function(){

   // When the animation completes, remove the span and
   // set the function to be run again in 10 milliseconds

   $(this).remove();
   setTimeout(animSteam,10);
  });
 }

 function moveRocket(){
  $('#rocket').animate({'left':'+=1000'},5000).delay(1000)
     .animate({'left':'-=1000'},5000,function(){
    setTimeout(moveRocket,1000);
  });
 }

 // Run the functions when the document and all images have been loaded.
 moveRocket();
 animSteam();
});
</script> 

</body>
</html>