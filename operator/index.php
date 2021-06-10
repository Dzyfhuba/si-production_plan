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
                        <label for="nama_operator">Nama Operator</label>
                        <input type="text" class="form-control" id="nama_operator" name="nama_operator" aria-describedby="nama_operator" placeholder="Nama Operator">
                    </div>
                    <div class="form-group">
                        <label for="jenis_pekerjaan">Jenis Pekerjaan</label>
                        <input type="text" class="form-control" id="jenis_pekerjaan" name="jenis_pekerjaan" placeholder="Jenis Pekerjaan">
                    </div>
                    <div class="form-group">
                        <label for="jam_kerja">Jam Kerja</label>
                        <input type="text" class="form-control" id="jam_kerja" name="jam_kerja" placeholder="Jam Kerja">
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
        <th scope="col">id operator</th>
        <th scope="col">nama operator</th>
        <th scope="col">jenis pekerjaan</th>
        <th scope="col">jam kerja</th>
        <th scope="col">kontrol</th>
    </tr>
</thead>
<tbody>
    <?php
    if ($data_operator){
        foreach($data_operator as $data) {
            $id_operator = $data["id_operator"];
            $nama_operator = $data["nama_operator"];
            $jenis_pekerjaan = $data["jenis_pekerjaan"];
            $jam_kerja = $data["jam_kerja_operator"];
            echo '<tr>
            <th scope="row">'.$id_operator.'</th>
            <td>'.$nama_operator.'</td>
            <td>'.$jenis_pekerjaan.'</td>
            <td>'.$jam_kerja.'</td>
            <td class="text-center">
            <form class="d-inline" id="delete" name="delete" method="POST" action="delete.php">
            <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-success w-50" data-toggle="modal" data-target="#modal_change_operator_'.$id_operator.'">
            <i class="fa fa-edit"></i>
            </button>
            <input type="hidden" class="form-control" id="id_operator" name="id_operator" value="'.$id_operator.'">
            <button type="submit" name="delete" class="btn btn-danger w-50">
            <i class="fa fa-trash"></i>
            </button>
            </div>
            </form>
            </td>
            </tr>
            <!-- Modal -->
            <div class="modal fade" id="modal_change_operator_'.$id_operator.'" tabindex="-1" role="dialog" aria-labelledby="modal_change_operator_label_'.$id_operator.'" aria-hidden="true">
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
            <input type="hidden" class="form-control" id="id_operator" name="id_operator" aria-describedby="id_operator" placeholder="ID Operator" value="'.$id_operator.'">
            <label for="nama_operator">Nama Operator</label>
            <input type="text" class="form-control" id="nama_operator" name="nama_operator" aria-describedby="nama_operator" placeholder="Nama Operator" value="'.$nama_operator.'">
            </div>
            <div class="form-group">
            <label for="jenis_pekerjaan">Jenis Pekerjaan</label>
            <input type="text" class="form-control" id="jenis_pekerjaan" name="jenis_pekerjaan" placeholder="Jenis Pekerjaan" value="'.$jenis_pekerjaan.'">
            </div>
            <div class="form-group">
            <label for="jam_kerja">Jam Kerja</label>
            <input type="text" class="form-control" id="jam_kerja" name="jam_kerja" placeholder="Jam Kerja" value="'.$jam_kerja.'">
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