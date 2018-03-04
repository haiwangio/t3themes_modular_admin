<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {
        if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {

            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
                'SalvatoreEckel.' . $extKey,
                'help',
                'configuration', // Submodule key
                'after:aboutmodules',
                [
		            'Base' => 'configuration,liveDemo',
                ],
                [
					'access' => 'user,group',
					'icon' => 'EXT:' . $extKey . '/ext_icon.png',
					'labels' => 'T3themes - ModularAdmin',
		            'labels' => 'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang.xlf',
                ]
            );

		}

    },
    $_EXTKEY
);
