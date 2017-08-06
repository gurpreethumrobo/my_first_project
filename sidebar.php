<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <style>
            #d3
            {
              height:975px;
              width:250px;
              background-color:tomato; 
              margin-left:0px;
               float:top;
              margin-top: 0px;
            
             
            }  
            #d4
            {
             height:100px;
             width: 210px;
             background-color: moccasin;
             margin-left: 20px;
             margin-top:4px!important;
           
             float:top;
             border-radius:6px; 
                 
            }
      
            #d5{
               height:220px;
               width:210px;
               background-color:lightgreen;
               margin:auto;
               float:top;
               border-radius: 6px;
            }
              
            #butn{
                float:bottom;
                margin-bottom: 4px;
                margin-left: 150px;
            }
             #d8{
                 height:297px;
               width:210px;
               background-color:lightsalmon;
               margin-top: -10px;
               margin-left: 20px;
               float:top;
               border-radius: 6px;
               }
                #eventHeading{
                color:white;
                
            }
            
            #d9{
              height:265px;
               width:210px;
               background-color:moccasin;
               margin-top: 25px;
               margin-left: 20px;
               float:top;
               border-radius: 6px;
            }
            #d10{
                height:25px;
                width:150px;
                margin-left: 20px;
                margin-top: 20px;
                float: left;
                border:1px solid gold;
                border-radius:8px;
                background-color: whitesmoke;
                
                box-shadow: 6px -2px 5px 5px gold;
                color: red;
                font-style:oblique;
                
            }
             #buton{
                float:right;
                margin-bottom: 4px;
                margin-right: 5px;
            }
             @media screen and (max-width : 980px) {
                 
             #d3
            {
              height:980px;
              width:250px;
              background-color:tomato; 
              margin-left:0px;
               float:top;
              margin-top: 0px;
            
             
            }     
             #d9{
              height:265px;
               width:210px;
               background-color:moccasin;
               margin-top: 25px;
               margin-left: 20px;
               float:top;
               border-radius: 6px;
            }
                 
             }
              @media screen and (max-width : 800px) {
                #d3
            {
              height:980px;
              width:200px;
              background-color:tomato; 
              margin-left:0px;
               float:top;
              margin-top: 0px;
              font-size: 13px;
            
                
            }     
             #d9{
              height:265px;
               width:210px;
               background-color:moccasin;
               margin-top: 25px;
               margin-left: 20px;
               float:top;
               border-radius: 6px;
            } 
            #d4
            {
             height:100px;
             width: 160px;
             background-color: moccasin;
             margin-left: 20px;
             margin-top:4px!important;
           
             float:top;
             border-radius:6px; 
             font-size: 12px;    
            }
            #d5{
               height:220px;
               width:160px;
               background-color:lightgreen;
               margin:auto;
               float:top;
               border-radius: 6px;
            }
             #butn{
                float:bottom;
                margin-bottom: 4px;
                margin-left: 90px;
            }
            #d8{
                 height:287px;
               width:160px;
               background-color:lightsalmon;
               margin-top: -10px;
               margin-left: 20px;
               float:top;
               border-radius: 6px;
               
                
            }
            #eventHeading{
                color:white;
                font-size: 16px;
            }
             #d9{
              height:265px;
               width:160px;
               background-color:moccasin;
               margin-top: 25px;
               margin-left: 20px;
               float:top;
               border-radius: 6px;
            }
            #d10{
                height:25px;
                width:112px;
                margin-left: 20px;
                margin-top: 20px;
                float: left;
                border:1px solid gold;
                border-radius:8px;
                background-color: whitesmoke;
                
                box-shadow: 6px -2px 5px 5px gold;
                color: red;
                font-style:oblique;
                
            }
              }
        </style>
    </head>
    <body>
<div id="d3">
                <br>
                <div id="d4"><center><br>
                 Apply For Memberships<br>
                     Apply For Scholership<br>
                     Sponsered Forum</center>
                   
                </div>
                
                <div id="d5"><h4 style="color: green" align="center">Thought of  the day</h4>
                 <p align="center"> 
                     <?php 
                      $select=  mysqli_query($d,"select * from thought_of_day where id=6");
                       while($row = mysqli_fetch_array($select)) { 
                         
                          echo $row['description']; ?><br>
                      
                       
                       <?php } ?>
                     
                    </p>
                    <a href="thought.php"> <input type="button" id="butn" name="submit" value="Details" ></a>
                </div>
                
                <div id="d8"><h2 id="eventHeading">&nbsp;&nbsp; EVENTS >  > </h2>
                    
                    <marquee direction="up"onmouseover="this.stop();"onmouseout="this.start();" style="height:220px"> 
                     <?php  
                      $select=  mysqli_query($d,"select * from add_event");
                       while($row = mysqli_fetch_array($select)) { ?>
                         &nbsp; <u><?php echo $row['date']; ?></u><br>&nbsp&nbsp
                         <?php echo $row['description']; ?><br>
                        <p align="right"> <a href="event.php?id=<?php  echo $row['id']; ?>"> More</a></p>
                       
                       <?php } ?>
                    </marquee>
                </div>
               
                
                <div id="d9">
                    <div id="d10">&nbsp&nbsp;&nbsp&nbsp; <b>Finance</b>
                        
                    </div>
                    <br><br><br>
                 <p align="center"> sed em ne com fert de koiu <br>abs fonom lodc doik  fol koif<br>
                     sder der gef. vuk vre dse sefr.<br>
                     dase hu goj kue fkii kofr<br>
                  
                  der.thu kio dew cfe moi <br>ert egnu. uji uhter plos ki <br>
                 vti...</p>
                 
                 <input type="button" id="buton" name="submit" value="Details" >
            </div>
                
            
              
         </div>
    </body>    
     </html>  