<?php
/**
 * Deprecated Class.
 * It is still hear for compatibility reasons and most probably will be removed in v6.0.
 *
 * @author     Sudar
 *
 * @package    BulkDelete\Deprecated
 */
use BulkWP\BulkDelete\Core\Users\Modules\DeleteUsersByUserRoleModule;

defined( 'ABSPATH' ) || exit; // Exit if accessed directly

class Bulk_Delete_Users {
	/**
	 * Wire up proper class for backward compatibility.
	 *
	 * @since 5.5
	 *
	 * @param mixed $delete_options
	 */
	public static function delete_users_by_role( $delete_options ) {
		$module = new DeleteUsersByUserRoleModule();

		return $module->delete( $delete_options );
	}
}
