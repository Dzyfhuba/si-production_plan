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
              <div class="modal fade" id="modal_insert" tabindex="-1" role="dialog" aria-labelledby="modal_insert_operator_label" aria-hidden="true">
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
                        <label for="id_mesin">id mesin</label>
                        <input type="text" class="form-control" id="id_mesin" name="id_mesin" aria-describedby="id_mesin" placeholder="id mesin">
                        <!-- <select class="custom-select" id="id_mesin" name="id_mesin">
                            <?php foreach($id_mesin2 as $id) {?>
                                <option><?php echo $id ?></option>
                            <?php } ?>
                        </select> -->
                    </div>
                    <div class="form-group">
                        <label for="nama_produk">nama produk</label>
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="nama produk">
                    </div>
                    <div class="form-group">
                        <label for="jumlah_produk">Jumlah produk</label>
                        <input type="text" class="form-control" id="jumlah_produk" name="jumlah_produk" placeholder="Jumlah Kerja">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_produk">tanggal produk</label>
                        <input type="text" class="form-control" id="tanggal_produk" name="tanggal_produk" placeholder="tanggal produk">
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
        <th scope="col">id produk</th>
        <th scope="col">id mesin</th>
        <th scope="col">nama produk</th>
        <th scope="col">jumlah produk</th>
        <th scope="col">tanggal produk</th>
        <th scope="col">kontrol</th>
    </tr>
</thead>
<tbody>
    <?php
    if ($data_operator){
        foreach($data_operator as $data) {
            $id_produk = $data["id_produk_jadi"];
            $id_mesin = $data["id_mesin_produk_jadi"];
            $nama_produk = $data["nama_produk_jadi"];
            $jumlah_produk = $data["jumlah_produk_jadi"];
            $tanggal_produk = $data["tanggal_produk_jadi"];
            echo '<tr>
            <td>'.$id_produk.'</ts>
            <td>'.$id_mesin.'</td>
            <td>'.$nama_produk.'</td>
            <td>'.$jumlah_produk.'</td>
            <td>'.$tanggal_produk.'</td>
            <td class="text-center">
            <form class="d-inline" id="delete" name="delete" method="POST" action="delete.php">
            <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-success w-50" data-toggle="modal" data-target="#modal_change_'.$id_produk.'">
            <i class="fa fa-edit"></i>
            </button>
            <input type="hidden" class="form-control" id="id_produk" name="id_produk" value="'.$id_produk.'">
            <button type="submit" name="delete" class="btn btn-danger w-50">
            <i class="fa fa-trash"></i>
            </button>
            </div>
            </form>
            </td>
            </tr>
            <!-- Modal -->
            <div class="modal fade" id="modal_change_'.$id_produk.'" tabindex="-1" role="dialog" aria-labelledby="modal_change_operator_label_'.$id_produk.'" aria-hidden="true">
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
            <input type="hidden" class="form-control" id="id_produk" name="id_produk" aria-describedby="id_produk" placeholder="ID Produk" value="'.$id_produk.'">
            <label for="nama_operator">ID Mesin</label>
            <input type="text" class="form-control" id="id_mesin" name="id_mesin" aria-describedby="nama_operator" placeholder="ID Mesin" value="'.$id_mesin.'">
            <label for="nama_operator">Nama Produk</label>
            <input type="text" class="form-control" id="nama_produk" name="nama_produk" aria-describedby="nama_operator" placeholder="Nama Produk" value="'.$nama_produk.'">
            </div>
            <div class="form-group">
            <label for="jumlah_produk">Jam Kerja</label>
            <input type="text" class="form-control" id="jumlah_produk" name="jumlah_produk" placeholder="jumlah produk Kerja" value="'.$jumlah_produk.'">
            </div>
            <label for="tanggal_produk">Tanggal Produk</label>
            <input type="text" class="form-control" id="tanggal_produk" name="tanggal_produk" placeholder="Tanggal Produk" value="'.$tanggal_produk.'">
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
<?php include "../footer.php" ?>
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