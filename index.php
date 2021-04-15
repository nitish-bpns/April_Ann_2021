<?php
require('Persistence.php');
$comment_post_ID = 1;
$db = new Persistence();
$comments = $db->get_comments($comment_post_ID);
$has_comments = (count($comments) > 0);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>April Ann-ARP IIT KGP</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <style type="text/css">
    
.photos{
  padding: 10px;
}
        .jumbotron {
          
  width:100%;
  height:100%;
  background: url('images/april\ ann.jpg');
  background-repeat: no-repeat, no-repeat;
  padding-top: 48%;
  padding-bottom: 0%%;
  -webkit-background-size: 100%;
  -moz-background-size: 100%;
  background-size: 100%;
  -o-background-size: 100%;
  text-align: :center;
}

.display-3{
  color:black;
}

.subhead{
  color: black;
  font-weight:normal;
}

.lead{
  color: black;
  font-weight: normal;
}

.my-4{
  border: 1px solid black;
  border-radius: 2px;
}

.img{
  height: 280px;
  width:100%;
  object-fit:cover;
  object-position:center center;
  padding: 10px;
}
.img:hover{opacity:0.9;
  transform: scale(1.16)
  }



.card-size{
height:330px;
width: 330px;

}

#footer{
  background-color: #484949;
  height: 40px;
  text-align: center;
  padding: 2px;
  margin-top: 20px; 
  font-family: sans-serif;
letter-spacing: 2px;
}

#entry{
  text-align: center;
  font-weight: bold;
  font-family:sans-serif; 
  
  letter-spacing: 4px;
  background-color: #222;
}
h2 {color:#ffffff;
position: relative;}

body{
  position: relative;
  background-image: url('images/wall5.jpg');
  
}
.zoom {
  padding: 50px;
  background-color: green;
  transition: transform .2s; /* Animation */
  width: 200px;
  height: 200px;
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
#respond {
  margin-top: 40px;
}

#respond input[type='text'],
#respond input[type='email'],
#respond textarea {
  margin-bottom: 10px;
  display: block;
  width: 100%;

  border: 1px solid rgba(0, 0, 0, 0.1);
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -o-border-radius: 5px;
  -ms-border-radius: 5px;
  -khtml-border-radius: 5px;
  border-radius: 5px;

  line-height: 1.4em;
}
#posts-list.has-comments li.no-comments {
  display: none;
}


.logo{
    height: 60%;
    width:60%;
    
  }

  .vertical-hr{
    border-right: 1px solid grey;
    height:50px;
    width: 2px;
    margin-right: 15px;
    
  }


  
  }

  </style>


  </head>
  <body data-spy="scroll" data-target="#navbar"
  >






    
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="navbar">


      <a class="navbar-brand "><img class="logo"  src="images\capture.jpg"></a>
  

  <a class="navbar-brand">IITKGP ARP</a>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="#jumbotron"> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#entry"></a>
      </li>
      
      
    </ul>
    
  </div>
</nav>



<div class="jumbotron" id="jumbotron">
  <h1 class="display-3"></h1>
  <p class="lead"></p>

  <p class="subhead"></p>
  
</div>


<div class="Entries" id="entry">
  <hr>
  <h2>
    
      ENTRIES
    </h2>
  

  <hr>
</div>

<div class="photos" id="photos">

<div class="card-deck">
  <div class="card card-size">
    <a href="https://drive.google.com/file/d/18t9khXYpEFw-6jY8FgmKFx1LxDhdms_k/view " target="_blank"target="_blank"><img src="images/1/1.png" class="card-img-top img" alt="..."></a>
    <div class="card-body">
      <h5 class="card-title">Code: 1</h5>
      
       
    </div>
  </div>
  <div class="card card-size">
    <a href=""><img src="" class="card-img-top img" alt="..."></a>
    <div class="card-body">
      <h5 class="card-title">Code: 2</h5>
      
       
    </div>

  </div>
  <div class="card card-size ">
    <a href=""><img src="" class="card-img-top img" alt="..."></a>
    <div class="card-body">
      <h5 class="card-title">Code: 3</h5>
    </div>
  </div>

  <div class="card card-size ">
    <a href=""><img src="" class="card-img-top img" alt="..."></a>
    <div class="card-body">
      <h5 class="card-title">Code: 4</h5>
      
    </div>
  </div>
</div>


<br>

<div class="card-deck">
  <div class="card card-size">
    <a href="L"><img src="" class="card-img-top img" alt="..."></a>
    <div class="card-body">
      <h5 class="card-title">Code: 5</h5>
      
       
    </div>
  </div>
  <div class="card card-size">
    <a href=""><img src="" class="card-img-top img" alt="..."></a>
    <div class="card-body">
      <h5 class="card-title">Code: 6</h5>

    </div>
  </div>


  <div class="card card-size">
    <a href=""><img src="" class="card-img-top img" alt="..."></a>
    <div class="card-body">
      <h5 class="card-title">Code: 7</h5>

    </div>
  </div>




  <div class="card card-size">
    <a href=""><img src="" class="card-img-top img" alt="..."></a>
    <div class="card-body">
      <h5 class="card-title">Code: 8</h5>
      
       
    </div>
  </div>
    
</div>


  
  
</div><div id="respond">

  <h3>Leave a Comment</h3>
  <?php

 echo "<form action="post_comment.php" method="post" id="commentform">

    <label for="comment_author" class="required">Your name</label>
    <input type="text" name="comment_author" id="comment_author" value="" tabindex="1" required="required">

    <label for="email" class="required">Your email;</label>
    <input type="email" name="email" id="email" value="" tabindex="2" required="required">

    <label for="comment" class="required">Your message</label>
    <textarea name="comment" id="comment" rows="10" tabindex="4"  required="required"></textarea>

    <!-- comment_post_ID value hard-coded as 1 -->
    <input type="hidden" name="comment_post_ID" value="1" id="comment_post_ID" />
    <input name="submit" type="submit" value="Submit comment" />

  </form>"
?>
</div>

<br>




<div id="footer" >

  
</div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
