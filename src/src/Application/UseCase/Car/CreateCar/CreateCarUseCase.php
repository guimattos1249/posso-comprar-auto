<?php

namespace App\Application\UseCase\Car\CreateCar;

use App\DTO\CarDTO;
use App\Mapper\CarMapper;
use App\Domain\Repository\CarRepositoryInterface;

class CreateCarUseCase implements CreateCarUseCaseInterface
{
  public function __construct(
    private readonly CarRepositoryInterface $carRepository,
    private readonly CarMapper $carMapper
  ) {}

  public function execute(CarDTO $dto): void
  {
    $car = $this->carMapper->mapToEntity($dto);
    $this->carRepository->save($car);
  }
}
