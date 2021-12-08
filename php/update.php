<?php
/**
 * @author Julien Westman
 * @copyright 2021 Julien Westman 
 * @since  Version 2.01
 * @version Version 0.01
 * @uses To retrieve and apply updates from github repository.
 */

ini_set('display_errors', 1);
$contents = file_get_contents('~/pdf.glavin.net/bash/update.sh');

if(isset($_POST['update_files'])){
    echo shell_exec($contents);
    echo "Success!";
}

?>