<?php

namespace App\Service;

use App\Entity\Car;
use Doctrine\ORM\EntityManagerInterface;

class CarService
{
	private EntityManagerInterface $entityManager;

	// Injeção de dependência via construtor
	public function __construct(EntityManagerInterface $entityManager)
	{
		$this->entityManager = $entityManager;
	}

	public function save(Car $car): void
	{
		$this->entityManager->persist($car);
		$this->entityManager->flush();
	}
}
