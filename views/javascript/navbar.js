$(document).ready(function(){
    //this allows the selected file name to be displayed in the nav bar file upload 
$(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

//this allows the popup of the file upload help
$('#help').tooltip({ boundary: 'window' });

});