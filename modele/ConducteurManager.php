<?php
require_once "manager.php";
require_once "conducteur.php";

class ConducteurManager extends Manager
{
    private $conducteurs;

    public function addConducteur($conducteur)
    {
        $this->conducteurs[] = $conducteur;
    }

    public function getConducteurs()
    {
        return $this->conducteurs;
    }

    public function loadConducteurs()
    {
        $req = $this->getBdd()->prepare("SELECT * FROM conducteur");
        $req->execute();
        $myConducteurs = $req->fetchAll();
        $req->closeCursor();

        foreach ($myConducteurs as $conducteur) {
            $c = new Conducteur($conducteur['id_conducteur'], $conducteur['nom'], $conducteur['prenom']);
            $this->addConducteur($c);
        }
    }

    public function newConducteurDB($nom, $prenom)
    {
        $req = "INSERT INTO conducteur (nom, prenom)
              VALUES (:nom, :prenom)";
        $statement = $this->getBDD()->prepare($req);
        $statement->bindValue(":nom", $nom, PDO::PARAM_STR);
        $statement->bindValue(":prenom", $prenom, PDO::PARAM_STR);
        $result = $statement->execute();
        $statement->closeCursor();

        if ($result) {
            $conducteur = new Conducteur($this->getBdd()->lastInsertId(), $nom, $prenom);
            $this->addConducteur($conducteur);
        }
    }

    public function getConducteurById($id)
    {
        foreach ($this->conducteurs as $conducteur) {
            if ($conducteur->getId() == $id) {
                return $conducteur;
            }
        }
    }

    public function editConducteurDB($id, $nom, $prenom)
    {
        $req = "UPDATE conducteur SET nom = :nom, prenom = :prenom
        WHERE id = :id";
        $statement = $this->getBdd()->prepare($req);
        $statement->bindValue(":id", $id, PDO::PARAM_INT);
        $statement->bindValue(":nom", $nom, PDO::PARAM_STR);
        $statement->bindValue(":prenom", $prenom, PDO::PARAM_STR);
        $result = $statement->execute();
        $statement->closeCursor();

        if ($result) {
            $this->getConducteurById($id)->setNom($nom);
            $this->getConducteurById($id)->setPrenom($prenom);
        }
    }

    public function deleteConducteurDB($id)
    {
        $req = "DELETE FROM conducteur WHERE id = :id";
        $statement = $this->getBdd()->prepare($req);
        $statement->bindValue(":id", $id, PDO::PARAM_INT);
        $result = $statement->execute();
        $statement->closeCursor();

        if ($result) {
            $conducteur = $this->getConducteurById($id);
            unset($conducteur);
        }
    }
}
