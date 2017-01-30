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
                                    <th class="text-center" style="vertical-align: middle;">Docno</th>
                                    <th class="text-center" style="vertical-align: middle;">Name</th>
                                    <th class="text-center" style="vertical-align: middle;">Date/th>
                                    <th class="text-center" style="vertical-align: middle;">Effected Pages</th>
                                    <th class="text-center" style="vertical-align: middle;">Remark</th>
                                    <th class="text-center" style="vertical-align: middle;">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php $inc=1; ?>
                                <?php foreach($query as $row): ?>
                            	<tr>
                                	<td class="text-center" style="vertical-align:middle;"><?php echo $inc; ?></td>
                                    <td class="text-center" style="vertical-align:middle"><?php echo $row->docno; ?></td>
                                    <td class="text-center" style="vertical-align:middle"><?php echo $row->name; ?></td>
                                    <td class="text-center" style="vertical-align:middle"><?php echo $row->date; ?></td>
                                    <td class="text-center" style="vertical-align:middle"><?php echo $row->effectedpages; ?></td>
                                    <td class="text-center" style="vertical-align:middle"><?php echo $row->remark; ?></td>
                                    <td class="text-center" style="vertical-align:middle"><a href="<?php echo base_url();?>index.php/usertechpub/edittemprev/<?php echo $row->idtemprev;?>" type="button" class="btn btn-danger" >Update</a>&nbsp;<a href="<?php echo base_url();?>index.php/usertechpub/delete_temprev/<?php echo $row->idIncoming;?>" onclick="return confirm('Are you sure to delete this incoming?')" type="button" class="btn btn-danger" >Delete</a></td>
                                    
                                </tr>
                                <?php $inc++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <a href="<?php echo base_url();?>index.php/usertechpub/newtemprev/" type="button" class="btn btn-info">Add new temprev</a>
                    </div>
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
