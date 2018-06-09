<?php
/**
 * @Author: Marte
 * @Date:   2018-06-07 10:01:56
 * @Last Modified by:   Marte
 * @Last Modified time: 2018-06-07 10:13:57
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
       <table>
           <th>id</th>
           <th>用户名</th>
           <th>昵称</th>
           <th>时间</th>
           <th>状态</th>
          <?php foreach ($data as $k => $v): ?>
              <tr>
                  <td><?php echo $v->uid ?></td>
                  <td><?php echo $v->username ?></td>
                  <td><?php echo $v->nickname ?></td>
                  <td><?php echo $v->log_time ?></td>
                  <?php if ($v->status==1): ?>
                      <td>启用</td>
                  <?php elseif ($v->status==0) : ?>
                        <td>未启用</td>
                  <?php endif ?>
              </tr>
          <?php endforeach ?>
       </table>
   </center>

</body>
<script type="text/javascript"></script>
</html>