<?php
// Perulangan pada array
// for/foreach
$angka = [3,2,15,20,11,88,1,45];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background-color: yellow;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear{
            clear: both;
        }
    </style>
</head>
<body>
<!-- 1. for -->
    <?php for ( $i=0; $i<count($angka); $i++ ) {?>
        <div class="kotak">
            <?php echo $angka[$i]; ?>
        </div>
    <?php } ?>

    <div class="clear"></div>

<!-- 2. foreach -->
    <?php foreach( $angka as $a ) { ?>
        <div class="kotak">
            <?php echo $a; ?>
        </div>
    <?php } ?>

    <div class="clear"></div>

<!-- 3. templating -->
    <?php foreach( $angka as $a ) : ?>
        <div class="kotak">
            <?= $a; ?>
        </div>
    <?php endforeach; ?>

</body>
</html>