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
class tx_snowbabel_ExtDirectServer {

	/**
	 *
	 */
	private $confObj;

	/**
	 *
	 */
	private $extObj;

	/**
	 *
	 */
	private $labelsObj;

	/**
	 *
	 */
	private $langObj;

	/**
	 *
	 */
	private $colObj;

	/**
	 *
	 */
	private $debug;

	/**
	 *
	 */
	public function getExtensionMenu($extjsParams) {

			// get configuration object
		$this->getConfigurationObject($extjsParams);

			// get extension object
		$this->getExtensionsObject();

			// get all extensions for this user
		$allExtensions = $this->extObj->getExtensions($OutputData = true);

		return $allExtensions;
	}

	/**
	 *
	 */
	public function getLanguageSelection($extjsParams) {

			// get configuration object
		$this->getConfigurationObject($extjsParams);

			// get language object
		$this->getLanguageObject();

			// get available languages
		$Languages = $this->langObj->getLanguages();

		return $Languages;
	}

	/**
	 *
	 */
	public function getColumnSelection($extjsParams) {

			// get configuration object
		$this->getConfigurationObject($extjsParams);

			// get column object
		$this->getColumnObject();

			// get available columns
		$Columns = $this->colObj->getColumns();

		return $Columns;
	}

	/**
	 *
	 */
	public function getListView($extjsParams) {

			// get configuration object
		$this->getConfigurationObject($extjsParams);

			// Get Label Object
		$this->getLabelsObject();

            // Do Global Search
        if($extjsParams->SearchGlobal) {

				// Set Metadata For Extjs
			$this->labelsObj->setMetaData();

				// Get Labels From Global Search
			$Labels = $this->labelsObj->getSearchGlobal();

        }
            // Do Extension Search
        elseif(!empty($extjsParams->SearchString) && !empty($extjsParams->ExtensionKey)) {

				// Set Metadata For Extjs
			$this->labelsObj->setMetaData();

				// Get Labels From Extension Search
			$Labels = $this->labelsObj->getSearchExtension();

        }
            // Show Extension Labels
		elseif(!empty($extjsParams->ExtensionKey)) {

				// Set Metadata For Extjs
			$this->labelsObj->setMetaData();

				// Get Labels From Selected Extension
			$Labels = $this->labelsObj->getLabels();
		}
		else {
			$Labels = NULL;
		}

		return $Labels;
	}

	/**
	 *
	 */
	public function ActionController($extjsParams) {
			// get configuration object
		$this->getConfigurationObject($extjsParams);

		if($extjsParams->ActionKey == 'ListView') {
				// Get Label Object
			$this->getLabelsObject();

				// Update Translation
			$this->labelsObj->updateTranslation();

		}

		return true;
	}

	/**
	 *
	 */
	public function getGeneralSettings() {

		$extjsParams = array();

			// get configuration object
		$this->getConfigurationObject($extjsParams);

			// Set Values
		$FormData['success'] = true;

			// Get All Values From Configuration
		$FormData['data']['LocalExtensionPath']			= $this->confObj->getApplicationConfiguration('LocalExtensionPath');
		$FormData['data']['SystemExtensionPath']		= $this->confObj->getApplicationConfiguration('SystemExtensionPath');
		$FormData['data']['GlobalExtensionPath']		= $this->confObj->getApplicationConfiguration('GlobalExtensionPath');

		$FormData['data']['ShowLocalExtensions']		= $this->confObj->getApplicationConfiguration('ShowLocalExtensions') ? 1 : 0;
		$FormData['data']['ShowSystemExtension']		= $this->confObj->getApplicationConfiguration('ShowSystemExtension') ? 1 : 0;
		$FormData['data']['ShowGlobalExtensions']		= $this->confObj->getApplicationConfiguration('ShowGlobalExtensions') ? 1 : 0;

		$FormData['data']['ShowOnlyLoadedExtensions']	= $this->confObj->getApplicationConfiguration('ShowOnlyLoadedExtensions') ? 1 : 0;
		$FormData['data']['ShowTranslatedLanguages']	= $this->confObj->getApplicationConfiguration('ShowTranslatedLanguages') ? 1 : 0;

		$FormData['data']['BlacklistedExtensions']		= $this->confObj->getApplicationConfiguration('BlacklistedExtensions');
		$FormData['data']['BlacklistedCategories']		= implode(',', $this->confObj->getApplicationConfiguration('BlacklistedCategories'));

		$FormData['data']['XmlFilter']					= $this->confObj->getApplicationConfiguration('XmlFilter') ? 1 : 0;

		$FormData['data']['AutoBackupEditing']			= $this->confObj->getApplicationConfiguration('AutoBackupEditing') ? 1 : 0;
		$FormData['data']['AutoBackupCronjob']			= $this->confObj->getApplicationConfiguration('AutoBackupCronjob') ? 1 : 0;

		$FormData['data']['CopyDefaultLanguage']		= $this->confObj->getApplicationConfiguration('CopyDefaultLanguage') ? 1 : 0;

		return $FormData;

	}

	/**
	 * @formHandler
	 */
	public function submitGeneralSettings($extjsParams) {

			// get configuration object
		$this->getConfigurationObject($extjsParams);

			// save form
		$this->confObj->saveFormSettings();

		return array('success' => true);

	}

	/**
	 *
	 */
	public function getGeneralSettingsLanguages($extjsParams) {

		$extjsParams	= array();

			// Get Configuration Object
		$this->getConfigurationObject($extjsParams);

			// Set Values
		$Languages = $this->confObj->getLanguages(true);

		return $Languages;

	}

	/**
	 *
	 */
	public function getGeneralSettingsLanguagesAdded($extjsParams) {

		$extjsParams	= array();

			// Get Configuration Object
		$this->getConfigurationObject($extjsParams);

			// Set Values
		$Languages = $this->confObj->getApplicationConfiguration('AvailableLanguages');

		return $Languages;

	}

	/**
	 *
	 */
	private function getConfigurationObject($extjsParams) {

		if (!is_object($this->confObj) && !($this->confObj instanceof tx_snowbabel_Configuration)) {
			$this->confObj = t3lib_div::makeInstance('tx_snowbabel_Configuration', $extjsParams);

			$this->debug = $this->confObj->debug;
		}

	}

	/**
	 *
	 */
	private function getExtensionsObject() {
		if (!is_object($this->extObj) && !($this->extObj instanceof tx_snowbabel_extensions)) {
			$this->extObj = t3lib_div::makeInstance('tx_snowbabel_extensions', $this->confObj);
		}
	}

	/**
	 *
	 */
	private function getLabelsObject() {
		if (!is_object($this->labelsObj) && !($this->labelsObj instanceof tx_snowbabel_labels)) {
			$this->labelsObj = t3lib_div::makeInstance('tx_snowbabel_labels', $this->confObj);
		}
	}

	/**
	 *
	 */
	private function getLanguageObject() {
		if (!is_object($this->langObj) && !($this->langObj instanceof tx_snowbabel_languages)) {
			$this->langObj = t3lib_div::makeInstance('tx_snowbabel_languages', $this->confObj);
		}
	}

	/**
	 *
	 */
	private function getColumnObject() {
		if (!is_object($this->colObj) && !($this->colObj instanceof tx_snowbabel_columns)) {
			$this->colObj = t3lib_div::makeInstance('tx_snowbabel_columns', $this->confObj);
		}
	}

}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/snowbabel/Classes/Connection/class.tx_snowbabel_extdirectserver.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/snowbabel/Classes/Connection/class.tx_snowbabel_extdirectserver.php']);
}

?>