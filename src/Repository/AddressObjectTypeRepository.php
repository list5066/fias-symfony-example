<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\AddressObjectType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AddressObjectType|null find($id, $lockMode = null, $lockVersion = null)
 * @method AddressObjectType|null findOneBy(array $criteria, array $orderBy = null)
 * @method AddressObjectType[]    findAll()
 * @method AddressObjectType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AddressObjectTypeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AddressObjectType::class);
    }
}
