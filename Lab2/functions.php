
<?php

function validate_form()
{
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $msg = isset($_POST["message"]) ? $_POST["message"] : "";

    if (empty($_POST["name"])) {
        return "Name is required";
    } elseif (empty($_POST["email"])) {
        return "Email is required";
    } elseif (empty($_POST["message"])) {
        return  "message is required";
    } else if (strlen($name) > _MAX_NAME_LENGTH_) {
        return  "Error exceed name length please, enter name less than 100 char";
    } else if (strlen($msg) > _MAX_MSG_LENGTH_) {
        return  "Error exceed message length please, enter message less than 255 char";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return  "Error email is not correct";
    } else {
        return  "";
    }
}
function remember_var($var){
    if(isset($_POST[$var]) && !empty($_POST[$var])){
      return $_POST[$var];
    }else{
        return "";
    }
  }
//   function save_to_file() {
//    file_put_contents("../Lab2/files/data.txt",implode(" , ", $_POST));
// }
function save_to_file($date) {
    print_r($_POST);
    $fp = fopen(_Saving_File_, "a+");
    $written_string = $date." ,".
    $_SERVER['REMOTE_ADDR']." ,".
    implode(" ,", $_POST);
    fwrite($fp, $written_string.PHP_EOL);
    fclose($fp);
}
function convert_file_to_array() {
    return file(_Saving_File_);
}

?>