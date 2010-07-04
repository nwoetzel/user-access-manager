<?php
/**
 * categoryColumn.php
 * 
 * Shows the setup page at the admin panel.
 * 
 * PHP versions 5
 * 
 * @category  UserAccessManager
 * @package   UserAccessManager
 * @author    Alexander Schneider <alexanderschneider85@googlemail.com>
 * @copyright 2008-2010 Alexander Schneider
 * @license   http://www.gnu.org/licenses/gpl-2.0.html  GNU General Public License, version 2
 * @version   SVN: $Id$
 * @link      http://wordpress.org/extend/plugins/user-access-manager/
 */

global $userAccessManager;
$uamUserGroups 
    = $userAccessManager->getAccessHandler()->getUsergroupsForCategory($id);
$userGroupsForObject = &$uamUserGroups;

if ($uamUserGroups != Array()) {
    ?>
	<ul>
    <?php
    foreach ($uamUserGroups as $uamUserGroup) {
        ?> 
    	<li>
    		<a class="uam_group_info_link">
    		    <?php echo $uamUserGroup->getGroupName(); ?>
    		</a>
        <?php 
        include 'groupInfo.php';
        ?> 
        </li>
        <?php
    }
    ?>
	</ul>
    <?php
} else {
    echo TXT_FULL_ACCESS;
}