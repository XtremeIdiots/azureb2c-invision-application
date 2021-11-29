//<?php

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !\defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	exit;
}

abstract class azureb2c_hook_LoginHandler extends _HOOK_CLASS_
{
	public static function handlerClasses()
	{
		try
		{
			$return = parent::handlerClasses();
			$return[] = 'IPS\Login\Handler\OAuth2\AzureB2C';
			return $return;
		}
		catch ( \Error | \RuntimeException $e )
		{
			if ( method_exists( get_parent_class(), __FUNCTION__ ) )
			{
				return \call_user_func_array( 'parent::' . __FUNCTION__, \func_get_args() );
			}
			else
			{
				throw $e;
			}
		}
	}
}
