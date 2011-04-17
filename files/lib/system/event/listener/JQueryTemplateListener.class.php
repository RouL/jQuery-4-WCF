<?php
require_once(WCF_DIR.'lib/system/event/EventListener.class.php');

/**
 * Adds jQuery to each page.
 *
 * @author		Markus Bartz <roul@codingcorner.info>
 * @copyright	2011 Markus Bartz
 * @license		GNU Lesser General Public License <http://www.gnu.org/licenses/lgpl.html>
 * @package		info.codingcorner.wcf.js.jquery
 * @subpackage	system.event.listener
 * @category 	jQuery
 */
class JQueryTemplateListener implements EventListener {
	/**
	 * @see EventListener::execute()
	 */
	public function execute($eventObj, $className, $eventName) {
		WCF::getTPL()->append('specialStyles', '<script type="text/javascript" src="'.RELATIVE_WCF_DIR.'js/3rdParty/jquery.min.js"></script><script type="text/javascript">jQuery.noConflict();</script>');
	}
}
?>