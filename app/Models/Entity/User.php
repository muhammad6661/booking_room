<?php

namespace  App\Models\Entity;

use App\Models\Entity\Traits\AutoCreatedAtTrait;
use App\Models\Entity\Traits\AutoUpdatedAtTrait;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
#[ORM\Entity]
#[ORM\Table(name: 'users')]
class User
{
    use AutoCreatedAtTrait, AutoUpdatedAtTrait;
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $fio = null;


    #[ORM\Column(length: 255, nullable: true)]
    private ?string $phone = null;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Room::class)]
    private Collection $rooms;
    #[ORM\OneToMany(mappedBy: 'user', targetEntity: BookingRoom::class)]
    private Collection $bookingRooms;

    public function __construct()
    {
        $this->rooms = new ArrayCollection();
        $this->bookingRooms = new ArrayCollection();
    }


    /**
     * @param string $fio
     * @return void
     */
    public function setFio(string $fio): void
    {
        $this->fio = $fio;
    }

    public function getFio(): ?string
    {
        return $this->fio;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPassword($password): void
    {
        $this->password = $password;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }


    public function getRole(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        return array_unique($roles);
    }

    public function setRoles(mixed $roles): self
    {
        if (is_string($roles)) {
            $roles = (array)$roles;
        }

        $this->roles = $roles;

        return $this;
    }

    /**
     *  @return Collection|BookingRoom[]
     */
    public function getBookingRooms(): Collection
    {
        return $this->bookingRooms;
    }


}