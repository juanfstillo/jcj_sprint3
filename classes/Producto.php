<?php

class Producto
{
    private $id;
    private $name_prod;
    private $detail;
    private $price;
    private $img_prod;
    private $id_cat;
    private $id_brand;

    public function __construct($name_prod, $detail, $price, $img_prod, $id_cat, $id_brand, $id = null, $created_at = null, $updated_at = null)
    {
        $this->id = $id;
        $this->name_prod = $name_prod;
        $this->detail = $detail;
        $this->price = $price;
        $this->img_prod = $img_prod;
        $this->id_cat = $id_cat;
        $this->id_brand = $id_brand;
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->Id = $id;
    }

    public function getNameProd()
    {
        return $this->name_prod;
    }

    public function setNameProd($name_prod)
    {
        $this->name_prod = $name_prod;
    }

    public function getDetail()
    {
        return $this->detail;
    }

    public function setDetail($detail)
    {
        $this->detail = $detail;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getImgProd()
    {
        return $this->img_prod;
    }

    public function setImgProd($img_prod)
    {
        $this->img_prod = $img_prod;
    }

    public function getCat_id()
    {
        return $this->id_cat;
    }

    public function setCat_id($id_cat)
    {
        $this->id_cat = $id_cat;
    }

    public function getBrand_id()
    {
        return $this->id_brand;
    }

    public function setBrand_id($id_brand){
        $this->id_brand = $id_brand;
    }
}
