<?php header('Content-Type : text/plain; charset=utf-8');
      $bdd=new pdo('mysql:host=localhost;dbname=dbmbirmi','root','magor2016');
      //$reg=$_POST['region'];

      $req=$bdd->query("SELECT * FROM pageprincipale WHERE categorie='nouveaute'");
      //$req->execute();
      //$tup=$req->fetch();
      $donnee=array();
      while($tup=$req->fetch()){
      	$adresse=json_decode($tup['adresse']);
      	$donnee[]=array("url"=>$tup['img_link'],"adresse"=>$adresse,'prix'=>$tup['prix'],"couleur"=>$tup['couleur']);

      }
     echo json_encode($donnee)
     
?>