        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">New Data Manual Document</h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                    	<form action="<?php echo base_url() ?>index.php/usertechpub/addnewdocument" method="post">
                    		<div class="col-md-4 col-sm-4 col-xs-12">
                            	<div class="form-group">
                                	<label>Document No.</label>
                                    <input class="form-control" type="text" name="docno">
                                </div>
                                <div class="form-group">
                                	<label>ATA</label>
                                    <input class="form-control" type="text" name="ata">
                                </div>
                                <div class="form-group">
                                	<label>Rev</label>
                                    <input class="form-control" type="text" name="rev">
                                </div>
                                <div class="form-group">
                                	<label>Index Ref</label>
                                    <input class="form-control" type="text" name="index_ref">
                                </div>
                                <div class="form-group">
                                	<label>Status</label>
                                    <input class="form-control" type="text" name="status">
                                </div>
                            <!--</form>-->
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                        	<!---<form>-->
                            	<div class="form-group">
                                	<label>Title</label>
                                    <input class="form-control" type="text" name="title">
                                </div>
                                <div class="form-group">
                                	<label>Vendor</label>
                                    <select class="form-control" name="vendor">
                                    	<option>Choose vendor below</option>
                                        <option>
                                        	<?php foreach($vendor_desc as $row){
											echo '<option value="'.$row->idVendor.'">'.$row->vendor_desc.'</option>'; 
											}?>
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                	<label>Quantity</label>
                                    <input class="form-control" type="text" name="qty">
                                </div>
                                <div class="form-group">
                                	<label>Date Index</label>
                                    <input class="form-control" type="text" name="dateindex" id="d_dateindex">
                                </div>
                                <div class="form-group">
                                	<label>Originator</label>
                                    <input class="form-control" type="text" name="originator">
                                </div>
                            <!--</form>-->
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                        	<!--<form>-->
                            	<div class="form-group">
                                	<label>Doc Type</label>
                                    <select class="form-control" name="doctype">
                                    	<option>Choose document type below</option>
                                        <option>
                                        	<?php foreach($doctype_desc as $row){
											echo '<option value="'.$row->idDocType.'">'.$row->doctype_desc.'</option>'; 
											}?>
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                	<label>Location</label>
                                    <input class="form-control" type="text" name="location">
                                </div>
                                <div class="form-group">
                                	<label>Date</label>
                                    <input class="form-control" type="text" name="date" id="d_date">
                                </div>
                                <div class="form-group">
                                	<label>Index Check</label>
                                    <input class="form-control" type="text" name="indexcheck" id="d_indexcheck">
                                </div>
                                <div class="form-group">
                                	<label>PIC</label>
                                    <select class="form-control" name="staff_name">
                                	<?php foreach($staff_name as $row){
										echo '<option value="'.$row->idStaff.'">'.$row->staff_name.'</option>'; 
									}?>
                                </select>
                                </div>
                            <!--</form>-->
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                        	<!--<form>-->
                            	<div class="form-group">
                                	<label>Part No</label>
                                    <textarea class="form-control" rows="3" name="partno"></textarea>
                                </div>
                            <!--</form>-->
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                        	<!--<form>-->
                            	<div class="form-group">
                                	<label>Ser No</label>
                                    <textarea class="form-control" rows="3" name="serno"></textarea>
                                </div>
                            <!--</form>-->
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                        	<!--<form>-->
                            	<div class="form-group">
                                	<label>Engine</label>
                                    <textarea class="form-control" rows="3" name="engine"></textarea>
                                </div>
                            <!---</form>-->
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                        	<!---<form>-->
                            	<div class="form-group">
                                <label>Engine List</label>
                                <select class="form-control" name="enginelist">
                                	<option>Choose engine below</option>
                                	<?php foreach($engine_name as $row){
										echo '<option value="'.$row->idengine.'">'.$row->engine_name.'</option>'; 
									}?>
                                </select>
                                </div>
                            <!---</form>-->
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-12">
                                <br>
                                <button type="button" class="btn btn-block">Add</button>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                        	<!--<form>-->
                            	<div class="form-group">
                                	<label>Aircraft</label>
                                    <textarea class="form-control" rows="3" name="aircraft"></textarea>
                                </div>
                            <!--</form>-->
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                        	<!--<form>-->
                            	<div class="form-group">
                                <label>Aircraft List</label>
                                <select class="form-control" name="aircraftlist">
                                	<option>Choose aircraft below</option>
                                    <?php foreach($aircraft_name as $row){
										echo '<option value="'.$row->idaircraft.'">'.$row->aircraft_name.'</option>'; 
									}?>
                                </select>
                                </div>
                            <!--</form>-->
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-12">
                                <br>
                                <button type="button" class="btn btn-block">Add</button>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                        	<!--<form>-->
                            	<div class="form-group">
                                	<label>Aircraft Registration</label>
                                    <textarea class="form-control" rows="3" name="acreg"></textarea>
                                </div>
                            <!--</form>-->
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                        	<!--<form>-->
                            	<div class="form-group">
                                <label>AC Reg List</label>
                                <select class="form-control" name="acreglist">
                                	<option>Choose ac reg below</option>
                                    <?php foreach($acreg as $row){
										echo '<option value="'.$row->idacreg.'">'.$row->acreg.'</option>'; 
									}?>
                                </select>
                                </div>
                            <!--</form>-->
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-12">
                                <br>
                                <button type="button" class="btn btn-block">Add</button>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                        	<!--<form>-->
                            	<div class="form-group">
                                	<label>Media</label>
                                    <textarea class="form-control" rows="2" name="media"></textarea>
                                </div>
                            <!--</form>-->
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                        	<!--<form>-->
                            	<div class="form-group">
                                <label>Media List</label>
                                <select class="form-control" name="medialist">
                                	<option>Choose media below</option>
                                    <?php foreach($media_name as $row){
										echo '<option value="'.$row->idMedia.'">'.$row->media_name.'</option>'; 
									}?>
                                </select>
                                </div>
                            <!--</form>-->
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-12">
                                <br>
                                <button type="button" class="btn btn-block">Add</button>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                        	<!--<form>-->
                            	<div class="form-group">
                                	<label>Capability</label>
                                    <textarea class="form-control" rows="2" name="capability"></textarea>
                                </div>
                            <!--</form>-->
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                        	<!--<form>-->
                            	<div class="form-group">
                                <label>Capability List</label>
                                <select class="form-control" name="capabilitylist">
                                	<option>Choose capability below</option>
                                    <?php foreach($capability_name as $row){
										echo '<option value="'.$row->idCapability.'">'.$row->capability_name.'</option>'; 
									}?>
                                </select>
                                </div>
                            <!--</form>-->
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-12">
                                <br>
                                <button type="button" class="btn btn-block">Add</button>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <!--<form>-->
                                <div class="form-group">
                                    <label>Note</label>
                                    <textarea class="form-control" rows="3" name="note"></textarea>
                                </div>
                            <!--</form>-->
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                        	<!--<form>-->
                            	<div class="form-group">
                                	<label>Vend Pub No</label>
                                    <input class="form-control" type="text" name="vendpubno">
                                </div>
                                <div class="form-group">
                                	<label>Cage Code</label>
                                    <input class="form-control" type="text" name="cagecode">
                                </div>
                            <!--</form>-->
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                        	<!--<form>-->
                            	<div class="form-group">
                                	<label>Rev Period</label>
                                    <select class="form-control" name="revperiod">
                                    	<option value="***">***</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>
                            <!--</form>-->
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-12">
                                <br>
                                <label>(months)</label>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                        	<!--<form>-->
                            	<div class="form-group">
                                	<label>Next Period</label>
                                    <input class="form-control" type="text" name="nextperiod" id="d_nextperiod">
                                </div>
                            <!--</form>-->
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                        	<!--<form>-->
                            	<div class="form-group">
                                	<label>Due Date</label>
                                    <input class="form-control" type="text" name="duedate" id="d_duedate">
                                </div>
                            <!--</form>-->
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <!--<form>-->
                                <div class="form-group">
                                    <label>Contract Agr.</label>
                                    <textarea class="form-control" rows="2" name="contractagr"></textarea>
                                </div>
                            <!--</form>-->
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <!--<form>-->
                                <div class="form-group">
                                    <label>Upload File</label>
                                    <div class="">
                            			<div class="fileupload fileupload-new" data-provides="fileupload">
                                			<span class="btn btn-file btn-default">
                                    			<span class="fileupload-new">Select file</span>
                                    			<input type="file">
                                			</span>
                                			<span class="fileupload-preview"></span>
                                		<a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                            			</div>
                        			</div>
                                </div>
                            <!--</form>-->
                         </div>
						 <div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
                                <label>Ship Date</label>
                                <input class="form-control" type="text" name="shipdate" id="d_shipdate">
                            </div>
							<div class="form-group">
                                <label>Received Media</label>
                                <input class="form-control" type="text" name="rcvdmedia">
                            </div>
						 </div>
						 <div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
                                <label>Rec Date</label>
                                <input class="form-control" type="text" name="recdate" id="d_recdate">
                            </div>
							<div class="form-group">
                                <label>Received Media Qty</label>
                                <input class="form-control" type="text" name="rcvdmediaqty">
                            </div>
						 </div>
						 <div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
                                <label>Received Date</label>
                                <input class="form-control" type="text" name="rcvddate" id="d_rcvddate">
                            </div>
						 </div>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                            <button type="submit" class="btn btn-sm btn-primary">Save</button>
							<button type="reset" class="btn btn-sm btn-default">Reset</button>
                         </div>
                    </form>
                    </div>
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
