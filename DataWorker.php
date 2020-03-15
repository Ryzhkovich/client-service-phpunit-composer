<?php

class DataWorker() {
	
	private $data;

	public function __constructor($data) {
		
		$this->data = $data;

	}

	public function getData() {

		return $this->data;

	}

	public function setData($data) {

		$this->data = $data;

	}

	public static returnComments($data) {

		if (!is_array($data)) {

			$data = unserialize($data);

		}

		foreach ($data as $key => $value) {
			echo "<p>";
			echo $key . ' - ' . $value;
			echo "</p>";
			echo "<br />";
		}

	}

	public static changeComment($id, $name, $text) {

		$array = [];
		$array['id'] = $id;
		$array['name'] = $name;
		$array['text'] = $text;

		return $array;
		
	}		

}