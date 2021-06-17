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
            <div class="panel panel-default"> 
                <li class="panel-heading">
                    <a  class="nodecoration panel-title lead" data-toggle="collapse" data-parent="#panel-814345" href="#panel-element-566205">Data Master <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                </li>
                <div id="panel-element-566205" class="panel-collapse collapse">
                    <div class="panel-body border-top">
                        <li class=" <?php if($currentRoute == "operator") echo " active" ?>">
                            <a class="pl-4" href="<?php if($currentRoute != "operator") echo "../operator" ?>">Operator</a>
                        </li>
                        <li class="<?php if($currentRoute == "bahanbaku") echo " active" ?>">
                            <a class="pl-4" href="<?php if($currentRoute != "bahanbaku") echo "../bahanbaku" ?>">Bahan baku</a>
                        </li>
                        <li  class="<?php if($currentRoute == "mesinsetengahjadi") echo " active" ?>">
                            <a class="pl-4" href="<?php if($currentRoute != "mesinsetengahjadi") echo "../mesinsetengahjadi" ?>">Mesin Setengah Jadi</a>
                        </li>
                        <li class="<?php if($currentRoute == "mesinjadi") echo " active" ?>">
                            <a class="pl-4" href="<?php if($currentRoute != "mesinjadi") echo "../mesinjadi" ?>">Mesin Jadi</a>
                        </li>
                        <li class="<?php if($currentRoute == "produksetengahjadi") echo " active" ?>">
                            <a class="pl-4" href="<?php if($currentRoute != "produksetengahjadi") echo "../produksetengahjadi" ?>">Produk Setengah jadi</a>
                        </li>
                        <li class="<?php if($currentRoute == "produkjadi") echo " active" ?>">
                            <a class="pl-4" href="<?php if($currentRoute != "produkjadi") echo "../produkjadi" ?>">Produk jadi</a>
                        </li>
                    </div>
                </div>
            </div>
            <div>
                <li class="<?php if($currentRoute == "produksi") echo " active" ?>">
                    <a href="<?php if($currentRoute != "produksi") echo "../produksi" ?>">Produksi</a>
                </li>
            </div>
            <br>


            <li>
                <a class="btn border-0" style="background-color: #5566ab" href="../logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>

<script type="text/javascript">
    $(".panel-heading").onclick(
     function() {
        $('.panel-collapse').collapse('show');
    }, function() {
        $('.panel-collapse').collapse('hide');
    }
    );
</script>