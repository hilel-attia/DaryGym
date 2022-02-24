<?php

namespace App\Repository;

use App\Entity\Exercicecategorie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Exercicecategorie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Exercicecategorie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Exercicecategorie[]    findAll()
 * @method Exercicecategorie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExercicecategorieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Exercicecategorie::class);
    }

    // /**
    //  * @return Exercicecategorie[] Returns an array of Exercicecategorie objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Exercicecategorie
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
