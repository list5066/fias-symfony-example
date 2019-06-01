<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Статусы.
 *
 * @ORM\Entity(repositoryClass="App\Repository\ActualStatusRepository")
 */
class ActualStatus extends \Liquetsoft\Fias\Symfony\LiquetsoftFiasBundle\Entity\ActualStatus
{
}
