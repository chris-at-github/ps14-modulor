<?php

// ---------------------------------------------------------------------------------------------------------------------
// Modul in TYPO3 tt_content registrieren
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
	array(
		'LLL:EXT:ps14_modulor/Resources/Private/Language/locallang_tca.xlf:title',
		'ps14_modulor',
		'ps14-module-modulor'
	),
	'CType',
	'ps14_modulor'
);

//$GLOBALS['TCA']['tt_content']['types']['ps14_modulor'] = [
//	'showitem' => '
//			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
//			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;xoHeader, bodytext, tx_xo_elements,
//		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.appearance,
//			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.frames;frames,
//			--palette--;;xoPrint,
//		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
//			--palette--;;hidden,
//			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
//			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,
//		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.extended
//	',
//];
//
//$GLOBALS['TCA']['tt_content']['types']['ps14_modulor']['columnsOverrides']['bodytext']['config'] = [
//	'enableRichtext' => true,
//	'richtextConfiguration' => 'ps14Default',
//];
//
//$GLOBALS['TCA']['tt_content']['types']['ce_accordion']['columnsOverrides']['tx_xo_elements']['config']['overrideChildTca'] = [
//	'columns' => [
//		'record_type' => [
//			'config' => [
//				'items' => [
//					['LLL:EXT:ce_accordion/Resources/Private/Language/locallang_tca.xlf:tx_xo_domain_model_elements.record_type.default', 'ce_accordion_default'],
//					['LLL:EXT:ce_accordion/Resources/Private/Language/locallang_tca.xlf:tx_xo_domain_model_elements.record_type.records', 'ce_accordion_records'],
//				],
//				'default' => 'ce_accordion_default'
//			]
//		],
//		'description' => [
//			'config' => [
//				'richtextConfiguration' => 'xoDefault'
//			]
//		]
//	],
//	'types' => [
//		'ce_accordion_default' => [
//			'showitem' => '
//					l10n_diffsource, record_type, --palette--;;header, tx_ce_accordion_active, description,
//				--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
//					--palette--;;visibility,
//					--palette--;;access,
//				--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
//					--palette--;;print,',
//		],
//		'ce_accordion_records' => [
//			'showitem' => '
//					l10n_diffsource, record_type, --palette--;;header, tx_ce_accordion_active, content,
//				--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
//					--palette--;;visibility,
//					--palette--;;access,
//				--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
//					--palette--;;print,',
//		],
//	]
//];