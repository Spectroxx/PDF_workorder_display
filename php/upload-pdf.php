<?php  
/**
 * @author Julien Westman
 * @copyright 2021 Julien Westman 
 * @since  Version 0.01
 * @version Version 0.10
 * @uses To retrieve and rename uploaded files.
 */

ob_start();
$pdfid = $_POST["pdfid"];
echo "There was an Error uploading file name:  $pdfid. <br>";


if(isset($_FILES['file'])){
    $file = $_FILES['file'];
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];
    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));
    $allowed_file_types = array('pdf');
	
    if(in_array($file_ext, $allowed_file_types)){
        if($file_error === 0){
            if($file_size < 999999999){
                $file_name_new = uniqid('', true) . '.' . $file_ext;
                $file_destination = '/home2/glavin/pdf.glavin.net/resources/files/' . $file_name_new;
                if(move_uploaded_file($file_tmp, $file_destination)){
                    $file_destination;
		            header("Location: https://pdf.glavin.net");
                }
            }
        }
    }
}

rename('/home2/glavin/pdf.glavin.net/resources/files/' . $file_name_new, '/home2/glavin/pdf.glavin.net/resources/files/' . $pdfid . '.' . $file_ext);

?>