<?php
session_start();
include'config.php';





?>


<html>
    
    <head><title>
            
        </title>
        
        <style>
            
            
             #d6{
             
               float:left;
               margin-left: 200px; 
               
                height:975px;
                width:970px;
                background-color: white;
                
                
                
            }
      
            
            #d14{
               width:500px;
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
            .active{
                background-color: gold;
            }
         @media screen and (max-width : 980px) {  
          
        #d6{
             
               float:left;
               margin-left: 3px; 
               
                height:980px;
                width:970px;
                background-color: white;
                
                
                
            }
             #d14{
               width:600px;
               height:370px;
            
               float: right;
               margin-right: 70px;
               margin-top: 70px;
            }
            #maha{
               width:375px; 
               margin-left:0px; 
            }
            #haha{
              width:375px;  
            }
             #d15{
               width:193px;
               height:320px;
               float:right;
               margin-right: 2px;
             margin-top: -100px;
               
              
               background-color:tan; 
               border-radius:6px;
            }
  
            
         } 
          @media screen and (max-width : 800px) {
              
              
            #d6{
             
               float:left;
               margin-left: 3px; 
               
                height:980px;
                width:790px;
                background-color: white;
                
                
                
            }  
              
           #dd{
                margin-right:2px;
                float:right;
                 width:587px
            }   
            #d14{
               width:530px;
               height:370px;
            
               float: right;
               margin-right: 10px;
               margin-top: 70px;
               font-size: 13px;
            }
            #maha{
               width:320px; 
               margin-left:0px; 
            }
            #haha{
              width:320px;  
            }
             #d15{
               width:170px;
               height:320px;
               float:right;
               margin-right: 2px;
             margin-top: -100px;
               
              
               background-color:tan; 
               border-radius:6px;
            }
          }
         
        </style>
    </head>
        <body style="background-color:moccasin">
        <?php include'header.php'; ?>
            
            <div id="d6"> <img src="image\prtap.png" id="dd">
                
                <div id="d14">  <img src="image\mahabharat.png" id="maha"> 
                
               
               <img src="image\hahabharat.png" id="haha">
               <div id="d15"> <p align="center">Testimonial</p>
            <marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();"style="height:235px">
                 <?php 
                          
                 
                     
                         $select =  mysqli_query($d,"select * from testimonial" );
                       while($row = mysqli_fetch_array($select)) {  ?>
                           
                   &nbsp; <u><?php echo $row['testi_name']; ?></u><br>&nbsp&nbsp
                         <?php echo $row['description']; ?><br>
                        <p align="right"> <a href="testimonial.php?id=<?php  echo $row['id']; ?>"> More</a></p>
                       
                       <?php } ?>  
                        
            </marquee>
              
               </div> 
         
      
                </div>
                
                
            <?php include'sidebar.php'; ?>
                
               
            </div>
            
           <?php include'footer.php'; ?>
            
            
            
        </body>
</html>
