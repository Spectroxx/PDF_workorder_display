<?php
/**
 * @author Julien Westman
 * @copyright 2021 Julien Westman 
 * @since  Version 2.01
 * @version Version 0.01
 * @uses To retrieve and apply updates from github repository.
 */

ini_set('display_errors', 1);
$output=null;

if(isset($_POST['update_files'])){
    exec('sh /home2/glavin/pdf.glavin.net/shell/update.sh', $output);
    print_r($output);
}
sleep(3);
header("Location: https://pdf.glavin.net");

?>