<!DOCTYPE html>
<html>
  <head>
    <!-- <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> -->
    <meta charset="utf-8">
    <title>index_page.php</title>
    <link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.css">
    <link rel="stylesheet"  href="css/main_page1.css">

      <script src="bootstrap-3.3.7/js/tests/vendor/jquery.min.js"></script>
</head>
<style media="screen">
.container{
  margin-top: 10%;
}
.under_cont_main{
  margin-left: 10%;
  width: 80%;
  height: 2000px;
  /* background-color: lightblue; */
}
.head_core{
  width: 100%;
  height: 1.5%;
  border: 3px solid lightgreen;
}
.core_ads_top{
  width: 100%;
  height:36%;
  border: 1px solid black;
}
.core_ads_simple{
  margin-top: 5.3%;

  width: 100;
  height: 56%;
  background-color: brown;
  border: 1px solid black;
}
.under_core{
  width: 100%;
  height: 4%;
  border: 1px solid red;
}
.main_individual_line1{
  margin-top: 1%;
  width: 100%;
  height: 18%;
  /* background-color: lightyellow; */
}
.main_individual_line2{
  margin-top: 1%;
  width: 100%;
  height: 11.7%;

}
.main_individual_line3{
  margin-top: 1%;
  width: 100%;
  height: 11.7%;

}
#image_palce{
    margin-left: 1%;
    height: 100%;
    width: 19%;
    margin-top: -0.2%;
    /* background-color: pink; */
}
#img{


    width: 100%;
    height: 100%;
}

.information{
  width: 55%;
  /* background-color: green; */
  height: 100%;
}

#name{
    margin-top: -1.8%;
      width: 100%;
      height: 17%;
      /* border: 1px solid grey; */
}
#reference{
    /* margin-top:  0.5%; */
    width: 100%;
    height: 19%;
    /* border: 1px solid grey; */
}
#adress_of_car{
  margin-top: 5.3%;
  width: 100%;
  height: 14%;
  /* border: 1px solid grey; */
}
#date{
  width: 100%;
  height: 15%;
  /* border:  1px solid grey; */
}






.price{
  height: 100%;
  width: 23.2%;
  background-color: red;
}
.information,#image_palce,.price{
  display: inline-block;
  vertical-align: top;
}
#price_of_car{

  /* margin-left: 10%; */
  text-align: center;
  width: 100%;
  height: 30%;
  background-color: pink;
}
#star{
  margin-top: 30%;
  width: 100%;
  height: 20%;
  background-color: yellow;
  text-align: center;
}
#price_style{
    margin-top: 2.5%;
}
#star_style{
  margin-top: 2%;
  font-weight: normal;
  font-size: 100%;

}
#border{
  width: 100%;
  height: 0.5px;
}
#star_own{
  color: lightblue;

  margin-left: 2%;
  margin-top: 1.2%;
}

#star_own,#star_style{
  display: inline-block;
  vertical-align: top;
}
h5{
    color: lightblue;
    font-size: 120%;
   font-weight: 600;
}
h6{
  color: grey;
  font-weight: 500;
}
#adress{
  font-size: 100%;
}
#border1{
  margin-top: 0.5%;
  width: 100%;
  height: 0.5px;
  background-color: grey;
}
#top_img{
  position: relative;
  top: -40%;
  width: 30%;
  height: 35%;
}

</style>

<script type="text/javascript">




var t1 = ['null','mar1','mar2','mar3'];
for(counter = 1;counter<4;counter++){

 var t = t1[counter];
   console.log(counter);
  // alert(counter);
  ajaxrun(counter,t);

}
  function ajaxrun(counter1,t1){
$.ajax({
    url:"php/from_db_puttingTOAdd_page2.php",
    type: "POST",
    data: ({id: counter1}),
    success: function(data){
    // alert(data);

      data = JSON.parse(data);

      $("h5[name='h5"+counter1+"']").text(data[20]);
      $("h4[name=mar"+counter1+"]").text(data[1]);
      $("p[id=demo"+counter1+"]").text(data[21]);}});}


      // var x = document.getElementById("demo1").textContent;
      // var t = ".main_individual_line"+x+"";
      //
      // $(document).ready(function(){
      //   $(t).bind("click",function(){
      //     // var x = document.getElementById("demo1").textContent;
      //    console.log(t+" "+x);
      //   });
      // });
