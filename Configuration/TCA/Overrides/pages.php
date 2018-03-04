<?php
defined('TYPO3_MODE') || die();

$extensionKey = 't3themes_modular_admin';

/***************
 * Register PageTS
 */

// BackendLayouts
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    $extensionKey,
    'Configuration/TSconfig/Mod/WebLayout/BackendLayouts.txt',
    'T3themes Bootstrap 4 Theme for TYPO3 CMS - Backend Layouts'
);

// BackendLayouts
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    $extensionKey,
    'Configuration/TSconfig/RTE.txt',
    'T3themes Bootstrap 4 Theme for TYPO3 CMS - CKEditor Configuration'
);
