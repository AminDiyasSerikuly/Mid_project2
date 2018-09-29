$(document).ready(function(){
  $("img[name='ak']").bind("click", function(){
      path =   $("img[name='ak']").attr('src');
        $("#big_image").attr("src",path);  });

        $("img[name='ak1']").bind("click", function(){
            path =   $("img[name='ak1']").attr('src');
              $("#big_image").attr("src",path);  });

 $("img[name='ak2']").bind("click", function(){
      path =   $("img[name='ak2']").attr('src');
        $("#big_image").attr("src",path);  });

 $("img[name='ak3']").bind("click", function(){
      path =   $("img[name='ak3']").attr('src');
        $("#big_image").attr("src",path);  });

  $("img[name='ak4']").bind("click", function(){
        path =   $("img[name='ak4']").attr('src');
        $("#big_image").attr("src",path);  });

  $("img[name='ak5']").bind("click", function(){
        path =   $("img[name='ak5']").attr('src');
        $("#big_image").attr("src",path);  });

  $("img[name='ak6']").bind("click", function(){
        path =   $("img[name='ak6']").attr('src');
        $("#big_image").attr("src",path);  });

  $("img[name='ak7']").bind("click", function(){
        path =   $("img[name='ak7']").attr('src');
        $("#big_image").attr("src",path);  });


        $("img[name='ak8']").bind("click", function(){
            path =   $("img[name='ak8']").attr('src');
              $("#big_image").attr("src",path);  });

              $("img[name='ak9']").bind("click", function(){
                  path =   $("img[name='ak9']").attr('src');
                    $("#big_image").attr("src",path);  });

       $("img[name='ak10']").bind("click", function(){
            path =   $("img[name='ak10']").attr('src');
              $("#big_image").attr("src",path);  });

       $("img[name='ak11']").bind("click", function(){
            path =   $("img[name='ak11']").attr('src');
              $("#big_image").attr("src",path);  });

        $("img[name='ak12']").bind("click", function(){
              path =   $("img[name='ak12']").attr('src');
              $("#big_image").attr("src",path);  });

        $("img[name='ak13']").bind("click", function(){
              path =   $("img[name='ak13']").attr('src');
              $("#big_image").attr("src",path);  });

        $("img[name='ak14']").bind("click", function(){
              path =   $("img[name='ak14']").attr('src');
              $("#big_image").attr("src",path);  });

        $("img[name='ak15']").bind("click", function(){
              path =   $("img[name='ak15']").attr('src');
              $("#big_image").attr("src",path);  });


              $("img[name='ak16']").bind("click", function(){
                   path =   $("img[name='ak16']").attr('src');
                     $("#big_image").attr("src",path);  });

               $("img[name='ak17']").bind("click", function(){
                     path =   $("img[name='ak17']").attr('src');
                     $("#big_image").attr("src",path);  });

               $("img[name='ak18']").bind("click", function(){
                     path =   $("img[name='ak18']").attr('src');
                     $("#big_image").attr("src",path);  });

               $("img[name='ak19']").bind("click", function(){
                     path =   $("img[name='ak19']").attr('src');
                     $("#big_image").attr("src",path);  });

               $("img[name='ak20']").bind("click", function(){
                     path =   $("img[name='ak20']").attr('src');
                     $("#big_image").attr("src",path);  });

                     $("img[name='ak21']").bind("click", function(){
                           path =   $("img[name='ak20']").attr('src');
                           $("#big_image").attr("src",path);  });
















  $("input[name='btn1']").bind("click", function(){
    var getting  =  $("#comment_area").val();
    $(".comment_place").text(getting);
     // alert(getting);
   });


      $.ajax({
        url: "exper1.php",
        type: "POST",
        data: ({id11: 2}),
        success: function(data){
            data = JSON.parse(data);
            for(var id in data){

              if(id == 0){
              $("#big_image").attr("src",data[id]);}

              $("#mini_image"+id).attr("src", data[id]);
              var w = "div[name=al"+id+"]"
              $(w).css("display","inline-block" )
            }

        //
      }
      });
      function wait(){
        // alert("asdasd");
      }

      $.ajax({

          url:"php/from_db_puttingTOAdd_page2.php",
          type: "POST",
          data: ({id: 2}),
          beforeSend: wait,
          success: function(data){
                  alert(data);
                  data = JSON.parse(data);

                  $("h4[name='mar']").text(data[1]);
                  $("h4[name='Model']").text(data[2]);
                  $("h4[name='gor']").text(data[2]);
                  $("h3[name='priceOC']").text(data[4]+" тг.");
                  $("h4[name='type_of_body']").text(data[5]);
                  $("h4[name='godv']").text(data[6]+" год");
                  $("h4[name='kor']").text(data[7]);
                  $("h4[name='cve']").text(data[8]);
                  $("h4[name='typ']").text(data[9]);
                  $("h4[name='sos']").text(data[10]);
                  $("h4[name='rul']").text(data[11]);
                  $("h4[name='pro']").text(data[12]+" км");
                  $("h4[name='obi']").text(data[13]+ " л/м2");
                  $("div[name='Describtion']").text(data[14]);
                  $("h4[name='gor']").text(data[19]);
                  $("h3[name='name_shrift']").text(data[20]);
                  $("h2[name='static1']").text(data[15]);
                  $("#references_text").text("Обьявление / "+data[1]+" / "+data[2]);




                    // $("h4[name='obi']").text(data[13]+ " л/м2");
                    //   $("h4[name='obi']").text(data[13]+ " л/м2");
                    //     $("h4[name='obi']").text(data[13]+ " л/м2");







          }
      });



       //
       // $("#ik10").bind("click", function(){
       //   alert("hello man");
       // });




   });
