<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>
        <table>
            <tr>
                <th>FIORI</th>
                <th>OCCASIONI</th>
                <th>DESCRIZIONE</th>
            </tr>
            <?php
            foreach ($query as $row) {
                echo "<tr>";
                echo "<td>" . $row->name . "</td>";
                echo "<td>" . $row->Occasions['name'] . "</td>";
                echo "<td>" . $row->Occasions['description'] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>