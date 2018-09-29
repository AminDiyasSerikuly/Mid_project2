
function success_proccessing(data){
  if(data == "No")
    $("#invalid").text("Try again invalid login or Password");
  else
  $.ajax({

      type: "POST",
      url: "php/central_server.php",
      data: ({mail: data}),
      success: function(data){
        alert(data);
      }
  });


        window.location.href = "profile.html";
        alert("assass");

      // window.open("second_page.html");
    $("#invalid").text(data);

}
function waitShow(){
  $("#invalid").text("waiting");
}
$(document).ready(function(){
  $("button[name='login_btn']").bind("click", function(){
   if($("input[name='email_enter']").val() != "" &&  $("input[name='password_enter']").val() != "" ){
     $.ajax({
       type: "POST",
       url: "php/registration_page_check.php",
       data: ({mail: $("input[name='email_enter']").val() ,password: $("input[name='password_enter']").val()}),
       beforeSend: waitShow,
       success: success_proccessing
     });}
     else{
           $("#invalid").text("the area is empty");
     }
  });
});
