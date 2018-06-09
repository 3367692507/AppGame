<?php
/**
 * @Author: Marte
 * @Date:   2018-06-06 09:30:18
 * @Last Modified by:   Marte
 * @Last Modified time: 2018-06-06 10:54:25
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
    <form action="savefriend" method="post" >
        <table>
            <tr>
                <td>朋友名称</td>
                <td><input type="hidden" name="friends_id" value="<?php echo $data->friends_id ?>" />
                <input type="text" name="friends_name" value="<?php echo $data->friends_name ?>" /></td>
            </tr>
            <tr>
                <td>微信号</td>
                <td><input type="text" name="friends_token" value="<?php echo $data->friends_token ?>" /></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="修改" />
                </td>
            </tr>
        </table>
    </form>

</center>

</body>
<script type="text/javascript"></script>
</html>