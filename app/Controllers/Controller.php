<?php

namespace App\Controllers;

class Controller {
	/**
	 * @var string
	 */
	private $baseDir;

	public function __construct($baseDir = '') {
		$this->baseDir = $baseDir;
	}

	public function index() {
		require $this->baseDir.'/views/index.php';
	}

	/**
	 * @return string
	 */
	public function getBaseDir() {
		return $this->baseDir;
	}

	/**
	 * @param string $baseDir
	 */
	public function setBaseDir($baseDir) {
		$this->baseDir = $baseDir;
	}

public function createFestival($Musicfestival, $data) {
		return $Musicfestival->create($data);
	}

    /**
     * @param $Musicfestival
     * @param $id
     * @return mixed
     */
    public function deleteFestival($Musicfestival, $id) {
        return $Musicfestival->delete($id);
    }

	public function updateFestival($Musicfestival, $data) {
        return $Musicfestival->update($data);
    }
} 