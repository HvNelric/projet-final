<?php

namespace App\Repository;

use App\Entity\GroupUsers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method GroupUsers|null find($id, $lockMode = null, $lockVersion = null)
 * @method GroupUsers|null findOneBy(array $criteria, array $orderBy = null)
 * @method GroupUsers[]    findAll()
 * @method GroupUsers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GroupUsersRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, GroupUsers::class);
    }

//    /**
//     * @return GroupUsers[] Returns an array of GroupUsers objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GroupUsers
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
