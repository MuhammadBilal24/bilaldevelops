<?php include 'header.php'; ?>
<link rel="stylesheet" href="assets2/bundles/datatables/datatables.min.css">
<link rel="stylesheet" href="assets2/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="assets2/css/components.css">

<body>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Hired Requests</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>About</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($hireddata as $value) {
                                        echo '
                                                                                                    <tr class="text-muted">
                                                                                                      <th>' .
                                            $value->id .
                                            '</th>
                                                                                                      <th>' .
                                            $value->hname .
                                            '</th>
                                                                                                      <th>' .
                                            $value->hemail .
                                            '</th>
                                                                                                      <th>' .
                                            $value->hsubject .
                                            '</th>
                                                                                                      <th>' .
                                            $value->habout .
                                            '</th>
                                                                                                    </tr>
                                                                                                    ';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'footer.php'; ?>
