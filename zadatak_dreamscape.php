<!DOCTYPE html>
<html>
<body>

<p>Ponudjeni su sledeci ascii graficki objekti: Filip Wolf, Rafa Gitza, Pedro Ptitza <p>
<p>Molimo unesite koliko ponudjenih grafickih objekata zelite da vidite: </p>

</pre>
  <form action="zadatak_dreamscape.php" method="POST">
  Broj Filipa:<br>
  <input type="text" name="wolf"><br>
  Broj Rafa:<br>
  <input type="text" name="pig"><br>
  Broj Pedrova:<br>
  <input type="text" name="bird"><br>

  <p>Da li sam spreman za ludilo ? </p>
  <input type="radio" name="gender" value="1"> Yesam<br>
  <input type="radio" name="gender" value="2"> Ruzan sam i nisam<br><br>
  <input type="submit" value="Let's fucking rave">
  </form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!isset($_POST["gender"])) {
      echo "<br>Selektuj jebenu optziju ";
      exit();
    }

    if ($_POST["gender"] == 2 ) {
        header("Location: http://www.xvideos.com");
        exit();
    }

    class AsciiSlika
    {
        private $ime;
        private $broj_karaktera;

        public function display() {}

    }

    class AsciiVukovi extends AsciiSlika
    {
        public function __construct ($ime_param, $broj_karaktera_param)
        {
            $this->ime = $ime_param;
            $this->broj_karaktera = $broj_karaktera_param;
        }
        public function display()
        {
        ?>

        <pre>
        #############################################################
        ###################################################   #######
        ###############################################   /~\   #####
        ############################################   _- `~~~', ####
        ##########################################  _-~       )  ####
        #######################################  _-~          |  ####
        ####################################  _-~            ;  #####
        ##########################  __---___-~              |   #####
        #######################   _~   ,,                  ;  `,,  ##
        #####################  _-~    ;'                  |  ,'  ; ##
        ###################  _~      '                    `~'   ; ###
        ############   __---;                                 ,' ####
        ########   __~~  ___                                ,' ######
        #####  _-~~   -~~ _                               ,' ########
        ##### `-_         _                              ; ##########
        #######  ~~----~~~   ;                          ; ###########
        #########  /          ;                        ; ############
        #######  /             ;                      ; #############
        #####  /                `                    ; ##############
        ###  /                                      ; ###############
        #                                            ################
        </pre>
<?php   }

        public function getBrojKaraktera()
        {
            return $this->broj_karaktera;
        }
    }

    class AsciiSvinje extends AsciiSlika
    {
        public function __construct ($ime_param, $broj_karaktera_param)
        {
            $this->ime = $ime_param;
            $this->broj_karaktera = $broj_karaktera_param;
        }
        public function display()
        { ?>
          <pre>
            _,--.       ,--._
            \  > `-"""-' <  /
             `-.         .-'
               / 'e___e` \
              (   (o o)   )
              _\_  `='  _/_
             / /|`-._.-'|\ \
            / /||_______||\ \
          _/ /_||=======||_\ \_
          / _/==||       ||==\_ \
          `'(   ^^       ^^   )`'
            \               /
             \______|______/
             |______|______|
               )__|   |__(
              /   ]   [   \
              `--'     `--'

          </pre>
    <?php }

        public function getBrojKaraktera()
        {
            return $this->broj_karaktera;
        }
    }

    class AsciiPtice extends AsciiSlika
    {
        public function __construct ($ime_param, $broj_karaktera_param)
        {
            $this->ime = $ime_param;
            $this->broj_karaktera = $broj_karaktera_param;
        }
        public function display()
        {
        ?>
        <pre>
             ___
           .'``.``.
        __/ (o) `, `.
        '-=`,     ;   `.
            \    :      `-.
            /      .'         `.
            |    (      `.     `-.._
            \     \` ` `. \         `-.._
             `.   ;`-.._ `-`._.-. `-._   `-._
               `..'     `-.```.  `-._ `-.._.'
                 `--..__..-`--'      `-.,'
                    `._)`/

        </pre>
  <?php }

        public function getBrojKaraktera()
        {
            return $this->broj_karaktera;
        }

    }

    $wolf=new AsciiVukovi("fix", 600);
    $pig=new AsciiSvinje("rafa", 500);
    $bird=new AsciiPtice("pedro", 400);

    for($i=0; $i < $_POST["wolf"]; $i++) {
        $wolf->display();
    }

    for($j=0; $j < $_POST["pig"]; $j++) {
        $pig->display();
    }

    for($k=0; $k < $_POST["bird"]; $k++) {
        $bird->display();
    }

   $sum=$i*$wolf->getBrojKaraktera() + $j*$pig->getBrojKaraktera() + $k*$bird->getBrojKaraktera();
   echo "Ukupan broj karaktera za crtanje slika: <b>$sum<b>";

}
?>

</body>
</html>
