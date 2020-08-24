<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\NormativeDocumentType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method NormativeDocumentType|null find($id, $lockMode = null, $lockVersion = null)
 * @method NormativeDocumentType|null findOneBy(array $criteria, array $orderBy = null)
 * @method NormativeDocumentType[]    findAll()
 * @method NormativeDocumentType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NormativeDocumentTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NormativeDocumentType::class);
    }
}
