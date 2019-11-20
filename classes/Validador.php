<?php

class Validate
{

    public static function validarProductos(Producto $products)
    {
        $errores = [];

        $name_prod = trim($product->getNameProd());
        if($name_prod = '') {
            $errores['name_prod'] = "Por favor, ingresa el nombre del producto";
        }

        $rating = $product->getDetail();

        if($detail = '') {
            $errores['detail'] = "Por favor, ingresa el detalle";
        }

        $release_date = $product->getPrice();
        if($price = '') {
            $errores['price'] = "Por favor, ingresa el precio";
        }

        $duracion = $product->getImgProd();
        if($img_prod < 60) {
            $errores['img_prod'] = "Por favor, ingresa el precio";
        }

        return $errores;
    }
}
