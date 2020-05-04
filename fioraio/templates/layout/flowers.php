<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>
        <table style ="border: 1px solid black;  border-collapse: collapse">
            <tr >
                <th style ="border: 3px solid black; background: lightblue">FIORI</th>
                <th style ="border: 3px solid black; background: lightblue">OCCASIONI</th>
                <th style ="border: 3px solid black; background: lightblue">DESCRIZIONE</th>
            </tr>
            <?php
            foreach ($query as $row) {
                echo "<tr>";
                echo "<td style =' text-align: left; border: 1px solid black'>" . $row->name . "</td>";
                echo "<td style =' text-align: left; border: 1px solid black'>" . $row->Occasions['name'] . "</td>";
                echo "<td style =' text-align: left; border: 1px solid black'>" . $row->Occasions['description'] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>