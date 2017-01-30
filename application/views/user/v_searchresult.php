<div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Seacrh Result</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a>
                            </li>
                            <li><a href="">Manual</a></li>
                            <li>Search Result</li>
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
                                <div class="row">
                                	<table class="table table-striped table-bordered table-hover">
                                    	<thead>
                                        	<tr>
                                            	<th class="text-center" style="vertical-align: middle;">No.</th>
                                            	<th class="text-center" style="vertical-align: middle;">Docno</th>
                                                <th class="text-center" style="vertical-align: middle;">Type</th>
                                                <th class="text-center" style="vertical-align: middle;">Title</th>
                                                <th class="text-center" style="vertical-align: middle;">Manufacturer</th>
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
                                                <td class="text-center" style="vertical-align:middle"><?php echo $row->doctype;?></td>
                                                <td class="text-center" style="vertical-align:middle"><?php echo $row->title; ?></td>
                                                <td class="text-center" style="vertical-align:middle"><?php echo $row->vendor_desc; ?></td>
                                                <td class="text-center" style="vertical-align:middle"><?php echo $row->ata; ?></td>
                                                <td class="text-center" style="vertical-align:middle"><?php echo $row->rev; ?></td>
                                                <td class="text-center" style="vertical-align:middle"><?php echo $row->revdate; ?></td>
                                                <td class="text-center" style="vertical-align:middle"><?php echo $row->status; ?></td>
                                            </tr>
                                            <?php $inc++; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>


                        </div>
                        <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->
                </section>
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
