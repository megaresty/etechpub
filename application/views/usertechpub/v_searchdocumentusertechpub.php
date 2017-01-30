        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Search Document Manual</h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                    	<form action="<?php echo base_url() ?>index.php/usertechpub/searchresult" method="post">
                                	<div class="row">
                                    	<div class="col-sm-6">
                                        	<div class="form-group">
                                				<h2>Document</h2>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                        	<div class="form-group">
                                            	<h2>Content</h2>
                                            </div>
                                        </div>
                                    	<div class="col-sm-6">
											<div class="form-group">
                                            	<label for="docno">Doc. No</label>
                                            	<input type="text" class="form-control" id="docno">
                                        	</div>
                                        </div>
                                        <div class="col-sm-6">
                                        	<div class="form-group">
                                            	<label for="partno">Part Number</label>
                                                <input type="text" class="form-control" id="partno">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                        	<div class="form-group">
                                            	<label for="cagecode">CAGE Code</label>
                                                <input type="text" class="form-control" id="cagecode">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                        	<div class="form-group">
                                            	<label for="ata">ATA No.</label>
                                                <input type="text" class="form-control" id="ata">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                        	<div class="form-group">
                                            	<label for="doctitle">Doc. Title</label>
                                                <input type="text" class="form-control" id="doctitle">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                        	<div class="form-group">
                                            	<label for="aircraft">Aircraft Type</label>
                                                <input type="text" class="form-control" id="aircraft">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                        	<div class="form-group">
                                            	<h2>Location</h2>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                        	<div class="form-group">
                                            	<label for="acreg">Aircraft Registration</label>
                                                <input type="text" class="form-control" id="acreg">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                        	<div class="form-group">
                                            	<label for="unit">Unit</label>
                                                <input type="text" class="form-control" id="unit">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                        	<div class="form-group">
                                            	<label for="engine">Engine</label>
                                                <input type="text" class="form-control" id="engine">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                        	<div class="form-group">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                        	<div class="form-group">
                                            	<label for="manufacturer">Manufacturer</label>
                                                <input type="text" class="form-control" id="manufacturer">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-sm btn-primary">Search</button>

                                    </div>
                                    </div>
                                </form>
                    </div>
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->