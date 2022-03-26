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
                                            <label>Hakkında İd</label>
                                            <input class="form-control" type="text" name="" value="" >
                                            <p class="help-block"></p>
                                        </div>
                                           <div class="form-group  ">
                                            <label>Hakkında Foto</label>
                                            <input class="form-control" type="file"  name="">
                                    
                                        </div>
                                            <div class="form-group  ">
                                            <label>Şehir Hakkında</label>
                                            <textarea class="form-control" rows="3"  name="" ></textarea>
                                        </div>
                                        <input type="submit" class="btn btn-primary" value="Kaydet" name="">
            
        </div>
        </form>

            </div>
            