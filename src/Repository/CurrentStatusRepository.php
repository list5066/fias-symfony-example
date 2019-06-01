<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\CurrentStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CurrentStatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method CurrentStatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method CurrentStatus[]    findAll()
 * @method CurrentStatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CurrentStatusRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CurrentStatus::class);
    }
}
