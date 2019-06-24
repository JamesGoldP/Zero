<?php
namespace zero;

class Register{

	protected static $objects;

	/*	
	 *  注册到全局树中
	 *
	 */
	public static function set($alias , $object)
	{
		self::$objects[$alias] = $object;
	}

	/*	
	 *  获取全局树的类
	 *
	 */
	public static function get($alias)
	{
		if (!isset(self::$objects[$alias]))
        {
            return false;
        }
		return self::$objects[$alias];
	}	


	/*	
	 *  取消全局树中的类
	 *
	 */
	public static function _unset($alias)
	{
		unset(self::$objects[$alias]);	
	}	
}