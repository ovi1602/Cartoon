<?php
session_start();
if(isset($_SESSION['email'])) header('Location: Code.php');

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>CARTOON</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/css_style_new_account.css">
    <link rel="stylesheet" href="css/css_style_principal.css">

  </head>
      <body>
      
      <!-- the jumbotron -->
      
      <div id="cust-jumbotron" class="jumbotron">
         <div class="container">
          <h2 class="text-center">Cartoon&nbsp;<span class="glyphicon glyphicon-user" aria-hidden="true"></span></h2>
              <p class="text-center">
                 Register for recycling!
              </p>
              
        </div>
      </div>
      
      
      <!-- thumbnails -where all the magic happens -->
      
      
      <div class="resize" >
          
          <div class="row">
  <div class=" col-md-8">
    <div class="thumbnail">
      <!--<img src="..." alt="...">-->
      <div class="caption">
        <h2 class="alligning-text">Login</h2>
        
        <!--starts the slist -->
        <form action="login.php" method="post">
        <ul   class="list-group">
          <li class="color-cust list-group-item">
              <div class="form-group" style="margin:-20px">
    <label class="alligning-text" for="exampleInputEmail1"><h3>Email address</h3></label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="Email">
  </div>
          </li>
          <li class="color-cust list-group-item">
              <div class="form-group">
    <label class="alligning-text"  for="exampleInputEmail1"><h3>Password</h3></label>
    <input type="password" class="form-control" id="examplePassword1" name="Pwd" placeholder="Password...">
  </div>
          </li>
         
          <div style="text-align:center;">
          <button type="submit" class="btn btn-lg" >Submit</button>
            </div>
        </ul>
        </form>
     <!-- ends the list-->
     
      </div>
    </div>
  </div>
  
  
  <div class=" col-md-4">
  
    <div class="thumbnail">
      <h2>Why recycle?</h2>
        <ul id="rec-ul"class="list-group ">
  <li class="list-group-item"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> &nbsp;&nbsp;  Recycling conserves resources</li>
  <li class="list-group-item"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> &nbsp;&nbsp;  Recycling saves energy</li>
  <li class="list-group-item"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> &nbsp;&nbsp;  Recycling helps protect the environment</li>
  <li class="list-group-item"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> &nbsp;&nbsp;  Recycling reduces landfill</li>
 
</ul>
     
      
    </div>
  </div>
    
  
       
</div> 
      </div>
       
       <div class="jumbotron" align = "center">
  <h3>Don't have an account!</h3>
  
  <p><a class="btn btn-primary btn-lg" href="new_account.php" role="button">Click here!</a></p>
</div>
        
      


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
      </body>
</html>