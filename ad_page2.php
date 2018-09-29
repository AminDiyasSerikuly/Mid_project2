<!DOCTYPE html>
<html>
  <head>
    <!-- <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> -->
    <meta charset="utf-8">
    <title>PreviewOfAd</title>
    <link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.css">
      <link rel="stylesheet"  href="css/main_page1.css">
      <script src="bootstrap-3.3.7/js/tests/vendor/jquery.min.js"></script>


      <script src="js/index.js"></script>

    <script type="text/javascript">

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
                data: ({id11: 1}),
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
                  data: ({id: 1}),
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








    </script>

    <style media="screen">

          .container{
            /* background-color: #f6f7d4; */
            margin-top: 3.3%;
          }
          .on_main_1_div{
            margin-top: 2%;
            width: 100%;
            height: 38px;
            /* border-top: 1px solid black; */
            /* background-color: pink; */
            /* margin-left: 6% */
          }

              #reference_div{
                /* background-color: grey; */
                height: 100%;
                width: 40%;
                margin-left: 6%;
              }
                  #border{
                    width: 100%;
                    height: 1px;
                    margin-bottom: 1%;
                    /* background-color: red; */
                  }
                  #border1{
                    margin-top: 1;
                    width: 100%;
                    height: 1px;
                    /* background-color: black; */
                  }
                  #references_text{
                    margin-top: 1.3%;
                    /* margin-left: 5%; */
                  }
             #back_next_div{
               /* background-color: lightblue; */
               margin-top: 0.3%;
               /* margin-left: 5%; */
               height: 90%;
               width: 50%;
             }

                  /* h5{
                    color: lightblue;

                  } */
                  h5[name="back"]{
                    margin-left: 68%;
                    margin-top: 1.5%;
                  }
                  h5[name="next"]{
                    margin-left: 5%;
                    margin-top: 1.5%;
                  }

            h5{display: inline-block;vertical-align: middle;}
             #reference_div,#back_next_div{display: inline-block; vertical-align: top}


          .main_1_div{
            width: 88%;
            height: 100%;
            margin-left: 6%;
            /* border-right: 1px solid black; */

             /* background-color: lightgreen; } */
           }

             .Name_Of_Car{
               width: 99.8%;
               height: 12%;
               border: 1.9px solid #efefef;
               border-radius: 2%;
               /* border-top: 1px solid black;
               border-left: 1px solid black;
               border-right: 1px solid black; */
               /* background-color: blue; */
             }
                  #name{
                    width: 79%;
                    height: 100%;

                    /* border: 2px solid red; */
                  }
                    #root_name{
                        width: 99%;
                        height: 62%;
                        /* border: 1px solid green; */
                      }
                      h3[name="name_shrift"]{

                        margin-left: 5%;
                        font-size: 200%;
                        /* font-weight: bold; */
                      }

                      #DateAndViews{
                        width: 100%;
                        height: 37%;
                        /* border: 1px solid yellow; */
                      }
                      h2[name="name_date"]{
                        margin-top: 0%;
                        margin-left: 5%;
                        font-size: 110%;
                        font-weight: bold;
                      }

                  #price{
                    height: 100%;
                    width: 19%;
                    /* border: 2px solid lightblue; */
                  }
                        #root_price{
                          /* border: 2px solid green; */
                          width: 100%;
                          height: 60%;
                        }
                        h3[name="priceOC"]{
                          font-size: 170%;

                          /* font-weight:bolder; */
                        }
                        #button_credit{
                          width: 100%;
                          height: 39%;
                          margin-left: 10%;
                        }
                        input[name="cr_btn"]{
                          border-radius: 5%;
                          border: none;
                          background-color: #f44336;
                          margin-left: -10%;
                          /* margin-top: 2%; */
                          margin-bottom: 10%;
                        }
                  #name,#price{display: inline-block; vertical-align: top;}

            .left_side_of_main{
               width: 63%;
               height: 88%;
               border-left: 1.5px solid #efefef;
               border-right: 1.5px solid #efefef;
               border-bottom: 1.5px solid #efefef;
               /* border-left: 0.6px solid grey; */

               /* background-color: lightyellow; */
                  }
                  .image_of_car_div{
                    /* margin-left: 0.5%; */
                    width: 100%;
                    height: 100%;
                    /* background-color: yellow; */
                  }
                  #big_image{
                      width: 100%;
                      height: 450px;
                  }
                  .image_carusel{
                    /* margin-left: 1%; */
                    width: 100%;
                    height: 15%;
                    /* border-bottom: 0.6px solid grey; */
                    /* border: 1px solid blue; */
                  }

                  #mini_image{
                    margin-top: 1.3%;
                    width: 12.5%;

                    height: 56px;
                    display: inline-block;
                    border: 2px solid white;
                    margin-left: 0.4%;
                    display: none;
                  }
                  div[name="move"]{
                    margin-left: 1px;
                  }
                #mini_image0,#mini_image1,#mini_image2,#mini_image3,#mini_image4,#mini_image5,#mini_image6,#mini_image7,#mini_image8,
                  #mini_image9,#mini_image10,#mini_image11,#mini_image12,#mini_image13,#mini_image14,#mini_image15,#mini_image16,#mini_image17
                  #mini_image18,#mini_image19,#mini_image20{
                    width: 100%;
                    height: 100%;
                  }
                  /* #mini_image2{

                  } */

                  /* #mini_image2{
                     width: 50%
                     height: 50%;
                    margin-left: 3.2%;
                      border: 2px solid white;
                  }
                  #mini_image,#mini_image2{display: inline-block;} */

                  #mini_image:hover{
                      border: 2px solid red;

                  }
