<?php

namespace App\Repository;

use App\Entity\Reservationrepas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Reservationrepas|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reservationrepas|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reservationrepas[]    findAll()
 * @method Reservationrepas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationrepasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservationrepas::class);
    }

    // /**
    //  * @return Reservationrepas[] Returns an array of Reservationrepas objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Reservationrepas
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
