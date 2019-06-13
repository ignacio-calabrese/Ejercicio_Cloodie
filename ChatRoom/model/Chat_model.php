<?php
    require_once ("Connection_db.php");
    
    class Chat_model {
        private $db;
        private $chat;
                        
        public function __construct() {
            $this->db = Connection_db::connect();
            $this->chat = array();
        }

        public function getChat() {
            try{
                $statement = $this->db->prepare("SELECT * FROM chat");
                $statement->execute();
                while ($row = $statement->fetch(PDO::FETCH_OBJ)) {
                    $this->chat[] = $row;
                }
                $statement->closeCursor(); 
                return $this->chat;
            } catch (PDOException $e) {
                die("Error: " . $e->getMessage());
            }
        }
        
        public function insertChat($username, $message) {
            try{ 
                $statement = $this->db->prepare("INSERT INTO chat (user_name, message) VALUES (:user_name, :message)");
                $statement->execute(array(
                  ":user_name" => $username,
                  ":message" => $message
                ));
                return $statement->rowCount();
          } catch (PDOException $e) {
                die("Error: " . $e->getMessage());
          }
        }
    }


?>