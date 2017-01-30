<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Result Search Incoming</h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped table-bordered table-hover">
                        	<thead>
                            	<tr>
                                	<th class="text-center" style="vertical-align: middle;">No.</th>
                                    <th class="text-center" style="vertical-align: middle;">Control No</th>
                                    <th class="text-center" style="vertical-align: middle;">Date Receive</th>
                                    <th class="text-center" style="vertical-align: middle;">Name</th>
                                    <th class="text-center" style="vertical-align: middle;">Revision</th>
                                    <th class="text-center" style="vertical-align: middle;">Docno</th>
                                    <th class="text-center" style="vertical-align: middle;">Status</th>
                                    <th class="text-center" style="vertical-align: middle;">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php $inc=1; ?>
                                <?php foreach($query as $row): ?>
                            	<tr>
                                	<td class="text-center" style="vertical-align:middle;"><?php echo $inc; ?></td>
                                    <td class="text-center" style="vertical-align:middle"><?php echo $row->ctrlno; ?></td>
                                    <td class="text-center" style="vertical-align:middle"><?php echo $row->received_date; ?></td>
                                    <td class="text-center" style="vertical-align:middle"><?php echo $row->name; ?></td>
                                    <td class="text-center" style="vertical-align:middle"><?php echo $row->revision; ?></td>
                                    <td class="text-center" style="vertical-align:middle"><?php echo $row->docno; ?></td>
                                    <td class="text-center" style="vertical-align:middle"><?php echo $row->in_status; ?></td>
                                    <td class="text-center" style="vertical-align:middle"><a href="<?php echo base_url();?>index.php/usertechpub/editincoming/<?php echo $row->idincoming;?>" type="button" class="btn btn-success" >Update</a>&nbsp;<a href="<?php echo base_url();?>index.php/usertechpub/delete_incoming/<?php echo $row->idincoming;?>" onclick="return confirm('Are you sure to delete this incoming?')" type="button" class="btn btn-danger" >Delete</a></td>
                                    
                                </tr>
                                <?php $inc++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
