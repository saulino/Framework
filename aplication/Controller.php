<?php 
/**
 * @author Saul Meneses Obregon
 * @category Controller
 * @param  $_view
 * @param $db
 * @since 20/10/2015
 * @version v.1.0
 */
abstract class appController{

	/**
	 * @var View Envia la vista asignada al modelo
	 */
	protected $_view;
	protected $db;

	public function __construct(){

		$this->_view = new View(new Request);
		$this->db = new ClassPDO();
	}

	abstract public function index();

	protected function redirect($url = array()){
		$path= "";

		if ($url["controller"]) {
			$path .= $url["controller"];
		}
		if ($url["action"]) {
			$path .="/".$url["action"];
		}
		header("LOCATION: ".APP_URL.$path);
	}
}