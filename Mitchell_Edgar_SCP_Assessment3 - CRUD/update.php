<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="sty.css">

    <title>Update SCP</title>
  </head>
  <body class="container">
      
    <div class="div_head">
        <img src="images/scpheader.png">
    </div>

    <nav class="nav navbar-light">
        <ul>
            <li class="nav-item"><a href="index.php" class="nav-brand">Home</a></li>
            <li class="nav-item"><a href="form.php" class="nav-brand">Enter A SCP</a></li>
        </ul>
    </nav>
    
    <h1>Update SCP</h1>
    
    <?php
        include "connection.php";
        $id = $_GET['update'];
        
        $record = $connection->query("select * from scp where id=$id") or die($connection->error());
        $row = $record->fetch_assoc();
    ?>

    <form class="form group" method="post" action="connection.php">
        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
        <br>
        <label>Item</label>
        <br>
        <input type="text" class="form-control" name="item" value="<?php echo $row['item'];?>">
        <br>
        <label>Class</label>
        <br>
        <input type="text" class="form-control" name="class" value="<?php echo $row['class'];?>">
        <br>
        <label>Description</label>
        <br>
        <textarea class="form-control" name="description" placeholder="<?php echo $row['description'];?>"><?php echo $row['description'];?></textarea>
        <br>
        <label>Containment</label>
        <br>
        <textarea class="form-control" name="containment" placeholder="<?php echo $row['containment'];?>"><?php echo $row['containment'];?></textarea>
        <br>
        <label>Image</label>
        <br>
        <input type="text" class="form-control" name="image" value="<?php echo $row['image'];?>">
        <br>
        <label>Additional 1</label>
        <br>
        <input type="text" class="form-control" name="additional1" value="<?php echo $row['additional1'];?>">
        <br>
        <label>Additional 2</label>
        <br>
        <input type="text" class="form-control" name="additional2" value="<?php echo $row['additional2'];?>">
        <br>
        <label>Additional 3</label>
        <br>
        <input type="text" class="form-control" name="additional3" value="<?php echo $row['additional3'];?>">
        <br>
        <input type="submit" class="btn btn-warning" name="update" value="Update">
    </form>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
    <div class="footer">
        <button onclick="topFunction()" id="myBtn" title="Go to top"><img class="img_footer" src="images/SCP_Logo.png"></button>
        <script>
            var mybutton = document.getElementById("myBtn");
            mybutton.style.display = "block";
            
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
    </div>
    
  </body>
</html>