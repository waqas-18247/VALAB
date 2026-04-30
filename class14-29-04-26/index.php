<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skill Tracker</title>
    <style>
        body{
            font-family:Arial;
            background:#c7bdbd;
        }
        .container{
            width: 80%;
            margin:auto;
        }
        h2{
            text-aline:center;
        }
        form{
            background:white;
            padding: 20px;
            border-radius:10px;
            margin-bottom:20px;
        }
        input ,select{
            width:50%;
            padding:10px;
            margin:10px 0;
            border-radius:5px;
        }
        button{
            background:#28a745;
            color:white;
            padding:10px;

        }
        

    </style>
</head>
<body>
    <div class="container">
        <h2>Student skill Tracker</h2>
        <form action="" method="post">
            <input type="text" name = "name" placeholder="Enter name">
             <input type="text" name = "skill" placeholder="Enter skill (e.g PHP ,Python)"required>
            <select name="level">
            <option>Begineer</option>
            <option>Intermdiate</option>
            <option>Expert</option>
            </select>
            <button type="submit" name="save">Add Skill</button>

        </form>
    
    <?php
    include "db.php";
    if(isset($_POST['save'])){
        $name = $_POST['name'];
        $skill = $_POST['skill'];
        $level = $_POST['level'];
        $query = "INSERT INTO skills(name,skill,level) VALUES('$name','$skill','$level')";
        mysqli_query($conn,$query);

        };
    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>SKILL</th>
            <th>LEVEL</th>
        </tr>
        <?php
        include "db.php";
        $result = mysqli_query($conn,"SELECT*FROM skills");
        while($row = mysqli_fetch_assoc($result)){
            echo"<tr>
            <td>".$row['id']."</td>
            <td>".$row['name']."</td>
            <td>".$row['skill']."</td>
            <td>".$row['level']."</td>
            </tr>";
        }
        
        
        ?>
    </table>
    </div>
</body>
</html>