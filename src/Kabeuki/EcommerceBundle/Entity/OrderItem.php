<?php

namespace Kabeuki\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderItem
 *
 * @ORM\Table(name="order_item", indexes={@ORM\Index(name="order_item_product_id_foreign", columns={"product_id"}), @ORM\Index(name="order_item_order_id_foreign", columns={"order_id"})})
 * @ORM\Entity
 */
class OrderItem
{
    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=true)
     */
    private $quantity;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Kabeuki\EcommerceBundle\Entity\Product
     *
     * @ORM\ManyToOne(targetEntity="Kabeuki\EcommerceBundle\Entity\Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     * })
     */
    private $product;

    /**
     * @var \Kabeuki\EcommerceBundle\Entity\Order
     *
     * @ORM\ManyToOne(targetEntity="Kabeuki\EcommerceBundle\Entity\Order")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_id", referencedColumnName="id")
     * })
     */
    private $order;



    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return OrderItem
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return OrderItem
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return OrderItem
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set product
     *
     * @param \Kabeuki\EcommerceBundle\Entity\Product $product
     * @return OrderItem
     */
    public function setProduct(\Kabeuki\EcommerceBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \Kabeuki\EcommerceBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set order
     *
     * @param \Kabeuki\EcommerceBundle\Entity\Order $order
     * @return OrderItem
     */
    public function setOrder(\Kabeuki\EcommerceBundle\Entity\Order $order = null)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return \Kabeuki\EcommerceBundle\Entity\Order 
     */
    public function getOrder()
    {
        return $this->order;
    }
}
