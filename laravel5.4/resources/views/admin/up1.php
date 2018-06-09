<?php
/**
 * @Author: Marte
 * @Date:   2018-06-04 14:48:05
 * @Last Modified by:   Marte
 * @Last Modified time: 2018-06-08 20:14:19
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<center>
    <form action="save1"  method="post"  enctype="multipart/form-data" >
      <table>
            <tr>
            <td>姓名</td>
            <td>
            <input type="hidden" name="id" value="<?php echo$data->id ?>"/>
            <input type="text" name="name" value="<?php echo$data->name ?>" /></td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="text" name="password" value="<?php echo$data->password ?>" /></td>
        </tr>

        <tr>
            <td><input type="submit" value="添加" /></td>
        </tr>
      </table>
    </form>
</center>


</body>
<script type="text/javascript"></script>
</html>