/*
                  #mini_image2:hover{
                    border: 2px solid red;
                  } */


        #about_car{
          /* margin-top: 1%; */
          margin-left: 2.5%;
          width: 95%;
          height: 30%;
          /* border-top: 1.9px solid  #efefef; */
          /* border-bottom: 1.9px solid  #efefef; */

          /* border-bottom: 0.6px solid grey; */
          /* border: 1px solid black; */
        }
        .line1{
          width: 97%;

          margin: 10px 10px ;
            margin-left: 3%;
        }
        #ci{
          font-weight: 540;
          font-size: 120%;
          color: grey;
          margin: 0;
        }
        #ci2{
          font-size: 120%;
          font-weight: 540;
          color: black;
          margin: 0;
        }


        #un_table1,#un_table2{display: inline-block;}
        .column1,.column2{display: inline-block; width: 48%;}
            h4{
                font-size: 110%;
              }
        .place_of_auto_commentAndDescription{
          width: 100%;
          height: auto;
          border-top: 0.6 solid grey;
        }

            #Adress{
              /* margin-top: 2.5%; */
              margin-left: 6%;
              width: 90%;
              height: 5%;
              margin-bottom: 3%;


              /* border-bottom: 1.9px solid #efefef; */
              /* border: 0.5px solid blue; */
            }
            #ik1{
              display: inline-block;
              font-size: 110%;
              font-weight: 500;


            }
            h2[name="static"]{
              /* margin-left: 2%; */
              /* margin-top: 3.5%; */
                color: grey;
            }

            h2[name="static1"]{
              color: black;
            }
            input[name="map_btc"]{
              margin-left: 5%;
              border: 0.5px solid black;
              border-radius: 7%;
              background-color:  #a4c639;
              margin-bottom: 1%;
            }
            input[name="map_btc"]:hover{
              background-color: #f4fffe;
            }
            .coment_from_avtor{
              width: 95%;
              height: auto;
              margin: 4% 4%;
              margin-left: 2.5%;
              /* background-color: pink; */

            }
            p{
              font-family: Arial;
              margin-left: 3%;
              font-weight: 540;
              font-size: 95%;
            }
            #vk_facebook{
              margin-top: 1%;
              margin-left: 2.5%;
              width: 95%;
              height: 4%;
              background-color: black;

              }
              #box{
                display: inline-block;
                border: 1px solid green;
                width: 8%;
                margin-left: 2%;
                height: 100%;
              }
              h4,#box{
                display: inline-block;
                vertical-align: top;
              }
              h4[name="h4"]{
                margin-left: 10%;
              }


      .comment_from_viewer{
         /* border-bottom: 1.9px solid #efefef; */
         margin-bottom: 20px;
        /* border-left: 1.9px solid #efefef;
        border-right: 1.9px solid #efefef;  */
        width: 100%;
        height: auto;



        /* border: 0.5px solid pink; */
      }
      .comment_place{
        margin-top: 1%;
        margin-left: 5%;
        width: 90%;
        height: 10px;

      }
      .comment_AreaAndC_Date{
        margin-top: 1%;
        margin-left: 5%;
        width: 90%;
        height: 30%;
        background-color: white;
      }
      #coment_area{
          margin-left: 0;
      }

      .Name{
        width: 100%;
        height: 40%;
        border: 0.5px solid red;
      }
      input[name="name1"]{
        width: 80%;
        border: 1px solid lightgreen;
        border-radius: 3%;
      }
      input[name="mail_area1"]{
        width: 80%;
        /* margin-left: 0.5%;z */
        border: 1px solid lightgreen;
        border-radius: 3%;
      }

      h4[name="name1"]{
        margin-top: 1%;
        margin-left: 5%;
        color: grey;
      }
      h4[name="mail"]{
        margin-top: 1%;
        /* margin-left: 5%; */
        color: grey;
      }
      #comment{
        width: 80%;
        height: auto;
        border: 1px solid lightgreen;
      }
      .comment{
        width: 88%;
        /* margin-left: 5%; */
      }
      .right_side_of_main{
        width: 33.4%;
        height: 900px;
        /* border-top: 0.6px solid grey; */
        border-right: 1.5px solid #efefef;
        /* border-left:  0.6px solid grey; */
        /* background-color: lightyellow; */
      }
        .right_side_of_main,.left_side_of_main{display: inline-block; vertical-align: top;}


        .btnu{
              margin-top: 3%;
              margin-left: 6%;
              width: 90%;
              height: 100px;
        }
        button[name="btnu1"]{
          margin-top: 1.5%;
          width: 100%;
          height: 48%;
        }

        .reklama1{
          margin-top: 15%;
          margin-left: 6%;
          width: auto;
          height: 8%;
        }
        #rek{
          width: 100%;
          height: 100%;
          border-radius: 1%;
        }
        h6{

          margin-top: 1%;
          margin-left: 2%;
          margin-right: 2%;
          font-size: 80%;
          font-family: arial;
          color: grey;
        }
      .r1,.r2,.r3{
        margin-left: 4.5%;
        margin-top: 4%;
        border: 1px solid black;
        border-radius: 1%;
        width: 90%;
      }
      .btnui1{
        margin-top: 5%;
        height:25%;
        width: 60%;
        margin-left: 21%;
        border: 1px solid black;
      }

      .card {
      /* overflow: hidden; */
      /* position: relative; */

      border: 1px solid #CCC
      border-radius: 8px;
      text-align: center;
      /* padding: 0; */
      /* background-color: #284c79; */
      color: rgb(136, 172, 217);
      height: 100%;
      }

      .card .header-bg {
      /* This stretches the canvas across the entire hero unit */
      /* position: absolute; */

      width: 100%;
      /* height: 70px; */
      border-bottom: 1px #FFF solid;
      /* This positions the canvas under the text */
      /* z-index: 1; */
      }

      .card .avatar {
      /* position: relative; */
      margin-top: -5%;
      /* z-index: 100; */
      }

      .card .avatar img {
      width: 100px;
      height: 100px;
      -webkit-border-radius: 50%;
      -moz-border-radius: 50%;
      border-radius: 50%;
      border: 5px solid #efefef;
      }
      .src-image {
  display: none;
  }
