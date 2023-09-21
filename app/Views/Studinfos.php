<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
</head>
<body>

<div class="left-column">
    <form action="/save" method="post">
        <input type="hidden" name="ID" value="<?= isset($pro['ID'])?  $pro['ID']: ''?>">
        
        <label for="StudName">Name</label>
        <input type="text" name="StudName" placeholder="Student Name" value="<?= isset($pro['StudName'])?  $pro['StudName']: ''?>">
        <br>
        <label for="StudGender">Gender</label>
        <select type="text" name="StudGender" placeholder="Gender" value="<?= isset($pro['StudGender'])?  $pro['StudGender']: ''?>">
        <option>Male</option>
        <option>Female</option>
        </select>
        <br>
        <label for="StudCourse">Course</label>
        <select type="text" name="StudCourse" placeholder="Course" value="<?= isset($pro['StudCourse'])?  $pro['StudCourse']: ''?>">
        <option>Bachelor of Secondary Education</option>
        <option>Bachelor of Technical-Vocational Teacher Education</option>
        <option>Bachelor of Science in Information Technology</option>
        <option>Bachelor of Science in Criminology</option>
        <option>Bachelor of Science in Tourism Management</option>
        <option>Bachelor of Science in Hospitality Management</option>
        <option>Bachelor of Arts in Psychology</option>
        <option>Bachelor of Arts in English Language</option>
        </select>
        <br>
        <label for="StudSection">Section</label>
        <input type="text" name="StudSection" placeholder="Section" value="<?= isset($pro['StudSection'])?  $pro['StudSection']: ''?>">
        <br>
        <label for="StudYear">Year Level</label>
        <input type="number" name="StudYear" placeholder="Year Level" value="<?= isset($pro['StudYear'])?  $pro['StudYear']: ''?>">
        <br>
        <input type="submit" value="Save">
    </form>
</div>


<div class="right-column">
    <h2>Students</h2>
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
                <td><?= $St['StudName'] ?></td>
                <td><?= $St['StudGender'] ?></td>
                <td><?= $St['StudCourse'] ?></td>
                <td><?= $St['StudSection'] ?></td>
                <td><?= $St['StudYear'] ?></td>
                <td><a href="/delete/<?= $St['ID'] ?>">Delete</a> || <a href="/edit/<?= $St['ID'] ?>">Edit</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
</div>
</body>
</html>
