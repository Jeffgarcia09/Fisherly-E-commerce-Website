<?php

// Use to fetch product data
class Product
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // fetch product data using getData Method
    public function getData($table = 'product')
    {
        $result = $this->db->con->query("SELECT * FROM {$table}");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getItemdata($id)
    {
        $result = $this->db->con->query("SELECT * FROM product WHERE item_id=$id");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function insertCust($fname, $lname, $address, $purok, $phone, $network, $inputcheck, $t_amount, $prod_id)

    {
        $this->db->con->query("INSERT INTO customer_info (fname,lname,address, purok,phone,network,cod,total_amount,product_id) VALUES ('$fname','$lname','$address','$purok','$phone','$network','$inputcheck','$t_amount','$prod_id')");
    }



    public function getcustomer($table = 'customer_info')
    {
        $result = $this->db->con->query("SELECT * FROM {$table}");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }
}
