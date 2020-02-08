<!--
<?php include_once "assets/config_00.php";
session_start();
?>
-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kisan Mitra किसान मित्र </title>
    <link rel = "icon" href = "image\ico.gif" type = "image/x-icon">
    <link rel="stylesheet" href="bootstrap\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css\body.css">
    <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css\footer.css">
    <link rel="stylesheet" href="css/cardflip.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--
    .carousel-inner img {
            width: 100%;
            height: 100%;
          }
-->
 
 
 <style>
/*
     
     .chat{
    width: 50px;
    height: 50px;
     } 
     .img1 {
  border-radius: 50%;
  overflow: hidden;
  background-color: #333;
  position: fixed;
  
  width: 100%;
  
         
*/

}
     
/*
     
.ptr1 {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  bottom: 0;
  width: 100%;
}
*/
/*

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
*/
/*

.navbar a:hover {
  background: #ddd;
  color: black;
}
*/
/*
     
     
     .container img1 {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

     
     
     
     .container img1.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

*/

 </style>
 
 
 
 
 
 
 
 
  

  </head>

  <body style="background:#dfe6e9" >
    <!--this will includer header file-->
    <?php include"assets\header.php";?>

<!--
<div class="chat pt-5">
 <img class="img1" src="images/PicsArt_02-01-11.52.33.jpg" alt="Avatar" style="width:50px">
      </div>
 
-->
<!--in the below section banner slider code is written-->
    <div class="container-fluid mb-3 " style="margin-top:100px">
      <div class="row">
        <div class="col-1g-12">
                  <div id="demo" class="carousel slide" data-ride="carousel" >

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                          <li data-target="#demo" data-slide-to="0" class="active"></li>
                          <li data-target="#demo" data-slide-to="1"></li>
                          <li data-target="#demo" data-slide-to="2"></li>
                          <li data-target="#demo" data-slide-to="3"></li>
                          <li data-target="#demo" data-slide-to="4"></li>
                          <li data-target="#demo" data-slide-to="5"></li>
                          <li data-target="#demo" data-slide-to="6"></li>
                          <li data-target="#demo" data-slide-to="7"></li>
                        </ul>

                        <!-- The slideshow banner -->
                        <div class="carousel-inner">
                          <div class="carousel-item active" >
                          <a href="#"> <img src="image\image12.jpg"   class="banner" width="100%" height="400" ></a>
                          </div>
                          
                          <div class="carousel-item">
                            <a href="#"><img src="image\image20.jpg"  class="banner" width="100%"  height="400"></a>
                          </div>
                          
                          
                          <div class="carousel-item">
                            <a href="#"><img src="image\soilphoto.jpg"  class="banner" width="100%"  height="400"></a>
                          </div>
                          
                          <div class="carousel-item">
                            <a href="#"><img src="image\ferfinal.jpg"  class="banner" width="100%"  height="400"></a>
                          </div>
                          
                          
                          
                          <div class="carousel-item">
                            <a href="#"><img src="image\machinfinal2.jpg"  class="banner" width="100%"  height="400"></a>
                          </div>
                          
                          
                          <div class="carousel-item">
                            <a href="#"><img src="image\weatherfinal3.jpg"  class="banner" width="100%"  height="400"></a>
                          </div>
                          
                          
                          <div class="carousel-item">
                          <a href="#">  <img src="image\FruitsandVeggies.png" class="banner" width="100%" height="400"></a>
                          </div>
                          <div class="carousel-item" >
                            <a href="#"><img src="image\image14.jpg"  class="banner" width="100%" height="400"></a>
                          </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev" class="arrow">
                          <span><img src="image\left.png" style="height:40%; width:40%;"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next" class="arrow">
                          <span  ><img src="image\right.png" style="height:40%; width:40%;"></span>
                        </a>
                    </div><!--end of class carousel-->
                  </div><!--end of class col-->
                </div><!--end of class row-->
              </div> <!--end of container class-->
<!--banner slider code completes-->


<!--<img class="img1" src="images/PicsArt_02-01-11.52.33.jpg" alt="Avatar" style="width:50px">-->
 
<!--- dynamic calling --->


<?php
$cat_data = calling_data('category');
$parent = 1;
foreach ($cat_data as $cat):
?>

