<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Edit Data Incoming Document</h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                
                <div class="row">
                
                <form action="<?php echo base_url() ?>index.php/usertechpub/updateincoming" method="post">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                    	<?php foreach($incoming as $row){ ?>
                        <label id="hide">Id :</label>
<input type="text" id="hide" name="idin" value="<?php echo $row->idIncoming; ?>">

                        	<div class="form-group">
                            	<label>Control No.</label>
                                <input class="form-control" type="text" name="ctrlno" value="<?php echo $row->ctrlno; ?>">
                            </div>
                        	<div class="form-group">
                            	<label>Document No.</label>
                                <input class="form-control" type="text" name="docno" value="<?php echo $row->docno; ?>">
                            </div>
                            <div class="form-group">
                            	<label>Revision No.</label>
                                <input class="form-control" type="text" name="revision" value="<?php echo $row->revision; ?>">
                            </div>
                            <div class="form-group">
                                <label>Version : </label>
                                	<input type="radio" name="newdocrev" id="new" value="1" <?php if($row->newdocrev==1) {echo 'checked';}?>>New
                                    <input type="radio" name="newdocrev" id="update" value="2" <?php if($row->newdocrev==2) {echo 'checked';}?>>Update
                    		</div>
                            <div class="form-group">
                            	<label>Kind of Doc : </label>
                                	<input type="radio" name="doctype" id="engpub" value="1" <?php if($row->doctype==1) {echo 'checked';}?>>Tech Manual
                                    <input type="radio" name="doctype" id="techmanual" value="2" <?php if($row->doctype==2) {echo 'checked';}?>>Eng Publication
                            </div>
                            <div class="form-group">
                            	<label>Kind of Revision : </label>
                                	<input type="radio" name="rev_type" id="complete" value="1" <?php if($row->rev_type==1) {echo 'checked';}?>>Complete
                                    <input type="radio" name="rev_type" id="partial" value="2" <?php if($row->rev_type==2) {echo 'checked';}?>>Partial
                            </div>
                            <div class="form-group">
                            	<label>Document Owner</label>
                                <input class="form-control" type="text" name="name" value="<?php echo $row->name; ?>">
                            </div>
							<div class="form-group">
                            	<label>Nopeg</label>
                                <input class="form-control" type="text" name="nopeg" value="<?php echo $row->nopeg; ?>">
                            </div>
                            <!--<div class="form-group">
                            	<label>Revision Date</label>
                                <input class="form-control" type="text" id="d_revdate" value="<?php // echo $row->d_revdate; ?>">
                            </div>-->
                            <div class="form-group">
                            	<label>Received Date</label>
                                <input class="form-control" type="text" name="received_date" id="d_recdate" value="<?php echo $row->received_date; ?>">
                            </div>
							<div class="form-group">
                            	<label>Location</label>
                                <input class="form-control" type="text" name="rack" value="<?php echo $row->rack; ?>">
                            </div>
                            <div class="form-group">
                            	<label>Follow By</label>
                                <input class="form-control" type="text" name="followby" value="<?php echo $row->followby; ?>">
                            </div>
                            <div class="form-group">
                            	<label>Status</label>
                                <input class="form-control" type="text" name="in_status" value="<?php echo $row->in_status; ?>">
                            </div>
                            <div class="form-group">
                            	<label>Remark</label>
                                <textarea class="form-control" rows="3" name="remark"><?php echo $row->remark; ?></textarea>
                            </div>
                            <div class="form-group">
                            	<label>Date Close</label>
                                <input class="form-control" type="text" name="date_close" id="d_dateclose" value="<?php echo $row->date_close; ?>">
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
                                <input class="form-control" type="text" name="doc_title" value="<?php echo $row->doc_title; ?>">
                            </div>
                            <div class="form-group">
                            	<label>Manufacturer</label>
                                <input class="form-control" type="text" name="vendor" value="<?php echo $row->vendor; ?>">
                            </div>
                            <div class="form-group">
                            	<label>Manufacturer No.</label>
                                <input class="form-control" type="text" name="cage_code" value="<?php echo $row->cage_code; ?>">
                            </div>
                            <div class="form-group">
                            	<label>ATA</label>
                                <input class="form-control" type="text" name="ata" value="<?php echo $row->ata; ?>">
                            </div>
                            <div class="form-group">
                            	<label><h3><strong>RECEIVED CONDITION</strong></h3></label>
                            </div>
                            <div class="form-group">
                            	<label>Format</label>
                                <input class="form-control" type="text" name="in_format" value="<?php echo $row->in_format; ?>">
                            </div>
                            <div class="form-group">
                            	<label>Number of Copies</label>
                                <input class="form-control" type="text" name="no_copy" value="<?php echo $row->no_copy; ?>">
                            </div>
                            <div class="form-group">
                            	<label>PO No.</label>
                                <input class="form-control" type="text" name="po_no" value="<?php echo $row->po_no; ?>">
                            </div>
                            <div class="form-group">
                            	<label>Ship No.</label>
                                <input class="form-control" type="text" name="ship_no" value="<?php echo $row->ship_no; ?>">
                            </div>
                            <div class="form-group">
                            	<label>Ship Date</label>
                                <input class="form-control" type="text" name="ship_date" id="d_shipdate" value="<?php echo $row->ship_date; ?>">
                            </div>
                            <div class="form-group">
                            	<label>Master Qty</label>
                                <input class="form-control" type="text" name="masterqty" value="<?php echo $row->masterqty; ?>">
                            </div>
                            <div class="form-group">
                            	<label>Duplication Qty</label>
                                <input class="form-control" type="text" name="duplicateqty" value="<?php echo $row->duplicateqty; ?>">
                            </div>
							<div class="form-group">
                            	<label>Distribution Qty</label>
                                <input class="form-control" type="text" name="distributionqty" value="<?php echo $row->distributionqty; ?>">
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
                                		<input type="checkbox" name="dvdcd" value="1" <?php if($row->dvdcd==1) {echo 'checked';}?>>Upload to Intranet
                                    </label>
								</div>
                                <div class="checkbox">
                                	<label>
                                		<input type="checkbox" name="dvdcd" value="2" <?php if($row->dvdcd==2) {echo 'checked';}?>>DVD/CD Installation
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                            	<label>Hardcopy</label>
                                <div class="checkbox">
                                	<label>
                                		<input type="checkbox" name="hardcopy" value="1" <?php if($row->hardcopy==1) {echo 'checked';}?>>SC need to be download
                                    </label>
                                </div>
                                <div class="checkbox">
                                	<label>
                                		<input type="checkbox" name="hardcopy" value="2" <?php if($row->hardcopy==2) {echo 'checked';}?>>SC need to be scanned
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                            	<label>Pages Condition</label>
                                <textarea class="form-control" rows="10" name="pagescon"><?php echo $row->pagescon; ?></textarea>
                            </div>
                            <div class="form-group">
                            	<label>Revision Condition</label>
                                <textarea class="form-control" rows="10" name="revcon"><?php echo $row->revcon; ?></textarea>
                            </div>
                            <div class="form-group">
                            	<label>Additional Notes</label>
                                <textarea class="form-control" rows="10" name="note"><?php echo $row->note; ?></textarea>
                            </div>
                            <?php } ?>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-info">Save </button>
                                <button type="reset" class="btn btn-default">Reset </button>
                            </div>
                    	</div>
                        
                    </div>
                    
                    </form>
                    
                    
                </div>
				
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
