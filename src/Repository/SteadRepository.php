<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Stead;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Stead|null find($id, $lockMode = null, $lockVersion = null)
 * @method Stead|null findOneBy(array $criteria, array $orderBy = null)
 * @method Stead[]    findAll()
 * @method Stead[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SteadRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Stead::class);
    }
}
