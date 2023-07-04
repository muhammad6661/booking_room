<?php

namespace App\Models\Entity\Traits;

use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

trait AutoUpdatedAtTrait
{
    /**
     * @Gedmo\Timestampable(on="update")
     */
    #[ORM\Column]
    private ?DateTimeImmutable $updated_at = null;

    /**
     * @return DateTimeImmutable|null
     */
    public function getUpdatedAt(): ?DateTimeImmutable
    {
        return $this->updated_at;
    }

    /**
     * @param DateTimeImmutable $updated_at
     * @return void
     */
    public function setUpdatedAtValue(DateTimeImmutable $updated_at): void
    {
        $this->updated_at = $updated_at;
    }

}