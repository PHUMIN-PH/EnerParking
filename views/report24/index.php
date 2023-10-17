<?php include("../template/header.php") ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800 tb-5">รายงานสรุปจำนวนรถเข้าออก</h1>
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">ตาราง รายงานสรุปจำนวนรถเข้าออก</h6>
                        </div>

                        <form>
                        <div class="row pl-2 ">
                            <div class="row col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="col-sm-6 col-md-3 col-lg-6 col-xl-6 md-form md-outline pt-2" id="accLabels">
                                    <input placeholder="Select date" type="date" id="accessibility-example" class="form-control">
                                    <i class="fas fa-calendar input-prefix" tabindex=0></i>
                                </div>
                                <div class="col-sm-6 col-md-3 col-lg-6 col-xl-6 md-form md-outline pt-2" id="accLabels">
                                    <input placeholder="Select date" type="time" id="accessibility-example" class="form-control">    <!-- Timeeeeeee -->
                                    <i class="fas a-calendar input-prefix" tabindex=0></i>
                                </div>
                                <!-- <Div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <h6 class="font-weight-bold text-primary pt-3"style="text-align:center;"> To </h6>
                                </Div> -->
                                <div class="col-sm-6 col-md-3 col-lg-6 col-xl-6 md-form md-outline pt-2" id="accLabels">
                                    <input placeholder="Select date" type="date" id="accessibility-example" class="form-control">
                                    <i class="fas fa-calendar input-prefix" tabindex=0></i>
                                </div>
                                <div class="col-sm-6 col-md-3 col-lg-6 col-xl-6 md-form md-outline pt-2" id="accLabels">
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
                        </form>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Car IN</th>
                                            <th>Car OUT</th>
                                            <th>Income</th>
                                            <th>Fine</th>
                                            <th>Total Income</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <th>รวม</th>
                                            <th>2,000</th>
                                            <th>2,016</th>
                                            <th>72,280</th>
                                            <th>0</th>
                                            <th>72,280</th>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>มูลค่า</th>
                                            <th>67,220.4</th>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>VAT 7%</th>
                                            <th>5,059.60</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>5/10/2566</td>
                                            <td>500</td>
                                            <td>504</td>
                                            <td>18,070.00</td>
                                            <td>0.00</td>
                                            <td>18,070.00</td>
                                        </tr>
                                        <tr>
                                            <td>5/10/2566</td>
                                            <td>500</td>
                                            <td>504</td>
                                            <td>18,070.00</td>
                                            <td>0.00</td>
                                            <td>18,070.00</td>
                                        </tr>
                                        <tr>
                                            <td>5/10/2566</td>
                                            <td>500</td>
                                            <td>504</td>
                                            <td>18,070.00</td>
                                            <td>0.00</td>
                                            <td>18,070.00</td>
                                        </tr>
                                        <tr>
                                            <td>5/10/2566</td>
                                            <td>500</td>
                                            <td>504</td>
                                            <td>18,070.00</td>
                                            <td>0.00</td>
                                            <td>18,070.00</td>
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