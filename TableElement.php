<?php

class TableElement {
	
	private $objData;
	private $tableClass;

	public $strTable;


	function __construct(){
		$this->strTable = "";
	}

	public function getData(){
		return $this->objData;
	}

	public function setData($objData){
		$this->objData = $objData;
	}

	public function setTableClass($tableClass){
		$this->tableClass = $tableClass;
	}

	public function generateTable(){
		$allData = $this->objData;
		$strTable = (!empty($this->tableClass)) ? "<table class='".$this->tableClass."' >" : "<table>";
		
		/* Start : Create Table header */
		$strTable .= "<tr>";
		$arrKeys = array_keys(array_pop($allData));
		foreach ($arrKeys as $i => $key) {
			$strTable .= "<th>". $key ."</th>";
		}
		$strTable .= "</tr>";
		/* End : Create Table header */

		/* Start : Data Render*/
		foreach ($this->objData as $keyRow => $data) {
			$strTable .= "<tr>";
			foreach ($data as $keyCol => $datum) {
				$strTable .= "<td>";
				$strTable .= $datum;
				$strTable .= "</td>";	
			}
			$strTable .= "</tr>";
		}
		/* End : Data Render*/

		$strTable .= "</table>";
		echo $strTable;
	}
}