<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="sty.css">

    <title>SCP Foundation</title>
  </head>
  <body class="container">

    <div class="div_head">
        <img src="images/scpheader.png">
    </div>

    <?php include "connection.php" ?>
    
    <!--menu -->
    <nav class="nav navbar-light">
        <ul>
            <li class="nav-item"><a href="index.php" class="nav-brand">Home</a></li>
            <li class="nav-item"><a href="form.php" class="nav-brand">Enter A SCP</a></li>
            <li class="nav-item">
                <nav class="navbar navbar-dark">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarToggleExternalContent" aria-contro="navbarToggleExternalContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
            </li>
            <?php foreach($record as $menu): ?>
            <li class="nav-item collapse" id="navbarToggleExternalContent">
                <a href="index.php?menu='<?php echo $menu['item']; ?>'" class="nav-link"><?php echo $menu['item']; ?></a>
            </li>
            <?php endforeach; ?>
                
        </ul>
    </nav>
    
    <!--Database content -->
    <div class="row">
        <div class="col">
            <?php
            
                if(isset($_GET['menu']))
                {
                    $item = trim($_GET['menu'], "'");
                    
                    //run sql query based on our $pg value
                    $record = $connection-> query("select * from scp where item='$item'") or die($connection->error());
                    
                    $single = $record->fetch_assoc();
                    // create variables to hold all our feild names from table
                    $item = $single['item'];
                    $class = $single['class'];
                    $des = $single['description'];
                    $con = $single['containment'];
                    $image = $single['image'];
                    $add1 = $single['additional1'];
                    $add2 = $single['additional2'];
                    $add3 = $single['additional3'];
                    
                    $id = $single['id'];
                    $update = "update.php?update=" . $id;
                    $delete = "connection.php?delete=" . $id;
                    
                    echo "
                    <h1>{$item}</h1>
                    <p><img src='{$image}'></p>
                    <hr>
                    <h2>{$class}</h2>
                    <hr>
                    <p>{$des}</p>
                    <hr>
                    <p>{$con}</p>
                    <hr>
                    <p>{$add1}</p>
                    <hr>
                    <p>{$add2}</p>
                    <hr>
                    <p>{$add3}</p>
                    
                    <p><a href='{$update}' class='btn btn-warning'>Update</a></p>
                    <p><a href='{$delete}' class='btn btn-danger'>Delete</a></p>
                    
                    ";
                }
                else
                {
                    //defualt view of index.php
                    echo "
                    <h1>List of SCPs</h1>
                    ";
                }
            
            ?>
        </div>
    </div>
    
    <?php foreach($record as $menu): ?>
    <div class="card" style="background-image: url(images/scpbgt.png);">
        <a href="index.php?menu='<?php echo $menu['item']; ?>'" class="incard"><?php echo $menu['item']; ?></a>
    </div>
    <?php endforeach; ?>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
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