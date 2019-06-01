<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Сущность, которая хранит текущую версию ФИАС.
 *
 * @ORM\Entity
 */
class FiasVersion extends \Liquetsoft\Fias\Symfony\LiquetsoftFiasBundle\Entity\FiasVersion
{
}
