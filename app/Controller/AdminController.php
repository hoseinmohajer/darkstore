<?php
/**
 * Routes configuration
 * rout "/admin url" to website administator page for manage site content
*/
class AdminController extends AppController{
	public function index() {
		$this->redirect(array("controller" => "admin", "action" => "admins"));
	}
}
?>