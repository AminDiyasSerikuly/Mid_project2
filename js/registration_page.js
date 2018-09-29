var array = [".com",".net",".ru",".io","su"];
var array2 = [];
var num ;
var boolean = false;
 function  checking(){
     for(i = 0; i < array.length; i++){
       if($("input[name='eml']").val().indexOf(array[i]) > -1){
            return true;}}}



// =================================================================================================================

$(document).ready(function(){
    $("button[name='create']").bind("click", function(){
    if($("input[name='eml']").val() != "" &&  $("input[name='password1']").val() != ""  && $("input[name='password2']").val() != ""){
          if (($("input[name='password1']").val()).length > 10){
                if($("input[name='password1']").val() == $("input[name='password2']").val()){
                      $("#invalid").empty();
                      var string  =   $("#invalid").val();
                       // if ($("#textarea1").val().indexOf("@") > -1 && $("#textarea1").val().indexOf(".") > -1 ) {
                        if ($("input[name='eml']").val().indexOf("@") > - 1 && checking()){

                  // ============================================================================  ajax_sending

                        $.ajax({
                        type: "POST",
                        url: "php/registration_page.php",
                        data: ({mail: $("input[name='eml']").val(), password: $("input[name='password1']").val(), uname: $("input[name='username']").val()
                        , question:$("input[name='question']").val(), answer: $("input[name='answer']").val()}),
                        success: success_proccessing  });}

                  // ============================================================================  ajax_sending
                      else{
                          alert("Your given e-mail is not correct!! You must use '@' and '.' !!");
                          $("#invalid").text("---Your given e-mail is invalid !!---");}}
                else {
                      $("#invalid").text("---your passwords did not coincided---");}}
          else{
                $("#invalid").text("---your password must contain more than 10 charcters---");}}
    else{
          $("#invalid").text("---The area is empty---");}});


function success_proccessing(data){
    if(data == "success"){
        $("#invalid").text("Welcome Asyl arman");

        }      else if (data == "already") {
                    $("#invalid").text("---you have already registered---");}}


                    });
