<?php
/**
 * @package    comingsoon
 * @author     Brian Teeman
 * @copyright  (C) 2022 - Brian Teeman
 * @license    GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
**/

defined('_JEXEC') or die;
use Joomla\CMS\Factory;
use Joomla\CMS\Form\Field\TextareaField;
use Joomla\CMS\Language\Text;

/**
 * Provides a Whitelist
 *
 * @since  1.0.0
 */
class JFormFieldWhitelist extends TextareaField
{
	/**
	 * The form field type.
	 *
	 * @var    string
	 * @since  1.0.0
	 */
	protected $type = 'whitelist';

	/**
	 * Method to get the field input markup.
	 *
	 * @return  string  The field input markup.
	 *
	 * @since   1.0.0
	 */
	protected function getInput()
	{
		$remoteAddress = Factory::getApplication()->input->server->get('REMOTE_ADDR');
        // add a button to insert the value of $remoteAddress
        $button = '<button type="button" class="btn btn-primary" onclick="document.getElementById(\'' . $this->id . '\').value = \'' . $remoteAddress . '\';">' . Text::_('PLG_SYSTEM_COMINGSOON_CFG_WHITELIST_ADD_CURRENT') . '</button>';

		return parent::getInput() . $button;
	}
}
