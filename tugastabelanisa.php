<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugastabelanisa</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        table {
            border-collapse: collapse;
            margin: 0 auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color:rgb(3, 255, 108);
            font-weight: bold;
        }
        .genap {
            background-color:rgb(61, 170, 233); 
        }
        .ganjil {
            background-color:rgb(233, 233, 87); 
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th style="background-color: white;">bilangan</th>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<th>$i</th>";
            }
            ?>
        </tr>
        <?php
        for ($row = 1; $row <= 10; $row++) {
            echo "<tr>";
            echo "<th>$row</th>"; 
            for ($col = 1; $col <= 10; $col++) {
                $result = $row * $col;
                $class = ($result % 2 == 0) ? 'genap' : 'ganjil';
                
                echo "<td class='$class'>$result</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>