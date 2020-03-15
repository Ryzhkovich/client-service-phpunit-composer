<?php

class ClientHTTP {

	public ?string $host = null;

	public ?string $method = null;

	public ?array $comment = null;

	public int $lastId = 1;

	public function __constructor($host, $method, $comment, $lastId) {
		
		$this->host = $host;

		$this->method = $method;

		$this->comment = $comment;

		$this->lastId = $lastId;

	}

	public function getLastId() {

		return $this->lastId;

	}

	public function setLastId($lastId) {

		$this->lastId = $lastId;

	}

	public function getHost() {

		return $this->host;

	}

	public function setHost($addr) {

		$this->host = $addr;

	}

	public function getMethod() {

		return $this->method;

	}

	public function setMethod($variant) {

		$this->method = $variant;

	}

	public function getComment() {

		return $this->comment;

	}

	public function setComment($comm) {

		$this->comment = $comm;

	}

	public static function getMethodHTTP($addr) {

		$host = 'http:/' . $addr . '/comments';
		$ch = curl_init($host);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_HEADER, false);

		$data = curl_exec($ch);

		if (curl_exec($ch) === false) {

		    return 'Ошибка curl: ' . curl_error($ch);

		}

		curl_close($ch);

		return $data;

	}

	public function postMethodHTTP($addr, $arr) {

		$host = 'http://' . $addr . '/comment';
		$ch = curl_init($host);

		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $arr); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_HEADER, false);

		$data = curl_exec($ch);

		if (curl_exec($ch) === false) {

		    return 'Ошибка curl: ' . curl_error($ch);

		}

		curl_close($ch);

		return $data;

	}

	public function putMethodHTTP($addr, $arr, $id) {

		$host = 'http://' . $addr . '/comment/' . $id;
		$ch = curl_init($host);

		curl_setopt($ch, CURLOPT_PUT, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_HEADER, false);

		$data = curl_exec($ch);

		if (curl_exec($ch) === false) {

		    return 'Ошибка curl: ' . curl_error($ch);

		}

		curl_close($ch);    
		 
		return $data;

	}
	
}