<?php
declare(strict_types=1);

?>
<?php 
class checkForm extends config{
    private $em;
    private $ps;
    
    public function __construct(string $em, string $ps){
        $this->em=$em;
        $this->ps=$ps;
    }
    public function check(){
        
            if(empty($this->em)){
                echo "good";
            
            }else{
                $emvalidate=filter_var($this->em(FILTER_VALIDTE_EMAIL)==FALSE);
                echo "bad";
                }
                    
            }
    }
    


?>