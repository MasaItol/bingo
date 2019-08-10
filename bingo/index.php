<?php

require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/Bingo.php');

$bingo = new \Myapp\Bingo();
$nums = $bingo->create();

/*
$nums[][]
B: $nums[0] 1-15
I: $nums[1] 16-30
N: $nums[2] 
G: $nums[3]
O: $nums[4]

$nums[$i] $i * 15 + 1 ~~ $i * 15 + 15
*/


// var_dump($nums);
// exit;


?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>BINGO</title>
<style>
    body {
        font-size: 16px;
        text-align: center;
    }
    .container {
        
        width: 322px;
    }
    td, th {
        width: 60px;
        height: 45px;
    }
    td {
        background: #f06292;
        color: #fff;
    }
    th {
        color: #f06292;
        font-size: 22px;
    }
</style>
</head>
<body>
    <div class="container">
        <table>
            <tr>
                <th>B</th><th>I</th><th>N</th><th>G</th><th>O</th>
            </tr>
            <?php for($i = 0; $i < 5; $i++) : ?>
            <tr>
                <?php for($j = 0; $j < 5; $j++) : ?>
                <td><?= h($nums[$j][$i]); ?></td>
                <?php endfor; ?>
            </tr>
            <?php endfor; ?>
        </table>
    </div>
</body>
</html>