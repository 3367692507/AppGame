<?php
/**
 * @Author: Marte
 * @Date:   2018-06-06 09:30:18
 * @Last Modified by:   Marte
 * @Last Modified time: 2018-06-06 09:38:29
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
    <form action="addfriend" method="post" >
        <table>
            <tr>
                <td>朋友名称</td>
                <td><input type="text" name="friends_name" /></td>
            </tr>
            <tr>
                <td>微信号</td>
                <td><input type="text" name="friends_token" /></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="添加" />
                </td>
            </tr>
        </table>
    </form>

</center>

</body>
<script type="text/javascript"></script>
</html>