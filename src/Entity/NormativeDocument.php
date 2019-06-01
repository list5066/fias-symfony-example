<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Нормативные документы.
 *
 * @ORM\Entity(repositoryClass="App\Repository\NormativeDocumentRepository")
 */
class NormativeDocument extends \Liquetsoft\Fias\Symfony\LiquetsoftFiasBundle\Entity\NormativeDocument
{
}
