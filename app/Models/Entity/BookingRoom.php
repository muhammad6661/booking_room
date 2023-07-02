<?php

namespace App\Models\Entity;

use App\Models\Entity\Traits\AutoCreatedAtTrait;
use App\Models\Entity\Traits\AutoUpdatedAtTrait;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'booking_rooms')]
class BookingRoom
{
    use AutoCreatedAtTrait, AutoUpdatedAtTrait;
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Room::class, inversedBy: 'bookingRooms')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Room $room = null;
    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'bookingRooms')]
    #[ORM\JoinColumn(nullable: false)]
    private  $user = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $date_from = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $date_to = null;

    /**
     * @return Room|null
     */
    public function getRoom(): ?Room
    {
        return $this->room;
    }

    /**
     * @param Room|null $room
     * @return $this
     */
    public function setRoom(?Room $room): self
    {
        $this->room = $room;

        return $this;
    }

    /**
     * @return User|null
     */
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * @param User|null
     * @return $this
     */
    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getDateFrom(): ?\DateTimeImmutable
    {
        return $this->date_from;
    }

    /**
     * @param \DateTimeImmutable|null $date_from
     */
    public function setDateFrom(?\DateTimeImmutable $date_from): void
    {
        $this->date_from = $date_from;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getDateTo(): ?\DateTimeImmutable
    {
        return $this->date_to;
    }

    /**
     * @param \DateTimeImmutable|null $date_to
     */
    public function setDateTo(?\DateTimeImmutable $date_to): void
    {
        $this->date_to = $date_to;
    }



}