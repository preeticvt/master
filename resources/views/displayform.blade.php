<html>
<head>
<title>Laravel Image Upload</title>
<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
<script>



<?php
$target_dir = "var/www/html/btnnmhd.comm/public/uploads/";//$target_dir = "uploads/" - specifies the directory where the file is going to be placed
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); //$target_file specifies the path of the file to be uploaded

$uploadOk = 1; //$uploadOk=1 is not used yet (will be used later)
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));//$imageFileType holds the file extension of the file (in lower case)

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 1024) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
</script>




<style>
            body {
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .main {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
                margin-bottom: 40px;
            }

            .quote {
                font-size: 24px;
            }

            label{
                margin-right:20px;
            }

            form{
                background:#f5f5f5;
                padding:20px;
                border-radius:10px;
            }

            input[type="submit"]{
                background:#0098cb;
                border:0px;
                border-radius:5px;
                color:#fff;
                padding:10px;
                margin:20px auto;
            }

        </style>
    </head>
    
    <body>
        <div class="main">
            <div class="content">                
                <h1>File Upload</h1>
                <form action="{{ URL::to('/upload') }}" method="post" enctype="multipart/form-data">
                    <label>Select image to upload:</label>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload" name="submit">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                </form>

            </div>
        </div>
    </body>
</html>
