<?php  
/**
 * @author Julien Westman
 * @copyright 2021 Julien Westman 
 * @since  Version 0.01
 * @version Version 0.10
 * @uses To retrieve and rename uploaded files.
 */

$pdfid = $_POST["pdfid"];
echo "File Name:  $pdfid . <br>";
  
if(isset($_FILES['file'])){
    $file = $_FILES['file'];
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];
    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));
    $allowed_file_types = array('pdf', 'png', 'jpg');
	
    if(in_array($file_ext, $allowed_file_types)){
        if($file_error === 0){
            if($file_size < 999999999){
                $file_name_new = uniqid('', true) . '.' . $file_ext;
                $file_destination = '/var/www/pdf.spectrox.ca/files/' . $file_name_new;
                if(move_uploaded_file($file_tmp, $file_destination)){
                    header("Location: https://pdf.spectrox.ca");
                    echo '<script>alert("Success! Your file has been uploaded!")</script>';
                    $file_destination;
                }else{
                    echo "<br> There was an error uploading your file!\n";
                    echo "<br>";
                    echo "<br>";
                    print_r(error_get_last());
                }
            }
        }
    }
}

rename('/var/www/pdf.spectrox.ca/files/' . $file_name_new, '/var/www/pdf.spectrox.ca/files/' . $pdfid . '.' . $file_ext);

?>