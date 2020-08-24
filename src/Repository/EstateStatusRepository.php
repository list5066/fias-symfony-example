<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\EstateStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method EstateStatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method EstateStatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method EstateStatus[]    findAll()
 * @method EstateStatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EstateStatusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EstateStatus::class);
    }
}
