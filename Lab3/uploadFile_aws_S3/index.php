<?php
require_once("../uploadFile_aws_S3/vendor/autoload.php");
$result="";
if(!empty($_FILES))
{
 if($_FILES["fileToUpload"]["size"]>_MAX_SIZE_)
 {
    $result= '<p class="text-danger text-center mt-4">File Exceeds available size</p>';
 }
 else if(!stristr($_FILES["fileToUpload"]["type"],_FILE_TYPE_))
 {
    $result= '<p class="text-danger text-center mt-4">Only images are allowed to be uploaded</p>';
 }
 else{
    $file_name = $_FILES["fileToUpload"]["name"];
    $file_uploader=new FileUploading;
    try{
        $new_file_name=uniqid().$file_name;
        $temp_file_location = $_FILES['fileToUpload']['tmp_name']; 
        $file_uploader->upload_file($new_file_name,$temp_file_location);
        $result= '<p id="success-msg" class="text-success text-center mt-4">Image uploaded successfully</p>
        <script>
        setTimeout(function(){
          document.getElementById("success-msg").style.display = "none";
        }, 1500);
      </script>';
    }
    catch(Aws\S3\Exception\S3Exception $e)
    {
        $result= '<p id="success" class="text-danger text-center mt-4">'.$e->getMessage().'</p>';
    }
 }
}
require_once("/xampp/htdocs/iti_php/Lab3/uploadFile_aws_S3/views/fileUpload.php");
