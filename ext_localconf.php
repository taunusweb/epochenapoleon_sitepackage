<?php

defined('TYPO3_MODE') || die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT:source="FILE:EXT:'
    . $_EXTKEY . '/Configuration/TSConfig/page.tsconfig">'
);

// Individual RTE Configuration
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['epochenapoleon_preset'] = 'EXT:epochenapoleon_sitepackage/Configuration/RTE/Yaml/epochenapoleon_preset.yaml';
