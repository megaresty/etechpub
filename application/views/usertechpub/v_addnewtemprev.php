<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add New Temporary Revision Document</h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                
                    <div class="col-md-4 col-sm-4 col-xs-12">
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                    	<form action="<?php echo base_url() ?>index.php/usertechpub/addtemprev" method="post">
                    	<!--<form>-->
                            <div class="form-group">
                            	<label>Document No.</label>
                                <input class="form-control" type="text" name="docno">
                            </div>
                            <div class="form-group">
                            	<label>Temporary Revision Name</label>
                                <input class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                            	<label>Date</label>
                                <input class="form-control" type="text" name="date" id="d_temprev">
                            </div>
                            <div class="form-group">
                            	<label>Effected Pages</label>
                                <input class="form-control" type="text" name="effectedpages">
                            </div>
                            <div class="form-group">
                            	<label>Remark</label>
                                <textarea class="form-control" rows="3" name="remark"></textarea>
                            </div>
                            <button type="submit" class="btn btn-info">Save </button>
                            <button type="reset" class="btn btn-default">Reset </button>              
                        <!--</form>-->
                        </form>
                	</div>
                    <div class="col-md-4 col-sm-4 col-xs-12">      
                    </div>
                    
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
