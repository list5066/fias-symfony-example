<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\CenterStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CenterStatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method CenterStatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method CenterStatus[]    findAll()
 * @method CenterStatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CenterStatusRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CenterStatus::class);
    }
}
