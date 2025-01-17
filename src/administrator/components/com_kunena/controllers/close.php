<?php
/**
 * Kunena Component
 *
 * @package     Kunena.Administrator
 * @subpackage  Controllers
 *
 * @copyright   (C) 2008 - 2016 Kunena Team. All rights reserved.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link        https://www.kunena.org
 **/
defined('_JEXEC') or die();

/**
 * Kunena Cpanel Controller
 *
 * @since  2.0
 */
class KunenaAdminControllerClose extends KunenaController
{
	protected $baseurl = null;

	/**
	 *
	 * @param   array $config
	 */
	public function __construct($config = array())
	{
		parent::__construct($config);
		$this->baseurl = 'index.php?option=com_kunena';
	}
}
