function wait(){
  // alert("work");
}
function suc(data){
  $("select[name='version_of_logo']").empty();
  $("select[name='version_of_logo']").append($("<option value='"+0+"'>" +"Выбрать"+"</option>"));
    data = JSON.parse(data);
    for(var id in data){
      $("select[name='version_of_logo']").append($("<option value='"+id+"'>" +data[id]+"</option>"));}}

$(document).ready(function(){
    $("select[name='car_logo']").bind("change",function(){
      $.ajax({
          url:"php/select.php",
          type: "POST",
          data: ({logo: $("select[name='car_logo']").val()}),
          beforeSend: wait,
          success: suc
      });

    });
});
