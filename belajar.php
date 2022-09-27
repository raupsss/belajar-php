<?php
$numbers = [3, 4, 1, 65, 32, 6, 21, 100, 200, 300];
$numbers[] = 22;
?>
<?php $students = [
    ["Raup", "12345", "TKJ", "raup@gmail.com"], 
    ["Ghani", "12345", "TKJ", "ghani@gmail.com"]
    
    ]; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;

        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>

    <!-- Perulangan FOR -->
    <h4>Perulangan For</h4>
    <?php for ($i = 0; $i < count($numbers); $i++) { ?>
        <div class="kotak"><?php echo $numbers[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <!-- Perulangan ForEach -->
    <h4>Perulangan ForEach</h4>
    <?php foreach ($numbers as $number) { ?>
        <div class="kotak"><?php echo $number ?></div>
    <?php } ?>

    <div class="clear"></div>

    <!-- Other Syntax in ForEach -->
    <?php foreach ($numbers as $number) : ?>
        <div class="kotak"><?= $number ?></div>
    <?php endforeach; ?>

    <div class="clear"></div>

    <!-- Latihan -->
    <h4>List Students</h4>
    <?php foreach ($students as $student) : ?>
        <ul>
            <li>Nama :<?php echo $student[0]; ?></li>
            <li>NIM :<?php echo $student[1]; ?></li>
            <li>Jurusan :<?php echo $student[2]; ?></li>
            <li>Email :<?php echo $student[3]; ?></li>
        </ul>
    <?php endforeach; ?>


    


</body>

</html>