<?php

namespace App\Models\Repository;

use App\Core\BaseRepository;
use App\Core\Doctrine;
use App\Models\Entity\BookingRoom;
use App\Models\Entity\Room;
use DateTimeImmutable;
use Doctrine\ORM\Exception\ORMException;
use Doctrine\ORM\OptimisticLockException;

class BookingRoomRepository extends BaseRepository
{
    public string $entityName;

    public function __construct()
    {
        parent::__construct();
        $this->entityName = BookingRoom::class;
    }


    public function checkRoom(Room $room, DateTimeImmutable $dateFrom, DateTimeImmutable $dateTo)
    {

        $query = $this->doctrine->em->getRepository($this->entityName)->createQueryBuilder('br')
            ->where("br.room = :room")
            ->andWhere("
             (br.date_from >= :date_from and br.date_from <= :date_to) or
             (br.date_to >= :date_from and br.date_to <= :date_to) or
             (br.date_from <= :date_from and br.date_to >= :date_to)
                ")
            ->setParameter("room", $room)
            ->setParameter('date_from', $dateFrom)
            ->setParameter('date_to', $dateTo)
            ->setFirstResult(0)
            ->getQuery();

        return $query->getOneOrNullResult();

    }

    /**
     * @throws OptimisticLockException
     * @throws ORMException
     */
    public function create(BookingRoom $bookingRoom)
    {
        $this->doctrine->em->persist($bookingRoom);
        $this->doctrine->em->flush();
        return $bookingRoom;
    }

}