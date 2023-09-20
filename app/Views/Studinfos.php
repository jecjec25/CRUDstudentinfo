<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/save" method="post">
        <label>StudentId</label>
        <input type="text" name="StudentId" placeholder="StudentId">
        <br>
        <label>FullName</label>
        <input type="text" name="FullName" placeholder="FullName">
        <br>
        <label>YearLevel</label>
        <input type="text" name="YearLevel" placeholder="YearLevel">
        <br>
        <label>Program</label>
        <input type="text" name="Program" placeholder="Program">
        <br>
        <input type="submit" value="save">
    </form>
    <h1>Student Lists</h1>
    <table border = "1">
        <tr>
            <th>StudentId</th>
            <th>FullName</th>
            <th>YearLevel</th>
            <th>Program</th>
            <th>Action</th>
        </tr>
        <?php foreach ($Studinfo as $St): ?>
            <tr>
                <td><?= $St['StudentId'] ?></td>
                <td><?= $St['FullName'] ?></td>
                <td><?= $St['YearLevel'] ?></td>
                <td><?= $St['Program'] ?></td>
                <td><a href="/delete/<?= $St['ID'] ?>">delete</a> </td>
            </tr>
        <?php endforeach; ?>
    </table>
    
</body>
</html>