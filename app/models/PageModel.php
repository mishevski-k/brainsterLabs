<?php

    class PageModel {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }
        
        public function getProjects() {
            $this->db->query("SELECT * FROM projects");

            if($data = $this->db->resultSet()) {
                return $data;
            } else {
                die("An error occured");
            }
        }

        public function hireStudent($data) {
            $this->db->query('INSERT INTO hire_requests (name_and_surname, name_of_company, contact_email, contact_phone, type)
            VALUES (:name_and_surname, :name_of_company, :contact_email, :contact_phone, :type)');

            $this->db->bind(":name_and_surname", $data['name']);
            $this->db->bind(":name_of_company", $data['company']);
            $this->db->bind(":contact_email", $data['email']);
            $this->db->bind(":contact_phone", $data['phone']);
            $this->db->bind(":type", $data['studentType']);

            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }

?>