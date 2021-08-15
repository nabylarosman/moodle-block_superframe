<?php
/**
 * Created by PhpStorm.
 * User: ClaudiuB
 * Date: 7/10/2019
 * Time: 2:30 PM
 */

defined('MOODLE_INTERNAL') || die;

$defaulturl='https://quizlet.com/132695231/scatter/embed';
$defaultwidth = '600';
$defaultheight = '600';



// Introductory explanation that all the settings are defaults for the add lesson form.
$settings->add(new admin_setting_heading('block_superframe/settings', '', get_string('settings', 'block_superframe')));

$settings->add(new admin_setting_configtext('block_superframe/url',
    get_string('url', 'block_superframe'),
    get_string('url_details', 'block_superframe'), $defaulturl, PARAM_RAW));

$settings->add(new admin_setting_configtext('block_superframe/width',
    get_string('width', 'block_superframe'),
    get_string('width_details', 'block_superframe'), $defaultwidth, PARAM_INT));

$settings->add(new admin_setting_configtext('block_superframe/height',
    get_string('height', 'block_superframe'),
    get_string('height_details', 'block_superframe'), $defaultheight, PARAM_INT));

$option  = array();
$option['course'] = get_string('course');
$option['popup'] = get_string('popup');

$settings->add(new admin_setting_configselect('block_superframe/page_layout', get_string('page_layout', 'block_superframe'),
    get_string('page_layout_details', 'block_superframe'),'course', $option));