<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NormativeDocumentTypeRepository")
 * @ApiResource(
 *     collectionOperations={"get"},
 *     itemOperations={"get"}
 * )
 */
class NormativeDocumentType extends \Liquetsoft\Fias\Symfony\LiquetsoftFiasBundle\Entity\NormativeDocumentType
{
}
