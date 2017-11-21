<?php

  namespace lbs\control;

  use lbs\model\Categorie as categorie;
  use lbs\model\Sandwich as sandwich;

  class CatalogueControlleur{
    public $conteneur=null;
    public function __construct($conteneur){
      $this->conteneur=$conteneur;
    }

    public function getCatalogue(){
      $Listecategorie = json_encode(categorie::get());
      return $Listecategorie;
    }
    public function getCatalogueId($id){
      $categorie = json_encode(categorie::find($id));
      return $categorie;

    }
  }
?>
