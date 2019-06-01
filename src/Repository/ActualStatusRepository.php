<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\ActualStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ActualStatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method ActualStatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method ActualStatus[]    findAll()
 * @method ActualStatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActualStatusRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ActualStatus::class);
    }
}
