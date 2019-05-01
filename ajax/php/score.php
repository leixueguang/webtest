<?php 
		header("Content-Type:text/plain; charset=utf-8");
      $arr = array();
      $arr['001'] = array('name'=>'张三','chinese'=>'129','math'=>'149','english'=>'108','summary'=>'215');
      $arr['002'] = array('name'=>'李四','chinese'=>'109','math'=>'141','english'=>'89','summary'=>'231');
      $arr['003'] = array('name'=>'王五','chinese'=>'99','math'=>'49','english'=>'18','summary'=>'200');
      $arr['004'] = array('name'=>'赵六','chinese'=>'92','math'=>'129','english'=>'130','summary'=>'199');

      $code = $_POST['code'];
      $score = $arr[$code];

      echo "<ul><li>姓名：$score[name]</li><li>语文：$score[chinese]</li><li>数学：$score[math]</li><li>英语：$score[english]</li><li>综合：$score[summary]</li></ul>";

 ?>