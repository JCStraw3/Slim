<?php
class myView extends \Slim\View{

	public function render($template){

		$template = 'Slim/view.php';

		return $template;

	}
}