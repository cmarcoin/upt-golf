<?php

namespace App\Repository;

use App\Entity\PlayersGap;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PlayersGap|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlayersGap|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlayersGap[]    findAll()
 * @method PlayersGap[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlayersGapRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PlayersGap::class);
    }

    // /**
    //  * @return PlayersGap[] Returns an array of PlayersGap objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PlayersGap
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
