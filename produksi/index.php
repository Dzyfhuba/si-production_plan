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
              <table class="table table-bordered">
                  <thead class="thead-dark text-center">
                    <tr>
                        <th scope="col">Kode Produksi</th>
                        <th scope="col">Produk Jadi</th>
                        <th scope="col">Mesin Jadi</th>
                        <th scope="col">Produk Setengah Jadi</th>
                        <th scope="col">Mesin Setengah Jadi</th>
                        <th scope="col">Operator</th>
                        <th scope="col">Mesin Setengah Jadi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($data_operator){
                        foreach($datas as $data) { ?>

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