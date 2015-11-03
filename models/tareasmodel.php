<?php
/**
 * @author Saul Meneses
 * @copyright Software Libre
 * @package tareasModel
 * @subpackage AppModel
 */
class tareasModel extends AppModel
{
	/**
	 * Constructor de la clase tareasModel
	 * @return none No devuelve nada
	 */
	public function __construct()
	{
	
		parent::__construct();
	
	}
	/**
	 * Obtiene todas las tareas
	 * @return string Devuelve una lista de tareas
	 */
	public function getTareas()
	{
	
		$tareas = $this->_db->query("SELECT * FROM tareas");
		return $tareas->fetchall();
	
	}
}