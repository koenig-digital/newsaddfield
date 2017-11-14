<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$tempColumns = array(
	'addfield' => array(
            'exclude' => false,
            'l10n_mode' => 'noCopy',
            'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel',
            'config' => [
                'type' => 'text',
                'cols' => 30,
                'rows' => 5,
            ]
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $tempColumns, TRUE);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news', 'addfield');




    