<?php


function connect(){
    try {
    $options = [PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC ];
     $cn = new PDO("mysql:host=localhost;dbname=etudiantphp;","root","(ARDU1CEceno)",$options);
     $cn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
    return $cn;
}

function all(){
    $cnx = connect();
    $resp = $cnx->prepare("select * from etudiant order by id desc");
    $resp ->execute();
    $result = $resp->fetchAll();
    return $result;
}

function find(int $id){
    $cnx = connect();
    $resp = $cnx->prepare("select * from etudiant where id=?");
    $resp ->execute([$id]);
    $result = $resp->fetch();
    return $result;
}

function delete(int $id){
    $cnx = connect();
    $resp = $cnx->prepare("delete  from etudiant where id=?;");
    $resp ->execute([$id]);
}

function update($n,$p,$d, $id){
    $cnx = connect();
    $newDate = date("d-m-Y", strtotime($d));  
    $resp = $cnx->prepare("update  etudiant set nom = ? , prenom = ? , date_naissance = STR_TO_DATE(?, '%d-%m-%Y') where id=?;");
    $resp ->execute([$n,$p, $newDate,$id]);

  }
 
  function store($n,$p,$d){
    $cnx = connect();
    $newDate = date("d-m-Y", strtotime($d));  
    $resp = $cnx->prepare("insert into etudiant(nom , prenom , date_naissance) values(?,?,STR_TO_DATE(?, '%d-%m-%Y')) ;");
    $resp ->execute([$n,$p,$newDate]);

  }

?>
  