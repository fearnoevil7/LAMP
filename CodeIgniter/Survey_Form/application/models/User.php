<?php
    class User extends CI_Model {
        function Create($User)
        {
            $query = "INSERT INTO Users (Name, Location, Language, Comment) VALUES (?,?,?,?)";
            $values = array($User['Name'], $User['Location'], $User['Language'], $User['Comment']);
            return $this->db->query($query, $values);
        }
        function Show($user_id)
        {
            return $this->db->query("SELECT * FROM Users WHERE id = ?", array($user_id))->row_array();
        }
    }
?>