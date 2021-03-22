<div class="content">
<!-- Page length options -->
    <div class="panel panel-flat">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <span style="color:#1036f3;margin-left:35%; font-size:16px;">
        <?php 
        if($this->session->flashdata('success_message')){
         echo $this->session->flashdata('success_message');
         }?>
    </span>
     <form method="post" action="<?php echo base_url();?>doctor/dwaeya">
     <input type="hidden" name="patient_id" value="<?= $medicen[0]->app_id;?>">
     <input type="hidden" name="doctor_id" value="<?= $medicen[0]->doctor_id;?>">    
        <div class="well clearfix scrroll">
            <div id="czContainer">
                <div id="first">
                    <div class="recordset">
                        
                        <div class="fieldRow clearfix">
                            <div class="col-md-5">
                                <div id="div_id_stock_1_service" class="form-group">
                                    <label for="id_stock_1_product" class="control-label  requiredField">
                                        Medicines<span class="asteriskField">*</span>
                                    </label><div class="controls ">
                                    <input type="text" name="id_stock_1_medicine" id="id_stock_1_product" class="textinput form-control" required="true" />
                                    </div>
                                </div>
                            </div><div class="col-md-3">
                                <div id="div_id_stock_1_unit" class="form-group">
                                    <label for="id_stock_1_unit" class="control-label  requiredField">
                                        Unit<span class="asteriskField">*</span>
                                    </label>
                                    <div class="controls ">
                                        <select class="select form-control" id="id_stock_1_unit" name="id_stock_1_tablet" required="true">
                                            <option value="" selected="selected">---------
                                            </option><option value="10">10/Tablets</option>
                                            </option><option value="20">20/Tablets</option>
                                            </option><option value="30">30/Tablets</option>
                                        </select>
                                    </div>
                                </div>
                            </div><div class="col-md-3">
                                <div id="div_id_stock_1_quantity" class="form-group">
                                    <label for="id_stock_1_quantity" class="control-label  requiredField">
                                        Price<span class="asteriskField">*</span>
                                    </label>
                                    <div class="controls ">
                                        <input class="numberinput form-control" id="id_stock_1_quantity" name="stock_1_price"  type="number" required="true" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="submit" value="submit">
    </form>

    <script src="<?php echo base_url();?>/public/medicen/js/jquery.czMore-1.5.3.2.js"></script>
    <script type="text/javascript">
        //One-to-many relationship plugin by Yasir O. Atabani. Copyrights Reserved.
        $("#czContainer").czMore();
    </script>
</div>
</div>