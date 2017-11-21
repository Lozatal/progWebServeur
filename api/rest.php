<?php
  require_once __DIR__ . '/../src/vendor/autoload.php';
  use \Psr\Http\Message\ServerRequestInterface as Request;
  use \Psr\Http\Message\ResponseInterface as Response;
  use \lbs\control\CatalogueControlleur as Catalogue;

  $configuration=[
    'settings'=>[
      'displayErrorDetails'=>true,
      'production'=>false
    ]
  ];
  $c=new \Slim\Container($configuration);
  $app=new \Slim\App($c);
  $app->get('/hello/{name}',
    function(Request $req, Response $resp, $args){
      $name=$args['name'];
      $resp->getBody()->write("Hello, $name");
    }
  );
  $app->get('/categories/',
    function(Request $req, Response $resp, $args){
      $resp=$resp->withHeader('Content-Type','application/json');
      $ctrl=new Catalogue($this);
      $resp->getBody()->write($ctrl->getCatalogue());
      return $resp;
    }
  )->setName("categories");
  $app->get('/categories/{name}',
    function(Request $req, Response $resp, $args){
      $name=$args['name'];
      $resp=$resp->withHeader('Content-Type','application/json');
      $ctrl=new Catalogue($this);
      $resp->getBody()->write($ctrl->getCatalogueId($name));
      return $resp;
    }
  )->setName("categoriesID");;

  $app->run();
?>
