<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>

<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Turistik Yerler Sayfası</h1>
                        <h1 class="page-subhead-line">Turistik Yerler Sayfasına Hoşgeldiniz. </h1>

                    </div>
                </div>
                <form action="islem.php" method="POST"> 
                <div class="form-group">
                                            <label>Fotoğraf</label>
                                            <input class="form-control" type="file" name="" value="" >
                                            <p class="help-block"></p>
                                            <div class="form-group  ">
                                            <label>Metin</label>
                                            <textarea class="form-control" rows="3"  name="HakkindaMetin" ></textarea>

                                            <label>Fotoğraf</label>
                                            <input class="form-control" type="file" name="" value="" >
                                            <p class="help-block"></p>
                                            <div class="form-group  ">
                                            <label>Metin</label>
                                            <textarea class="form-control" rows="3"  name="HakkindaMetin" ></textarea>
                                        </div>
                                        </div>
                                        </div>
                                    
                                        <input type="submit" class="btn btn-primary" value="Kaydet" name="">
                                      
                                        </div>
            
        </div>
        </form>

            </div>
            
    



<?php include 'Footer.php'; ?>


