<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Data Incoming Document</h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                <form action="<?php echo base_url() ?>index.php/usertechpub/addincoming" method="post">
                    <div class="col-md-4 col-sm-4 col-xs-12">

                        	<div class="form-group">
                            	<label>Control No.</label>
                                <input class="form-control" type="text" name="ctrlno">
                            </div>
                        	<div class="form-group">
                            	<label>Document No.</label>
                                <input class="form-control" type="text" name="docno">
                            </div>
                            <div class="form-group">
                            	<label>Revision No.</label>
                                <input class="form-control" type="text" name="revision">
                            </div>
                            <div class="form-group">
                                <label>Version : </label>
                                	<input type="radio" name="newdocrev" id="new" value="1">New
                                    <input type="radio" name="newdocrev" id="update" value="2">Update
                    		    </div>
                            <div class="form-group">
                            	<label>Kind of Doc : </label>
                                	<input type="radio" name="doctype" id="engpub" value="1">Tech Manual
                                    <input type="radio" name="doctype" id="techmanual" value="2">Eng Publication
                            </div>
                            <div class="form-group">
                            	<label>Kind of Revision : </label>
                                	<input type="radio" name="rev_type" id="complete" value="1">Complete
                                    <input type="radio" name="rev_type" id="partial" value="2">Partial
                            </div>
                            <div class="form-group">
                            	<label>Document Owner</label>
								<select class="form-control" name="staff_name">
                                	<?php foreach($staff_name as $row){
										echo '<option value="'.$row->idStaff.'">'.$row->staff_name.'</option>';
									}?>
                                </select>

                            </div>
							<div class="form-group">
                            	<label>Nopeg</label>
                                <input class="form-control" type="text" name="nopeg">
                            </div>
                            <!--<div class="form-group">
                            	<label>Revision Date</label>
                                <input class="form-control" type="text" id="d_revdate">
                            </div>-->
                            <div class="form-group">
                            	<label>Received Date</label>
                                <input class="form-control" type="text" name="received_date" id="d_recdate">
                            </div>
							<div class="form-group">
                            	<label>Location</label>
                                <input class="form-control" type="text" name="rack">
                            </div>
                            <div class="form-group">
                            	<label>Follow By</label>
                                <select class="form-control" name="follow_by">
                                	<?php foreach($staff_name as $row){
										echo '<option value="'.$row->idStaff.'">'.$row->staff_name.'</option>';
									}?>
                                </select>                            </div>
                            <div class="form-group">
                            	<label>Status</label>
                                <input class="form-control" type="text" name="in_status">
                            </div>
                            <div class="form-group">
                            	<label>Remark</label>
                                <textarea class="form-control" rows="3" name="remark"></textarea>
                            </div>
                            <div class="form-group">
                            	<label>Date Close</label>
                                <input class="form-control" type="text" name="date_close" id="d_dateclose">
                            </div>
                    	<!--</form>-->
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                    	<!--<form>-->
                        	<div class="form-group">
                            	<label><h3><strong>DESCRIPTION</strong></h3></label>
                            </div>
                            <div class="form-group">
                            	<label>Title</label>
                                <input class="form-control" type="text" name="doc_title">
                            </div>
                            <div class="form-group">
                            	<label>Manufacturer</label>
                                <input class="form-control" type="text" name="vendor">
                            </div>
                            <div class="form-group">
                            	<label>Manufacturer No.</label>
                                <input class="form-control" type="text" name="cage_code">
                            </div>
                            <div class="form-group">
                            	<label>ATA</label>
                                <input class="form-control" type="text" name="ata">
                            </div>
                            <div class="form-group">
                            	<label><h3><strong>RECEIVED CONDITION</strong></h3></label>
                            </div>
                            <div class="form-group">
                            	<label>Format</label>
                                <input class="form-control" type="text" name="in_format">
                            </div>
                            <div class="form-group">
                            	<label>Number of Copies</label>
                                <input class="form-control" type="text" name="no_copy">
                            </div>
                            <div class="form-group">
                            	<label>PO No.</label>
                                <input class="form-control" type="text" name="po_no">
                            </div>
                            <div class="form-group">
                            	<label>Ship No.</label>
                                <input class="form-control" type="text" name="ship_no">
                            </div>
                            <div class="form-group">
                            	<label>Ship Date</label>
                                <input class="form-control" type="text" name="ship_date" id="d_shipdate">
                            </div>
                            <div class="form-group">
                            	<label>Master Qty</label>
                                <input class="form-control" type="text" name="masterqty">
                            </div>
                            <div class="form-group">
                            	<label>Duplication Qty</label>
                                <input class="form-control" type="text" name="duplicateqty">
                            </div>
							<div class="form-group">
                            	<label>Distribution Qty</label>
                                <input class="form-control" type="text" name="distributionqty">
                            </div>
                        <!--</form>-->
                	</div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                    	<!--<form>-->
                        	<div class="form-group">
                            	<label><h3><strong>MEDIA</strong></h3></label>
                            </div>
                            <div class="form-group">
                            	<label>DVD / CD</label>
                                <div class="checkbox">
                                	<label>
                                		<input type="checkbox" name="dvdcd" value="1">Upload to Intranet
                                    </label>
								</div>
                                <div class="checkbox">
                                	<label>
                                		<input type="checkbox" name="dvdcd" value="2">DVD/CD Installation
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                            	<label>Hardcopy</label>
                                <div class="checkbox">
                                	<label>
                                		<input type="checkbox" name="hardcopy" value="1">SC need to be download
                                    </label>
                                </div>
                                <div class="checkbox">
                                	<label>
                                		<input type="checkbox" name="hardcopy" value="2">SC need to be scanned
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                            	<label>Pages Condition</label>
                                <textarea class="form-control" rows="10" name="pagescon"></textarea>
                            </div>
                            <div class="form-group">
                            	<label>Revision Condition</label>
                                <textarea class="form-control" rows="10" name="revcon"></textarea>
                            </div>
                            <div class="form-group">
                            	<label>Additional Notes</label>
                                <textarea class="form-control" rows="10" name="note"></textarea>
                            </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-danger">Print PDF </button>
                                <button type="reset" class="btn btn-info">Distribute </button>
                            </div>
                    	</div>
                    </div>
                    </form>

                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
