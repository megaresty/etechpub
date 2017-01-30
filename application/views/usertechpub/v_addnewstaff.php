<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add New Member TER 5</h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <form action="<?php echo base_url() ?>index.php/usertechpub/addstaff" method="post">
                        	<div class="row">
                            	<div class="col-sm-6">
                                	<div class="form-group">
                                		<label for="nopeg">Nopeg</label>
                                        <input type="text" class="form-control" id="nopeg" name="nopeg">
                                    </div>
                                    <div class="form-group">
                                		<label for="staff_name">Staff Name</label>
                                        <input type="text" class="form-control" id="staff_name" name="staff_name">
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-primary">Add</button>
                                    <button type="reset" class="btn btn-sm btn-default">Reset</button>
                                </div>
                                <div class="col-sm-6">
                                	<div class="form-group">
                                    	<label for="phone">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="phone">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->