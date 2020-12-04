<?php

class LangueManager
{
    public static function add(Langue $obj)
    {
        $db=DbConnect::getDb();
        $q=$db->prepare("INSERT INTO Langue (nomLangue,codeLangue,texteLangue) VALUES (:nomLangue,:codeLangue,:texteLangue)");
        $q->bindValue(":nomLangue", $obj->getNomLangue());
        $q->bindValue(":codeLangue", $obj->getCodeLangue());
        $q->bindValue(":texteLangue", $obj->getTexteLangue());
        $q->execute();
    }

    public static function update(Langue $obj)
    {
        $db=DbConnect::getDb();
        $q=$db->prepare("UPDATE Langue SET idLangue=:idLangue,nomLangue=:nomLangue,codeLangue=:codeLangue,texteLangue=:texteLangue WHERE idLangue=:idLangue");
        $q->bindValue(":idLangue", $obj->getIdLangue());
        $q->bindValue(":nomLangue", $obj->getNomLangue());
        $q->bindValue(":codeLangue", $obj->getCodeLangue());
        $q->bindValue(":texteLangue", $obj->getTexteLangue());
        $q->execute();
    }

    public static function delete(Langue $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Langue WHERE idLangue=" .$obj->getIdLangue());
    }
    
    public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Langue WHERE idLangue =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Langue($results);
		}
		else
		{
			return false;
		}
    }
    
    public static function getList()
	{
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * FROM Langue");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Langue($donnees);
			}
		}
		return $liste;
    }
    
    public static function findByCodes($codeLangue,$nomLangue)
	{
		$db=DbConnect::getDb();
		$q=$db->prepare("SELECT texteLangue FROM Langue WHERE nomLangue =:nomLangue and codeLangue = :codeLangue");
		$q->bindValue(":nomLangue", $nomLangue,PDO::PARAM_STR);
		$q->bindValue(":codeLangue", $codeLangue,PDO::PARAM_STR);
		$q->execute();
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			
			return $results['texteLangue'];  // on ne retourne que le texte, pas un objet
		}
		else
		{
			return false;
		}
	}

}