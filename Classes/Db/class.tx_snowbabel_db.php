<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011 Daniel Alder <info@snowflake.ch>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Plugin 'Snowbabel' for the 'Snowbabel' extension.
 *
 * @author	Daniel Alder <info@snowflake.ch>
 * @package	TYPO3
 * @subpackage	tx_snowbabel
 */
class tx_snowbabel_Db {

	/**
	 *
	 */
	private $db;

	/**
	 *
	 */
	public function __construct() {
			// set typo3 db
		$this->db =& $GLOBALS['TYPO3_DB'];
	}

///////////////////////////////////////////////////////
// select db - get
///////////////////////////////////////////////////////

	/**
	 *
	 */
	public function getAppConfAvailableLanguages($LocalconfValue, $ShowTranslatedLanguages = false) {

		$Languages		= array();
		$TempLanguages	= explode(",", $LocalconfValue);

		if(is_array($TempLanguages)) {
			foreach($TempLanguages as $TempLanguageId) {

				$Language = $this->getStaticLanguages($TempLanguageId, $ShowTranslatedLanguages);

				if(!empty($Language)) {
					array_push($Languages, $Language);
				}

			}
		}

		return $Languages;
	}

	/**
	 *
	 */
	public function getUserConfSelectedLanguages($BeUserId) {

			// set configuration
		$name = 'SelectedLanguages';

			// get value
		return $this->getUserConf($name, $BeUserId);

	}

	/**
	 *
	 */
	public function getUserConfShowColumnLabel($BeUserId) {

			// set configuration
		$name = 'ShowColumnLabel';

			// get value
		return $this->getUserConf($name, $BeUserId);

	}

	/**
	 *
	 */
	public function getUserConfShowColumnDefault($BeUserId) {

			// set configuration
		$name = 'ShowColumnDefault';

			// get value
		return $this->getUserConf($name, $BeUserId);

	}

	/**
	 *
	 */
	public function getUserConfShowColumnPath($BeUserId) {

			// set configuration
		$name = 'ShowColumnPath';

			// get value
		return $this->getUserConf($name, $BeUserId);

	}

	/**
	 *
	 */
	public function getUserConfShowColumnLocation($BeUserId) {

			// set configuration
		$name = 'ShowColumnLocation';

			// get value
		return $this->getUserConf($name, $BeUserId);

	}

	/**
	 *
	 */
	public function getUserConf($name, $BeUserId) {
		if(isset($name, $BeUserId)) {

			$select = $this->db->exec_SELECTgetRows(
				$name,
				'tx_snowbabel_users',
				'deleted=0 AND be_users_uid=' . $BeUserId,
				'',
				'',
				'1'
			);

				// return value
			return $select[0][$name];

		}
		else {
			return NULL;
		}
	}

	/**
	 *
	 */
	public function getUserConfCheck($BeUserId) {

		if($BeUserId > 0) {
			$select = $GLOBALS['TYPO3_DB']->exec_SELECTgetRows(
				$select_fields = 'uid',
				$from_table = 'tx_snowbabel_users',
				$where_clause = 'deleted=0 AND be_users_uid=' . $BeUserId,
				$groupBy = '',
				$orderBy = '',
				$limit = '1'
			);

			if(!$select) {

					// insert database row
				$this->insertUserConfCheck($BeUserId);
			}
		}

	}

	/**
	 *
	 */
	public function getSystemLanguages() {

		// TODO:

		$Select = $this->db->exec_SELECTgetRows(
			'*',
			'sys_language',
			'',
			'',
			'uid'
		);

		if(!count($Select)) {

			return NULL;

		}
		else {
			if(is_array($Select)) {

				$Languages = array();

				foreach($Select as $Key => $Language) {


				}

			}
		}
	}

