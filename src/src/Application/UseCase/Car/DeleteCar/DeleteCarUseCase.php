<?php

namespace App\Application\UseCase\Car\DeleteCar;

use App\Domain\Repository\CarRepositoryInterface;
use App\DTO\CarDTO;
use App\Mapper\CarMapper;

class DeleteCarUseCase implements DeleteCarUseCaseInterface
{
	public function __construct(
		private readonly CarRepositoryInterface $carRepository,
		private readonly CarMapper $carMapper
	) {}

	public function execute(CarDTO $dto): void
	{
		$car = $this->carMapper->mapToEntity($dto);
		$this->carRepository->remove($car);
	}
}
