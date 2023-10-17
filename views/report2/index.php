<?php include("../template/header.php") ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 tb-5">รายงานสรุปการออกใบกำกับฉบับเต็ม</h1>
    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">ตาราง รายงานสรุปการออกใบกำกับฉบับเต็ม</h6>
        </div>

        <form>
            <div class="row pl-2 ">
                <div class="row col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="col-sm-6 col-md-3 col-lg-6 col-xl-6 md-form md-outline pt-2" id="accLabels">
                        <input placeholder="Select date" type="date" id="accessibility-example" class="form-control">
                        <i class="fas fa-calendar input-prefix" tabindex=0></i>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-6 col-xl-6 md-form md-outline pt-2" id="accLabels">
                        <input placeholder="Select date" type="time" id="accessibility-example" class="form-control">
                        <!-- Timeeeeeee -->
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
                        <input placeholder="Select date" type="time" id="accessibility-example" class="form-control">
                        <!-- Timeeeeeee -->
                        <i class="fas fa-calendar input-prefix" tabindex=0></i>
                    </div>
                </div>
                <div class="row col-sm-12 col-md-12 col-lg-12 col-xl-12 pl-4 pt-2">
                    <button type="submit" class="form-control btn btn-primary btn-block col m-2"
                        name="print">Print</button>
                    <button type="submit" class="form-control btn btn-info btn-block col pl-2 m-2"
                        name="export">Export</button>
                    <button type="submit" class="form-control btn btn-success btn-block col pl-2 m-2"
                        name="submit_date">Search</button>
                </div>

            </div>
        </form>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Tax invoice (ABB)</th>
                            <th>Tax invoice</th>
                            <th>Name</th>
                            <th>Tax ID</th>
                            <th>money</th>
                            <th>VAT</th>
                            <th>amount</th>
                            <th>Machine code</th>
                            <th>Exit Door</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Date</th>
                            <th>Tax invoice (ABB)</th>
                            <th>Tax invoice</th>
                            <th>Name</th>
                            <th>Tax ID</th>
                            <th>money</th>
                            <th>VAT</th>
                            <th>amount</th>
                            <th>Machine code</th>
                            <th>Exit Door</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>2011/04/25</td>
                            <td>661005-100001</td>
                            <td>661005-100147</td>
                            <td>Alan alexa</td>
                            <td>89-5894-895</td>
                            <td>8,520.50</td>
                            <td>458.10</td>
                            <td>8978.60</td>
                            <td>89-598</td>
                            <td>Exit2</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


<?php include("../template/footer.php") ?>

<?php include("../template/foot.php") ?>

