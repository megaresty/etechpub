<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add New Aircraft Registration</h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <form action="<?php echo base_url() ?>index.php/usertechpub/addacreg" method="post">
                        	<div class="row">
                            	<div class="col-sm-6">
                                	<div class="form-group">
                                		<label for="aircraft_name">Aircraft</label>
                                        <select class="form-control" name="aircraftlist">
											<?php foreach($aircraft_name as $row){
                                            echo '<option value="'.$row->idaircraft.'">'.$row->aircraft_name.'</option>'; 
                                            }?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                		<label for="acreg">Aircraft Registration</label>
                                        <input type="text" class="form-control" id="acreg" name="acreg">
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-primary">Add</button>
                                    <button type="reset" class="btn btn-sm btn-default">Reset</button>
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