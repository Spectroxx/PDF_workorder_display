<?php
/**
 * @author Julien Westman
 * @copyright 2021 Julien Westman 
 * @since  Version 0.10
 * @version Version 0.11
 * @uses To delete all files from /files/*
 */

if(isset($_POST['unlink_files'])){
    $file_path = ("/var/www/pdf.spectrox.ca/files");
    print_r($files = glob($file_path."/*.*",  GLOB_NOCHECK));
    foreach($files as $file){
        if(is_file($file)){
            chmod($file, 0777);
            unlink($file);
            echo "All Files deleted.";
            #sleep(3);
            #header("Location: https://pdf.spectrox.ca");
        }else{
            echo "There Has been an Error deleting your files.";
            #sleep(3);
            #header("Location: https://pdf.spectrox.ca");
        }
    } 
}
?>