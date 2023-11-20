<?php

    class CategoryModel extends CI_Model
    {
        public function create($formArray)
        {
            $this->db->insert("categories", $formArray);
        }

        public function all()
        {
            return $categories = $this->db->get("categories")->result_array();
        }
        public function get_category_info($id)
        {
            $this->db->where("id", $id);
            $this->db->limit(1);
            $category = $this->db->get("categories");
            return $category->row_array();
        }

        public function update_category_info($id, $formArray)
        {
            $this->db->where("id", $id);
            $this->db->update("categories", $formArray);
        }

        public function delete_category_info($id)
        {
            $this->db->where("id", $id);
            $this->db->delete("categories");
        }

    }
?>