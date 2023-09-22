<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
<style>
    ul li{
        list-style-type:none;
    }
    .cus{
        float:left;
    }
    .item{
        text-align:center;
        border-style:solid;
        width:220px;
        height:190px;
    }
</style>
</head>
<body>

<div class="left-column">
    <form action="/save" method="post">
        <input type="hidden" name="ID" value="<?= isset($pro['ID'])?  $pro['ID']: ''?>">
        
        <label for="StudName">Name</label>
        <input type="text" name="StudName" placeholder="Student Name"  value="<?= isset($pro['StudName'])?  $pro['StudName']: ''?>" required>
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
       <select name="StudSection">
        <?php foreach($Section as $sec):?>
        <option ><?= $sec['section']?></option>
        <?php endforeach;?>
        </select>
        <br>
        <label for="StudYear">Year Level</label>
        <input type="number" name="StudYear" placeholder="Year Level" value="<?= isset($pro['StudYear'])?  $pro['StudYear']: ''?>">
        <br>
        <input type="submit" value="Save">
    </form>
</div>

            
<div class="right-column">
    <h2>Students</h2>
        <?php if(isset($Studinfo)) ?>
        
        <?php foreach ($Studinfo as $St): ?>
            <div class="cus">
            <ul>
            <div class ="item">
                <h3>List</h3>
                <li><?= $St['StudName'] ?></li>
                <li><?= $St['StudGender'] ?></li>
                <li><?= $St['StudCourse'] ?></li>
                <li><?= $St['StudSection'] ?></li>
                <li><?= $St['StudYear'] ?></li>
                <li><a href="/delete/<?= $St['ID'] ?>">Delete</a> || <a href="/edit/<?= $St['ID'] ?>">Edit</a></td>
        </ul>
        </div>
        <?php endforeach; ?>
    
</div>
</div>
</body>
</html>