	/**
	 *
	 */
	public function getStaticLanguages($LanguageId = false, $ShowTranslatedLanguages=false) {

		$WhereClause = '';

			// search single language
		if(is_numeric($LanguageId)) {
			$WhereClause = 'uid='.$LanguageId;
		}

			// sort by english or local
		if(!$ShowTranslatedLanguages) {
			$OrderBy = 'lg_name_en';
		}
		else {
			$OrderBy = 'lg_name_local';
		}

		$Select = $this->db->exec_SELECTgetRows(
			'*',
			'static_languages',
			$WhereClause,
			'',
			$OrderBy,
			''
		);

		if(!count($Select)) {

			return NULL;

		}
		else {

			if(is_array($Select)) {

				$Languages = array();

				foreach($Select as $Key => $Language) {

					$Languages[$Key]['LanguageId'] = $Language['uid'];

						// check if languages should be displayed in english or local
					if(!$ShowTranslatedLanguages) {
						$Languages[$Key]['LanguageName'] = $Language['lg_name_en'];
					}
					else {
						$Languages[$Key]['LanguageName'] = $Language['lg_name_local'];
					}

					$Languages[$Key]['LanguageNameEn'] = $Language['lg_name_en'];
					$Languages[$Key]['LanguageNameLocal'] = $Language['lg_name_local'];
					$Languages[$Key]['LanguageKey'] = $Language['lg_typo3'] ? $Language['lg_typo3'] : strtolower($Language['lg_iso_2']);

				}

				if($LanguageId) return $Languages[$Key];

				return $Languages;
			}

			else {
				return NULL;
			}

		}

	}

	/**
	 *
	 */
	public function getCachedExtensions() {

		$Select = $this->db->exec_SELECTgetRows(
			'crdate,ExtensionKey',
			'tx_snowbabel_cache_extensions',
			'',
			'',
			'ExtensionKey',
			''
		);

		if(!count($Select)) {

			return NULL;

		}
		else {

			if(is_array($Select)) {

				return $Select;

			}
			else {
				return NULL;
			}
		}

	}

	/**
	 *
	 */
	public function getCachedExtensionData($ExtensionKey) {

		$Select = $this->db->exec_SELECTgetRows(
			'*',
			'tx_snowbabel_cache_extensions',
			'ExtensionKey=\'' . $ExtensionKey . '\' AND ExtensionLocation != \'\'',
			'',
			'',
			'1'
		);

		if(!count($Select)) {

			return NULL;

		}
		else {

			if(is_array($Select)) {

				return $Select;

			}
			else {
				return NULL;
			}
		}

	}

	/**
	 *
	 */
	public function getCachedFiles($ExtensionKey) {

		$Select = $this->db->exec_SELECTgetRows(
			'*',
			'tx_snowbabel_cache_files',
			'ExtensionKey=\'' . $ExtensionKey . '\'',
			'',
			'',
			''
		);

		if(!count($Select)) {

			return NULL;

		}
		else {

			if(is_array($Select)) {

				return $Select;

			}
			else {
				return NULL;
			}
		}

	}

	/**
	 *
	 */
	public function getCachedLabels($ExtensionKey) {

		$Select = $this->db->exec_SELECTgetRows(
			'*',
			'tx_snowbabel_cache_labels',
			'LabelExtension=\'' . $ExtensionKey . '\'',
			'',
			'',
			''
		);

		if(!count($Select)) {

			return NULL;

		}
		else {

			if(is_array($Select)) {

				return $Select;

			}
			else {
				return NULL;
			}
		}

	}

	/**
	 *
	 */
	public function getCachedTranslations($ExtensionKey) {

		$Select = $this->db->exec_SELECTgetRows(
			'*',
			'tx_snowbabel_cache_labeltranslations',
			'LabelExtension=\'' . $ExtensionKey . '\'',
			'',
			'',
			''
		);

		if(!count($Select)) {

			return NULL;

		}
		else {

			if(is_array($Select)) {

				return $Select;

			}
			else {
				return NULL;
			}
		}

	}

///////////////////////////////////////////////////////
// update db - set
///////////////////////////////////////////////////////

	/**
	 *
	 */
	public function setUserConf($Name, $Value, $BeUserId) {
		$this->db->exec_UPDATEquery(
			$table = 'tx_snowbabel_users',
			$where_clause = 'deleted=0 AND be_users_uid=' . $BeUserId,
			$fields_values = array(
				'tstamp'=>time(),
				$Name => $Value
			)
		);
	}

