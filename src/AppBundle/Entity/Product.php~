<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductRepository")
 */
class Product
{
    use ORMBehaviors\Translatable\Translatable;

    public function __construct() {
        $this->features = new ArrayCollection();
    }

    /**
     * Many Products have One Category.
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="products")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="sku", type="string")
     */
    private $sku;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=7, nullable=true, unique=false)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="tags", type="string")
     */
    private $tags;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_buys", type="bigint")
     */
    private $nb_buys;

    /**
     * @var int
     *
     * @ORM\Column(name="available_qty", type="integer")
     */
    private $available_qty;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set sku
     *
     * @param string $sku
     *
     * @return Product
     */
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * Get sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }


    /**
     * Set tags
     *
     * @param string $tags
     *
     * @return Product
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set nbBuys
     *
     * @param int $nbBuys
     *
     * @return Product
     */
    public function setNbBuys($nbBuys)
    {
        $this->nb_buys = $nbBuys;

        return $this;
    }

    /**
     * Get nbBuys
     *
     * @return int
     */
    public function getNbBuys()
    {
        return $this->nb_buys;
    }

    /**
     * Set availableQty
     *
     * @param integer $availableQty
     *
     * @return int
     */
    public function setAvailableQty( $availableQty)
    {
        $this->available_qty = $availableQty;

        return $this;
    }

    /**
     * Get availableQty
     *
     * @return int
     */
    public function getAvailableQty()
    {
        return $this->available_qty;
    }
}
