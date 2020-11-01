<?php
    $user = "a3003347_UserCRUD";
    $pwd = "UserCRUD1";
    $db = "a3003347_scp";

    $connection = new mysqli('localhost', $user, $pwd, $db) or die(mysqli_error($connection));

    $record = $connection->query("select * from scp")or die($connection->error());

    //Submit
    if(isset($_POST['submit']))
    {
        $item = $_POST['item'];
        $class = $_POST['class'];
        $des = htmlspecialchars($_POST['description']);
        $des = $connection->real_escape_string($des); 
        $con = htmlspecialchars($_POST['containment']);
        $con = $connection->real_escape_string($con); 
        $image = $_POST['image'];
        $add1 = htmlspecialchars($_POST['additional1']);
        $add1 = $connection->real_escape_string($add1); 
        $add2 = htmlspecialchars($_POST['additional2']);
        $add2 = $connection->real_escape_string($add2); 
        $add3 = htmlspecialchars($_POST['additional3']);
        $add3 = $connection->real_escape_string($add3);
        
        $sql = "insert into scp(item, class, description, containment, image, additional1, additional2, additional3) values('$item','$class','$des','$con','$image','$add1','$add2', '$add3')";
        
        if($connection->query($sql) === TRUE)
        {
            echo "<p class='alert alert-success'>SCP was entered</p>";
            echo "<p><a href='index.php'>Back to index page</p>";
        }
        else
        {
            echo "<p class='alert alert-danger'>Error in SCP form</p>";
            echo "<p><a href='index.php'>Back to index page</p>";
            echo "<p{$connection->error()}><</p>";
        }
    }
    
    //Update
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $item = $_POST['item'];
        $class = $_POST['class'];
        $des = htmlspecialchars($_POST['description']);
        $des = $connection->real_escape_string($des); 
        $con = htmlspecialchars($_POST['containment']);
        $con = $connection->real_escape_string($con); 
        $image = $_POST['image'];
        $add1 = htmlspecialchars($_POST['additional1']);
        $add1 = $connection->real_escape_string($add1); 
        $add2 = htmlspecialchars($_POST['additional2']);
        $add2 = $connection->real_escape_string($add2); 
        $add3 = htmlspecialchars($_POST['additional3']);
        $add3 = $connection->real_escape_string($add3); 
        
        $update = "update scp set item='$item', class='$class', description='$des', containment='$con', image='$image', additional1='$add1', additional2='$add2', additional3='$add3' where id='$id'";
        
        if($connection->query($update) === TRUE)
        {
            echo "SCP was updated";
            echo "<p><a href='index.php'>Back to index page</p>";
        }
        else
        {
            echo "Error in updating SCP";
            echo "<p><a href='index.php'>Back to index page</p>";
        }
    }

    //Delete
    if(isset($_GET['delete']))
    {
        $id =$_GET['delete'];

        $del = "delete from scp where id=$id";

        if($connection->query($del) === TRUE)
        {
            echo "<p>scp was deleted. <a href='index.php'></a></p>";
            echo "<p><a href='index.php'>Back to index page</p>";
        }
        else
        {
            echo "<p>There was an error deleting the scp. <a href='index.php'></a></p>
            <p{$connection->error()}><</p>
            ";
            echo "<p><a href='index.php'>Back to index page</p>";

        }
    }
?>