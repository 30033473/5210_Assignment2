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

    <nav class="nav navbar-light">
        <ul>
            <li class="nav-item"><a href="index.php" class="nav-brand">Home</a></li>
            <li class="nav-item"><a href="form.php" class="nav-brand">Enter A SCP</a></li>
        </ul>
    </nav>
    
    <h1>Submit a SCP</h1>

    <form class="form group" method="post" action="connection.php">
        <label>Item</label>
        <br>
        <input type="text" class="form-control" name="item">
        <br>
        <label>Class</label>
        <br>
        <input type="text" class="form-control" name="class">
        <br>
        <label>Description</label>
        <br>
        <input type="text" class="form-control" name="description">
        <br>
        <label>Containment</label>
        <br>
        <input type="text" class="form-control" name="containment">
        <br>
        <label>Image</label>
        <br>
        <input type="text" class="form-control" name="image">
        <br>
        <label>Additional 1</label>
        <br>
        <input type="text" class="form-control" name="additional1">
        <br>
        <label>Additional 2</label>
        <br>
        <input type="text" class="form-control" name="additional2">
        <br>
        <label>Additional 3</label>
        <br>
        <input type="text" class="form-control" name="additional3">
        <br>
        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
    </form>

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