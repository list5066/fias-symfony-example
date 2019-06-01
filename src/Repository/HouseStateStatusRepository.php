<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\HouseStateStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method HouseStateStatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method HouseStateStatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method HouseStateStatus[]    findAll()
 * @method HouseStateStatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HouseStateStatusRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, HouseStateStatus::class);
    }
}
