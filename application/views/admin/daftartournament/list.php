<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body>
    <div id="wrapper">
        <?php $this->load->view("admin/_partials/navbar.php") ?>
        <?php $this->load->view("admin/_partials/sidebar.php") ?>

        <div id="page-wrapper">
            <br>
            <h3>
                <center>Data daftartournament</center>
            </h3> <br>

            <div class="card-header" style="margin-left: 30px">

                <a class="btn btn-info" style="width: 150px" href="<?php echo site_url('admin/daftartournament/add') ?>"> <i class="glyphicon glyphicon-plus"></i> Add New</a>
            </div>

            <div class="panel-body no-padding">
                <div class="table-responsive">
                    <table class="table table-striped" id="datatables">
                        <thead>
                            <tr style="background-color: #000">
                                <th>ID Daftar Tournament</th>
                                <th>ID tournament</th>
                                <th>ID Tim</th>
                                <th>ID Player</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($daftartournaments as $daftartournament) : ?>
                                <tr>
                                    <td>
                                        <?php echo "<font color='#000'> $daftartournament->daftartournament_id </font>" ?>
                                    </td>
                                    <td>
                                        <?php echo "<font color='#000'> $daftartournament->tournamentid <?font>" ?>
                                    </td>
                                    <td>
                                        <?php echo "<font color='#000'> $daftartournament->daftartournament_idtim  </font>" ?>
                                    </td>
                                    <td>
                                        <?php echo "<font color='#000'> $daftartournament->daftartournament_idplayer </font>" ?>
                                    </td>
                                    <td width="150">
                                        <!-- <a href="<?php echo site_url('admin/daftartournament/edit/' . $daftartournament->daftartournament_id) ?>" class="btn btn-small">Edit</a> -->
                                        <a onclick="deleteConfirm('<?php echo site_url('admin/daftartournament/delete/' . $daftartournament->daftartournament_id) ?>')" href="#!" class="btn btn-small text-danger"> Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <?php $this->load->view("admin/_partials/modal.php") ?>

    <?php $this->load->view("admin/_partials/footer.php") ?>

    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

    <script>
        function deleteConfirm(url) {
            $('#btn-delete').attr('href', url);
            $('#deleteModal').modal();
        }
    </script>

    <script src="<?php echo base_url('assets/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/dataTables.bootstrap.min.js') ?>"></script>
    <script type="text/javascript">
        $(function() {
            $("#datatables").DataTable();
        });
    </script>

</body>

</html>