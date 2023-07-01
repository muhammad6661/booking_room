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

    #[ORM\OneToOne(inversedBy: 'bookingRoom')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Room $room = null;
    #[ORM\ManyToOne(inversedBy: 'bookingRooms')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $date_from = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $date_to = null;
}