<?php

namespace App\Models\Repository;

use App\Core\BaseRepository;
use App\Models\Entity\BookingRoom;
use App\Models\Entity\Room;


class RoomRepository  extends BaseRepository
{
    public string $entityName;

    public function __construct()
    {
        parent::__construct();
        $this->entityName = Room::class;
    }

    public function getRooms()
    {
        $repo = $this->doctrine->em->getRepository($this->entityName);

        return $repo->findBy([], ['created_at' => 'DESC']);
    }
}