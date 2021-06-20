<?php
function bulan($bulan){
    switch ($bulan) {
        case '01':
        $bulan = "Januari";
        break;
        case '02':
        $bulan = "Februari";
        break;
        case '03':
        $bulan = "Maret";
        break;
        case '04':
        $bulan = "April";
        break;
        case '05':
        $bulan = "Mei";
        break;
        case '06':
        $bulan = "Juni";
        break;
        case '07':
        $bulan = "Juli";
        break;
        case '08':
        $bulan = "Agustus";
        break;
        case '09':
        $bulan = "September";
        break;
        case '10':
        $bulan = "Oktober";
        break;
        case '11':
        $bulan = "November";
        break;
        case '12':
        $bulan = "Desember";
        break;            
        default:
        $bulan = "invalide";
        break;
    }
    return $bulan;
}
function tanggal_sekarang(){
    $tgl = date('d');
    $tahun = date('Y');
    return $tgl." ".bulan(date('m'))." ".$tahun;
}
function footer($tempat, $tanggal_sekarang, $penulis, $perusahaan){
    return $tempat.", ".$tanggal_sekarang."<br>".$penulis."<br>".$perusahaan."<br><br><br><br><br><p class='font-weight-normal'>...............................</p>";
}
?>
<?php include "read.php" ?>
<?php include "../auth.php" ?>
<?php include "../env.php" ?>
<!DOCTYPE html>
<html>
<head>
    <?php include "../head.php" ?>
</head>
<body class="font-weight-bold">
    <div class="container py-5">
        <h1 class="text-center pb-2 mb-3" style="border-style: none none double none; border-width: 5px;">Laporan Perencanaan produksi<br>PT. Adijaya Manufacturing</h1>

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
        <tbody class="font-weight-normal">
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
    <div class="row">
        <div class="col-auto mr-auto"></div>
        <div class="col-auto text-center">
            <?php echo footer("Gresik", tanggal_sekarang(), "Manager", "PT. Adijaya Manufacturing") ?>
        </div>
    </div>
</div>
</body>

</html>