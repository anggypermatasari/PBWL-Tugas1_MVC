<?php

namespace App\Core;

use Exception;
use PDO;
use DateTime;

date_default_timezone_set("Asia/Jakarta");

class Model
{

	protected object $db;

	public function __construct()
	{

		try {

			$this->db = new PDO("mysql:host=localhost;dbname=pln", "root", "");
		} catch (Exception $e) {
			die("error! " . $e->getMessage());
		}
	}

	public function select($stmt)
	{
		//Menampilkan satu data
		return $stmt->fetch();
	}

	public function selects($stmt)
	{
		//Menampilkan banyak data
		$data = [];

		while ($rows = $stmt->fetch()) {
			$data[] = $rows;
		}

		return $data;
	}
	public function getTimeNow()
    {
        $date    = new DateTime();
        $format  = "Y-m-d H:i:s";
        $timeNow = $date->format($format);

        return $timeNow;
    }
}
