<h1>あーすげぇやいっぺえいらぁ</h1>

<hr>

<table>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>kana</th>
		<th>type</th>
		<th>height</th>
		<th>age</th>
		<th>weight</th>
		<th>birthday</th>
		<th>blood</th>
		<th>hand</th>
		<th>bust</th>
		<th>waist</th>
		<th>hip</th>
		<th>con</th>
		<th>home</th>
		<th>hobby</th>
		<th>voice</th>
	</tr>

	<?php
		$arr = $data->toArray();
		for($i = 0; $i < count($arr); $i++){
			echo $this->Html->tableCells(
				$arr[$i]->toArray(),
				['style'=>'background-color:#f0f0f0'],
				['style'=>'font-weight:bold'],
				true);
		}
	?>
</table>