<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Document Details</h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped table-bordered table-hover">
                            <?php $inc=1; ?>
                            <?php foreach($query as $row): ?>
                            	<tr>
                                	<td class="text-center" style="vertical-align:middle">Document No</td>
                                    <td class="text-center" style="vertical-align:middle"><?php echo $row->docno; ?></td>
                                </tr>
                                <tr>
                                	<td class="text-center" style="vertical-align:middle">Document Title</td>
                                    <td class="text-center" style="vertical-align:middle"><?php echo $row->doctitle; ?></td>
                                </tr>
                               	<tr>
                                	<td class="text-center" style="vertical-align:middle">Vendor</td>
                                    <td class="text-center" style="vertical-align:middle"><?php echo $row->vendor; ?></td>
                                </tr>
                                <tr>
                                	<td></td>
                                    <td class="text-center" style="vertical-align:middle">Originator Pub. No. : <?php echo $row->vendpubno; ?></td>
                                </tr>
                                <tr>
                               		<td></td>
                                    <td class="text-center" style="vertical-align:middle">CAGE Code : <?php echo $row->cagecode; ?></td>
                                </tr>
                                <tr>
                               		<td></td>
                                    <td class="text-center" style="vertical-align:middle">Originator : <?php echo $row->originator; ?></td>
                                </tr>
                                <tr>
                               		<td></td>
                                    <td class="text-center" style="vertical-align:middle">Contract : <?php echo $row->contract; ?></td>
                               	</tr>
                                <tr>
                               		<td></td>
                                    <td class="text-center" style="vertical-align:middle">Contract due : <?php echo $row->contractduedate; ?></td>
                               	</tr>
                                <tr>
                               		<td>ATA :</td>
                                    <td class="text-center" style="vertical-align:middle"><?php echo $row->ata; ?></td>
                               	</tr>
                                <tr>
                               		<td>Aircraft</td>
                                    <td class="text-center" style="vertical-align:middle"><?php echo $row->aircraft; ?></td>
                               	</tr>
                                <tr>
                               		<td>for AC Registration</td>
                                    <td class="text-center" style="vertical-align:middle"><?php echo $row->acreg; ?></td>
                               	</tr>
                                <tr>
                               		<td>Engine</td>
                                    <td class="text-center" style="vertical-align:middle"><?php echo $row->engine; ?></td>
                               	</tr>
                                <tr>
                               		<td>Type</td>
                                    <td class="text-center" style="vertical-align:middle"><?php echo $row->doctype; ?></td>
                               	</tr>
                                <tr>
                               		<td>Media</td>
                                    <td class="text-center" style="vertical-align:middle"><?php echo $row->media; ?></td>
                               	</tr>
                                <tr>
                               		<td>Qty in TER</td>
                                    <td class="text-center" style="vertical-align:middle"><?php echo $row->qty; ?></td>
                               	</tr>
                                <tr>
                               		<td>Rack</td>
                                    <td class="text-center" style="vertical-align:middle"><?php echo $row->rack; ?></td>
                               	</tr>
                                <tr>
                               		<td>Part Number</td>
                                    <td class="text-center" style="vertical-align:middle"><textarea rows="3"><?php echo $row->partno; ?></textarea></td>
                               	</tr>
                                <tr>
                               		<td></td>
                                    <td class="text-center" style="vertical-align:middle">for Serial Number : <?php echo $row->serno; ?></td>
                               	</tr>
                                <tr>
                               		<td>Control</td>
                                    <td class="text-center" style="vertical-align:middle">Revision : <?php echo $row->serno; ?>, Rev. Date : <?php echo $row->revdate; ?></td>
                               	</tr>
                                <tr>
                               		<td></td>
                                    <td class="text-center" style="vertical-align:middle">Index Ref : <?php echo $row->indexref; ?>, Index Date : <?php echo $row->indexdate; ?>, Status : <?php echo $row->status ?></td>
                               	</tr>
                                <tr>
                               		<td></td>
                                    <td class="text-center" style="vertical-align:middle">Revision Cycle : <?php echo $row->revperiod; ?>, Next Period : <?php echo $row->nextperiod; ?></td>
                               	</tr>
                                <tr>
                               		<td>Note</td>
                                    <td class="text-center" style="vertical-align:middle"><?php echo $row->revperiod; ?></td>
                               	</tr>
                           <?php $inc++; ?>
                           <?php endforeach; ?>
                        </table>
                    </div>
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
