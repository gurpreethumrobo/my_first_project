<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<html><head><style>
            #d1
            {
            margin-left:200px;
            border-radius: 9px;
            
               
            }
            #d2
            {
              width:970px;
              height:50px;
              background-color:red;
              margin-left: 200px;
              border-radius: 5px;
                                                            
            }
            #table
            {
                color:white; 
                font-size: 12px;
                margin-left: 20px;
            }
            .th
            {
               width:80px; 
            }
            @media screen and (max-width : 980px) {      /* start responsive first image */ 
             #d1
            {
            margin-left:1px;
            border-radius: 7px;
            
               
            }
             #d2
            {
             
              width:970px;
              height:50px;
              background-color:red;
              margin-left: 2px;
              border-radius: 3px;
                                                            
            }
              #table
            {
               color:white; 
                font-size: 12px;
                margin-left: 0px;
            
               
            }
                
            } 
            @media screen and (max-width : 800px) {  
             #d1
            {
            margin-left:0px;
            border-radius: 5px;
            width:800px;
            
               
            }
              #d2
            {
             
              width:790px;
              height:50px;
              background-color:red;
              margin-left: 2px;
              border-radius: 3px;
                                                            
            }
            
             #table
            {
                color:white; 
                font-size: 10px;
                margin-left: 20px;
            }
            #org
            {
            width:220px;    
            }
            
            }
            @media screen and (max-width : 768px) {  
             #d1
            {
            margin-left:0px;
            border-radius: 5px;
            width:760px;
            
               
            }
            #d2
            {
             
              width:758px;
              height:50px;
              background-color:red;
              margin-left: 2px;
              border-radius: 3px;
                                                            
            }
            
             #table
            {
                color:white; 
                font-size: 10px;
                margin-left: 10px;
            }
            #org
            {
            width:220px;    
            }
            }
            @media screen and (max-width : 360px) {  
             #d1
            {
            margin-left:0px;
            border-radius: 3px;
            width:360px;
            
               
            }
            #d2
            {
             
              width:353px;
              height:50px;
              background-color:red;
              margin-left: 0px;
              border-radius: 3px;
                                                            
            }
            
             #table
            {
                color:white; 
                font-size: 9px;
                margin-left: 5px;
            }
            #org
            {
            width:220px;    
            }
             .th                                                                                                      
            {
               width:6px; 
            }
            }
            @media screen and (max-width : 320px) {  
             #d1
            {
            margin-left:0px;
            border-radius: 2px;
            width:313px;
            
               
            }
            }                                                                 
        
        
                            
            
       
         
            
               
           
            
            
            
            
            
        
        </style>
    </head>
    <body>
        <div style=" margin-top: -7px;">
<image id="d1" src="image\rajpu.png">

            <div id="d2">
                <table  id="table">
                    
    <tr height="50">
        <th class="th"><a href="home.php" style="color:white;text-decoration: none">HOME</a></th>
        <th width="170" id="org"><a href="organization_chart.php"style="color:white;text-decoration: none">ORGANIZATION CHART</a></th>
       <?php if(isset($_SESSION['id'])){ ?>
        <th class="th"><a href="myProfile.php" style="color:white;text-decoration: none">DASHBOARD</a></th>
       <?php } else { ?>
        <th class="th"><a href="members.php" style="color:white;text-decoration: none">MEMBERS</a></th>
        <?php } ?>
        <th class="th"><a href="history.php" style="color:white;text-decoration: none">HISTORY</a></th>
       <th class="th"><a href="donors.php" style="color:white;text-decoration: none">DONORS</a></th>
       <th class="th"><a href="finance.php" style="color:white;text-decoration: none">FINANCE</a></th>
      <th class="th"><a href="achievements.php" style="color:white;text-decoration: none">ACHIEVEMENTS</a></th>
      <th class="th"><a href="testimonial.php" style="color:white;text-decoration: none">TESTIMONIAL</a></th>
      <th class="th"><a href="event.php" style="color:white;text-decoration: none">EVENTS</a></th>
      <th class="th"><a href="gallery.php" style="color:white;text-decoration: none">GALLERY</a></th>
      <?php if(isset($_SESSION['id'])){ ?>
      <th class="th"><a href="logout.php" style="color:white;text-decoration: none">LOGOUT</a></th></tr>
      
      <?php } else { ?>
           <th class="th"><a href="memb_login.php" style="color:white;text-decoration: none">LOGIN</a></th></tr>
     <?php  } ?>       
                </table>
         </div>
        </div>
    </body>
</html>