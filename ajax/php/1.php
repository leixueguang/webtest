<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
//输出
	echo "string";

	//php中变量定义和输出

	$num = 9527;

	echo "编号：".$num;

//数组的定义和输出
	//1、直接值的数组，下标是从0开始
	$arr = array('a','b','c','d');
	echo $arr[0];
	print_r($arr);

	//2、自定义键值对的数组
	$arr1 = array("a"=>"12","b"=>"67");
	print_r($arr1);
	echo $arr1["b"];


//php中的二维数组定义和遍历
	$arr3 = array();
	$arr3['apple'] = array('color'=>'red','shape'=>'round');
	$arr3['orange'] = array('color'=>'orange','shape'=>'round');
	$arr3['banana'] = array('color'=>'yellow','shape'=>'long');

	$arr4 = array('color'=>'yellow','shape'=>'long');
	// foreach ($arr3 as $key => $value) {
	// 	echo $key.'--'.$value.'<br>';
	// }

	for ($i=0; $i < count($arr3) ; $i++) { 
		for ($j=0; $j <count($arr3[$i]) ; $j++) { 
			echo $arr3[$i][$j].'<br>';
		}
		
	}

  ?>
  	  <script >
  	console.log('test');
	//二维数组在js中的实现
	var arr = [[1,2,3],[4,5,6],[7,8,9]];
	for(var i=0;i<arr.length;i++){
		for(var j=0;j<arr[i].length;j++){
			console.log("索引值：" +i +","+j+"-----"+arr[i][j]);
		}
	}


  </script>

</body>
</html>
