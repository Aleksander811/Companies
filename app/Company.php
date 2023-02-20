<?php

namespace COMPANY;

use PDO;

class Company{
    protected $pdo;
    private $subject;
    private $name;
    private $type;
    private $info;
    private $code;
    private $email;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function createCompany($company){
        $this->subject = $company['activity'];
        $this->name = $company['title'];
        $this->type = $company['type'];
        $this->info = $company['info'];
        $this->code = $company['code'];
        $this->email= $company['email'];
        $this->insertCompany();
    }

    private function insertCompany(){
        try{
            $query = "INSERT INTO `company`(`subject`,`name`,`type`,`info`,`code`,`email`,`modified`)
            VALUES(:subject, :name, :type, :info, :code, :email, NOW())";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':subject',$this->subject, PDO::PARAM_STR);
            $stmt->bindParam(':name',$this->name, PDO::PARAM_STR);
            $stmt->bindParam(':type',$this->type, PDO::PARAM_STR);
            $stmt->bindParam(':info',$this->info, PDO::PARAM_STR);
            $stmt->bindParam(':code',$this->code, PDO::PARAM_STR);
            $stmt->bindParam(':email',$this->email, PDO::PARAM_STR);
            $stmt->execute();
     //     echo $this->subject;
            header('Location:/');
        }catch(\PDOException $e){
            echo $e->getMessage();
        }
    }

    public function allCompanies(){
        $stmt = $this->pdo->prepare('select * from company');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteCompany ($id){
        $stmt = $this->pdo->prepare("DELETE FROM `company` WHERE id=$id");
        $stmt->execute();
        header('Location:/');
    }

    public function update($id){
        $stmt = $this->pdo->prepare("SELECT * FROM `company` WHERE id=$id");
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function storeUpdate($company, $id){
        try{
            $query = "UPDATE company SET type=:type, subject=:subject, info=:info, code=:code, email=:email, name=:name, modified=NOW() WHERE id=:id";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':type',$company['type'], PDO::PARAM_STR);
            $stmt->bindParam(':subject',$company['activity'], PDO::PARAM_STR);
            $stmt->bindParam(':info',$company['info'], PDO::PARAM_STR);
            $stmt->bindParam(':code',$company['code'], PDO::PARAM_STR);
            $stmt->bindParam(':email',$company['email'], PDO::PARAM_STR);
            $stmt->bindParam(':name',$company['title'], PDO::PARAM_STR);
            $stmt->bindParam(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
            header("Location:/");

        }catch (\PDOException $e){
            echo $e->getMessage();
        }
    }
}