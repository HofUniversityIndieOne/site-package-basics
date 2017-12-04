<?php
defined('TYPO3_MODE') || die();

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'site_package_basics';

    /**
     * Default TypoScript for SitePackageBasics
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'Site Package Basics'
    );
    /**
     * Extensions TypoScript for SitePackageBasics
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript/Extensions',
        'Adjust Extensions'
    );
});
