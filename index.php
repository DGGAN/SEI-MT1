<?php
// ASSUMED Table 1 data
$table1Data = [
    "A1"  => 12,
    "A2"  => 8,
    "A3"  => 20,
    "A4"  => 15,
    "A5"  => 18,
    "A6"  => 9,
    "A7"  => 3,
    "A8"  => 14,
    "A9"  => 25,
    "A10" => 7,
    "A11" => 6,
    "A12" => 4,
    "A13" => 5,
    "A14" => 11,
    "A15" => 21,
    "A16" => 10,
    "A17" => 16,
    "A18" => 19,
    "A19" => 13,
    "A20" => 22
];

// Compute Table 2
$alpha   = $table1Data["A5"] + $table1Data["A20"];       // int
$beta    = intdiv($table1Data["A15"], $table1Data["A7"]); // int division
$charlie = $table1Data["A13"] * $table1Data["A12"];     // int
?>
<!DOCTYPE html>
<html>

<head>
    <title>Table Output & Processing</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        h1,
        h2 {
            color: #333;
        }

        table {
            border-collapse: collapse;
            margin: 20px 0;
        }

        th,
        td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .note {
            color: #666;
            font-style: italic;
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Table Output & Processing</h1>

        <p>1. Table values are assumed and processed using PHP.</p>

        <h2>Table 1</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Value</th>
            </tr>
            <?php foreach ($table1Data as $id => $value): ?>
                <tr>
                    <td><?= htmlspecialchars($id) ?></td>
                    <td><?= (int)$value ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <h2>Table 2</h2>
        <table>
            <tr>
                <th>Category</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Alpha</td>
                <td><?= $alpha ?></td>
            </tr>
            <tr>
                <td>Beta</td>
                <td><?= $beta ?></td>
            </tr>
            <tr>
                <td>Charlie</td>
                <td><?= $charlie ?></td>
            </tr>
        </table>

        <div class="note">
            Note: All values are computed as integers directly from Table 1.
        </div>
    </div>
</body>

</html>