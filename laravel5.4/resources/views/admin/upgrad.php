<?php
/**
 * @Author: Marte
 * @Date:   2018-06-07 16:56:57
 * @Last Modified by:   Marte
 * @Last Modified time: 2018-06-07 20:04:31
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
    <form action="savegrad" method="post" enctype="multipart/form-data">
       <table>
           <tr>
               <td>段位名称</td>
               <td><input type="hidden" name="grad_id" value="<?php echo $data->grad_id ?>" />
               <input type="text" name="grad_name" value="<?php echo $data->grad_name ?>" /></td>
           </tr>
           <tr>
               <td>分数</td>
               <td><input type="text" name="money" value="<?php echo $data->money ?>" /></td>
           </tr>
           <tr>
               <td>段位图片</td>
               <td><input type="file" name="img" />
                  <img src="<?php echo $data->grad_img ?>" alt="" width="100px" />
               </td>
           </tr>
           <tr>
               <td><input type="submit" value="修改" /></td>
               <td></td>
           </tr>
       </table>
    </form>
</center>

</body>
<script type="text/javascript"></script>
</html>
