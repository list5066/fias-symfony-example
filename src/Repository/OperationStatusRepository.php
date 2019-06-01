<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\OperationStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method OperationStatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method OperationStatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method OperationStatus[]    findAll()
 * @method OperationStatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OperationStatusRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, OperationStatus::class);
    }
}
