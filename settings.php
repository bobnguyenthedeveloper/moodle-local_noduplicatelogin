<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * local_noduplicatelogin settings
 *
 * @package   local_noduplicatelogin
 * @copyright 2022 Videa Edtech Ltd
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author    Bob Nguyen <bob@videabiz.com>
 */


defined('MOODLE_INTERNAL') || die;

if ($hassiteconfig) {
	$ADMIN->add('localplugins', new admin_category('local_noduplicatelogin_settings', new lang_string('pluginname', 'local_noduplicatelogin')));
	$settingspage = new admin_settingpage('managelocalnoduplicatelogin', new lang_string('manage', 'local_noduplicatelogin'));

	if ($ADMIN->fulltree) {
		$settingspage->add(new admin_setting_configcheckbox(
			'local_noduplicatelogin/enabled',
			new lang_string('enable', 'local_noduplicatelogin'),
			new lang_string('enableplugindesc', 'local_noduplicatelogin'),
			1
		));
	}

	$ADMIN->add('localplugins', $settingspage);
}
