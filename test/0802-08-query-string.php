<h2>
    <?php


    //判斷有無設定變數

    $a = isset($_GET['a']) ? intval ($_GET['a']) : 0;
    
    $b = isset($_GET['b']) ? ($_GET['b']) : 0;
    echo $a + $b
    ?>
</h2>