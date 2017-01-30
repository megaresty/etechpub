<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Notification</h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped table-bordered table-hover">
                        	<thead>
                            	<tr>
                                	<th class="text-center" style="vertical-align: middle;">No.</th>
                                    <th class="text-center" style="vertical-align: middle;">Time</th>
                                    <th class="text-center" style="vertical-align: middle;">From</th>
                                    <th class="text-center" style="vertical-align: middle;">About</th>
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
                                    <!--belum dibenerin ini dalamnya-->
                                    <td class="text-center" style="vertical-align:middle"><?php echo $row->ctrlno; ?></td>
                                    <td class="text-center" style="vertical-align:middle"><?php echo $row->received_date; ?></td>
                                    <td class="text-center" style="vertical-align:middle"><?php echo $row->name; ?></td>
                                    <td class="text-center" style="vertical-align:middle"><?php echo $row->docno; ?></td>
                                    <td class="text-center" style="vertical-align:middle"><?php echo $row->in_status; ?></td>
                                    <td class="text-center" style="vertical-align:middle"><a href="<?php echo base_url();?>index.php/usertechpub/editincoming/<?php echo $row->idincoming;?>" type="button" class="btn btn-success" >Detail</a></td>

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
