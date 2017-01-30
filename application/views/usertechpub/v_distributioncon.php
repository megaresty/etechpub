<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Data Incoming Document</h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                	<div class="col-md-4 col-sm-4 col-xs-12">
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                    	<form action="<?php echo base_url() ?>index.php/usertechpub/adddistribution" method="post">
                        	<div class="form-group">
                            	<label>Document No.</label>
                                <input class="form-control" type="text" name="docno">
                            </div>
                        	<div class="form-group">
                            	<label>Revision No.</label>
                                <input class="form-control" type="text" name="revno">
                            </div>
                            <div class="form-group">
                            	<label>Unit Name</label>
                                <input class="form-control" type="text" name="unit">
                            </div>
							<div class="form-group">
                            	<label>Distribution Date</label>
                                <input class="form-control" type="text" name="distdate" id="d_distdate">
                            </div>
                            <div class="form-group">
                            	<label>Qty</label>
                                <input class="form-control" type="text" name="distqty">
                            </div>
							<div class="form-group">
                            	<label>Ins Date</label>
                                <input class="form-control" type="text" name="insdate" id="d_insdate">
                            </div>
                            <div class="form-group">
                            	<label>PIC</label>
                                <input class="form-control" type="text" name="pic">
                            </div>
                            <button class="btn btn-info" type="submit">Save</button>
                            <button class="btn btn-default" type="reset">Reset</button>
                            <a href="<?php echo base_url() ?>index.php/usertechpub/printtransmittal" type="button" class="btn btn-danger">Print Transmittal</a>
                        </form>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                	</div>
                    
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
