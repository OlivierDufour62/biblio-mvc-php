<?php

namespace Core;

Use Core\Connect;
use PDO;

abstract class Model extends Connect
{

    public function findAll()
    {
        $req = $this->getBdd()->prepare("SELECT * FROM $this->table");
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $result;
    }

    public function findById($id)
    {
        $req = $this->getBdd()->prepare("SELECT * FROM $this->table WHERE $id");
        $req->execute();
        $result = $req->fetch(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $result;
    }

    public function delete()
    {
        $req = "DELETE FROM $this->table WHERE id = :id";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValu(':id', $this->id, PDO::PARAM_INT);
        return $stmt->execute();
        $stmt->closeCursor();
    }
}

