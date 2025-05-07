<?php

namespace App\Application\UseCase\Car\DeleteCar;

use App\DTO\CarDTO;

interface DeleteCarUseCaseInterface
{
	public function execute(CarDTO $dto): void;
}
