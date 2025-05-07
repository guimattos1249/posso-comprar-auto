<?php

namespace App\Application\UseCase;

use App\DTO\CarDTO;
use App\Mapper\CarMapper;
use Doctrine\ORM\EntityManagerInterface;

class CreateCarUseCase implements CreateCarUseCaseInterface
{
  public function __construct(
    private readonly EntityManagerInterface $entityManager,
    private readonly CarMapper $carMapper
  ) {}

  public function execute(CarDTO $dto): void
  {
    $car = $this->carMapper->mapToEntity($dto);
    $this->entityManager->persist($car);
    $this->entityManager->flush();
  }
}