#border0{
  margin-top: 5%;
  width: 100%;
  background-color: #efefef;
  height: 1px;
}
#border5{
  /* margin-top: 5%; */
  width: 100%;
  background-color: #efefef;
  height: 1.9px;
  margin-bottom: 2%;
}
#w1{
  width: 8%;
  height: 8%;
  margin-left: 1%;
}
a[name="accaunt"]{
  margin-top: 6.6%;
  background-color: #ffb60c;

  border-radius: 4%;

}
a[name="ads"]{
  margin-top: 5%;

  background-color: lightblue;

  border-radius: 4%;

}
li{
  margin: 2px 2px;
}
.active{
    width: 5%;
}
#k{
  margin-left: 45%;
}
.nav{
  width: 90%;
}
.navbar-header{
  /* margin-left: 2% !important;
  margin-top: 0.4% ;
  margin-bottom: 0.1%;
  width: 20%; */
}
a[name="accaunt1"]{
  margin-top: 4.9%;
}
a[name="accaunt2"]{
  margin-top: 7%;
}
a[name="accaunt3"]{
  margin-top: 7%;
}
.footer1{
/* background-color:  #ff5656; */
margin-top: 7%;
width: 100%;
height: 130px;
border-top: 1.9px solid grey;
/* border-bottom: 3px solid grey; */
}
.container-fluid{
  margin-top: 0.5%;
  margin-bottom: 0.5%;

}

    </style>


  </head>



  <body  style="background-color:;">

  <nav class="simple-nav" style="background-color:rgba(1,1,1,0.6);  width:100%; top:0; position:fixed;">
    <div class="container" style="margin-top:0.4%;;">
      <div class="first" style="width:20%; height:100%; background-color:;margin-left:1%;margin-top: 0.1%;display:inline-block;">
            <a href="#" style="font-size:170%; margin-top: 2px;color:white;">VroomKZ.com</a>
            <img src="images/G.jpg" alt="" style="width:15%; height:100%; border-radius:30px;margin-left:2%;">
      </div>
      <div class="second" style="width:30%; display:inline-block;margin-bottom:1.2%;">
            <a href="#" style="margin-left:; color:white;">Главная страница</a>
            <a href="#" style="margin-left:3%; color:white;">Новинки 2018</a>
            <a href="#" style="margin-left:3%; color:white;">Авто новости</a>
      </div>

      <div class="btnu1" style="width:30%; height:auto; display:inline-block; margin-left:15%; margin-bottom: 1%;">
             <button type="button" name="btnu2"class="btn btn-info" style="display:inline-block;" >Мои Аккаунт</button>
              <button type="button" name="btnu2"class="btn btn-warning" style="display:inline-block;">Подать обьявление</button>
      </div>

    </div>
  </nav>



      <div class="container" style="background-color:#ffffe6; border-left:2px solid #e6ffe6; border-right:2px solid #e6ffe6; ">
        <div id="login">




            </div>

















              <div class="on_main_1_div">
                    <div id="reference_div">
                        <div id="border">
                        </div>
                        <h5 id="references_text"></h5>
                        </div>
                    <div id="back_next_div">
                      <h5 name="back">Назад</h5> <h5 name="next">Cледуещее</h5>
                        </div>
                    </div>


              <div class="main_1_div">
                    <div class="Name_Of_Car">
                      <div id="name">
                            <div id="root_name">
                                  <h3 name="name_shrift">Audi A5, 2013</h3>
                            </div>
                            <div id="DateAndViews">
                                  <h2 name="name_date">N 1,размещено сегодня в 21:41</h2>

                            </div>
                      </div>
                      <div id="price">
                            <div id="root_price">
                              <h3 name="priceOC"></h3>
                            </div>
                            <div id="button_credit">
                                    <input  type="button" name="cr_btn" value="Добавить в корзину">
                            </div>
                      </div>

                    </div>

                    <div class="left_side_of_main">
                      <div class="image_of_car_div">
                        <img id="big_image" src="images/download.png" >
                      </div>
                      <div class="image_carusel">
                        <div id="border">
                        </div>
                        <div id="mini_image" name="al0">
                            <img id="mini_image0" name="ak1">
                        </div>
                        <div id="mini_image" name="al1">
                          <img id="mini_image1" name="ak2"  >
                        </div>
                        <div id="mini_image" name="al2">
                          <img id="mini_image2" name="ak3"  >
                        </div>
                        <div id="mini_image" name="al3">
                          <img id="mini_image3" name="ak4" >
                        </div>
                        <div id="mini_image" name="al4">
                          <img id="mini_image4" name="ak5"  >
                        </div>
                        <div id="mini_image" name="al5">
                          <img id="mini_image5" name="ak6">
                        </div>
                        <div id="mini_image" name="al6">
                          <img id="mini_image6" name="ak7">
                        </div>





                        <div id="mini_image" name="al7">
                          <img id="mini_image7"  name="ak8" >
                        </div>
                        <div id="mini_image" name="al8">
                            <img id="mini_image8" name="ak9" >
                        </div>
                        <div id="mini_image" name="al9">
                          <img id="mini_image9" name="ak10"  >
                        </div>
                        <div id="mini_image" name="al10">
                          <img id="mini_image10" name="ak11" >
                        </div>
                        <div id="mini_image" name="al11">
                          <img id="mini_image11" name="ak12" >
                        </div>
                        <div id="mini_image" name="al12">
                          <img id="mini_image12" name="ak13" >
                        </div>
                        <div id="mini_image" name="al13">
                          <img id="mini_image13" name="ak14">
                        </div>
                        <div id="mini_image" name="al14">
                          <img id="mini_image14" name="ak15" >
                        </div>



                        <div id="mini_image" name="al15">
                          <img id="mini_image15"  name="ak16" >
                        </div>
                        <div id="mini_image" name="al16">
                          <img id="mini_image16" name="ak17"  >
                        </div>
                        <div id="mini_image" name="al17">
                          <img id="mini_image17" name="ak18"  >
                        </div>
                        <div id="mini_image" name="al18">
                          <img id="mini_image18" name="ak19" >
                        </div>
                        <div id="mini_image" name="al19">
                          <img id="mini_image19" name="ak20" >
                        </div>
                        <div id="mini_image" name="al20">
                          <img id="mini_image20" name="ak21" >
                        </div>






                        <div id="border1">
                        </div>
                      </div>

                      <div id="border5">

                      </div>
                <div id="about_car">
                    <div class="line1">
                        <div class="column1">

                        <div id="un_table1">
                           <h4 id="ci">Марка:</h4>
                        </div>
                        <div id="un_table2">
                            <h4 id="ci2"  name="mar"></h4>
                        </div>
                      </div>

                      <div class="column2">
                          <div id="un_table1" >
                        <h4 id="ci" >Коробка передач:</h4>
                     </div>
                     <div id="un_table2">
                         <h4 id="ci2" name="kor"></h4>
                     </div>
                   </div>
                      </div>

                        <div class="line1">
                    <div class="column1">

                    <div id="un_table1">
                       <h4 id="ci">Модель:</h4>
                    </div>
                    <div id="un_table2">
                        <h4 id="ci2" name="Model"></h4>
                    </div>
                  </div>

                  <div class="column2">
                      <div id="un_table1">
                    <h4 id="ci">Тип двигателя:</h4>
                 </div>
                 <div id="un_table2">
                     <h4 id="ci2" name="typ"></h4>
                 </div>
               </div>
                  </div>


         <div class="line1">
                <div class="column1">

                <div id="un_table1">
                   <h4 id="ci">Город:</h4>
                </div>
                <div id="un_table2">
                    <h4 id="ci2" name="gor"></h4>
                </div>
              </div>

              <div class="column2">
                  <div id="un_table1">
                <h4 id="ci">Год выпуска:</h4>
             </div>
             <div id="un_table2">
                 <h4 id="ci2" name="godv"></h4>
             </div></div></div>
         <div class="line1">
            <div class="column1">

            <div id="un_table1">
               <h4 id="ci">Цвет:</h4>
            </div>
            <div id="un_table2">
                <h4 id="ci2" name="cve"></h4>
            </div>
          </div>

          <div class="column2">
              <div id="un_table1">
            <h4 id="ci">Пробег:</h4>
         </div>
         <div id="un_table2">
             <h4 id="ci2" name="pro">км</h4>
         </div></div></div>
         <div class="line1">
        <div class="column1">

        <div id="un_table1">
           <h4 id="ci">Руль:</h4>
        </div>
        <div id="un_table2">
            <h4 id="ci2" name="rul"></h4>
        </div>
      </div>

      <div class="column2">
          <div id="un_table1">
        <h4 id="ci">Тип кузова:</h4>
     </div>
     <div id="un_table2">
         <h4 id="ci2" name="type_of_body"></h4>
     </div></div></div>
         <div class="line1">
            <div class="column1">

            <div id="un_table1">
               <h4 id="ci">Состояние:</h4>
            </div>
            <div id="un_table2">
                <h4 id="ci2" name="sos"></h4>
            </div>
          </div>

              <div class="column2">
                  <div id="un_table1">
                <h4 id="ci">Обьем двс:</h4>
             </div>
             <div id="un_table2">
                 <h4 id="ci2" name="obi">л</h4>
             </div>
            </div></div>

          </div>
          <div id="border5">

          </div>
            <div class="place_of_auto_commentAndDescription">
              <div id="Adress">
                  <h2 id="ik1" name="static">Адрес:</h2> <h2 name="static1" id="ik1"></h2>
                  <input type="button" id="ikl" name="map_btc" value="Посмотреть на карте"></input>
              </div>
              <div id="border5">
              </div>
              <div class="coment_from_avtor" name='Describtion'>


              </div>
              <div id="border5">
              </div>

            </div>
            <div class="comment_from_viewer">
              <p>Comments</p>
              <div class="comment_place" style="height:auto;border:1px solid black;">


                <?php

  $db = mysql_connect("localhost","amin","admin123");
  $db2  = mysql_select_db("general-motors");

    $r = mysql_query("SELECT * FROM comment") ;
    while($row = mysql_fetch_array($r)){
        $comment_name = $row['name'];
        $comment = $row['comment'];
        $datetime = $row['datetime'];


        echo "<div style=' border:1px solid grey; '>
        <p style='display:inline-block; font-size:150%;'> $comment_name</p>

        <p style='margin-left:10px; display:inline-block; '> $datetime</p>


              <p>Comment:  $comment</p>

              </div>";
    }



   ?>





              </div>
              <div class="comment_AreaAndC_Date" style="margin-top:50px;">
                    <div class="name_mail" >
                      <form class="comment" action="post_comment.php" method="POST">
                          <div id="Name">
                              <h4 name="n">Name</h4>
                              <input type="text" name="name1" placeholder="Write your Name">
                          </div>
                          <div id="Email">
                            <h4 name="mail">Email</h4>
                            <input type="text" name="mail_area1" placeholder="Write your Mail">
                          </div>
                            </div>
                                  <label for="comment">Comment:</label>
                                  <textarea name="comment" class="form-control" rows="3"  id="comment_area"></textarea>
                                  <input type="submit" name="btn1" value="Done">
                        </form>

              </div>
                </div>

          </div>

          <div class="right_side_of_main">
                  <div class="btnu">
                         <button type="button" name="btnu1"class="btn btn-info">Показать телефон</button>
                          <button type="button" name="btnu1"class="btn btn-warning">Написать Сообщение</button>
                  </div>
                  <!-- <div class="btnui1"> -->
                    <div class="btnui1">


                  <div class="card">
                                  <canvas class="header-bg" width="250" height="0" id="header-blur"></canvas>
                                  <div class="avatar">
                                      <img src="images/images5.png" alt="avatar" />
                                  </div>
                                  <div class="content">
                                      <p>Amin Diyas <br>
                                        AutoDiller<br>
                                          19 year

                                       </p>
                                      <p><button type="button" class="btn btn-default">Contact</button></p>

                                  </div>
                              </div>

                            </div>
                            <div id="border0">

                            </div>

                  <!-- <div class="reklama1"> -->
                    <div class="r1">
                      <a href="https://hashflare.io/r/BF33A6F1"><img id="rek" src="https://cdn.hashflare.eu/banners/ru/realno_600x200_rus.gif?v=2" alt="HashFlare"></a>
                      <h6>Hashflare (официальный сайт https://HashFlare.io) – это сервис облачного майнинга криптовалюты (Cloud Mining), в котором можно купить долю (контракт) с минимальными вложениями (от 2.2$) и получать пассивный доход пропорционально арендуемой мощности.
                      Информация с сайта: https://mining-cryptocurrency.ru/hashflare-oblachnyj-majning/</h6>
                    </div>
                      <div class="r2">
                        <a href="https://hashflare.io/r/BF33A6F1"><img id="rek" src="https://cdn.hashflare.eu/banners/ru/profit_600x200_ru.gif?v=2" alt="HashFlare"></a>
                        <h6>Hashflare – это облачный сервис от компании HashCoins (официальная компания, зарегистрированная в Таллине в Эстонии, а дата-центры находятся также и в Исландии), которая много лет занимается сборкой и продажей оборудования для добычи криптовалют (ASIC), а также созданием программного обеспечения для майнинга;
                          Информация с сайта: https://mining-cryptocurrency.ru/hashflare-oblachnyj-majning/</h6>
                      </div>
                        <div class="r3">
                          <a href="https://hashflare.io/r/BF33A6F1"><img id="rek" src="https://cdn.hashflare.eu/banners/ru/h2_600x200_1btn_ru.gif" alt="HashFlare"></a>
                          <h6>Отсутствие автоматических выплат – каждый вывод нужно запрашивать вручную.Информация с сайта: https://mining-cryptocurrency.ru/hashflare-oblachnyj-majning/</h6>
                        </div>


                  <!-- </div> -->
          </div>



          </div>




        </div>
        <!-- <a href="https://hashflare.io/r/BF33A6F1"><img src="https://cdn.hashflare.eu/banners/ru/Hi160x600Ru-Ko.gif" alt="HashFlare"></a> -->

      </div>


      <div class="footer1">
        <img src="images/footer.png" id="img1">



  </body>
</html>
