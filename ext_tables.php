<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $_EXTKEY,
    'Configuration/TypoScript',
    'Exit intent Popup'
);


$pageFields = array(
    'exitintentpopup_switch' => array(
        'exclude' => 0,
        'label' => 'Display popup on exit intent',
        'config' => array(
            'type' => 'check',
            'default' => '1'
        ),
    ),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $pageFields, 1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages',
    '--div--;Exit Intent,exitintentpopup_switch', 1);
