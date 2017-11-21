<?php

  namespace lbs\control;

  class CatalogueControlleur{
    public $conteneur='';
    public function __construct($conteneur){
      $this->conteneur=$conteneur;
    }

    public function getCatalogue(){
      return json_encode(
        [
            "type"=>"collection",
            "meta"=>[
              "count"=>3,
              "locale"=>"fr-FR"],
            "categorie"=>[
              [
                "id"=>0,
                "nom"=>"tradi",
                "desc"=>"le sandwich classique"
              ],
              [
                "id"=>1,
                "nom"=>"bio",
                "desc"=>"le sandwich bio et local"
              ],
              [
                "id"=>2,
                "nom"=>"veggie",
                "desc"=>"le sandwich végétal"
              ]
            ]
        ]
      );
    }
    public function getCatalogueId($id){
      $tab =
        [
            "type"=>"collection",
            "meta"=>[
              "count"=>3,
              "locale"=>"fr-FR"],
            "categorie"=>[
              [
                "id"=>0,
                "nom"=>"tradi",
                "desc"=>"le sandwich classique"
              ],
              [
                "id"=>1,
                "nom"=>"bio",
                "desc"=>"le sandwich bio et local"
              ],
              [
                "id"=>2,
                "nom"=>"veggie",
                "desc"=>"le sandwich végétal"
              ]
            ]
        ]
      ;
      return json_encode($tab['categorie'][$id]);

    }
  }
?>
