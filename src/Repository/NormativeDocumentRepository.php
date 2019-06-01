<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\NormativeDocument;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method NormativeDocument|null find($id, $lockMode = null, $lockVersion = null)
 * @method NormativeDocument|null findOneBy(array $criteria, array $orderBy = null)
 * @method NormativeDocument[]    findAll()
 * @method NormativeDocument[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NormativeDocumentRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, NormativeDocument::class);
    }
}
