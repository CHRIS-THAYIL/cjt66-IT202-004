<?php
// Chris Joseph Thayil, IT 202-004, Internet Applications, Unit 08 Exercise, cjt66@njit.edu
require_once('database.php');
class Contact
{
    public $name;
    public $email;
    public $message;
    function __construct($name, $email, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }
    function saveContact()
    {
        $db = getDB();
     $query = "INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)";
        $stmt = $db->prepare($query);
        $stmt->bind_Param(
            "sss",
            $this->name,
            $this->email,
            $this->message
        );
        $result = $stmt->execute();
        $db->close();
        return $result;
    }
}