<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PreviewOfAd</title>
    
    <link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.css">
      <link rel="stylesheet"  href="css/main_page1.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="js/index.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
          $("img[name='ak']").bind("click", function(){
                $("#big_image").attr("src","images/i1.jpg");  });
                // alert("hello"); });

          $("img[name='ak2']").bind("click", function(){
                $("#big_image").attr("src","images/i2.jpg");});

          $("img[name='ak3']").bind("click", function(){
                $("#big_image").attr("src","images/i3.jpg");
                  });

          $("img[name='ak4']").bind("click", function(){
                $("#big_image").attr("src","images/i4.jpg");

                  });
          $("img[name='ak5']").bind("click", function(){
               $("#big_image").attr("src","images/i5.jpg");
                });

          $("img[name='ak6']").bind("click", function(){
                $("#big_image").attr("src","images/i6.jpg");

                        });

          $("img[name='ak7']").bind("click", function(){
                $("#big_image").attr("src","C:/Users/amind/Desktop/i7.jpg");
                                      });

          $("input[name='btn1']").bind("click", function(){
            var getting  =  $("#comment_area").val();
            $(".comment_place").text(getting);
             alert(getting);});

               //
               // $("#ik10").bind("click", function(){
               //   alert("hello man");
               // });



           });








    </script>

    <style media="screen">

          .container{
            /* background-color: #f6f7d4; */
            /* margin-top: 200px; */
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
                          /* margin-left: 18%; */
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
                    height: 60%;
                    /* background-color: yellow; */
                  }
                  #big_image{
                      width: 100%;
                      height: 100%;
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

                    height: 70%;
                    display: inline-block;
                    border: 2px solid white;
                    margin-left: 0.4%;
                  }
                  div[name="move"]{
                    margin-left: 1px;
                  }
                  #mini_image1,#mini_image8,#mini_image3,#mini_image4,#mini_image5,#mini_image6,#mini_image7,#mini_image8{
                    width: 100%;
                    height: 100%;
                  }
                  #mini_image2{
                     width: 12.5%;
                     height: 70%;
                    margin-left: 3.2%;
                      border: 2px solid white;
                  }
                  #mini_image,#mini_image2{display: inline-block;}

                  #mini_image:hover{
                      border: 2px solid red;
                  }

                  #mini_image2:hover{
                    border: 2px solid red;
                  }


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
          color: grey;
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
        background-color: grey;
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
      input[name="name_area"]{
        width: 80%;
        border: 1px solid lightgreen;
        border-radius: 3%;
      }
      input[name="mail_area"]{
        width: 80%;
        margin-left: 0.5%;
        border: 1px solid lightgreen;
        border-radius: 3%;
      }
      h4[name="name"]{
        margin-top: 1%;
        margin-left: 5%;
        color: grey;
      }
      h4[name="mail"]{
        margin-top: 1%;
        margin-left: 5%;
        color: grey;
      }
      #comment{
        width: 80%;
        height: auto;
        border: 1px solid lightgreen;
      }
      .comment{
        width: 88%;
        margin-left: 5%;
      }
      .right_side_of_main{
        width: 36.4%;
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

        .reklama{
          margin-top: 15%;
          margin-left: 6%;
          width: 90%;
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
        margin-top: 4%;
        border: 1px solid black;
        border-radius: 1%;
      }
      .btnui1{
        margin-top: 5%;
        height:25%;
        width: 60%;
        margin-left: 21%;
        /* border: 1px solid black; */
      }

      .card {
      overflow: hidden;
      position: relative;
      border: 1px solid #CCC;
      border-radius: 8px;
      text-align: center;
      padding: 0;
      /* background-color: #284c79; */
      color: rgb(136, 172, 217);
      height: 100%;
      }

      .card .header-bg {
      /* This stretches the canvas across the entire hero unit */
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 70px;
      /* border-bottom: 1px #FFF solid; */
      /* This positions the canvas under the text */
      z-index: 1;
      }
      .card .avatar {
      position: relative;
      margin-top: 15px;
      z-index: 100;
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
  width: 100%;
  height: 100%;
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
margin-top: 0.6%}
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

    </style>


  </head>



  <body >
    <header>
      <div class="main_div">
        <div id="border3">
        </div>
        <div id="ma_un">
          <div id="I">
              <a id="ik">Rus</a>
              <a id="ik">|</a>
              <a id="ik">Eng</a>

          </div>
        </div>
        <div id="border3">
        </div>
      </div>

    </header>
    <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Box of Cars</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><img id="w1" src="images/GSA.jpg"></img></li>
        <li><a name="accaunt1" style="color: lightblue;">Главная страница</a></li>
        <li><a name="accaunt2" style="color: lightblue;">Авто новости</a></li>
        <li><a name="accaunt3" style="color: lightblue;">Новинки  2018</a></li>
        <li id="k"><a name="accaunt" style="color: white;">Мой Аккаунт</a></li>
        <li><a name="ads"  style="color: white;" >Подать заявлеие</a></li>

      </ul>
    </div>
  </nav>
      <div class="container" >
        <div id="login">
          <!-- <div id="image_main">
                <img  id="w1" src="C:\Users\amind\Desktop\GSA.jpg" width="60px" height="60px">
                <h5 id="">Box Of Ads</h5>

          </div>

          <div id="w2">
              <input type="button"  value="+ Leave ad" class="btn btn-warning"></input>
          </div>

          <div id="w1">
              <img src="C:/Users/amind/Desktop/m_a.png" width="20" width="20" id="im1">
              <h5 id="w">My Accaount</h5>
          </div>
          <div id="w1">
              <img src="C:/Users/amind/Desktop/c_a.png" width="20" width="20" id="im1">
              <h5 id="w">Contacts</h5>
            </div> -->




            </div>

















              <div class="on_main_1_div">
                    <div id="reference_div">
                        <div id="border">
                        </div>
                        <h5 id="references_text">Обьявление в Астане/Audi/A5</h5>
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
                              <h3 name="priceOC">1 000 000 руб.</h3>
                            </div>
                            <div id="button_credit">
                                    <input type="button" name="cr_btn" value="Купить в кредит">
                            </div>
                      </div>

                    </div>

                    <div class="left_side_of_main">
                      <div class="image_of_car_div">
                        <img id="big_image" src="images/i1.jpg" >
                      </div>
                      <div class="image_carusel">
                        <div id="border">
                        </div>
                        <div id="mini_image2" >
                            <img id="mini_image1" name="ak"src="Images/i1.jpg" >
                        </div>
                        <div id="mini_image">
                          <img id="mini_image8" name="ak2" src="Images/i2.jpg" >
                        </div>
                        <div id="mini_image">
                          <img id="mini_image3" name="ak3" src="Images/i3.jpg" >
                        </div>
                        <div id="mini_image">
                          <img id="mini_image4" name="ak4" src="Images/i4.jpg" >
                        </div>
                        <div id="mini_image">
                          <img id="mini_image5" name="ak5" src="Images/i5.jpg" >
                        </div>
                        <div id="mini_image">
                          <img id="mini_image6" name="ak6" src="Images/i6.jpg" >
                        </div>
                        <div id="mini_image">
                          <img id="mini_image7" name="ak7"src="Images/i7.jpg" >
                        </div>
                        <div id="mini_image2">
                          <img id="mini_image7"  name="ak8" src="Images/i8.jpg" >
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
                           <h4 id="ci">Город:</h4>
                        </div>
                        <div id="un_table2">
                            <h4 id="ci2">Астана</h4>
                        </div>
                      </div>

                      <div class="column2">
                          <div id="un_table1">
                        <h4 id="ci">Коробка передач:</h4>
                     </div>
                     <div id="un_table2">
                         <h4 id="ci2">Автомат</h4>
                     </div>
                   </div>
                      </div>

                        <div class="line1">
                    <div class="column1">

                    <div id="un_table1">
                       <h4 id="ci">Модель:</h4>
                    </div>
                    <div id="un_table2">
                        <h4 id="ci2">A5</h4>
                    </div>
                  </div>

                  <div class="column2">
                      <div id="un_table1">
                    <h4 id="ci">Тип двигателя:</h4>
                 </div>
                 <div id="un_table2">
                     <h4 id="ci2">бензин</h4>
                 </div>
               </div>
                  </div>


         <div class="line1">
                <div class="column1">

                <div id="un_table1">
                   <h4 id="ci">Город:</h4>
                </div>
                <div id="un_table2">
                    <h4 id="ci2">Астана</h4>
                </div>
              </div>

              <div class="column2">
                  <div id="un_table1">
                <h4 id="ci">Год выпуска:</h4>
             </div>
             <div id="un_table2">
                 <h4 id="ci2">2013</h4>
             </div></div></div>
         <div class="line1">
            <div class="column1">

            <div id="un_table1">
               <h4 id="ci">Привод:</h4>
            </div>
            <div id="un_table2">
                <h4 id="ci2">Передний</h4>
            </div>
          </div>

          <div class="column2">
              <div id="un_table1">
            <h4 id="ci">Пробег:</h4>
         </div>
         <div id="un_table2">
             <h4 id="ci2">48000км</h4>
         </div></div></div>
         <div class="line1">
        <div class="column1">

        <div id="un_table1">
           <h4 id="ci">Руль:</h4>
        </div>
        <div id="un_table2">
            <h4 id="ci2">Левый</h4>
        </div>
      </div>

      <div class="column2">
          <div id="un_table1">
        <h4 id="ci">Тип кузова:</h4>
     </div>
     <div id="un_table2">
         <h4 id="ci2">Купе</h4>
     </div></div></div>
         <div class="line1">
            <div class="column1">

            <div id="un_table1">
               <h4 id="ci">Состояние:</h4>
            </div>
            <div id="un_table2">
                <h4 id="ci2">Не битый</h4>
            </div>
          </div>

              <div class="column2">
                  <div id="un_table1">
                <h4 id="ci">Обьем двс:</h4>
             </div>
             <div id="un_table2">
                 <h4 id="ci2">1.8 л</h4>
             </div>
            </div></div>

          </div>
          <div id="border5">

          </div>
            <div class="place_of_auto_commentAndDescription">
              <div id="Adress">
                  <h2 id="ik1" name="static">Адрес:</h2> <h2 name="static1" id="ik1">Астана,м теплый стан,Колжуское шоссе,22-й(п Сосенское)км</h2>
                  <input type="button" id="ikl" name="map_btc" value="Посмотреть на карте"></input>
              </div>
              <div id="border5">
              </div>
              <div class="coment_from_avtor">

                  <p>СТРОГО БЕЗ ТОРГА!!!!</p>
                  <p>Двигатель КПП подвеска в хорошем состоянии</p>
                  <p>Жуков и деффектов по кузову нет</p>
                  <p>Осаго до конца года</p>
                  <p>Сигнализация с обратной связью и автозапуском</p>
              </div>
              <div id="border5">
              </div>
              <div id="vk_facebook" >
                <h4 name="h4">Follow us and stay up to date all salling in</h4>
                  <div id="box" name="vk_box">

                  </div>
                  <div id="box" name="facebook_box">

                  </div>
                  <div id="box" name="ins_box">

                  </div>
              </div>
            </div>
            <div class="comment_from_viewer">
              <div class="comment_place">

              </div>
              <div class="comment_AreaAndC_Date">
                    <div class="name_mail">
                          <div id="Name">
                              <h4 name="name">Name</h4>
                              <input type="text" name="name_area" placeholder="Write your Name">
                          </div>
                          <div id="Email">
                            <h4 name="mail">Email</h4>
                            <input type="text" name="mail_area" placeholder="Write your Mail">
                          </div>
                            </div>
                            <form class="comment" action="index.html" method="post">
                                  <label for="comment">Comment:</label>
                                  <textarea class="form-control" rows="3"  id="comment_area"></textarea>
                                  <input type="button" name="btn1" value="Done">
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
                                  <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
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
                    <!-- <div id="border">

                    </div> -->
                  <!-- </div> -->

                          <!-- <div id="profile">
                                <div id="Name" name="ts">
                                    <h5 name="tsh5">Amin Diyas</h5>
                                </div>

                                <div id="Year" name="ts">
                                        <h5 name="tsh5">19 year</h5>
                                </div>
                                <div id="position" name="ts">
                                    <h5 name="tsh5">AutoDiller</h5>
                                </div> -->
                                <!-- <div id="mail" name="ts">
                                        <h5 name="tsh5">amindiyass@gmail.com</h5>
                                </div> -->

                          <!-- </div>
                          <div class="profile_image">
                              <img src="C:/Users/amind/Desktop/images5.png" alt="avatar" name="avatar">
                          </div>

                          <div class="fcb_vk_of_offer">
                                <a href="#" class="facebook">Facebook</a>
                          </div> -->
                  <div class="reklama">
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


                  </div>
          </div>



          </div>




        </div>
        <!-- <a href="https://hashflare.io/r/BF33A6F1"><img src="https://cdn.hashflare.eu/banners/ru/Hi160x600Ru-Ko.gif" alt="HashFlare"></a> -->

      </div>
<input type="file" name="button" style="width:200px; height:30px;" id="ik10"></input>
      <div class="footer1">
        <img src="images/footer.png" id="img1">



            <form method="post" action="php/index.php" enctype="multipart/form-data" >
              <input type="hidden" name="size" value="1000000">
              <div>

              </div>

              </div>
              <div>

                <textarea name="text" rows="4" cols="40" placeholder="say somethingabout this image"></textarea>
              </div>
              <div>
                <input  type="submit" name="upload" value="Upload Image">

              </div>
            </form>

  </body>
</html>
