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
                        <h4>Projects</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($projectdata as $value) {
                                        echo '
                                                                <tr class="text-muted">
                                                                  <th>' .
                                            $value->id .
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
