<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>e-Techpub - User Technical Publication Panel</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url(); ?>assets/assets2/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url(); ?>assets/assets2/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="<?php echo base_url(); ?>assets/assets2/css/basicc.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="<?php echo base_url(); ?>assets/assets2/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- DATE PICKER -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/jqueryui/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/jqueryui/demos/jquery-ui.theme.css">


</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="<?php echo base_url(); ?>assets/assets2/img/gmflogo.png" width="100%"></a>
            </div>

            <div class="header-right">

                <!--<a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>-->
                <a href="<?php echo base_url(); ?>index.php/usertechpub/notification" class="btn btn-primary" title="Notification"><b>0 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="<?php echo base_url(); ?>index.php/dashboard/logout" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">

                            <div class="inner-text">
                            	Mr.X
                            <br />
                                Nopeg: xxxxx
                            <br />
                            	<small>User Techpub</small>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a href="<?php echo base_url(); ?>index.php/dashboard">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/usertechpub/incoming">Incoming</a>
                    </li>
                    <li>
                    	<a href="#">Incoming Control<span class="fa arrow"></span></a>
                        	<ul class="nav nav-second-level">
                            	<li>
                            		<a href="<?php echo base_url(); ?>index.php/usertechpub/searchincoming">Search Incoming</a>
                                </li>
                            </ul>
                    </li>
                    <li>
                    	<a href="#">Operator Document<span class="fa arrow"></span></a>
                         	<ul class="nav nav-second-level">
                            	<li>
                                	<a href="<?php echo base_url(); ?>index.php/usertechpub/newdatadocument">New Data Document</a>
                            	</li>
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/usertechpub/editdatadocument">Edit Data Document</a>
                                </li>
                                <li>
                                	<a href="<?php echo base_url(); ?>index.php/usertechpub/distributionhistory">Distribution History</a>
                            	</li>
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/usertechpub/searchdatadocument">Search Data Document</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/usertechpub/searchtemprevision">Search Data Temporary Revision</a>
                                </li>
                            </ul>
                     </li>
                     <li>
                        <a href="<?php echo base_url(); ?>index.php/usertechpub/reminder">Reminder</a>
                     </li>
                     <li>
                     	<a href="#">Borrow and Return<span class="fa arrow"></span></a>
                         	<ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/usertechpub/borrow">Borrow</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/usertechpub/breturn">Return</a>
                                </li>
                                 <li>
                                    <a href="<?php echo base_url(); ?>index.php/usertechpub/searchborrow">Search Borrow</a>
                                </li>
                                 <li>
                                    <a href="<?php echo base_url(); ?>index.php/usertechpub/overduelist">Overdue List</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/usertechpub/blacklist">Black List</a>
                                </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Complaint and Request<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            	<li>
                                 	<a href="<?php echo base_url(); ?>index.php/usertechpub/complaintandrequest">New Complaint and Request</a>
                                </li>
                                <li>
                                	<a href="<?php echo base_url(); ?>index.php/usertechpub/listofcomplaint">List of Complaint</a>
                                </li>
                                <li>
                                	<a href="<?php echo base_url(); ?>index.php/usertechpub/listofrequest">List of Request</a>
                                </li>
                             </ul>
                     </li>
                     <li>
                        <a href="#">Registration <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                             <li>
                                <a href="">New Vendor</a>
                             </li>
                             <li>
                                <a href="">New Unit</a>
                             </li>
                             <li>
                             	<a href="">New Borrower</a>
                             </li>
                             <li>
                             	<a href="<?php echo base_url(); ?>index.php/usertechpub/newaircraft">New Aircraft</a>
                             </li>
                             <li>
                             	<a href="<?php echo base_url(); ?>index.php/usertechpub/newacreg">New Aircraft Registration</a>
                             </li>
                             <li>
                             	<a href="<?php echo base_url(); ?>index.php/usertechpub/addnewstaff">New Member TER 5</a>
                             </li>
                       	</ul>
                    </li>
            </div>

        </nav>
