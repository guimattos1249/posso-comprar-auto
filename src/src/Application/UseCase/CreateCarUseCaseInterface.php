<?php

namespace App\Application\UseCase;

use App\DTO\CarDTO;

interface CreateCarUseCaseInterface
{
  public function execute(CarDTO $dto): void;
}
