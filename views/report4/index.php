<?php include("../template/header.php")?>

                <div class="container-fluid">

                    <h1 class="h3 mb-2 text-gray-800 tb-5">รายงานรับประจำวันแบบละเอียด</h1>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">รายงานรับประจำวันแบบละเอียด</h6>
                        </div>

            <div class="row pl-2 ">
                            <div class="row col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 md-form md-outline pt-2" id="accLabels">
                                    <input placeholder="Select date" type="date" id="accessibility-example" class="form-control">
                                    <i class="fas fa-calendar input-prefix" tabindex=0></i>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 md-form md-outline pt-2" id="accLabels">
                                    <input placeholder="Select date" type="time" id="accessibility-example" class="form-control">    <!-- Timeeeeeee -->
                                    <i class="fas a-calendar input-prefix" tabindex=0></i>
                                </div>
                                <!-- <Div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <h6 class="font-weight-bold text-primary pt-3"style="text-align:center;"> To </h6>
                                </Div> -->
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 md-form md-outline pt-2" id="accLabels">
                                    <input placeholder="Select date" type="date" id="accessibility-example" class="form-control">
                                    <i class="fas fa-calendar input-prefix" tabindex=0></i>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 md-form md-outline pt-2" id="accLabels">
                                    <input placeholder="Select date" type="time" id="accessibility-example" class="form-control">    <!-- Timeeeeeee -->
                                    <i class="fas fa-calendar input-prefix" tabindex=0></i>
                                </div>
                            </div>
                            <div class="row col-sm-12 col-md-12 col-lg-12 col-xl-12 pl-4 pt-2">
                                <button type="submit" class="form-control btn btn-primary btn-block col m-2" name="print">Print</button>
                                <button type="submit" class="form-control btn btn-info btn-block col pl-2 m-2" name="export">Export</button>
                                <button type="submit" class="form-control btn btn-success btn-block col pl-2 m-2" name="submit_date">Search</button>
                            </div>
                            
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tax invoice (ABB)</th>
                                            <th>License Plate</th>
                                            <th>Check in Date</th>
                                            <th>Check in Time</th>
                                            <th>Door (in)</th>
                                            <th>Check out Date</th>
                                            <th>Check out time</th>
                                            <th>Exit</th>
                                            <th>time</th>
                                            <th>Minute</th>
                                            <th>Parking fee</th>
                                            <th>fine</th>
                                            <th>Discount</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Tax invoice (ABB)</th>
                                            <th>License Plate</th>
                                            <th>Check in Date</th>
                                            <th>Check in Time</th>
                                            <th>Door (in)</th>
                                            <th>Check out Date</th>
                                            <th>Check out time</th>
                                            <th>Exit</th>
                                            <th>time</th>
                                            <th>Minute</th>
                                            <th>Parking fee</th>
                                            <th>fine</th>
                                            <th>Discount</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>661004-200001</td>
                                            <td>งล4844</td>
                                            <td>4/10/2566</td>
                                            <td>06:40:06</td>
                                            <td>ENTRY-01</td>
                                            <td>4/10/2566</td>
                                            <td>07:03:45</td>
                                            <td>EXIT-02</td>
                                            <td>00:23:39</td>
                                            <td>24</td>
                                            <td>30.00</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->


            <?php include("../template/footer.php") ?>

        <?php include("../template/foot.php") ?>