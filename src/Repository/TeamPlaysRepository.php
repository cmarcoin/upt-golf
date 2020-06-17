<?php

namespace App\Repository;

use App\Entity\TeamPlays;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TeamPlays|null find($id, $lockMode = null, $lockVersion = null)
 * @method TeamPlays|null findOneBy(array $criteria, array $orderBy = null)
 * @method TeamPlays[]    findAll()
 * @method TeamPlays[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TeamPlaysRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TeamPlays::class);
    }

    // /**
    //  * @return TeamPlays[] Returns an array of TeamPlays objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TeamPlays
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
