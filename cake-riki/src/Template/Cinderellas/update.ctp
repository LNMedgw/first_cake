<h1>変えるお！？</h1>
<?=$this->Form->create($entity,['url'=>['action'=>'editRecord']]) ?>
<fieldset>
	<p><?='ID = ' . $entity->id ?></p>
	<?=$this->Form->hidden("id") ?>
	<p>名前</p>
	<?=$this->Form->text("name") ?>
	<p>なまえ</p>
	<?=$this->Form->text("kana") ?>
	<p>属性</p>
	<?=$this->Form->text("type") ?>
	<p>身長</p>
	<?=$this->Form->text("height") ?>
	<p>年齢</p>
	<?=$this->Form->text("age") ?>
	<p>体重</p>
	<?=$this->Form->text("weight") ?>
	<p>誕生日</p>
	<?=$this->Form->text("birthday") ?>
	<p>血液型</p>
	<?=$this->Form->text("blood") ?>
	<p>利き手</p>
	<?=$this->Form->text("hand") ?>
	<p>バスト</p>
	<?=$this->Form->text("bust") ?>
	<p>ウエスト</p>
	<?=$this->Form->text("waist") ?>
	<p>ヒップ</p>
	<?=$this->Form->text("hip") ?>
	<p>星座</p>
	<?=$this->Form->text("constellaiton") ?>
	<p>出身地</p>
	<?=$this->Form->text("home") ?>
	<p>趣味</p>
	<?=$this->Form->text("hobby") ?>
	<p>声優</p>
	<?=$this->Form->text("voice") ?>
</fieldset>
<?=$this->Form->button("アプデ") ?>
<?=$this->Form->end() ?>