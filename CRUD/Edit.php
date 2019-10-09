<?php
$id = $_GET['id'];

?>
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
<form action="editSubmit.php" method="post">
    <table>
        <tr style="display: none">
            <td>id</td>
            <td><input type="text" name="id" value="<?php echo $id ?>"></td>
        </tr>
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
                    <option>Admin</option>
                    <option>Student</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Class</td>
            <td><input type="text" name="class" placeholder="Enter Class"></td>
        </tr>
        <tr>
            <td>
                <button type="submit">SAVE</button>
            </td>
        </tr>
    </table>
</form>

<a href="index.php">LIST STUDENT</a>
</body>
</html>
