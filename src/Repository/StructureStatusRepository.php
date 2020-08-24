<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\StructureStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method StructureStatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method StructureStatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method StructureStatus[]    findAll()
 * @method StructureStatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StructureStatusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StructureStatus::class);
    }
}
