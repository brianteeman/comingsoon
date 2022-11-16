<?php
/**
 * @package    comingsoon
 * @author     Brian Teeman
 * @copyright  (C) 2022 - Brian Teeman
 * @license    GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Plugin\PluginHelper;
use Joomla\CMS\Uri\Uri;

\defined('_JEXEC') or die;

/**
 * Comingsoon Plugin by Brian Teeman
 *
 * @since  1.0.0
 */
class plgSystemComingsoon extends CMSPlugin
{
	/**
	 * Application object.
	 *
	 * @var    CMSApplicationInterface
	 * @since  1.0.0
	 */
	protected $app;

	/**
	 * Load plugin language files automatically
	 *
	 * @var    boolean
	 * @since  1.0.0
	 */
	protected $autoloadLanguage = true;

	/**
	 * Display the Comingsoon
	 *
	 * @var    boolean
	 * @since  1.0.0
	 */
	protected $displayComingsoon = false;

	/**
	 * Display the Comingsoon
	 *
	 * @return  void
	 *
	 * @since   1.0.0
	 */
	private function displayComingsoon()
	{
		$secret    = trim($this->params->get('secret', ''));
		$whitelist = trim($this->params->get('whitelist', ''));

		if ($secret)
		{
			$storedSecret = $this->app->getUserState($this->_name . '.secret', 0);

			if ($storedSecret === $secret)
			{
				$this->displayComingsoon = true;
			}
			else
			{
				$this->app->setUserState($this->_name . '.secret', 0);
				$secretRequest = $this->app->getUserStateFromRequest($this->_name . '.secret', $secret, 0);

				if ($secretRequest == 1)
				{
					$this->app->setUserState($this->_name . '.secret', $secret);
					$this->displayComingsoon = true;
				}
			}
		}

		if (!$this->displayComingsoon && $whitelist)
		{
			$whitelist           = preg_split('/\s*\n\s*/', $whitelist);
			$this->displayComingsoon = in_array($this->app->input->server->get('REMOTE_ADDR'), $whitelist);
		}

		if (!$this->displayComingsoon)
		{
			$bgimageUrl     = Uri::base() . 'media/plg_comingsoon/images/' . $this->params->get('bgimage', 'comingsoon.jpg');
			$caption        = $this->params->get('caption', '');
			$countdown      = $this->params->get('countdown', 1);
			$countdown_date = $this->params->get('countdown_date', '');
			$fonts          = $this->params->get('fonts', 'Roboto+Slab|Roboto');
			$font           = explode('|', $fonts);
			$fontcss        = str_replace('+',' ', $font);
			$text           = $this->params->get('text', '<p>' . Text::_('PLG_SYSTEM_COMINGSOON_COMING_SOON') . '</p>');

			// Meta
			$metaDesc = $this->params->get('meta_desc', $this->app->get('MetaDesc'));
			$title    = $this->params->get('title', $this->app->get('sitename'));
			$robots   = $this->params->get('robots', $this->app->get('robots'));

			// Social Media
			$facebook  = $this->params->get('facebook', '');
			$instagram = $this->params->get('instagram', '');
			$twitter   = $this->params->get('twitter', '');
			$youtube   = $this->params->get('youtube', '');
			$github    = $this->params->get('github', '');

			// Social Media URL's
			$facebook_url  = 'https://facebook.com/' . $facebook;
			$instagram_url = 'https://instagram.com/' . $instagram;
			$twitter_url   = 'https://twitter.com/' . $twitter;
			$youtube_url   = 'https://youtube.com/' . $youtube;
			$github_url    = 'https://github.com/' . $github;

			$path = PluginHelper::getLayoutPath('system', 'comingsoon');
			include $path;

			$this->app->close();
		}
	}

	/**
	 * Listener for the `onAfterInitialise` event
	 *
	 * @return  void
	 *
	 * @since   1.0.0
	 */
	public function onAfterInitialise()
	{
        // Only run in the frontend
        if ($this->app->isClient('site'))

		{
			$this->displayComingsoon();
		}
	}
}
