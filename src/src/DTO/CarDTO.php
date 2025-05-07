<?php

namespace App\DTO;

class CarDTO
{
	public string $model;
	public string $brand;
	public string $version;
	public int $year;
	public float $fipe_price;

	public function __construct(string $model = '', string $brand = '', string $version = '', int $year = 0, float $fipe_price = 0.0)
	{
		$this->model = $model;
		$this->brand = $brand;
		$this->version = $version;
		$this->year = $year;
		$this->fipe_price = $fipe_price;
	}
}
