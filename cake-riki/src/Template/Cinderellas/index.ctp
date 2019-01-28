<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('やんよ') ?></li>
        <li><?= $this->Html->link(__('ぜんぶ見るお'), ['action' => 'list']) ?></li>
        <li><?= $this->Html->link(__('探すお'), ['action' => 'search']) ?></li>
        <li><?= $this->Html->link(__('作るお'), ['action' => 'new']) ?></li>
        <li><?= $this->Html->link(__('変えるお'), ['action' => 'update']) ?></li>
        <li><?= $this->Html->link(__('消すお'), ['action' => 'delete']) ?></li>
    </ul>
</nav>

<div class="index large-9 medium-8 columns content">
<h1>ﾓｴｰ</h1>

<hr>

<table>
	<tr>
		<th>name</th>
		<th>kana</th>
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
</div>
