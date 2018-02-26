<?php
    class user{
        private $UserId;
        private $UserName;
        private $UserMail;
        private $UserPassword;
        
        public function getUserId(){
            return $this->UserId;
        }
        
        public function setUserId($UserId){
            $this->UserId = $UserId;
        }
        
        public function getUserName(){
            return $this->UserName;
        }
        
        public function setUserName($UserName){
            $this->UserName = $UserName;
        }
        
        public function getUserMail(){
            return $this->UserMail;
        }
        
        public function setUserMail($UserMail){
            $this->UserMail = $UserMail;
        }
        
        public function getUserPassword(){
            return $this->UserPassword;
        }
        
        public function setUserPassword($UserPassword){
            $this->UserPassword = $UserPassword;
        }
        
        
        public function InsertUser(){
            require_once 'conn_db.php';
            
            $sql = "INSERT INTO users(UserName, UserMail, UserPassword) VALUES(:UserName, :UserMail, :UserPassword)";
            
            $pdo->beginTransaction();
            $pstmt = $pdo->prepare($sql);
            $pstmt->execute(array(
                'UserName'=>$this->getUserName(),
                'UserMail'=>$this->getUserMail(),
                'UserPassword'=>$this->getUserPassword()
            ));
            $pdo->commit();
            
        }
        
        public function Userlogin(){
            require_once 'conn_db.php';
            
            $sql = "SELECT * FROM users WHERE UserMail=:UserMail AND UserPassword=:UserPassword";
            
            $pstmt = $pdo->prepare($sql);
            $pstmt->execute(array(
                'UserMail'=>$this->getUserMail(),
                'UserPassword'=>$this->getUserPassword()
            ));
            
            
            if($pstmt->rowCount() == 0){
                header("Location: ../index.php?error=1");
                return false;
            }else{
                while($data = $pstmt->fetch(PDO::FETCH_ASSOC)){
                    $this->setUserId($data['UserId']);
                    $this->setUserName($data['UserName']);
                    $this->setUserPassword(sha1($data['UserPassword']));
                    $this->setUserMail($data['UserMail']);
                }
                header("Location: ./home.php");
                return true;
            }
        }
        
    }


    class Chat{
        private $ChatId;
        private $ChatUserId;
        private $ChatText;
        
        public function getChatId(){
            return $this->ChatId;
        }
        
        public function setChatId($ChatId){
            $this->ChatId = $ChatId;
        }
        
        public function getChatUserId(){
            return $this->ChatUserId;
        }
        
        public function setChatUserId($ChatUserId){
            $this->ChatUserId = $ChatUserId;
        }
        
        public function getChatText(){
            return $this->ChatText;
        }
        
        public function setChatText($ChatText){
            $this->ChatText = $ChatText;
        }
        
        public function InsertChatMessage(){
            require_once 'conn_db.php';
            $sql = "INSERT INTO chats(ChatUserId, ChatText) VALUES(:ChatUserId, :ChatText)";
            
            $pdo->beginTransaction();
            $pstmt = $pdo->prepare($sql);
            $pstmt->execute(array(
                'ChatUserId'=>$this->getChatUserId(),
                'ChatText'=>$this->getChatText()
            ));
            $pdo->commit();
        }
    }