<?php

$conn = mysqli_connect("localhost", "root", "123456", "image_upload");  //connection with database

if(isset($_POST["submit"]))                                            //if form is submitted
{ 

    
        $f_name = $_FILES["imgInp"]["name"];       
        $f_tmp = $_FILES["imgInp"]["tmp_name"];
	    $store = "img/".$f_name;
	    move_uploaded_file($f_tmp,$store);               // Saving Image in the folder

        $q = "INSERT INTO image_table(image) VALUES('$f_name')";  //inserting image name in db

        mysqli_query($conn, $q) or exit(mysqli_error($conn));    


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>img</title>
</head>
<body>

    <div>
    <h1>Image Upload by Core PHP Method</h1>
        <form action="" method = "post" enctype="multipart/form-data">  <!-- 3rd parameter is must -->
            <input type="file" name="imgInp"/>&emsp;&emsp;
            <input type="submit" name="submit" value="upload">
        </form>
    </div>


    <?php
       $q1 = "SELECT * FROM image_table ORDER BY 1 DESC";

       $r = mysqli_query($conn, $q1) or exit(mysqli_error($conn)); 

       $fetch = mysqli_fetch_array($r);

       //echo $fetch[1];        // name fetched from db



        echo "<img src='img/$fetch[1]'>"; 

    ?>

</body>
</html>