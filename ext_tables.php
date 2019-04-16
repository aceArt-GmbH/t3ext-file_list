<?php
defined('TYPO3_MODE') || die();

$boot = function ($_EXTKEY) {
    // Register the wizard for new content element
    $GLOBALS['TBE_MODULES_EXT']['xMOD_db_new_content_el']['addElClasses'][\Causal\FileList\Controller\FileControllerWizard::class] =
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Classes/Controller/FileControllerWizard.php';
};

$boot('file_list');
unset($boot);
