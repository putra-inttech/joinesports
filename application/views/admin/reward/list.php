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
                <center>Data Reward</center>
            </h3> <br>

            <div class="card-header" style="margin-left: 30px">

                <a class="btn btn-info" style="width: 150px" href="<?php echo site_url('admin/reward/add') ?>"> <i class="glyphicon glyphicon-plus"></i> Add New</a>
            </div>

            <div style="margin-left: 10px; margin-right: 10px;">

                <div class="panel-body no-padding">
                    <div class="table-responsive">
                        <table class="table table-striped" id="datatables">
                            <thead>
                                <tr style="background-color: #000">
                                    <th>Jenis Reward</th>
                                    <th>Nama</th>
                                    <th>Stok</th>
                                    <th>Koin</th>
                                    <th>Gambar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($rewards as $reward) : ?>
                                    <tr>
                                        <td>
                                            <?php echo "<font color='#000'>$reward->reward_jenis </font>" ?>
                                        </td>
                                        <td>
                                            <?php echo "<font color='#000'> $reward->reward_nama </font>" ?>
                                        </td>
                                        <td>
                                            <?php echo "<font color='#000'> $reward->reward_stok </font>" ?>
                                        </td>
                                        <td>
                                            <?php echo "<font color='#000'>$reward->reward_koin </font>"?>
                                        </td>
                                        <td>
                                            <img src="<?php echo base_url('upload/reward/' . $reward->reward_image) ?>" width="64" />
                                        </td>
                                        <td width="250">
                                            <a href="<?php echo site_url('admin/reward/edit/' . $reward->reward_id) ?>" class="btn btn-small">Edit</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('admin/reward/delete/' . $reward->reward_id) ?>')" href="#!" class="btn btn-small text-danger">Hapus</a>
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