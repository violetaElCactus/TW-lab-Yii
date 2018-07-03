<?php

/* @var $this yii\web\View */
$temp = Yii::$app->user->identity;
$this->title = 'Compositores & canciones';
if($temp != NULL){
	if($temp->rol == 'admin'){
		echo "hola señora administradora";
	}
	else{
		if($temp->rol == 'user') {
			echo "hola señora usuaria";	
		}
	}
}
else{
	echo "logueate wey";
}
?> 
<div class="site-index">
</div>

