<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Земельные участки.
 *
 * @ORM\Entity(repositoryClass="App\Repository\SteadRepository")
 */
class Stead extends \Liquetsoft\Fias\Symfony\LiquetsoftFiasBundle\Entity\Stead
{
}
