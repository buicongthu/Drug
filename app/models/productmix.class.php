<?php
class ProductMix
{
    function get_Data($limit = 0, $offset = 0)
    {
        $db = new Database();

        $limit = (int)$limit;
        $offset = (int)$offset;

        return $db->read("SELECT * FROM product_mix LIMIT " . $limit . " OFFSET " . $offset);
    }
    function get_All()
    {
        $db = new Database();

        return $db->read("SELECT * FROM product_mix ");
    }
    function count_Records()
    {
        $db = new Database();
        $result = $db->read("SELECT COUNT(*) AS total FROM product_mix;");
        return $result[0]->total;
    }
    function get_By_Id($id){
        $id = (int)$id;
        $db = new Database();
        $result = $db->read("SELECT * FROM product_mix WHERE id = $id");
        return $result[0];
    }
    function insert($POST)
    {
        $db = new Database();
        $data = array();
        $data['product_mix'] = trim($POST['product_mix']);
        $db = new Database();
        $query = "INSERT INTO `product_mix`(`name`) VALUES ('" . $data['product_mix'] . "')";
        $result = $db->write($query);
        return $result;

        
    }
    function update($POST){
        $data = array();

        $data['product_mix'] = trim($POST['product_mix']);
        $data['product_mix_id'] = trim($POST['product_mix_id']);
        $db = new Database();
        return  $db->write("UPDATE `product_mix` SET `name`='".$data['product_mix']."' WHERE `id`='".$data['product_mix_id']."';");
    }
    function delete($id){
        $id = (int) $id;
        $db = new Database();
        
        $result = $db->read("SELECT `id` FROM `category` WHERE `product_mix_id` = $id;");
        $detail_ids = array();
        $detail_ids = array_column($result,'id');
        $ids_str = "'" .implode("','",$detail_ids) . "'";
        $db->write("UPDATE `category` SET `product_mix_id` = ' ' WHERE `id` IN ($ids_str)");
        $db->write("UPDATE `product` SET `category_id` = ' ' WHERE `category_id` = $id");

        return  $db->write("DELETE FROM `product_mix` WHERE `id`='$id'");
    }
}
