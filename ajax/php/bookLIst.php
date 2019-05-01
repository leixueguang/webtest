<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>图书展示</title>
	<style>
		table{ border-bottom: 1px solid red; border-right:1px solid red;}
		th,td{border-left:1px solid red;border-top:1px solid red;}
	</style>
</head>
<body>
	<?php 
		$arr = array();
		$arr[0] = array("name"=>"三国演义","zuozhe"=>"罗贯中","fenlei"=>"历史","desc"=>"三国时期的英雄人物");
		$arr[1] = array("name"=>"红楼梦","zuozhe"=>"曹雪芹","fenlei"=>"红学","desc"=>"一部封建王朝的缩影");
		$arr[2] = array("name"=>"水浒传","zuozhe"=>"施耐庵","fenlei"=>"英雄","desc"=>"宋朝108将起义");
		$arr[3] = array("name"=>"西游记","zuozhe"=>"吴承恩","fenlei"=>"妖魔","desc"=>"佛教与道教的斗争");
	 ?>
	<table cellpadding="0" cellspacing="0">
		<thead>
			<tr>
				<th>书名</th>
				<th>作者</th>
				<th>分类</th>
				<th>描述</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($arr as $value) { ?>
				<tr>
					<td><?php echo $value["name"] ?></td>
					<td><?php echo $value["zuozhe"] ?></td>
					<td><?php echo $value["fenlei"] ?></td>
					<td><?php echo $value["desc"] ?></td>
				</tr>
			<?php } ?>


		</tbody>
	</table>
</body>
</html>