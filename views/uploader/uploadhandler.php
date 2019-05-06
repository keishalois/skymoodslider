<?php

    function uploadForm() {
        $fileTypes = ['application/xml', 'text/xml'];
        $fileName = $_FILES['uploadFile']['name'];
        $fileError = $_FILES['uploadFile']['error'];
        $destination = join(DIRECTORY_SEPARATOR, array(__DIR__,'..','..','uploads/'));
        if ($fileError === 0) {
            if (!in_array($_FILES['uploadFile']['type'], $fileTypes)) {
               die("XML Files only -  try again." . "<br> <a href='../../index.php'>Try Again</a>");}
        $tmpFile = $_FILES['uploadFile']['tmp_name'];
        $dstFile = $destination . $fileName;
            if (!move_uploaded_file($tmpFile, $dstFile)) { 
        //if unable to move file check permissions in finder, go to the file/folder - get info 
                    die("Did not move file properly -  try again." . "<br> <a href='../../index.php'>Try Again</a>");}
            if (file_exists($tmpFile)) {
                    unlink($tmpFile); }
        header("Location: __DIR__ . /../../../index.php");
    exit();      
            } 
    else {
        checkError($fileError);   
            }
    }
    
    function checkError($error) {
            switch ($error) {
        //error throws 1 means uploaded file exceeds the upload_max_filesize directive in php.ini   
            //UPLOAD_ERR_INI_SIZE
        //error throws 2 means uploaded file exceeds the MAX_FILE_SIZE directive in HTML form
            //UPLOAD_ERR_FORM_SIZE
                case 1: case 2: $fileError = "Your file is too big."; break;
        //error 3 means uploaded file was only partially uploaded
            //UPLOAD_ERR_PARTIAL
                case 3: $fileError = "File was only partially uploaded"; break;
        //error 4 means no file uploaded
            //UPLOAD_ERR_NO_FILE
                case 4: $fileError = 'No file uploaded.'; break;
        //error 6 means no temp directory specified
            //UPLOAD_ERR_NO_TMP_DIR
                case 6: $fileError = 'No temp directory specified.'; break;
    // error 7 means failed to write file to disk
            //UPLOAD_ERR_CANT_WRITE
                case 7: $fileError = 'Cannot write to disk.'; break;
        //error 8 means PHP extension stopped the file upload
                case 8: $fileError = 'A PHP extension stopped the file upload'; break;
                default : $fileError = 'Unknown error - try again';
            }
            return $fileError;
        }
        
if (!empty($_POST['uploadFile'])) {
    uploadForm();
        }
echo uploadForm();