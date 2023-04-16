<html>
<head>
<title>PHP File Upload example</title>
</head>
<body style="background-color:cyan;">
<style>
p 
    { 
        background-color: yellow; 
        border: 3px solid black; 
        text-align: center; 
  
    }

#grad
    {
    background-image: linear-gradient(indigo,violet,cyan);
    text-align: center;  
    }   

</style>
<div id = "grad">
<b>
<form action="" enctype="multipart/form-data" method="post">
Select image from dir :
<input type="file" name="file"><br/><br>
<input type="submit" value="Upload" name="Submit1"> <br/>
</b>
</form><p>
<?php
if(isset($_POST['Submit1']))
{
    $target_dir = "LAMP LAB/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["file"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        }
        else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    echo $target_file;

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    }
    else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.";

            echo "Content last changed: ".date("F d Y H:i:s.", filemtime($target_file));?></p>
            <br><br><br><br><b><?php
            echo "<img src='".$target_file."' width='200'> ";    //display image

        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

} 
?>
</body>
</html>
