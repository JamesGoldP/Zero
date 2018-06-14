<?php
namespace Zero\library;
use Nezumi\Paging;

class Model
{

	/**
	 * @var string prefix 
	 */
	protected $prefix;

	/**
	 * @var string name of table
	 */
	protected $table = NULL;
	

	public function __construct()
	{
		$db_config = Config::get('database')['master'];
		$this->prefix = $db_config['tablepre']; 
		$this->table = $this->get_table_name();
		$this->db = Factory::getDatabase();
	}			

	public function get_table_name()
	{
		$sub_arr = explode('\\', get_class($this));
		$sub_class = end($sub_arr);
		return 	$this->prefix.to_underscore($sub_class);
	}

}