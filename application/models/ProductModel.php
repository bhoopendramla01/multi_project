<?php

    class ProductModel extends CI_Model
    {
        public function create($formArray)
        {
            $this->db->insert("products", $formArray);
        }

        public function all()
        {
            return $products = $this->db->get("products")->result_array();
        }
        public function get_product_info($id)
        {
            $this->db->where("id", $id);
            $this->db->limit(1);
            $product = $this->db->get("products");
            return $product->row_array();
        }

        public function update_product_info($id, $formArray)
        {
            $this->db->where("id", $id);
            $this->db->update("products", $formArray);
        }

        public function delete_product_info($id)
        {
            $this->db->where("id", $id);
            $this->db->delete("products");
        }

    }
?>