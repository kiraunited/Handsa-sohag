<?php
    include ("connect.php") ;
    include ("fun.php") ;
    $title =" مدني " ;
    $start ="css" ;
    $end ="js" ;
    include ("inc/start.php") ;
    include ("inc/nav.php") ;
?>
<section class="advance_feature learning_part">
    <div class="container">
        <div class="row align-items-sm-center align-items-xl-stretch">
            <div class="col-lg-6 col-md-6">
                <div class="learning_img">
                    <img src="img/w12.png" alt="">
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="learning_member_text text-right">
                    <h5>هندسة سوهاج</h5>
                    <h2> قسم مدني </h2>
                    <p>
                        هنا ستجد جميع المحاضرات والسكاشن والجروبات و جميع الروابط الخاصة بقسم مدني , يتم نشر
                        وتحديث الروابط بواسطة طلاب داخل القسم
                    </p>
                    <br>
                    <div class="row">
                        <div class="col-sm-6 col-md-12 col-lg-6">
                        <a href="madany/ma2.php">
                            <div class="single-home-blog mg_enter">
                                <div class="card">
                                    <div class="card-body">
                                            <h5 class="card-title"> الفرقة الثانية </h5>
                                        <p>عدد الروابط الموجودة في الموقع</p>
                                            <h4 class="text-center">
                                               <?php echo row('SELECT * FROM `all_P` WHERE type_P = "madany2"') ?>
                                            </h4>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-12 col-lg-6">
                            <a href="madany/ma1.php">
                                <div class="single-home-blog mg_enter">
                                    <div class="card">
                                        <div class="card-body">
                                                <h5 class="card-title"> الفرقة الاولي </h5>
                                            <p>عدد الروابط الموجودة في الموقع</p>
                                                <h4 class="text-center">
                                                    <?php echo row('SELECT * FROM `all_P` WHERE type_P = "madany1"') ?>
                                                </h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-12 col-lg-6">
                        <a href="madany/ma3.php">
                            <div class="single-home-blog mg_enter">
                                <div class="card">
                                    <div class="card-body">
                                            <h5 class="card-title"> الفرقة الثالثة </h5>
                                        <p>عدد الروابط الموجودة في الموقع</p>
                                            <h4 class="text-center">
                                                <?php echo row('SELECT * FROM `all_P` WHERE type_P = "madany3"') ?>
                                            </h4>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-12 col-lg-6">
                        <a href="madany/ma4.php">
                            <div class="single-home-blog mg_enter">
                                <div class="card">
                                    <div class="card-body">
                                            <h5 class="card-title"> الفرقة الرابعة </h5>
                                        <p>عدد الروابط الموجودة في الموقع</p>
                                       
                                            <h4 class="text-center">
                                               <?php echo row('SELECT * FROM `all_P` WHERE type_P = "madany4"') ?>
                                            </h4>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    include ("inc/footer.php") ;
    include ("inc/end.php") ;