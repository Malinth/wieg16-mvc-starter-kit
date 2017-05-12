<?php

namespace App;

use PDO;

class Database {
	/**
	 * @var PDO
	 */
	private $pdo;

	public function __construct(PDO $pdo) {
		$this->pdo = $pdo;
	}


/* Här är en funktion som hämtar id från tabellerna */

	/**
	 * @param integer $id
	 * @return Model
	 */
	public function getById($table, $id) {
		$stm = $this->pdo->prepare('SELECT * FROM '.$table.' WHERE id = :id');
		$stm->bindParam(':id', $id);
		$success = $stm->execute();
		$row = $stm->fetch(PDO::FETCH_ASSOC);
		return ($success) ? $row : [];
	}

/* Här är en funktion som hämtar all data */

	public function getAll($table) {
		$stm = $this->pdo->prepare('SELECT * FROM '.$table);
		$success = $stm->execute();
		$rows = $stm->fetchAll(PDO::FETCH_ASSOC);
		return ($success) ? $rows : [];
	}

	/* Här är en funktion som gör att jag kan skapa en ny festival */

	public function create($table, $data) {
		$columns = array_keys($data);

		$columnSql = implode(',', $columns);
		'name,city,price';

		$bindingSql = ':'.implode(',:', $columns);
		':name,:city,:price';

		$sql = "INSERT INTO $table ($columnSql) VALUES ($bindingSql)";
		$stm = $this->pdo->prepare($sql);

		foreach ($data as $key => $value) {
			$stm->bindValue(':'.$key, $value);
		}
		$status = $stm->execute();

		return ($status) ? $this->pdo->lastInsertId() : false;
	}

/* Här är en funktion som gör att jag kan uppdatera informationen 

		public function update($table, $id, $data) {
		$columns = array_keys($data);

		$columns = array_map(function($item) {
		return $item.'=:'.$item;
		}, $columns);

		$bindingSql = implode(',:', $columns);


		$sql = "UPDATE $table SET $bindingSql WHERE `id` = :id";
		$stm = $this->pdo->prepare($sql);
		$data['id']= $id;
		
		
		foreach ($data as $key => $value) {
			$stm->bindValue(':'.$key, $value);
		}
		$status = $stm->execute();
		return $status;
		}
		*/

	public function update($table, $id, $data) {
        $keys = array_keys($data); //plockar ut nycklarna. Arraymap tar en array och tar element för element. Det som tas från array_map blir det nya värdet
        //columns före
        //['name', 'description'];
        $keys = array_map(function($item) { //för varje steg blir $item nästa steg. Första gången name, andra gången description
            return $item.'=:'.$item;
        }, $keys);
        //columns efter
        //['name=:name', 'description=:description'];
        $bindingSql = implode(',', $keys);  //implode: 'name=:name', 'description=:description'
		$sql = "UPDATE $table SET $bindingSql WHERE id = :id";
        $stm = $this->pdo->prepare($sql);
        $data['id'] = $id;
        foreach ($data as  $key => $value) {
            $stm->bindValue(':'.$key, $value);
        }
        $status = $stm->execute();
            return $status;
	}

/* Här är en funktion som gör att jag kan ta bort informationen */
/* För att "visa" att det finns information att hämta */
	  /**
     * @param $table
     * @param $id
     * @return bool
     */

	public function delete($table, $id) {
		$stm = $this->pdo->prepare('DELETE FROM '.$table.' WHERE id = :id');
		$stm->bindParam(':id', $id);
		$success = $stm->execute();
		return $success;
	}
}
