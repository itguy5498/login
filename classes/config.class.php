
<?php 
class config{
    private $host='localhost';
    private $user='root';
    private $password='';
    private $dbuser='login';
    
    protected function configDb(){
        $con=mysqli_connect($this->host,$this->user,$this->password,$this->dbuser);
        if($con){
            return  $con;
       }
}
}
?>
