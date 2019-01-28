<h1>探すお＾ω＾</h1>
<?=$this->Form->create($entity,['url'=>['action'=>'search']]) ?>
<fieldset>
	<?=$this->Form->text("kana") ?>
</fieldset>
<?=$this->Form->button("送信") ?>
<?=$this->Form->end() ?>

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
	for ($i = 0; $i < count($data); $i++) {
		echo $this->Html->tableCells(
			$data[$i]->toArray(),
			['style'=>'background-color:#f0f0f0'],
			['style'=>'font-weight:_bold'],
			true);
	}
	?>
</table>