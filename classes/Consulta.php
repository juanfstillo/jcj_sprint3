<?php

class Consulta
{
    public static function listar($tabla, $base)
    {
        $sql = "SELECT * FROM $tabla";
        $query = $base->prepare($sql);
        $query->execute();

        $resultados = $query->fetchAll(PDO::FETCH_ASSOC);

        return $resultados;
    }

    public static function mostrar($base, $tabla, $id)
    {
        $sql = "SELECT * FROM $tabla WHERE id = $id";
        $query = $base->prepare($sql);
        $query->execute();

        $resultados = $query->fetch(PDO::FETCH_ASSOC);

        return $resultados;
    }

    public static function insertarProducto($products, $base)
    {
        $name_prod = $products->getNameProd();
        $detail = $products->getDetail();
        $price = $products->getPrice();
        $img_prod = $products->getImgProd();
        $id_cat = $products->getCat_id();
        $id_brand = $products->getBrand_id();

        $stmt = $base->prepare("INSERT INTO products (name_prod, detail, price, img_prod, id_cat, id_brand) VALUES (:name_prod, :detail, :price, :img_prod, :id_cat, :id_brand)");

        $stmt->bindParam(':name_prod', $name_prod, PDO::PARAM_STR);
        $stmt->bindParam(':detail', $detail, PDO::PARAM_STR);
        $stmt->bindParam(':price', $price, PDO::PARAM_INT);
        $stmt->bindParam(':img_prod', $img_prod, PDO::PARAM_STR);
        $stmt->bindParam(':id_cat', $id_cat, PDO::PARAM_INT);
        $stmt->bindParam(':id_brand', $id_brand, PDO::PARAM_INT);

        $stmt->execute();
    }

    public static function updateProducto($data, $pdo)
    {
        $columns = ["name_prod","detail","price","img_prod","id_cat", "id_brand"];
        $params = [];
        $setStr = "";

        foreach ($columns as $column) {
            if (isset($data[$column]) && $column != "id") {
                $setStr .= "`$column` = :$column,";
                $params[$column] = $data[$column];
            }
        };


        $setStr = rtrim($setStr, ",");
        $params['id'] = $data['id'];

        $pdo->prepare("UPDATE products SET $setStr WHERE id = :id")->execute($params);
    }

    static public function eliminarProducto($pdo,$id){
        
        $sql = "delete from products where id = :id";
        $stmt= $pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();

    
    }

}
