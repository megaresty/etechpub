<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
<table class="table table-striped table-bordered table-hover">
                                    	<thead>
                                        	<tr>
                                            	<th class="text-center" style="vertical-align: middle;">No.</th>
                                            	<th class="text-center" style="vertical-align: middle;">Docno</th>
                                                <!--<th class="text-center" style="vertical-align: middle;">Type</th>-->
                                                <th class="text-center" style="vertical-align: middle;">Title</th>
                                                <!--<th class="text-center" style="vertical-align: middle;">Manufacturer</th>-->
                                                <th class="text-center" style="vertical-align: middle;">ATA</th>
                                                <th class="text-center" style="vertical-align: middle;">Revision No</th>
                                                <th class="text-center" style="vertical-align: middle;">Revision Date</th>
                                                <th class="text-center" style="vertical-align: middle;">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $inc=1; ?>
                                            <?php foreach($query as $row): ?>
                                        	<tr>
                                            	<td class="text-center" style="vertical-align:middle;"><?php echo $inc; ?></td>
                                                <td class="text-center" style="vertical-align:middle"><?php echo $row->docno; ?></td>
                                                <!--<td class="text-center" style="vertical-align:middle"><?php// echo $row->doctype;?></td>-->
                                                <td class="text-center" style="vertical-align:middle"><?php echo $row->title; ?></td>
                                                <!--<td class="text-center" style="vertical-align:middle"><?php// echo $row->vendordesc; ?></td>-->
                                                <td class="text-center" style="vertical-align:middle"><?php echo $row->ata; ?></td>
                                                <td class="text-center" style="vertical-align:middle"><?php echo $row->rev; ?></td>
                                                <td class="text-center" style="vertical-align:middle"><?php echo $row->revdate; ?></td>
                                                <td class="text-center" style="vertical-align:middle"><?php echo $row->status; ?></td>
                                            </tr>
                                            <?php $inc++; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    </body>
                                    