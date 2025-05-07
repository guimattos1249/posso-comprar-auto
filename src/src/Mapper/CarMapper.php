<?php

namespace App\Mapper;

use App\DTO\CarDTO;
use App\Domain\Entity\Car;

class CarMapper
{
	public function mapToEntity(CarDTO $carDTO): Car
	{
		$car = new Car();
		$car->setModel($carDTO->model);
		$car->setBrand($carDTO->brand);
		$car->setVersion($carDTO->version);
		$car->setYear($carDTO->year);
		$car->setFipePrice($carDTO->fipe_price);

		return $car;
	}

	public function mapToDTO(Car $car): CarDTO
	{
		return new CarDTO(
			$car->getModel(),
			$car->getBrand(),
			$car->getVersion(),
			$car->getYear(),
			$car->getFipePrice()
		);
	}
}
