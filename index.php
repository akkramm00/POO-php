<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <h1>Les classes, les attributs et les methodes</h1>
    <?php
class Voiture {
  private $couleur = "rouge";
  private $vitesse = 0 ;
  public function afficherCouleur () {
    return $this -> couleur ;
  }
  public function repeindre($co) {
    $this -> couleur = $co ;
  }
  public function accelerer () {
    $this -> vitesse ++ ;
  }
  public function afficherCompteur () {
    return $this -> vitesse;
  }
}
$berline = new Voiture() ;
$berline -> accelerer() ;
$berline -> accelerer() ;
$berline -> accelerer() ;
$berline -> accelerer() ;
$berline -> accelerer() ;
$berline -> accelerer() ;

  echo $berline -> afficherCompteur() ;
// generalement les attributs il faut les déclarer autant que privé pour eviter que quelconque poura les modifier a l'interieur de la classe.
?>

  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>