<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <h1>Les classes, les attributs et les methodes</h1>
    <?php
class Voiture {
  private $couleur;
  private $vitesse;
  public function __construct($co ="rouge",$vi = 0) {
    $this -> couleur = $co ;
    $this -> vitesse = $vi ;
    }
    public function __destruct() {
      $this->vitesse = 0 ;
  } // le construcor est appelé au moment de l'instanciation
  public function accelerer () {
    $this -> vitesse ++ ;
  }
  public function afficherCompteur () {
    return $this -> vitesse;
  }
}
$berline = new Voiture("blanc", 10) ; // ici c'est l'instanciation.
  echo $berline -> afficherCompteur() ;
// generalement les attributs il faut les déclarer autant que privé pour eviter que quelconque poura les modifier a l'interieur de la classe.a la non optimisation du code .

// il est déconseillé d'instancier les attributs pendant la déclaration de la class car ca amène 
?>

  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>