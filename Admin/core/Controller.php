<?php
require_once "./core/Connection.php";

class Controller{
	public function model($model){
		require_once './models/'.$model.'.php';
		return new $model;
	}

	public function view($view, $data = []){
		require_once './views/'.$view.'.php';
	}
}
?>