<?php  

class DBHandler {
  public static $dbh = null;
  
  function __construct() {
    if ($dbh == null) $this->dbh = new PDO('mysql:host=localhost;dbname=museu', 'root', 'admin');
  }
  
  
  //------------------------------------------------------
  public function conectar() {
    return true;
  }
  
  //------------------------------------------------------
  public function query($query) {  
    $queryresults = $this->dbh->query($query);
    return $queryresults;
    
  }
  
  
  
}

?>