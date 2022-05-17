<?php

declare(strict_types=1);

$upgrades = [
    'v10.4' => [
        'rsaauthExtension' => [
            'rsaauthExtension' => \TYPO3\CMS\v104\Install\Updates\RsaauthExtractionUpdate::class,
        ],
        'feeditExtension' => [
            'feeditExtension' => \TYPO3\CMS\v104\Install\Updates\FeeditExtractionUpdate::class,
        ],
        'taskcenterExtension' => [
            'taskcenterExtension' => \TYPO3\CMS\v104\Install\Updates\TaskcenterExtractionUpdate::class,
        ],
        'sysActionExtension' => [
            'sysActionExtension' => \TYPO3\CMS\v104\Install\Updates\SysActionExtractionUpdate::class,
        ],
        'databaseRowsUpdateWizard' => [
            'databaseRowsUpdateWizard' => \TYPO3\CMS\v104\Install\Updates\DatabaseRowsUpdateWizard::class,
        ],
    ],
];

if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('felogin')) {
    $upgrades['v10.4']['TYPO3\\CMS\\FrontendLogin\\Updates\\MigrateFeloginPlugins'] = [
        'TYPO3\\CMS\\FrontendLogin\\Updates\\MigrateFeloginPlugins' => \TYPO3\CMS\v104\Install\Updates\MigrateFeloginPlugins::class,
    ];
    $upgrades['v10.4']['TYPO3\\CMS\\FrontendLogin\\Updates\\MigrateFeloginPluginsCtype'] = [
        'TYPO3\\CMS\\FrontendLogin\\Updates\\MigrateFeloginPluginsCtype' => \TYPO3\CMS\v104\Install\Updates\MigrateFeloginPluginsCtype::class,
    ];
}

if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('form')) {
    $upgrades['v10.4']['formFileExtension'] = [
        'formFileExtension' => \TYPO3\CMS\v104\Install\Updates\FormFileExtensionUpdate::class,
    ];
}

return $upgrades;
