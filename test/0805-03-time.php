<h2>
    <?php
    //date_default_timezone_set('Asia/Taipei');

    echo time() . '<br>';
    echo date("Y-m-d H:i:s") . '<br>';
    echo date("D  N  w") . '<br>';
    echo date("Y-m-d H:i:s", time() + 40 * 24 * 60 * 60) . '<br>';


    $t = strtotime('2021/08/18'); //timestamp
    echo date("Y-m-d H:i:s",$t) . '<br>';
    ?>

</h2>