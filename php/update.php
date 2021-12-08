<?php
/**
 * @author Julien Westman
 * @copyright 2021 Julien Westman 
 * @since  Version 2.01
 * @version Version 0.01
 * @uses To retrieve and apply updates from github repository.
 */

$output=null;
$retval=null;

function update() {
    exec('~/pdf.glavin.net/bash/update.sh', $output, $retval);
}

if(isset($_POST['update_files'])){
    update();
    echo "Returned with status $retval and output:\n";
    print_r($output);
}

?>