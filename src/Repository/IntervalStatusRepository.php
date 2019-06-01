<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\IntervalStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method IntervalStatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method IntervalStatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method IntervalStatus[]    findAll()
 * @method IntervalStatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IntervalStatusRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, IntervalStatus::class);
    }
}
