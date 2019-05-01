<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('admin/_partials/head'); ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php $this->load->view('admin/_partials/sidebar'); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php $this->load->view('admin/_partials/topbar'); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Pegawai</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h5 class="m-0 font-weight-bold text-primary mb-3">Data Pegawai</h5>
                            <button type="button" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#tambahpegawai">Tambah</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Jabatan</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Jabatan</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>
                                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#detailpegawai">Detail</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>
                                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#detailpegawai">Detail</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>
                                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#detailpegawai">Detail</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2019</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php $this->load->view('admin/_partials/foot'); ?>
</body>

<!-------------------------------------------------------------------------------------------------------------------->
<!-- PopUp Tambah Pegawai -->
<div class="modal fade" id="tambahpegawai" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"                  aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Tambah Pegawai</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body mx-3">
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Nama</label>  
            <div class="col-md-10">
                <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="email">Email</label>  
            <div class="col-md-10">
                <input id="email" name="email" type="text" placeholder="" class="form-control input-md">
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="jabatan">Jabatan</label>
            <div class="col-md-6">
            <select id="jabatan" name="jabatan" class="form-control">
                <option value="1">Crew</option>
                <option value="2">Etc</option>
            </select>
            </div>
        </div>

        <!-- Button (Double) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="save"></label>
            <div class="text-center">
                <button id="save" name="save" class="btn btn-success">Save</button>
                <button id="cancel" name="cancel" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>

        </fieldset>
        </form>

        </div>
        </div>
    </div>
</div>

<!------------------------------------------------------------------------------------------------------------------>

<!-- PopUp Detail Pegawai -->
<div class="modal fade" id="detailpegawai" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"                  aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Detail Pegawai</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body mx-3">
            
        <!-- Begin Page Content -->
        <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"></h1>

        <div class="card mb-3" style="max-width: 540px;" >
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img src="<?= base_url('assets'); ?>/img/default.jpg" class="card-img img-thumbnail">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"><small class="text-muted">No. HP : </small></p>
                        <p class="card-text"><small class="text-muted">No KTP : </small></p>
                        <p class="card-text"><small class="text-muted">Email : </small></p>
                        <p class="card-text"><small class="text-muted">No Passpor : </small></p>
                        <p class="card-text"><small class="text-muted">Tgl Lahir : </small></p>
                        <p class="card-text"><small class="text-muted">Member sejak </small></p>
                    </div>
                </div>
            </div>
        </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        </div>
    </div>
</div>
</html>