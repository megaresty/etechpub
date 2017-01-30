        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Search Document Manual</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="main.php">Home</a>
                            </li>
                            <li>Manual</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">
                <section>
                    <div class="row">

                        <div class="col-md-12 clearfix">

                            <div id="text-page">
                            	<form action="<?php echo base_url() ?>index.php/user/searchresult" method="post">
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
                                            	<input type="text" class="form-control" id="docno" name="docno">
                                        	</div>
                                        </div>
                                        <div class="col-sm-6">
                                        	<div class="form-group">
                                            	<label for="partno">Part Number</label>
                                                <input type="text" class="form-control" id="partno" name="partno">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                        	<div class="form-group">
                                            	<label for="cagecode">CAGE Code</label>
                                                <input type="text" class="form-control" id="cagecode" name="cagecode">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                        	<div class="form-group">
                                            	<label for="ata">ATA No.</label>
                                                <input type="text" class="form-control" id="ata" name="ata">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                        	<div class="form-group">
                                            	<label for="doctitle">Doc. Title</label>
                                                <input type="text" class="form-control" id="doctitle" name="doctitle">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                        	<div class="form-group">
                                            	<label for="aircraft">Aircraft Type</label>
                                                <input type="text" class="form-control" id="aircraft" name="aircraft">
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
                                                <input type="text" class="form-control" id="acreg" name="acreg">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                        	<div class="form-group">
                                            	<label for="unit">Unit</label>
                                                <input type="text" class="form-control" id="unit" name="unit">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                        	<div class="form-group">
                                            	<label for="engine">Engine</label>
                                                <input type="text" class="form-control" id="engine" name="engine">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                        	<div class="form-group">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                        	<div class="form-group">
                                            	<label for="manufacturer">Manufacturer</label>
                                                <input type="text" class="form-control" id="manufacturer" name="manufacturer">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-template-main">Search</button>

                                    </div>
                                    </div>
                                </form>
                                </div>
                             </div>
                          </div>
                       </section>
                    </div>
                 </div>
              </div>
