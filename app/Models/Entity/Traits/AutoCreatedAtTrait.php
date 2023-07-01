<?php

namespace App\Models\Entity\Traits;
use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

trait AutoCreatedAtTrait
{
    /**
     * @Gedmo\Timestampable(on="create")
     */
    #[ORM\Column]
    private  ?DateTimeImmutable $created_at = null;

    /**
     * @return DateTimeImmutable
     */
    public function  getCreatedAt(): DateTimeImmutable
    {
        return $this->created_at;
    }

    /**
     * @param DateTimeImmutable $created_at
     * @return void
     */
    public function setCreatedAt(\DateTimeImmutable $created_at): void
    {
        $this->$created_at = $created_at;
    }
}