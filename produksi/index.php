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
            <div class="row mb-3">
                <div class="col-auto mr-auto"></div>
                <div class="col-auto text-center">
                    <a href="../cetak" class="btn btn-info">Cetak</a>
                </div>
            </div>
                <!-- Button trigger modal -->
                <table class="table table-bordered">
                  <thead class="thead-dark text-center">
                    <tr>
                        <th scope="col">Kode Produksi</th>
                        <th scope="col">Operator</th>
                        <th scope="col">Bahan Baku</th>
                        <th scope="col">Mesin Setengah Jadi</th>
                        <th scope="col">Produk Setengah Jadi</th>
                        <th scope="col">Mesin Jadi</th>
                        <th scope="col">Produk Jadi</th>
                        <th scope="col">tanggal Jadi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($data_all){
                        foreach($data_all as $data) { ?>
                            <tr>
                                <td><?php echo $data["kode_produksi"] ?></td>
                                <td><?php echo $data["nama_operator"] ?></td>
                                <td><?php echo $data["bahan_baku"] ?></td>
                                <td><?php echo $data["mesin_setengah_jadi"] ?></td>
                                <td><?php echo $data["produk_setengah_jadi"] ?></td>
                                <td><?php echo $data["mesin_jadi"] ?></td>
                                <td><?php echo $data["produk_jadi"] ?></td>
                                <td><?php echo $data["tanggal_jadi"] ?></td>
                                
                            </tr>
                        <?php  }
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