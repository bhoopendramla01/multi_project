<?php

    class AuthModel extends CI_Model
    {
        public function create($formArray)
        {
            $this->db->insert("users", $formArray);
        }

        public function all()
        {
            return $users = $this->db->get("users")->result_array();
        }
        public function get_user_info($id)
        {
            $this->db->where("id", $id);
            $this->db->limit(1);
            $user = $this->db->get("users");
            return $user->row_array();
        }

        public function update_user_info($id, $formArray)
        {
            $this->db->where("id", $id);
            $this->db->update("users", $formArray);
        }

        public function delete_user_info($id)
        {
            $this->db->where("id", $id);
            $this->db->delete("users");
        }

        public function login($formArray)
        {
            $this->db->where("email", $formArray["email"]);
            $this->db->where("password", $formArray["password"]);
            $this->db->limit(1);
            $user = $this->db->get("users")->row_array();
            return $user;
        }
    }
?>