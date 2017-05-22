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

public function createFestival($MusicFestival, $data) {
		return $MusicFestival->create($data);
	}

    /**
     * @param $MusicFestival
     * @param $id
     * @return mixed
     */
    public function deleteFestival($MusicFestival, $id) {
        return $MusicFestival->delete($id);
    }

	public function updateFestival($MusicFestival, $data) {
        return $MusicFestival->update($data);
    }
} 