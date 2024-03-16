<?php   
        
        if(isset($_POST['search'])){

            extract($_POST);
          
           if(searchByName($nom)) {

              $cs= searchByName($nom);

           } else {
             $message= "Recherche indisponible !";
             $type= 'danger';
           }
          
        } 

        if(isset($_POST["join"])){
            extract($_POST);
           
            $email= newsletter($email);

            if($email){
                $sms= "Email enregistré avec succéss !";
            }
        }
        

     require_once("views/boutique.php");
 
?>