<div id="divya<?= $parent;?>" class="carousel slide" data-ride="carousel" data-interval="<?= $parent. "500";?>">


  <ol class="carousel-indicators">
    <li data-target="#divya<?= $parent;?>" data-slide-to="0" class="active"></li>
<?php
$data = calling_data('product'," cat_title='".$cat['cat_title']."'");
$n = count($data);
$no_of_slide = (floor($n/6) + ceil($n/6 - floor($n/6)));
if($no_of_slide > 0):
for($a=0; $a < $no_of_slide; $a++):

 ?>
    <li data-target="divya<?= $parent;?>" data-slide-to="<?= $a; ?>">i</li>

  <?php endfor;?>
  </ol>
  <div class="container-fluid shadow mb-3 " style="background:white;height:410px;background-repeat:no-repeat;background-size:cover;">
    <h2 class="font-weight-bold text-dark"><?= $cat['cat_title'];?> (<?= $n?>)</h2> <span style="margin-top:-20px">Recently added</span>

      <a href="product.php?cat=<?= $cat['cat_title'];?>" class="btn btn-outline-info" style="float:right;margin-top:-20px">View All</a>

     <hr>
     
    <div class="carousel-inner">
     
      <div class="carousel-item active">
       
        <?php
        $count = 1;
          $n=0;
        foreach ($data as $p):
          $n++;
          ?>
          
        <div class="col-lg-2 col-md-4 col-6 d-inline-block"  style="margin-right:-4px;">
            <div class="card  mb-4" style="border:#ffffff;">
                <a href="item.php?p_id=<?= $p['p_id'];?>"><img style="margin-left:10%;" src="image\<?= $p['p_img'];?>" alt="" height="170px" class="w-80"></a>
                <div class="card-body">
                  <span class="desc_p" id="titlep<?= $p['p_id'];?>"><?= $p['p_name'];?></span><br>
                  <span class="price"> ₹<?= $p['p_price'];?>/-</span>
                </div>
            </div>
        </div>

      <?php
      if($count%6==0 and $count > 0):?>
      
    </div>
    
    
    <div class="carousel-item">


    <?php  endif;   $count++; endforeach;   endif; ?>

      </div>
      <a class="carousel-control-prev" href="#divya<?= $parent;?>" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true" style="color:black" ></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#divya<?= $parent;?>" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

</div>
<?php $parent++;  endforeach; ?>


<!--- end dynamic calling --->




          <div style="background:url('image/cont.jpg');background-repeat:no-repeat;background-size:cover;">
            <!--in the below section card code is written-->
        <div class="container">
          <div class="row pt-5" >
            <div class="col-12 ">
              <u class="text-white"><h3  class="text-white" id="card_text">Our Services</h3></u>
            </div>
            <div class="col-6 col-lg-3 col-md-4  " >
              <div class="info-card ">
                <div class="front">
                  <img class="card-image" src="image\milkdelivery.jpg">
                   <h5 class="text-center" class="text-center">All Time Delivery</h5>
                </div>

                <div class="back">
                  <h4 class="text-center">Get your daily food <br> essentials before <br> you wake up</h4>
                </div>
              </div>
            </div>

            <div class="col-6 col-lg-3 col-md-4  ">
              <div class="info-card ">
                <div class="front">
                  <img class="card-image" src="image\subscription.jpg">
                   <h5 class="text-center">Easy Subscription</h5>
                </div>

                <div class="back">
                      <h4 class="text-center">Pause or Resume your <br> deliveries any time</h4>
                </div>
              </div>
            </div>

            <div class="col-6 col-lg-3 col-md-4  ">
              <div class="info-card ">
                <div class="front">
                  <img class="card-image" src="image\milknmore.webp">
                   <h5 class="text-center">Milk & More</h5>
                </div>

                <div class="back">
                     <h4 class="text-center">Selection of high - quality,<br> everyday items <br>from a single place </h4>
                </div>
              </div>
            </div>
<!---->
            <div class="col-6 col-lg-3 col-md-4  ">
              <div class="info-card ">
                <div class="front">
                  <img class="card-image" src="image\milk-dairy-products.jpg">
                   <h5 class="text-center">Fresh product from farm</h5>
                </div>

                <div class="back">
                     <h4 class="text-center">Handpicked and delivered <br> within 8 hours of <br> collection from the <br> farms </h4>
                </div>
              </div>
            </div>
