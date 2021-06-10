<?php
$Route = explode('\\', getcwd());
$currentRoute = $Route[count($Route)-1];
// echo $currentRoute;
?>

<!-- Sidebar  -->
<nav id="sidebar">
    <div class="sticky-top">
        <div class="sidebar-header">
            <h3><?php echo $APP_NAME; ?></h3>
        </div>

        <ul class="list-unstyled components">
            <li class="<?php if($currentRoute == "operator") echo " active" ?>">
                <a href="<?php if($currentRoute != "operator") echo "../operator" ?>">Operator</a>
            </li>
            <li class="<?php if($currentRoute == "bahanbaku") echo " active" ?>">
                <a href="<?php if($currentRoute != "bahanbaku") echo "../bahanbaku" ?>">Bahan baku</a>
            </li>
            <li  class="<?php if($currentRoute == "mesinsetengahjadi") echo " active" ?>">
                <a href="<?php if($currentRoute != "mesinsetengahjadi") echo "../mesinsetengahjadi" ?>">Mesin Setengah Jadi</a>
            </li>
            <li class="<?php if($currentRoute == "mesinjadi") echo " active" ?>">
                <a href="<?php if($currentRoute != "mesinjadi") echo "../mesinjadi" ?>">Mesin Jadi</a>
            </li>
            <li class="<?php if($currentRoute == "produksetengahjadi") echo " active" ?>">
                <a href="<?php if($currentRoute != "produksetengahjadi") echo "../produksetengahjadi" ?>">Produk Setengah jadi</a>
            </li>
            <li class="<?php if($currentRoute == "produkjadi") echo " active" ?>">
                <a href="<?php if($currentRoute != "produkjadi") echo "../produkjadi" ?>">Produk jadi</a>
            </li>
            <li>
                <a class="btn border-0" style="background-color: #5566ab" href="../logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>