
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
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Yangiliklar ro'yxati

                        </div>
                       <a href="/cabinet/insert"> <button type="button" class="btn btn-success" ac><i class="glyphicon glyphicon-plus"></i>Qo`shish</button></a>
                        <div class="panel-body">
                       <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>T/r</th>
                                            <th>Nomi</th>   
                                            <th>Muallif</th>
                                            <th>Sana</th>
                                            <th>Qayta Yozish</th>
                                            <th>O'chirish</th>
                                            <th width="6%"></th>
                                           <th width="6%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                            <?php foreach ($news as $new) { ?>
                                                <tr>
                                                    <td><? echo $i; $i++ ?></td>
                                                    <td><?=$new['name'] ?></td>
                                                    <td><?=$new['author'] ?></td>
                                                    <td><?=$new['date_added'] ?></td>
                                                     <td> <a href="/cabinet/edit/<?=$new['id']?>" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i>Edit</a>
                                                    </td>
                                                    <td>
                                                        <a href="/cabinet/delete/<?=$new['id']?>" class="btn btn-danger"><i class="glyphicon glyphicon-home"></i>Delete</a></td>
                                                </tr>
                                                
                                           <?php } ?>
                                            
                                          
                                         
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
                
            </div>
            

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
   <?php include(ROOT.'/views/admin/blocklar/footer.php'); ?>