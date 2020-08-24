<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CurrentStatusRepository")
 * @ApiResource(
 *     collectionOperations={"get"},
 *     itemOperations={"get"}
 * )
 */
class CurrentStatus extends \Liquetsoft\Fias\Symfony\LiquetsoftFiasBundle\Entity\CurrentStatus
{
}
