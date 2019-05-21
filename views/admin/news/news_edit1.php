<?php include(ROOT.'/views/admin/blocklar/header.php'); ?>

        <!-- /. NAV TOP  -->
<?php include(ROOT.'/views/admin/blocklar/menu.php'); ?>   
        <!-- /. NAV SIDE  -->

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Data Table</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
<div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           BASIC FORM
                        </div>
                        <div class="panel-body">
                            <form role="form" action="/cabinet/insert/insert" method="POST" autocomplate="off" enctype="multipart/form-data">
                                <div class="form-group">
                                            <!-- <label>Kerakli jadvalni tanlang</label>
                                                <select name="categoriya" class="form-control">
                                                <option value="news">Yangiliklar</option>
                                                <option value="events">Hodisalar</option>
                                            </select> -->
                                        </div>
                                        <div class="form-group">
                                            <label>Nomi_uz</label>
                                            <input name="name_uz" class="form-control" type="text" value="<?=$edit['name_uz']?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nomi_ru</label>
                                            <input name="name_ru" class="form-control" type="text" value="<?=$edit['name_ru']?>">
                                        </div>

                                            <div class="form-group">
                                                <label>Anons_uz</label>

                                                <textarea name="anons_uz" class="form-control" rows="3" value="<?=$edit['anons_uz']?>"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Anons_ru</label>

                                                <textarea name="anons_ru" class="form-control" rows="3" value="<?=$edit['anons_ru']?>"></textarea>
                                            </div>
                                         <div class="form-group">
                                            <label>To'liq matn_uz</label>

                                            <textarea name="text_uz" class="form-control" rows="3" value="<?=$edit['text_uz']?>"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>To'liq matn_ru</label>

                                            <textarea name="text_ru" class="form-control" rows="3" value="<?=$edit['text_ru']?>"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Image Upload</label>
                                            <div class="">
                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                                            <div>
                                               
                                            <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="img" type="file"  value="<?=$edit['img']?>"></span>
                                            <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                                         <div class="form-group">                                   
                                            <label>Avtor</label>
                                            <input name="author" class="form-control" type="text" value="<?=$edit['author']?>">
                                        </div>
                                        <div class="form-group">
                                    
                                            <label>Vaqt</label>
                                            <input name="vaqt" class="form-control" type="date" value="<?=$edit['date_added']?>">
                                        </div>
                                  
                                 
                                        <button type="submit" name="submit" class="btn btn-info">Send Message </button>

                                    </form>
                            </div>
                        </div>
                            </div>
 </div>
            

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
 
    <!-- /. WRAPPER  -->
   <?php include(ROOT.'/views/admin/blocklar/footer.php'); ?>