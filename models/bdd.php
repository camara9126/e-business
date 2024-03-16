<?php
     try{
        $bdd = new PDO("mysql:dbname=uasbc;host=localhost", "root", "");
    } catch(PDOException $th){
        die("Erreur : ".$th->getMessage());
    }



    function login($matricule, $mdp) {
        global $bdd;
        try{
            $req = $bdd->prepare('SELECT * FROM etudiant WHERE matricule =:matricule AND mdp =:mdp');
            $req->execute([
                'matricule' => $matricule,
                'mdp'  => $mdp
            ]);

            return $req->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Erreur : ".$e->getMessage());
        }   
    }

    
    function inscription($prenom,$nom,$matricule,$email,$tel,$uasbc) {
        global $bdd;
        try {
            $req= $bdd->prepare('INSERT INTO etudiant VALUES(null, :prenom,:nom,:matricule, :email, :tel, :mdp)');
           return $req->execute([
                'prenom'=> $prenom,
                'nom'=>$nom,
                'matricule'=>$matricule,
                'email'=>$email,
                'tel'=>$tel,
                'mdp'=>$uasbc,
           ]);

        } catch (PDOException $e) {
            die("Erreur : ".$e->getMessage());
        }
    }

    function user(){
        global $bdd;
        try {
            $req = $bdd->prepare("SELECT * FROM etudiant ORDER BY nom ASC");

            $req->execute();

            return $req->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }


    function categorie(){
        global $bdd;
        try {
            $req = $bdd->prepare("SELECT * FROM categorie ORDER BY nom ASC");

            $req->execute();

            return $req->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }


    function produitById($id){
        global $bdd;
        try {
            $req = $bdd->prepare("SELECT * FROM produits WHERE id= :id ");
    
            $req->execute([
                "id" => $id
            ]);
    
            return $req->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }


    function annonce($nom, $prix, $stock, $image, $description, $contact, $categorie_id, $id_etudiant) {
        global $bdd;
        try {
            $req= $bdd->prepare('INSERT INTO produits(id, nom, prix, stock, image, description, contact, categorie_id, id_etudiant) 
                                 VALUES(NULL, :nom, :prix, :stock, :image, :description, :contact, :categorie_id, :id_etudiant)');
            return $req->execute([
                "nom" => $nom,
                "prix"  => $prix,
                "stock"  => $stock,
                "image"=> $image,
                "description" => $description,
                "contact" => $contact,
                "categorie_id" => $categorie_id,
                "id_etudiant" => $id_etudiant
            ]);

        } catch (PDOException $e){
            die("Erreur : ".$e->getMessage());
        }

    }

    function nbrAnnonce($id) {
        global $bdd;
        try {
            // On récupère le nombre d'annonces en produit dans la base de données.
            $req= $bdd->prepare('SELECT * FROM produits WHERE id= :id');
            $req->execute([
                "id" => $id
            ]);
            
            return $req->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e){
            die("Erreur : ".$e->getMessage());
        }
    }


    function editerProduit($id, $nom, $prix, $stock, $name, $description, $contact, $categorie_id, $id_etudiant){
    global $bdd;
    try {
        $req = $bdd->prepare("UPDATE produits SET nom =:nom, prix =:prix, stock= :stock, image =:image, description= :description, contact =:contact, categorie_id= :categorie_id, id_etudiant= :id_etudiant WHERE id= :id ");
        return $req->execute([
            'id' => $id,
            'nom' => $nom,
            'prix' => $prix,
            'stock' => $stock,
            'image' => $name,
            'description' => $description,
            'contact' => $contact,
            'categorie_id' => $categorie_id,
            'id_etudiant'=> $id_etudiant
        ]);
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
}

    function produits(){
        global $bdd;
        try {
            $req = $bdd->prepare("SELECT * FROM produits ORDER BY id DESC");
    
            $req->execute();
    
            return $req->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }
    

    function supprimerProduit($id) {
    global $bdd;
    try {
        $req = $bdd->prepare("DELETE FROM produits WHERE id =:id");
        return $req->execute([
            'id' => $id
        ]);
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
}


    function editpassword($id, $newpassword) {
        global $bdd;
        try {
            $req= $bdd->prepare("UPDATE etudiant SET mdp=:mdp WHERE id= :id");
            return $req->execute([
                'id' => $id,
                'mdp' => $newpassword,
            ]);
        }  catch (PDOException $e){
            die("Erreur : ".$e->getMessage());
        }
    }

    function editpasswordforadmin($matricule, $newpassword) {
        global $bdd;
        try {
            $req= $bdd->prepare("UPDATE etudiant SET mdp=:mdp WHERE matricule= :matricule");
            return $req->execute([
                'matricule' => $matricule,
                'mdp' => $newpassword,
            ]);
        }  catch (PDOException $e){
            die("Erreur : ".$e->getMessage());
        }
    }

    function selectpassword($id, $password) {
        global $bdd;
        try{
            $req= $bdd->prepare("SELECT * FROM etudiant WHERE id= :id AND mdp= :mdp");
            $req->execute([
                ':id'=> $id,
                ":mdp"=> $password
            ]);
        }  catch (PDOException $e){
            die("Erreur : ".$e->getMessage());
        }

    }

    
    // test sur openclassrooms 
    # Liste des noms et commentaires associés
# à la recette Cassoulet
# limité à 10

// function selectJointure() {
//     global $bdd;
//     try {
//         $req= $bdd->prepare('SELECT u.full_name, c.comment
//             FROM recipes r
//             INNER JOIN comments c ON c.recipe_id = r.recipe_id
//             INNER JOIN users u ON u.user_id = c.user_id
//             WHERE r.title = 'Cassoulet'
//             LIMIT 10');
//     } catch (PDOException $e){
//         die("Erreur : ".$e->getMessage());
//     }
// }

    function ajoutcategorie($nom) {
        global $bdd;
        try {
            $req= $bdd->prepare('INSERT INTO categorie(id, nom) VALUES(NULL, :nom)');
            return $req->execute([
    
                'nom' => $nom
            ]);
        } catch (PDOException $e){
            die("Erreur : ".$e->getMessage());
        }
    }

    function searchByName($nom){
        global $bdd;
        try{
        $req= $bdd->prepare('SELECT p.id as id, p.nom as nom, p.stock as stock, p.prix as prix, p.description as description, p.image as image, p.contact as contact, p.id_etudiant as id_etudiant
        FROM produits p, categorie c
        WHERE p.categorie_id= c.id AND p.nom= :nom');

        $req->execute([
            'nom' => $nom
        ]);
        return $req->fetchAll(PDO::FETCH_OBJ);

        }catch (PDOException $e){
            die("Erreur : ".$e->getMessage());
        }
    }

    function categorieByNom($nom){
        global $bdd;
        try{
        $req= $bdd->prepare('SELECT c.id as id, p.nom as nom, p.stock as stock, p.prix as prix, p.description as description, p.categorie_id as categorie_id,  p.image as image, p.contact as contact, p.id_etudiant as id_etudiant
        FROM categorie c, produits p
        WHERE c.nom= :nom AND c.id= p.categorie_id');

        $req->execute([
            'nom' => $nom
        ]);
        return $req->fetchAll(PDO::FETCH_OBJ);

        }catch (PDOException $e){
            die("Erreur : ".$e->getMessage());
        }
    }

    function newsletter($email){
        global $bdd;
        try {
            $req= $bdd->prepare('INSERT INTO newsletter(id, email) VALUES(NULL, :email)');
            return $req->execute([
                ':email'=> $email
            ]);

        } catch (PDOException $e){
            die("Erreur : ".$e->getMessage());
        }
    }


//fonction qui permet de selection un categorie par son id
function getCategorieById($id){
    global $bdd;
    try {
        $req = $bdd->prepare("SELECT * FROM categorie WHERE id=:id");
        $req->execute([
            "id"=>$id
        ]);

        return $req->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur ".$th->getMessage());
    }
}


//fonction qui permet d'editer un categorie par son id
function editCategorie($id,$nom){
    global $bdd;
    try {
        $req = $bdd->prepare("UPDATE categorie SET nom=:nom WHERE id=:id");
        return $req->execute([
            "id"=>$id,
            "nom"=>$nom
        ]);
    } catch (PDOException $e) {
        die("Erreur ".$e->getMessage());
    }
}

//fonction qui permet de supprimer un categorie

function deletecategorie($id){
    global $bdd;
    try {
       $req = $bdd->prepare("DELETE FROM categorie WHERE id=:id");
       return $req->execute([
       "id"=>$id
       ]);
    } catch (PDOException $e) {
        die("Erreur ".$e->getMessage());
    }
}

//fonction qui permet de supprimer un produit

function deleteProduit($id){
    global $bdd;
    try {
       $req = $bdd->prepare("DELETE FROM produit WHERE id=:id");
       return $req->execute([
       "id"=>$id
       ]);
    } catch (PDOException $e) {
        die("Erreur ".$e->getMessage());
    }
}





?>
