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
                <button type="button" class="btn btn-success w-100 mb-3" data-toggle="modal" data-target="#modal_insert_operator">
                  Input
              </button>

              <!-- Modal -->
              <div class="modal fade" id="modal_insert_operator" tabindex="-1" role="dialog" aria-labelledby="modal_insert_operator_label" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modal_insert_operator_label">Input Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                    <form name="insert" id="insert" method="POST" action="insert.php">
                      <div class="form-group">
                        <label for="nama_mesin">id operator</label>
                        <input type="text" class="form-control" id="nama_mesin" name="nama_mesin" aria-describedby="nama_mesin" placeholder="id Operator">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_maintenance">id bahan baku</label>
                        <input type="text" class="form-control" id="tanggal_maintenance" name="tanggal_maintenance" placeholder="id bahan baku">
                    </div>
                    <div class="form-group">
                        <label for="merk_mesin">merk</label>
                        <input type="text" class="form-control" id="merk_mesin" name="merk_mesin" placeholder="merk mesin">
                    </div>
                    <div class="form-group">
                        <label for="merk_mesin">tanggal maintenance</label>
                        <input type="text" class="form-control" id="tanggal_maintenance" name="tanggal_maintenance" placeholder="tanggalmaintenance">
                    </div>
                    <div class="form-group">
                        <label for="merk_mesin">nama mesin</label>
                        <input type="text" class="form-control" id="nama_mesin" name="nama_mesin" placeholder="nama mesin">
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
        <th scope="col">id mesin</th>
        <th scope="col">id operator</th>
        <th scope="col">id bahan baku</th>
        <th scope="col">merk</th>
        <th scope="col">tanggal maintenance</th>
        <th scope="col">nama mesin</th>
        <th scope="col">kontrol</th>
    </tr>
</thead>
<tbody>
    <?php
    if ($data_operator){
        foreach($data_operator as $data) {
            $id_mesin = $data["id_mesin_produk_setengah_jadi"];
            $id_operator = $data["id_operator"];
            $nama_mesin = $data["nama_mesin"];
            $id_bahan_baku = $data["id_bahan_baku"];
            $merk = $data["merk_mesin"];
            $tanggal_maintenance = $data["tanggal_maintenance"];
            $nama_mesin = $data["nama_mesin"];
            echo '<tr>
            <td>'.$id_mesin.'</td>
            <td>'.$id_operator.'</td>
            <td>'.$id_bahan_baku.'</td>
            <td>'.$merk.'</td>
            <td>'.$tanggal_maintenance.'</td>
            <td>'.$nama_mesin.'</td>
            <td class="text-center">
            <form class="d-inline" id="delete" name="delete" method="POST" action="delete.php">
            <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-success w-50" data-toggle="modal" data-target="#modal_change_'.$id_mesin.'">
            <i class="fa fa-edit"></i>
            </button>
            <input type="hidden" class="form-control" id="id" name="id" value="'.$id_mesin.'">
            <button type="submit" name="delete" class="btn btn-danger w-50">
            <i class="fa fa-trash"></i>
            </button>
            </div>
            </form>
            </td>
            </tr>
            <!-- Modal -->
            <div class="modal fade" id="modal_change_'.$id_mesin.'" tabindex="-1" role="dialog" aria-labelledby="modal_change_operator_label_'.$id_mesin.'" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modal_change_operator_label">Ubah Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <form name="change" id="change" method="POST" action="change.php">
            <div class="form-group">
            <input type="hidden" class="form-control" id="id_mesin" name="id_mesin" aria-describedby="id_mesin" placeholder="ID Operator" value="'.$id_mesin.'">
            <label for="merk_mesin">merk mesin</label>
            <input type="text" class="form-control" id="merk_mesin" name="merk_mesin" aria-describedby="merk_mesin" placeholder="merk mesin" value="'.$merk.'">
            </div>
            <div class="form-group">
            <label for="tanggal_maintenance">tanggal maintenance</label>
            <input type="text" class="form-control" id="tanggal_maintenance" name="tanggal_maintenance" placeholder="Jenis Pekerjaan" value="'.$tanggal_maintenance.'">
            </div>
            <div class="form-group">
            <label for="nama_mesin">nama mesin</label>
            <input type="text" class="form-control" id="nama_mesin" name="nama_mesin" placeholder="nama mesin" value="'.$nama_mesin.'">
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