<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student</title>
    <style>
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }


        a {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            background-color: #f2f2f2;
            text-decoration: none;
            color: #333;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <h1>Student Details</h1>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <table border="1">
        <tr>
            <th>ID</th>
            <td><?= esc($student['id']) ?></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><?= esc($student['Name']) ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= esc($student['Email']) ?></td>
        </tr>
       
        <tr>
            <th>Phone</th>
            <td><?= esc($student['Phone']) ?></td>
        </tr>
    </table>

    <a href="/student">Back to Student List</a>

</body>
</html>
