<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\FiasVersion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FiasVersion|null find($id, $lockMode = null, $lockVersion = null)
 * @method FiasVersion|null findOneBy(array $criteria, array $orderBy = null)
 * @method FiasVersion[]    findAll()
 * @method FiasVersion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FiasVersionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FiasVersion::class);
    }
}
