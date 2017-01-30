        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">New Complaint / Request</h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <form>
                        	<div class="form-group">
                            	<label for="compby">Complaint by / Requester</label>
                                <input type="text" class="form-control" id="compreqby" name="compreqby">
                            </div>
                            <div class="form-group">
                                <label for="unit">Unit</label>
                                <input type="text" class="form-control" id="unit" name="unit">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="date">Date of complaint / request</label>
                                <input type="text" class="form-control" id="d_comreq" name="date">
                            </div>
                            <div class="form-group">
                                <label for="type">Please select type do you want: </label>
                                <input type="radio" id="type" name="type" value="1">Complaint
                                <input type="radio" id="type" name="type" value="2">Request
                            </div>
                            <div class="form-group">
                               	<label for="kind">Kind of Complaint / Request</label>
                                <select class="form-control" id="kind" name="kind">
                                   	<option>- Choose kind of complaint / request below -</option>									<option>Correction of document</option>
                                    <option>Document is not complete</option>
                                    <option>Registration of document</option>
                                    <option>Request new document</option>
                                    <option>Request of distribution</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">Complaint / Request Title</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="form-group">
                                <label for="docno">Document No</label>
                                <input type="text" class="form-control" id="docno" name="docno">
                            </div>
                            <div class="form-group">
                                <label for="partno">Part No.</label>
                                <input type="text" class="form-control" id="partno" name="partno">
                            </div>
                            <div class="form-group">
                                <label for="ata">ATA</label>
                                <input type="text" class="form-control" id="ata" name="ata">
                            </div>
                            <div class="form-group">
                                 <label for="desc">Complaint / Request Description</label>
                                 <textarea class="form-control" id="desc" rows="5" name="desc"></textarea>
                            </div>
                            <button type="submit" class="btn btn-info">Submit</button>
                            <button type="reset" class="btn btn-template-main">Reset</button>
                        </form>
                    </div>
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
