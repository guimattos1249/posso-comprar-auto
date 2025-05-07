<?php

namespace App\Application\UseCase\Car\CreateCar;

use App\DTO\CarDTO;

interface CreateCarUseCaseInterface
{
  public function execute(CarDTO $dto): void;
}
