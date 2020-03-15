<?php

class Comment {
	
	private int $id;

	private string $name;

	private string $text;

	public function __constructor($id, $name, $text) {

		$this->id = $id;

		$this->name = $name;

		$this->text = $text;

	}

	public function getId() {

		return $this->id;

	}

	public function setId($id) {

		$this->id = $id;

	}

	public function getName() {

		return $this->name;

	}

	public function setName($name) {

		$this->name = $name;

	}

	public function getText() {

		return $this->text;

	}

	public function setText($text) {

		$this->text = $text;

	}

}