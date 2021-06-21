<?php


/**
 * Implementaton for the Education Tracking system plugin.

 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


defined('MOODLE_INTERNAL') || die();


global $ADMIN;

if ($hassiteconfig) {
    $settings->add(new admin_setting_configtext('quizaccess_proctoring/autoreconfigurecamshotdelay',
        get_string('setting:camshotdelay', 'quizaccess_proctoring'),
        get_string('setting:camshotdelay_desc', 'quizaccess_proctoring'), 30, PARAM_INT));

    $settings->add(new admin_setting_configtext('quizaccess_proctoring/autoreconfigureimagewidth',
        get_string('setting:camshotwidth', 'quizaccess_proctoring'),
        get_string('setting:camshotwidth_desc', 'quizaccess_proctoring'), 230, PARAM_INT));
}
