<?php
defined('TYPO3_MODE') || die('Access denied.');

//=================================================================
// Add TypoScript
//=================================================================
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'rkw_ecosystem',
    'Configuration/TypoScript',
    'RKW Ecosystem'
);

