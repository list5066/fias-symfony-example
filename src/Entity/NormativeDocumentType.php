<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Типы нормативных документов.
 *
 * @ORM\Entity(repositoryClass="App\Repository\NormativeDocumentTypeRepository")
 */
class NormativeDocumentType extends \Liquetsoft\Fias\Symfony\LiquetsoftFiasBundle\Entity\NormativeDocumentType
{
}