	/**
	 *
	 *
	 */
	public function updateCachedExtensionData($ExtensionData) {
		$this->db->exec_UPDATEquery(
			$table = 'tx_snowbabel_cache_extensions',
			$where_clause = 'ExtensionKey=\'' . $ExtensionData['ExtensionKey'] . '\'',
			$fields_values = array(
				'tstamp'=>time(),
				'ExtensionCategory'		=> $ExtensionData['ExtensionCategory'],
				'ExtensionTitle'		=> $ExtensionData['ExtensionTitle'],
				'ExtensionDescription'	=> $ExtensionData['ExtensionDescription'],
				'ExtensionIcon'			=> $ExtensionData['ExtensionIcon'],
				'ExtensionCss'			=> $ExtensionData['ExtensionCss'],
				'ExtensionLocation'		=> $ExtensionData['ExtensionLocation'],
				'ExtensionPath'			=> $ExtensionData['ExtensionPath'],
			)
		);
	}

	/**
	 *
	 */
	public function updateCachedTranslation($LabelExtension, $LabelPath, $LabelLocation, $LabelTranslationLanguage, $LabelTranslationName, $LabelTranslationValue) {

		$this->db->exec_UPDATEquery(
			$table = 'tx_snowbabel_cache_labeltranslations',
			$where_clause = 'LabelExtension=\'' . $LabelExtension . ' AND LabelPath=\'' . $LabelPath . '\' AND LabelLocation=\'' . $LabelLocation . '\'' .
				' AND LabelTranslationLanguage=\'' . $LabelTranslationLanguage . '\' AND LabelTranslationName=\'' . $LabelTranslationName . '\'',
			$fields_values = array(
				'tstamp'=>time(),
				'LabelTranslationValue'		=> $LabelTranslationValue
			)
		);

	}

///////////////////////////////////////////////////////
// insert db - insert
///////////////////////////////////////////////////////

	/**
	 *
	 */
	public function insertUserConfCheck($BeUserId) {

		$insert = $this->db->exec_INSERTquery(
			$table = 'tx_snowbabel_users',
			$fields_values = array(
				'tstamp'		=> time(),
				'crdate'		=> time(),
				'be_users_uid'	=> $BeUserId
			)
		);

	}

	/**
	 *
	 */
	public function insertCachedExtensions($Extensions) {

		if(is_array($Extensions) && count($Extensions) > 0) {

			foreach($Extensions as $Extension) {

				$insert = $this->db->exec_INSERTquery(
					$table = 'tx_snowbabel_cache_extensions',
					$fields_values = array(
						'tstamp'		=> time(),
						'crdate'		=> time(),
						'ExtensionKey'	=> $Extension
					)
				);

			}

		}

	}

	/**
	 *
	 */
	public function insertCachedFiles($Files, $ExtensionKey) {

		if(is_array($Files) && count($Files) > 0) {

			foreach($Files as $File) {

				$insert = $this->db->exec_INSERTquery(
					$table = 'tx_snowbabel_cache_files',
					$fields_values = array(
						'tstamp'		=> time(),
						'crdate'		=> time(),
						'ExtensionKey'	=> $ExtensionKey,
						'FilePath'		=> $File['FilePath'],
						'FileKey'		=> $File['FileKey'],
						'FileLocation'	=> $File['FileLocation'],
					)
				);

			}

		}

	}

	/**
	 *
	 */
	public function insertCachedLabels($Labels) {

		if(is_array($Labels) && count($Labels) > 0) {

			$table = 'tx_snowbabel_cache_labels';
			$Rows = array();

			foreach($Labels as $Label) {

				if(version_compare(TYPO3_version, '4.4.0', '<')) {

						// multipeRows supported since 4.4
					$insert = $this->db->exec_INSERTquery(
						$table,
						$fields_values = array(
							'tstamp'		=> time(),
							'crdate'		=> time(),
							'LabelName'	=> $Label['LabelName'],
							'LabelDefault'		=> $Label['LabelDefault'],
							'LabelPath'		=> $Label['LabelPath'],
							'LabelLocation'		=> $Label['LabelLocation'],
							'LabelExtension'	=> $Label['LabelExtension'],
						)
					);

				}
				else {

					array_push($Rows, array(
						time(),
						time(),
						$Label['LabelName'],
						$Label['LabelDefault'],
						$Label['LabelPath'],
						$Label['LabelLocation'],
						$Label['LabelExtension'],
					));

				}

			}

				// Do Insert All At Once - Supported Since 4.4
			if(version_compare(TYPO3_version, '4.3.99', '>')) {
				$insert = $this->db->exec_INSERTmultipleRows(
					$table,
					$fields = array(
						'tstamp',
						'crdate',
						'LabelName',
						'LabelDefault',
						'LabelPath',
						'LabelLocation',
						'LabelExtension'
					),
					$Rows
				);
			}

		}

	}

