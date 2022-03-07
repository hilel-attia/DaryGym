<?php

namespace App\Repository;

use App\Entity\Exercice;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Exercice|null find($id, $lockMode = null, $lockVersion = null)
 * @method Exercice|null findOneBy(array $criteria, array $orderBy = null)
 * @method Exercice[]    findAll()
 * @method Exercice[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExerciceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Exercice::class);
    }

     /**
      * @return Exercice[] Returns an array of Exercice objects
      */

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



    public function findOneBySomeField($value): ?Exercice
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    public function getByCategories(array $exercicecategorie)
    {
        $qb = $this ->createQueryBuilder('p')
            ->leftJoin('p.Exercicecategorie', 'c');
        $qb->where($qb->expr()->in('c.id', $exercicecategorie));

        return $qb->getQuery()->getResult();
    }
    function SearchExercicecategorie($Exercicecategorie){
        return  $this->createQueryBuilder('p')
            ->where('p.Exercicecategorie LIKE ?1' )
            ->setParameter('1','%'.$Exercicecategorie.'%')
            ->getQuery()->getResult();
        //setMaxResults(2);
    }

    public function findOffrebyNom($nom)
    {
        return $this->createQueryBuilder('e')
            ->where('e.nom LIKE :nom')
            ->setParameter('nom', '%'.$nom.'%')
            ->getQuery()
            ->getResult();
    }


}
