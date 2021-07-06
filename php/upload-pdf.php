<?php
$targetfolder = "var/www/pdf.spectrox.ca/testupload/";
$targetfolder = $targetfolder . basename( $_FILES['file']['name']);

if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder)){
    chmod($targetfolder, 0777);
    echo "The file ". basename( $_FILES['file']['name']). " is uploaded";
}else {
echo "There has been an error uploading your PDF file. Please try again.";
}
?>