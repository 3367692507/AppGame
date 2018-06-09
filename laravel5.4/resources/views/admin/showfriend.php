<?php
/**
 * @Author: Marte
 * @Date:   2018-06-06 09:57:45
 * @Last Modified by:   Marte
 * @Last Modified time: 2018-06-06 10:35:03
 */
use Illuminate\Pagination\Paginator;
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
           <th>friend_id</th>
       <th>朋友名称</th>
       <th>朋友微信号</th>
       <th>操作</th>
       <?php foreach ($data as $k => $v): ?>
           <tr>
               <td><?php echo $v->friends_id ?></td>
               <td><?php echo $v->friends_name ?></td>
               <td><?php echo $v->friends_token ?></td>
               <td><a href="delfriend?id=<?php echo $v->friends_id ?>">删除</a>||<a href="upfriend?id=<?php echo $v->friends_id ?>">修改</a></td>
           </tr>
       <?php endforeach ?>

       </table>
        <?php echo $data->links() ?>
   </center>

</body>
<script type="text/javascript"></script>
</html>