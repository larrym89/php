<?php
// asa nu
class User {
  
    private $email;
    
    // Getter and setter...
    
    public function store() {
        // Store attributes into a database...
    }
}

//metoda store nu este responsabilitatea clasei User 
// clasa User ofera informatii despre utilizatori

//asa da
class UserInfo {
  
    private $email;
    
    // Getter and setter...
}
class UserDB {
  
    public function store(User $user) {
        // Store the user into a database...
    }
}