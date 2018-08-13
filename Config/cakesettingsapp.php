<?php
/**
 * This file configures settings application
 *
 * To modify these parameters, copy this file into your own CakePHP APP/Config directory.
 * CakeSettingsApp: Manage settings of application.
 * @copyright Copyright 2016, Andrey Klimov.
 * @package plugin.Config
 */

$config['CakeSettingsApp'] = [
    'configKey' => 'AppConfig',
    'configSMTP' => false,
    'configAcLimit' => true,
    'configADsearch' => true,
    'configExtAuth' => true,
/*
    'authGroups' => array(
        1 => array(
            'field' => 'AdminGroupMember',
            'name' => __('administrator'),
            'prefix' => 'admin'
        )
    ),
*/
    'UIlangs' => [
        'US' => 'eng',
        'RU' => 'rus',
    ],
/*
    'schema' => array(
        'FieldName' => array('type' => 'string', 'default' => ''),
    ),
    'serialize' => array(
        'FieldName'
    ),
    'alias' => array(
        'FieldName' => array(
            'ConfigGroup.Key',
        )
    ),
*/
];
