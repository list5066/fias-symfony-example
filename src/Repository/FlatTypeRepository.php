<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\FlatType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method FlatType|null find($id, $lockMode = null, $lockVersion = null)
 * @method FlatType|null findOneBy(array $criteria, array $orderBy = null)
 * @method FlatType[]    findAll()
 * @method FlatType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FlatTypeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, FlatType::class);
    }
}
