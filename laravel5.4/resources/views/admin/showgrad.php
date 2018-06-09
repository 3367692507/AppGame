<?php
/**
 * @Author: Marte
 * @Date:   2018-06-07 19:17:24
 * @Last Modified by:   Marte
 * @Last Modified time: 2018-06-07 19:36:37
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
      <style>
    .pagination li{list-style:none;float:left;}
    </style>
</head>
<body>
<center>
    <table>
        <th>id</th>
        <th>段位名称</th>
        <th>分数</th>
        <th>段位图标</th>
        <th>操作</th>
    <?php foreach ($data as $k => $v): ?>
     <tr>
         <td><?php echo $v->grad_id ?></td>
         <td><?php echo $v->grad_name ?></td>
         <td><?php echo $v->money ?></td>
         <td><img src="<?php echo $v->grad_img ?>" alt="" width="100px" /></td>
         <td> <a href="delgrad?id=<?php echo $v->grad_id ?>">删除</a> || <a href="upgrad?id=<?php echo $v->grad_id ?>">修改</a> </td>
     </tr>
<?php endforeach ?>
    </table>
<?php echo $data->links() ?>
</center>

</body>
<script type="text/javascript"></script>
</html>