// };

document.getElementById("kol").onmouseover = function() {run()};


function run(){
alert("work")};





</script>

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

      <div class="container" style="background-color:#ffffe6; border-left:2px solid #e6ffe6; border-right:2px solid #e6ffe6; margin-top:4%;">
            <div class="line1" style="width:100%;height:100px;background-color:lightblue;">
              <h4 name='mar1' style="margin-top:1%;">hello</h4>
              <h4 name='mar2' style="margin-top:1%;">hello</h4>
              <h4 name='mar3' style="margin-top:1%;">hello</h4>
            </div>
            <div class="king">

                <div class="under_cont_main">
                  <div class="head_core">

                  </div>

                    <div class="core_ads_top">
                        <div   class="main_individual_line1">
                          <p  id="demo1"></p>
                            <div id="image_palce">
                                  <img src="upload/bmw9.jpg"  id="img"></img>
                                  <img src="images/top.png" id="top_img">
                                  <!-- <img src="" alt=""> -->
                            </div>

                            <div class="information">
                                <div id="name">
                                      <h5 name = "h51">BMW X5 продаю по хорошей цене</h5>
                                </div>
                                <div id="reference">
                                  <h6>Легковые автомобили</h6>
                                </div>
                                <div id="adress_of_car">
                                  <h6 id="adress">Астана,Есильский Район</h6>
                                </div>
                                <div id="date">
                                 <h6>Опубликовано 1 января 2018</h6>
                                </div>
                            </div>

                            <div class="price">
                                <div id="price_of_car">
                                  <div id="border">
                                  </div>
                                  <h3 id="price_style" >300 000 Р</h3>
                                </div>
                                <div id="star">
                                  <div id="border">
                                  </div>
                                  <h5 id="star_style">В избранные </h5><h4 id="star_own"> &#9885;</h4>
                                </div>

                            </div>

                        </div>
                        <div id="border1">
                        </div>
                        <div class="main_individual_line2">
                          <p hidden id="demo2" ></p>
                            <div id="image_palce">
                                  <img src="upload/bmw9.jpg"  id="img1"></img>
                                  <img src="images/top.png" id="top_img">
                                  <!-- <img src="" alt=""> -->
                            </div>

                            <div class="information">
                                <div id="name">
                                      <h5 name="h52">BMW X5 продаю по хорошей цене</h5>
                                </div>
                                <div id="reference">
                                  <h6>Легковые автомобили</h6>
                                </div>
                                <div id="adress_of_car">
                                  <h6 id="adress1">Астана,Есильский Район</h6>
                                </div>
                                <div id="date1">
                                 <h6>Опубликовано 1 января 2018</h6>
                                </div>
                            </div>

                            <div class="price">
                                <div id="price_of_car">
                                  <div id="border">
                                  </div>
                                  <h3 id="price_style1" >300 000 Р</h3>
                                </div>
                                <div id="star">
                                  <div id="border">
                                  </div>
                                  <h5 id="star_style">В избранные </h5><h4 id="star_own"> &#9885;</h4>
                                </div>

                            </div>

                        </div>
                        <div id="border1">
                        </div>

                        <div class="main_individual_lin3">
                          <p hidden id="demo3" ></p>
                            <div id="image_palce">
                                  <img src="upload/bmw9.jpg"  id="img1"></img>
                                  <img src="images/top.png" id="top_img">
                                  <!-- <img src="" alt=""> -->
                            </div>

                            <div class="information">
                                <div id="name">
                                      <h5 name="h53">BMW X5 продаю по хорошей цене</h5>
                                </div>
                                <div id="reference">
                                  <h6>Легковые автомобили</h6>
                                </div>
                                <div id="adress_of_car">
                                  <h6 id="adress1">Астана,Есильский Район</h6>
                                </div>
                                <div id="date1">
                                 <h6>Опубликовано 1 января 2018</h6>
                                </div>
                            </div>

                            <div class="price">
                                <div id="price_of_car">
                                  <div id="border">
                                  </div>
                                  <h3 id="price_style1" >300 000 Р</h3>
                                </div>
                                <div id="star">
                                  <div id="border">
                                  </div>
                                  <h5 id="star_style">В избранные </h5><h4 id="star_own"> &#9885;</h4>
                                </div>

                            </div>

                        </div>
                        <div id="border1">
                        </div>


      </div>



    </html>
