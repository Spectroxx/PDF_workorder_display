/*
$(document).ready(function(){
    $('pdfid_submit').click(function(){
        $.post("upload-pdf.php",{
            pdfid: $('#pdfid').val()
        });
    });

});
*/
$(document).ready(function () {
    $('#pdfid_submit').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url : $(this).attr('action') || window.location.pathname,
            type: "GET",
            data: $(this).serialize(),
            success: function (data) {
                $("#pdfid").html(data);
            },
            error: function (jXHR, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
    });
});