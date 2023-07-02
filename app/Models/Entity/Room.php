<?php

namespace App\Models\Entity;

use App\Models\Entity\Traits\AutoCreatedAtTrait;
use App\Models\Entity\Traits\AutoUpdatedAtTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'rooms')]
class Room
{
    use AutoCreatedAtTrait, AutoUpdatedAtTrait;
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    private ?string $address = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $content = null;

    #[ORM\ManyToOne(inversedBy: 'rooms')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Office $office = null;

    #[ORM\OneToMany(mappedBy: 'room', targetEntity: BookingRoom::class)]
    private Collection $bookingRooms;

    public function __construct()
    {
        $this->bookingRooms = new ArrayCollection();
    }
    /**
     * @param $id
     * @return void
     */
    public function setId($id): void
    {
        $this->id = $id;
    }
    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param string $title
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $address
     * @return void
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @param string $content
     * @return void
     */
    public function setContetn(string $content): void
    {
        $this->content = $content;
    }
    /**
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @return Office|null
     */
    public function getOffice(): ?Office
    {
        return $this->office;
    }

    /**
     * @param Office|null $office
     * @return $this
     */
    public function setOffice(?Office $office): self
    {
        $this->office = $office;

        return $this;
    }

    /**
     * @return Collection<int, BookingRoom>
     */
    public function getBookingRoom(): Collection
    {
        return $this->bookingRooms;
    }


}