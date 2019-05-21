<?php 
    include_once(ROOT.'/views/blogs/header.php');

?>
    <!-- END header -->


    <!-- END section -->

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          
          <div class="col-md-6 col-lg-8 order-md-2">
            <div class="row">
              
              <div class="col-md-12 col-lg-12 mb-5">
                
                <div class="block-20 ">
                 
                  <h1 style="font-size: 30px; margin-left: 15px;"><?=$fakultet['name']?></h1>
                  <a href="<?=$menu['1']['url']?>" style="margin-left: 15px;"><?=$menu['1']['name']?></a>-><a href=""><?=$fakultet['name']?></a>

                  <img src="/../template/images/<?=$fakultet['img']?>" alt="" class="img-fluid" style="width: 710px; height: 350px; margin:10px;">
                  <div class="text" style="padding-top: 0">
                    <p><?=$fakultet['text']?></p>
            
                  </div>
                  <span style="margin-left: 15px; color: black">KAFEDRALAR:</span>
                  <hr style="border: 0.5px solid black; width: 580px; float: right; margin-right: 5px;">
                  
                    <div class="block-20" style="height: 100%">
                      <ul style="margin-left: 50px; margin-top: 20px; margin-bottom: 20px;">
                        <?php foreach ($kafedralar as $kafedra) {?>
                        <li><?=$kafedra['name']?></li>
                         <?php } ?>
                      </ul>
                    
                      
                    
                   
                </div>
              
                  <span style="margin-left: 15px; color: black">FAKULTET MA`MURYATI:</span>
                  <hr style="border: 0.5px solid black; width: 520px; float: right; margin-right: 5px;">
                <div class="block-20" style="height: 260px;">
                  <div class="col-lg-4 col-md-4" style="float: left; padding-top: 10px;padding-right: 0; padding-left: 25px;">
                    <img src="" alt="Rasm" class="img-fluid" style="width: 200px; height: 225px; padding-right: 0; margin-left: 10px;">
                  </div>
                  <div class="text col-lg-8 col-md-8"  style="float: right;">
                    <h3 class="heading"><?=$fakultet['dekan']?></h3>
                    <p style="margin: 0">Ish vaqti:</p>
                    <p style="margin: 0">Dushanba va Chorshanba kunlari: 13:00 - 16:00</p>
                    
                    <p>Telefon:(8 371) 238-64-08</p>
                    <p>E-mail:<a href="">b.akbaraliev@tuit.uz</a></p>

                  </div>
                </div>
                <div class="block-20" style="height: 260px; margin-top: 20px;">
                  <div class="col-lg-4 col-md-4" style="float: left; padding-top: 10px;padding-right: 0; padding-left: 25px;">
                    <img src="" alt="Rasm" class="img-fluid" style="width: 200px; height: 225px; padding-right: 0; margin-left: 10px;">
                  </div>
                  <div class="text col-lg-8 col-md-8"  style="float: right;">
                    <h3 class="heading"><?=$fakultet['zam_dekan']?></h3>
                    <p style="margin: 0">Ish vaqti:</p>
                    <p style="margin: 0">Dushanba va Chorshanba kunlari: 13:00 - 16:00</p>
                    
                    <p>Telefon:(8 371) 238-64-08</p>
                    <p>E-mail:<a href="">b.akbaraliev@tuit.uz</a></p>

                  </div>
                </div>
                </div>
              </div>

             
              </div>
            
          </div>
          <!-- END content -->
          <div class="col-md-6 col-lg-4 order-md-1">

            <div class="block-24 mb-5">
              <h3 class="heading"><?=$menu['1']['name']?></h3>
              <ul>
                <?php foreach ($dropdown1 as $minmenu){if($minmenu['nav_id']==$menu['1']['id']) {?>
                <li><a href="http:/fakultet/<?=$minmenu['id']?>"><?php echo $minmenu['name'] ?></a></li>
              <?php }} ?>
              </ul>
            </div>

             <div class="block-24 mb-5">
              <h3 class="heading">Tezkor sahifalar</h3>
              <ul>
                <li><a href="#"><i class="fa fa-graduation-cap"></i>  Fakultetlar</a></li>
                <li><a href="#"><i class="fa fa-"></i>  Kafedralar</a></li>
                <li><a href="#"><i class="fa fa-"></i>  Markaz va bo`limlar</a></li>
                <li><a href="#"><i class="fa fa-"></i>  Filiallar</a></li>
                <li><a href="#"><i class="fas fa-user-graduate"></i>Talabalarga</a></li>
                <li><a href="#"><i class="fa fa-"></i>  Abiturentlarga</a></li>
                <li><a href="#"><i class="fa fa-picture-o"></i>  Fotogalereya</a></li>
              </ul>
            </div>



          </div>
          <!-- END Sidebar -->
        </div>
      </div>
    </div>

    <?php 
    include_once(ROOT.'/views/blogs/footer.php');
 ?>
    