<!--image\area.png-->
            <div class="col-6 col-lg-3 col-md-4  ">
              <div class="info-card">
                <div class="front">
                  <img class="card-image" src="image\area.png">
                   <h5 class="text-center">We cover large area</h5>
                </div>

                <div class="back">
                    <h4 class="text-center">our service is <br> expanded in a large <br> area ,so that  <br>you can find  <br>us anywhere</h4>
                </div>
              </div>
            </div>
<!---->
            <div class="col-6 col-lg-3 col-md-4  ">
              <div class="info-card">
                <div class="front">
                  <img class="card-image" src="image\support.jpg">
                   <h5 class="text-center">24x7 full customer support</h5>
                </div>

                <div class="back">
                    <h4 class="text-center">We are always there to  <br>answer you query and  <br>to solve you problems</h4>
                </div>
              </div>
            </div>

            <div class="col-6 col-lg-3 col-md-4  ">
              <div class="info-card">
                <div class="front">
                  <img class="card-image" src="image\cashondelivery.jpg">
                   <h5 class="text-center">Cash on delivery</h5>
                </div>

                <div class="back">
                     <h4 class="text-center">receive your order and<br> then pay <br> for that.No <br>need to worry <br>about cash</h4>
                </div>
              </div>
            </div>

            <div class="col-6 col-lg-3 col-md-4  ">
              <div class="info-card">
                <div class="front">
                  <img class="card-image" src="image\returns.jpg">
                   <h5 class="text-center">Easy To return</h5>
                </div>

                <div class="back">
                     <h4 class="text-center">We have easy return policy.<br> If you find any issue in <br> your packed  product <br> simply request us <br> on our mail</h4>
                </div>
              </div>
            </div>
          </div>
        </div>  <!--card code completes-->
          </div>






<!--      contact demo-->
<!--
       
       <section class="pt-5 bm-5" style="background:linear-gradient(#EA9197,#E44A44)">
           <article class="py-5 text-center text-white">

               <div>
                   <h1 class="display-4 pt-5 text-white">+91 9128434558</h1>
                   <h3 class="text-white">Help Center</h3>
                   <button class="btn btn-warning">Contact Now</button>
               </div>
           </article>
           
       </section>
       
-->
       
       
       <section class="pt-5 bm-5" style="background:linear-gradient(#EA9197,#E44A44)">
           <div class="container pt-5">
           <div class="row text-center mb-5">
            
           <div class="col-lg-6 col-md-6 col-12"> 
               <div>
                   <h1 class="display-4 pt-5 text-white">+91 9128434558</h1>
                   <h3 class="text-white">Help Center</h3>
                   <button class="btn btn-warning mb-5">Contact Now</button>
               </div>
            </div>
            
            
             <div class="col-lg-6 col-md-6 col-12 pt-5"> 
               <div >
               <img class="img1 rounded-circle" src="images/PicsArt_02-01-11.52.33.jpg" alt="Avatar"  width="150px" height="150px"><br/>
               <button class="btn btn-warning text-white w-25 pt-3"><a href="chat.html">Chat Now</a></button>
                </div>
            </div>
            
           </div>
           </div>
       </section>
       
       
       
       
       
       
       
       
<!--       <img class="img1" src="images/PicsArt_02-01-11.52.33.jpg" alt="Avatar" style="width:50px">-->

<!--       <section class="ptr1 pt-5 bm-5" style="background:linear-gradient(#EA9197,#E44A44)">-->
<!--           <article class="py-5 text-center text-white">-->
<!--               <div>-->
<!--               <img class="img1" src="images/PicsArt_02-01-11.52.33.jpg" alt="Avatar" style="width:50px">-->

<!--                   <h1 class="display-4 pt-5 text-white">+91 9128434558</h1>-->
<!--                   <h3 class="text-white">Help Center</h3>-->
<!--                   <button class="btn btn-warning text-center">Contact Now</button>-->
<!--               </div>-->
<!--           </article>-->
           
<!--       </section>-->






  <!--  <div class="container-fluid shadow" id="costomer_view">
      <img src="image\milkbnner.jpg" alt="" style="width:100%">
      <img src="https://radianceyogany.com/wp-content/uploads/2017/01/Natalie-Face-Circle.png" alt="" class="custmr">
      <h1 class="custmr" id="our_custm">our customer stories</h1>
    </div>-->
<?php include"assets/footer.php";?>

        </body>
</html>
