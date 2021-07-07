<?php

$pdfid = $_POST['pdfid'];
echo "$pdfid";



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
                echo var_dump($pdfid) . "<br>";
                $file_name_new = rename($file_name, $pdfid) . '.' . $file_ext;
                echo $file_destination = '/var/www/pdf.spectrox.ca/files/' . $file_name_new;

                if(move_uploaded_file($file_tmp, $file_destination)){
                    #header('refresh: 1; url= redirrect');
                    echo '<script>alert("Success! Your file has been uploaded!")</script>';
                    $file_destination;
                }else{
                    echo "There was an error uploading your file!\n";
                    echo "<br>";
                    echo "<br>";
                    print_r(error_get_last());
                }
            }
        }
    }
}
?>