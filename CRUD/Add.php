<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input {
            border-color: pink;
        }

        select {
            border-color: pink;
        }
    </style>
</head>
<body>
<form action="" method="post">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" placeholder="Enter Name"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="address" placeholder="Enter Address"></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="text" name="phone" placeholder="Enter Phone"></td>
        </tr>
        <tr>
            <td>Role</td>
            <td><select name="role">
                    <option >Admin</option>
                    <option  selected>Student</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Class</td>
            <td><input type="text" name="class" placeholder="Enter Class"></td>
        </tr>
        <tr>
            <td>
                <button type="submit">ADD</button>
            </td>
            <td>
                <button type="submit">SAVE</button>
            </td>
        </tr>
    </table>

    <?php
    include_once "Students.php";
    include_once "ManagerStudents.php";
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $role = $_POST['role'];
        $class = $_POST['class'];
        $student = new Students($name, $address, $phone, $role, $class);
        $list = new ManagerStudents("data.json");
        $list->addStudents($student);
    }
    ?>
    <a href="index.php">LIST STUDENTS</a>
</form>
</body>

</html>
