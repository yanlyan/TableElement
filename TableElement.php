<?php

class TableElement {
	
	private $objData;
	private $tableClass;
	private $tableCaption;
	private $tableAttr;
	public $strTable;


	function TableElement(){
		$this->strTable = "";
		$this->tableClass = array("table");
		$this->tableAttr = array();
		$this->tableCaption = "";
	}

	public function getData(){
		return $this->objData;
	}

	public function setData($objData){
		$this->objData = $objData;
	}

	public function setTableClass($tableClass){
		$this->tableClass = array_merge($this->tableClass, $tableClass);
	}

	public function setTableAttr($tableAttr){
		$this->tableAttr = array_merge($this->tableAttr, $tableAttr);
	}

	public function setTableCaption($tableCaption){
		$this->tableCaption = $tableCaption;
	}

	public function generateTableTag(){
		$tableTag = "<table class='";
		foreach ($this->tableClass as $class) {
			$tableTag .= $class." ";
		}
		$tableTag .= "' ";
		foreach ($this->tableAttr as $key => $attr) {
			$tableTag .= $key."='".$attr."'";
		}
		$tableTag .= " >";

		return $tableTag;
	}

	public function generateTable(){
		$allData = $this->objData;
		$strTable = $this->generateTableTag();
		
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

		if($this->tableCaption != ""){
			$wrappedTable = $this->wrapWithPanel($strTable);
			echo $wrappedTable;
		}else{
			echo $strTable;
		}
	}

	public function wrapWithPanel($strTable){
		$wrapper = '<div class="panel panel-default">';
		$wrapper .= '<div class="panel-heading">'.$this->tableCaption.'</div>';			
		$wrapper .= $strTable;
		$wrapper .= '</div>';
		return $wrapper;
	}
}