	/**
	 *
	 */
	public function insertCachedTranslations($Translations) {

		if(is_array($Translations) && count($Translations) > 0) {

			$table = 'tx_snowbabel_cache_labeltranslations';
			$Rows = array();

			foreach($Translations as $Translation) {

				if(version_compare(TYPO3_version, '4.4.0', '<')) {

						// multipeRows supported since 4.4
					$insert = $this->db->exec_INSERTquery(
						$table,
						$fields_values = array(
							'tstamp'		=> time(),
							'crdate'		=> time(),
							'LabelTranslationValue'	=> $Translation['LabelTranslationValue'],
							'LabelTranslationName'		=> $Translation['LabelTranslationName'],
							'LabelTranslationLanguage'		=> $Translation['LabelTranslationLanguage'],
							'LabelPath'		=> $Translation['LabelPath'],
							'LabelLocation'		=> $Translation['LabelLocation'],
							'LabelExtension'		=> $Translation['LabelExtension'],
						)
					);

				}
				else {

					array_push($Rows, array(
						time(),
						time(),
						$Translation['LabelTranslationValue'],
						$Translation['LabelTranslationName'],
						$Translation['LabelTranslationLanguage'],
						$Translation['LabelPath'],
						$Translation['LabelLocation'],
						$Translation['LabelExtension'],
					));

				}

			}

				// Do Insert All At Once - Supported Since 4.4
			if(version_compare(TYPO3_version, '4.3.99', '>')) {
				$insert = $this->db->exec_INSERTmultipleRows(
					$table,
					$fields = array(
						'tstamp',
						'crdate',
						'LabelTranslationValue',
						'LabelTranslationName',
						'LabelTranslationLanguage',
						'LabelPath',
						'LabelLocation',
						'LabelExtension'
					),
					$Rows
				);
			}

		}

	}

///////////////////////////////////////////////////////
// delete db - delete
///////////////////////////////////////////////////////

	/**
	 *
	 */
	public function deleteCachedExtensions() {

		$delete = $this->db->exec_DELETEquery(
			$table = 'tx_snowbabel_cache_extensions',
			$where = ''
		);

	}

	/**
	 *
	 */
	public function deleteCachedFiles($ExtensionKey) {

		$delete = $this->db->exec_DELETEquery(
			$table = 'tx_snowbabel_cache_files',
			$where = 'ExtensionKey=\'' . $ExtensionKey . '\''
		);

	}

	/**
	 *
	 */
	public function deleteCachedLabels($ExtensionKey) {

		$delete = $this->db->exec_DELETEquery(
			$table = 'tx_snowbabel_cache_labels',
			$where = 'LabelExtension=\'' . $ExtensionKey . '\''
		);

	}

	/**
	 *
	 */
	public function deleteCachedTranslations($ExtensionKey) {

		$delete = $this->db->exec_DELETEquery(
			$table = 'tx_snowbabel_cache_labeltranslations',
			$where = 'LabelExtension=\'' . $ExtensionKey . '\''
		);

	}

	public function deleteCachedTranslation($LabelExtension, $LabelPath, $LabelLocation, $LabelTranslationLanguage, $LabelTranslationName) {

		$delete = $this->db->exec_DELETEquery(
			$table = 'tx_snowbabel_cache_labeltranslations',
			$where = 'LabelExtension=\'' . $LabelExtension . ' AND LabelPath=\'' . $LabelPath . '\'' . ' AND LabelLocation=\'' . $LabelLocation . '\'' .
			'\' AND LabelTranslationLanguage=\'' . $LabelTranslationLanguage . '\' AND LabelTranslationName=\'' . $LabelTranslationName . '\''
		);

	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/snowbabel/Classes/Db/class.tx_snowbabel_db.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/snowbabel/Classes/Db/class.tx_snowbabel_db.php']);
}

?>