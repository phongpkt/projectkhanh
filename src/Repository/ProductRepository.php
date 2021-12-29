<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }
    /**
     * @return Product[]
     */
    public function sortProductPricedAsc(){
        return $this->createQueryBuilder('product')
        ->orderBy('product.price', 'ASC')
        ->getQuery()
        ->getResult();
    }
    /**
     * @return Product[]
     */
    public function sortProductPriceDesc(){
        return $this->createQueryBuilder('product')
        ->orderBy('product.price', 'DESC')
        ->getQuery()
        ->getResult();
    }
    /**
     * @return Product[]
     */
    public function searchByName($name){
        return $this->createQueryBuilder('product')
        ->andWhere('product.name LIKE :name')
        ->setParameter('name', '%' . $name . '%')
        ->orderBy('product.name', 'asc')
        ->setMaxResults(5)
        ->getQuery()
        ->getResult();
    }
}
