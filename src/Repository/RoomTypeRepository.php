<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\RoomType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method RoomType|null find($id, $lockMode = null, $lockVersion = null)
 * @method RoomType|null findOneBy(array $criteria, array $orderBy = null)
 * @method RoomType[]    findAll()
 * @method RoomType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RoomTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RoomType::class);
    }
}
