<?php

namespace App\Repository;


use App\Entity\Reclamation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry; 

/**
 * @method Reclamation|null find($reponse, $lockMode = null, $lockVersion = null)
 * @method Reclamation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reclamation[]    findAll()
 * @method Reclamation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReclamationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reclamation::class);
    }
    
    public function findReclamationbytitle($title)
    {
        return $this->createQueryBuilder('e')
            ->where('e.titre LIKE :titre')
            ->setParameter('titre', '%'.$title.'%')
            ->getQuery()
            ->getResult();
    }

    public function countelevee()
    {
        return $this->createQueryBuilder('e')
            ->where('e.type LIKE :type')
            ->setParameter('type', 'elevee')
            ->select('count(e.type)')
            ->getQuery()
            ->getSingleScalarResult();
    }
    public function countmoyenne()
    {
        return $this->createQueryBuilder('e')
            ->where('e.type LIKE :type')
            ->setParameter('type', 'moyenne')
            ->select('count(e.type)')
            ->getQuery()
            ->getSingleScalarResult();
    }
    public function countfaible()
    {
        return $this->createQueryBuilder('e')
            ->where('e.type LIKE :type')
            ->setParameter('type', 'faible')
            ->select('count(e.type)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function triecroissant()
    {
        return $this->createQueryBuilder('r')
                    ->orderBy('r.type', 'ASC')
                    ->orderby('r.created_At', 'ASC')
                    ->getQuery()
                    ->getResult();

    }

    public  function  triedecroissant()
    {
        return $this->createQueryBuilder('r')
                    ->orderBy('r.type','DESC')
                    ->orderby('r.created_At', 'DESC')
                    ->getQuery()
                    ->getResult();
    }

}