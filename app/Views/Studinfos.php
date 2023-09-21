<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            text-align: center;
            background-color: #007BFF;
            color: #fff;
            padding: 20px;
        }

        .container {
            display: flex;
            justify-content: space-around; /* Add space around columns */
            max-width: 1200px;
            margin: 10px;
        }

        .left-column,
        .right-column {
            flex: 1;
        }

        .right-column {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }

        th {
            background-color: #007BFF;
            color: #fff;
        }

        a {
            text-decoration: none;
            color: #007BFF;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Student Management System</h1>
    <div class="container">
        <div class="left-column">
            <form action="/save" method="post">
                <input type="hidden" name="ID" value="<?= isset($pro['ID'])?  $pro['ID']: ''?>">
                <label>StudentId</label>
                <input type="text" name="StudentId" placeholder="StudentId" value="<?= isset($pro['StudentId'])?  $pro['StudentId']: ''?>">
                <br>
                <label>FullName</label>
                <input type="text" name="FullName" placeholder="FullName" value="<?= isset($pro['FullName'])?  $pro['FullName']: ''?>">
                <br>
                <label>YearLevel</label>
                <input type="text" name="YearLevel" placeholder="YearLevel" value="<?= isset($pro['YearLevel'])?  $pro['YearLevel']: ''?>">
                <br>
                <label>Program</label>
                <input type="text" name="Program" placeholder="Program" value="<?= isset($pro['Program'])?  $pro['Program']: ''?>">
                <br>
                <input type="submit" value="Save">
            </form>
        </div>
        <div class="right-column">
            <h2>Student Lists</h2>
            <table border="1">
                <tr>
                    <th>Student Name</th>
                    <th>Gender</th>
                    <th>Course</th>
                    <th>Student Section</th>
                    <th>Student Year</th>
                    <th>Action</th>
                </tr>
                <?php if(isset($Studinfo)) ?>
                <?php foreach ($Studinfo as $St): ?>
                    <tr>
                        <td><?= $St['StudentId'] ?></td>
                        <td><?= $St['FullName'] ?></td>
                        <td><?= $St['YearLevel'] ?></td>
                        <td><?= $St['Program'] ?></td>
                        <td><a href="/delete/<?= $St['ID'] ?>">Delete</a> || <a href="/edit/<?= $St['ID'] ?>">Edit</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>
</html>
