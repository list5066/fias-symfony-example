<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NormativeDocumentRepository")
 * @ApiResource(
 *     collectionOperations={"get"},
 *     itemOperations={"get"}
 * )
 */
class NormativeDocument extends \Liquetsoft\Fias\Symfony\LiquetsoftFiasBundle\Entity\NormativeDocument
{
}
