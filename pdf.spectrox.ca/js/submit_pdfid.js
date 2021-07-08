$(document).ready(function(){
    $('pdfid_submit').click(function(){
        $.post("upload-pdf.php",{
            pdfid: $('#pdfid').val()
        });
    });
});