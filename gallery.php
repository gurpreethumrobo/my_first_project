<?php
session_start();
include'config.php';
?>

<html>
    <head>
        
          <meta charset="utf-8">
 
 
 
 <meta name="viewport" content="width=device-width,initial-scale=1">
  
 
  <link rel="stylesheet" href="ResponsiveSlides.js-master/responsiveslides.css">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">
</script>
  
<script src="ResponsiveSlides.js-master/responsiveslides.min.js">
</script>
        <title>
            
        </title>






<style>
    
#wrapper {
  float: left;

  width: 100%;

  margin-bottom: 50px;
  }


h1 {
  font: 600 28px/36px sans-serif;
  
margin: 50px 0;
  }

h3
 {
  font: 600 18px/24px sans-serif;

  color: #999;

  margin: 0 0 20px;
  }

a{
  color: #222;

  }

.rslides {
  margin: 0 auto;
 
 }

.rslides_container {

  margin-bottom: 50px;
 
 position: relative;
 
 float: left;
  
width: 100%;
 
 }

.centered-btns_nav {
  z-index: 3;
 
 position: absolute;
 
 -webkit-tap-highlight-color: rgba(0,0,0,0);

  top: 50%;
  left: 0;
  
opacity: 0.7;

  text-indent: -9999px;
 
 overflow: hidden;
  
text-decoration: none;
 
 height: 61px;

  width: 38px;

  background: transparent url("themes.gif") no-repeat left top;

  margin-top: -45px;
  }

.centered-btns_nav:active {
  opacity: 1.0;
  }

.centered-btns_nav.next {
  left: auto;
 
 background-position: right top;
 
 right: 0;
  }

.transparent-btns_nav {
  z-index: 3;
 
 position: absolute;
  
-webkit-tap-highlight-color: rgba(0,0,0,0);
 
 top: 0;
 
 left: 0;
  
display: block;

  background: #fff;
 /* Fix for IE6-9 */
 
 opacity: 0;

  filter: alpha(opacity=1);

  width: 48%;
 
 text-indent: -9999px;
 
 overflow: hidden;
 
 height: 91%;
 
 }

.transparent-btns_nav.next {
  left: auto;
 
 right: 0;
  }

.large-btns_nav {
  z-index: 3;

  position: absolute;
  
-webkit-tap-highlight-color: rgba(0,0,0,0);
  
opacity: 0.6;
 
 text-indent: -9999px;

  overflow: hidden;
  top: 0;

  bottom: 0;
 
 left: 0;
  
background: #000 url("themes.gif") no-repeat left 50%;

  width: 38px;
  
}

.large-btns_nav:active {
  opacity: 1.0;

  }

.large-btns_nav.next {
  left: auto;

  background-position: right 50%;
  right: 0;

  }

.centered-btns_nav:focus,
.transparent-btns_nav:focus,
.large-btns_nav:focus {
  outline: none;

  }

.centered-btns_tabs,
.transparent-btns_tabs,
.large-btns_tabs {
  margin-top: 10px;
 
 text-align: center;
 
 }

.centered-btns_tabs li,
.transparent-btns_tabs li,
.large-btns_tabs li {
  display: inline;

  float: none;
 
 _float: left;
  
*float: left;
  
margin-right: 5px;

  }

.centered-btns_tabs a,
.transparent-btns_tabs a,
.large-btns_tabs a {
  text-indent: -9999px;
 
 overflow: hidden;
 
 -webkit-border-radius: 15px;

  -moz-border-radius: 15px;
  

border-radius: 15px;
  background: #ccc;
 
 background: rgba(0,0,0, .2);

  display: inline-block;

  _display: block;
 
 *display: block;

  -webkit-box-shadow: inset 0 0 2px 0 rgba(0,0,0,.3);
 
 -moz-box-shadow: inset 0 0 2px 0 rgba(0,0,0,.3);
  
box-shadow: inset 0 0 2px 0 rgba(0,0,0,.3);

  width: 9px;
  height: 9px;

  }

.centered-btns_here a,
.transparent-btns_here a,
.large-btns_here a {
  background: #222;
 
 background: rgba(0,0,0, .8);
 
 }


</style>















        <style>
           



           
            #d1
            {
            margin-left:200px;    
                
            }
            #d2
            {
              width:974px;
              height:50px;
              background-color:red;
              margin-left: 200px;
              border-radius: 10px;
           
              
            }
            
             #d6{
             
               float:left;
               margin-left: 200px; 
               
                height:975px;
                width:970px;
                background-color: white;
                
                
                
            }
      
            
            #d14{
               width:680px;
               height:370px;
            
               float: right;
               margin-right: 10px;
               margin-top: 70px;
            }
        
            #d15{
               width:210px;
               height:320px;
               float:right;
               margin-right: 2px;
             margin-top: -100px;
               
              
               background-color:tan; 
               border-radius:6px;
            }
  
            
            
            
          
           
       
            #dd{
                margin-right:2px;
                float:right;
                 
            }
            
     
           
            
        </style>
        
     
  

<script>
    // You can also use "$(window).load(function() {"
    $(function () {

      
// Slideshow 1
      $("#slider1").responsiveSlides({
        auto: false,
        pager: true,
        nav: true,
        speed: 500,
        maxwidth: 800,
        namespace: "centered-btns"
      });


      // Slideshow 2
      $("#slider2").responsiveSlides({
        auto: false,
        pager: true,
        nav: true,
        speed: 500,
        maxwidth: 800,
        namespace: "transparent-btns"
      });

    
  // Slideshow 3
      $("#slider3").responsiveSlides({
        auto: false,
        pager: false,
        nav: true,
        speed: 500,
        maxwidth: 800,
        namespace: "large-btns"
      });

    });

  </script>
        
        
        
        
        
        
        
        
        
    </head>
        <body style="background-color:moccasin">
        <?php include'header.php'; ?>
            <div id="d6">
                <div id="d14">
              
                    
                <div id="wrapper">
 
   

    <!-- Slideshow 1 -->
    <div class="rslides_container">
  
    <ul class="rslides" id="slider1">

        <li><img src="ResponsiveSlides.js-master/demo/images/1.jpg" alt=""></li>
  
      <li><img src="ResponsiveSlides.js-master/demo/images/2.jpg" alt=""></li>

        <li><img src="ResponsiveSlides.js-master/demo/images/3.jpg" alt=""></li>
    
  </ul>
   
 </div>







   
  
</div> 
                
                
                           
                
                    
                    
              </div>
               
            <?php include'sidebar.php'; ?>
               
            </div>
         <?php include'footer.php'; ?>       
                
                
            
        </body>
</html>
