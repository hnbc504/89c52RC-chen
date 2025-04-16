<html lang="zh-cn">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="widtd=device-widtd,initial-scale=1.0">
    </head>
    <body>
    <center>
        <h1>学生信息添加</h1>
        <form action="" method="post">
            <table>
            <tr>
                <td>学号：</td>
                <td><input type="text" name="xuehao" required autofocus></td>
            </tr>
            <tr>
                <td>姓名：</td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>性别：</td>
                <td>男：<input type="radio" name="gender" value="男" required>女：<input type="radio" name="gender" value="女" required></td>
            </tr>
            <tr>
                <td>电话：</td>
                <td><input type="text" name="phonecall" required></td>
            </tr>
            <tr>
                <td>年龄：</td>
                <td><input type="text" name="age" required></td>
            </tr>
            <tr>
                <td>学院：</td>
                <td><input type="text" name="school" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="提交">
                    <input type="reset">
                </td>
            </table>
        </form>
    </body>
<?php

    if ($_SERVER['REQUEST_METHOD'] === "POST") {

        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>学号</th>";
        echo "<th>姓名</th>";
        echo "<th>性别</th>";
        echo "<th>电话</th>";
        echo "<th>年龄</th>";
        echo "<th>学院</th>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>{$_POST['xuehao']}</td>";
        echo "<td>{$_POST['username']}</td>";
        echo "<td>{$_POST['gender']}</td>";
        echo "<td>{$_POST['phonecall']}</td>";
        echo "<td>{$_POST['age']}</td>";
        echo "<td>{$_POST['school']}</td>";
        echo "</tr>";

        echo "</table>";

    }

?>
    </center>
</html>