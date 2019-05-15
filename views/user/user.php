<?php 
    include_once(ROOT.'/views/blogs/header.php');
    //include_once('/../blogs/header.php');

?> 
 <section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(/../template/images/tuit.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-sm-inner">
          <div class="col-md-7 text-center">
  
            <div class="mb-5 element-animate">
              <h1 class="mb-2">Log in</h1>
              <p class="bcrumb"><a href="/">Home</a> <span class="sep ion-android-arrow-dropright px-2"></span>  <span class="current">Log in</span></p>
            </div>
            
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <section class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <div class="form-wrap">
              <h2 class="mb-4">Log in with your account</h2>
              <form action="user/login" method="post" autocomplete="off">
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="name">Username</label>
                    <input type="text" name="user" id="name" class="form-control py-2">
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-12 form-group">
                    <label for="name">Password</label>
                    <input type="password" id="name" name="parol" class="form-control py-2">
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="submit" value="Login" name="submit" class="btn btn-primary px-5 py-2">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php 
  include_once('/../blogs/footer.php');
?>