<?php require_once("../auth.php"); ?>
<?php include "../env.php" ?>
<?php include "read.php" ?>

<!DOCTYPE html>
<html>

<head>
    <?php include "../head.php" ?>
</head>

<body>
    <div class="wrapper">
        <?php include "../sidebar.php"?>
        <!-- Page Content  -->
        <div id="content">

            <?php include "../topbar.php" ?>
            <div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success w-100 mb-3" data-toggle="modal" data-target="#modal_insert">
                  Input
              </button>

              <!-- Modal -->
              <div class="modal fade" id="modal_insert" tabindex="-1" role="dialog" aria-labelledby="modal_insert_label" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modal_insert_label">Input Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form name="insert" id="insert" method="POST" action="insert.php">
                            <div class="form-group">
                                <label for="jenis">jenis</label>
                                <input type="text" class="form-control" id="jenis" name="jenis" aria-describedby="jenis" placeholder="jenis">
                            </div>
                            <div class="form-group">
                                <label for="jumlah">jumlah</label>
                                <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="jumlah">
                            </div>
                            <div class="form-group">
                                <label for="tanggal_masuk">tanggal masuk</label>
                                <input type="text" class="form-control" id="tanggal_masuk" name="tanggal_masuk" placeholder="DD/MM/YYYY">
                            </div>
                            <button type="submit" class="btn btn-primary" name="insert">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-bordered">
          <thead class="thead-dark text-center">
            <tr>
                <th scope="col">id</th>
                <th scope="col">jenis</th>
                <th scope="col">jumlah</th>
                <th scope="col">tanggal masuk</th>
                <th scope="col">kontrol</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($data_operator){
                foreach($data_operator as $data) {
                    $id = $data["id_bahan_baku"];
                    $jenis = $data["jenis_bahan_baku"];
                    $jumlah = $data["jumlah_bahan_baku"];
                    $tanggal_masuk = $data["tanggal_masuk_bahan_baku"];
                    echo '<tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$jenis.'</td>
                    <td>'.$jumlah.'</td>
                    <td>'.$tanggal_masuk.'</td>
                    <td class="text-center">
                    <form class="d-inline" id="delete" name="delete" method="POST" action="delete.php">
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-success w-50" data-toggle="modal" data-target="#modal_change_'.$id.'">
                    <i class="fa fa-edit"></i>
                    </button>
                    <input type="hidden" class="form-control" id="id" name="id" value="'.$id.'">
                    <button type="submit" name="delete" class="btn btn-danger w-50">
                    <i class="fa fa-trash"></i>
                    </button>
                    </div>
                    </form>
                    </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="modal_change_'.$id.'" tabindex="-1" role="dialog" aria-labelledby="modal_change_label_'.$id.'" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="modal_change_label">Ubah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <form name="change" id="change" method="POST" action="change.php">
                    <div class="form-group">
                    <input type="hidden" class="form-control" id="id" name="id" aria-describedby="id" placeholder="ID Operator" value="'.$id.'">
                    <label for="jenis">jenis</label>
                    <input type="text" class="form-control" id="jenis" name="jenis" aria-describedby="jenis" placeholder="jenis" value="'.$jenis.'">
                    </div>
                    <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="jumlah" value="'.$jumlah.'">
                    </div>
                    <div class="form-group">
                    <label for="tanggal_masuk">tanggal masuk</label>
                    <input type="text" class="form-control" id="tanggal_masuk" name="tanggal_masuk" placeholder="DD/MM/YYYY" value="'.$tanggal_masuk.'">
                    </div>
                    <button type="submit" class="btn btn-primary" name="change">Submit</button>
                    </form>
                    </div>
                    </div>
                    </div>
                    </div>';
                }
            }
            ?>
        </tbody>
    </table>
</div>

</div>
</div>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
</body>

</html>