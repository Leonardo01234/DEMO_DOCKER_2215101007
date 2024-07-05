<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DEMO DOCKER</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .container {
            margin-top: 20px;
        }
        img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <img src="Logo_undiksha.png" alt="Profile Picture" style="width:200px;height:200px;">
    <?php
    $name = "Leonardo Fransiskus Sitanggang";
    $nim = "2215101007";
    $class = "A";
    ?>
    <div class="container">
        <h1>DEMO DOCKER</h1>
        <p>Nama: <?php echo $name; ?></p>
        <p>NIM: <?php echo $nim; ?></p>
        <p>Kelas: <?php echo $class; ?></p>
        <img src="leo.jpg" alt="Profile Picture" style="width:200px;height:200px;">
    </div>
</body>
</html>
