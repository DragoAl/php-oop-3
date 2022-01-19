<!-- /**
* 
*      Definire classe User:
*          ATTRIBUTI (private):
*          - username 
*          - password
*          - age
*          
*          METODI:
*          - costruttore che accetta username, e password
*          - proprieta' getter/setter
*          - printMe: che stampa se stesso
*          - toString: "username: age [password]"
* 
*          ECCEZIONI:
*          - scatenare eccezione quando username e' minore di 3 caratteri o maggiore di 16
*          - scatenare eccezione se password non contiene un carattere speciale (non alpha-numerico)
*          - scatenare eccezione se age non e' un numero
* 
*          NOTE:
*          - per testare il singolo carattere di una stringa
* 
*      Testare la classe appena definita con dati corretti e NON corretti all'interno di un
*      try-catch e eventualmente informare l'utente del problema
* 
*/ -->

<?php
    class User {
        private $username;
        private $password;
        private $age;

        public function __construct($username, $password) {
            $this -> setUsername($username);
            $this -> setPassword($password);
        }
        public function getUsername(){
            return $this -> username;

        }
        public function setUsername($username){
            if (strlen($username)< 3 || strlen($username) > 16) 
                throw new Exception("L'username deve avere minimo 3 caratteri e massimo 16");
                $this -> username = $username;            
        }
        public function getPassword(){
            return $this -> password;
        }
        public function setPassword($password){
            if (ctype_alnum($password))
                throw new Exception("La password deve contenere almeno un carattere speciale");
                $this -> password = $password;
        }
        public function getAge(){
            return $this -> age;
        }
        public function setAge($age){
            if (!is_numeric($age))
            throw new Exception("L'età deve essere un numero");
            $this -> age = $age;
        }
        public function printMe(){
            echo $this;
        }
        public function __toString() {
            return $this -> getUsername(). "<br>". " Età ". $this -> getAge()."<br>"."[". $this -> getPassword(). "]". "<br>";        
        }
    }
    try {
        echo "<h2> CLASSE USER </h2>";
        $user1 = new User("drago", "boolean/46");
        $user1 -> setAge(29);
    
        $user1 -> printMe();
        echo "<br>------------------<br>";
    } catch (Exception $e) {
        echo $e . "<br><h3>" . $e -> getMessage() . "</h3>";
    }


?>


<!-- *      Definire classe Computer:
*          ATTRIBUTI:
*          - codice univoco
*          - modello
*          - prezzo
*          - marca
* 
*          METODI:
*          - costruttore che accetta codice univoco e prezzo
*          - proprieta' getter/setter per tutte le variabili d'istanza
*          - printMe: che stampa se stesso (come quella vista a lezione)
*          - toString: "marca modello: prezzo [codice univoco]"
* 
*          ECCEZIONI:
*          - codice univoco: deve essere composto da esattamente 6 cifre (no altri caratteri)
*          - marca e modello: devono essere costituiti da stringhe tra i 3 e i 20 caratteri
*          - prezzo: deve essere un valore intero compreso tra 0 e 2000
* 
*      Testare la classe appena definita con tutte le casistiche interessanti per verificare
*      il corretto funzionamento dell'algoritmo -->

<?php
    class Computer {
        private $id;
        private $pcModel;
        private $price;
        private $brand;

        public function __construct($id, $price){
            $this -> setId($id);
            $this -> setPrice($price);
        }
        public function getId(){
            return $this -> id;

        }
        public function setId($id){
            if ((strlen($id)!= 6) || (!is_numeric($id)))
                throw new Exception("La password deve contenere esattamente 6 numeri");
                $this -> id = $id;
            
            
        }
        public function getPcModel(){
            return $this -> pcModel;
        }
        public function setPcModel($pcModel){
            if ((strlen($pcModel)< 3) || (strlen($pcModel) > 20))
            throw new Exception("Il Modello può avere un numero di caratteri compresi tra 3 e 20");

            $this -> pcModel = $pcModel;            
        }
        public function getPrice(){
            return $this -> price;
        }
        public function setPrice($price){
            // if ((is_numeric($price) < 0) || (is_numeric($price) >2000))
            if ($price < 0 || $price >2000)

            throw new Exception("Il Prezzo deve essere compreso tra 0 e 2000");

            $this -> price = $price;
        }
        public function getBrand(){
            return $this -> brand;
        }
        public function setBrand($brand){
            if ((strlen($brand)< 3) || (strlen($brand) > 20))
            throw new Exception("La Marca del Pc può avere un numero di caratteri compresi tra 3 e 20");

            $this -> brand = $brand;
        }
        public function printME() {
            echo $this;
        }
        public function __toString() {
            return $this -> getBrand(). "  ". $this -> getPcModel(). " : ". "$". $this -> getPrice(). "   [" ."ID:".$this -> getId(). "]";
                   

        }
            
        
    }
    try {
        echo "<h2> CLASSE COOMPUTER </h2>";

        $pc1 = new Computer("234564", 1980);
        $pc1 -> setPcModel("MacBook Pro");
        $pc1 -> setBrand("Apple");
        $pc1 -> printMe();
    } catch (Exception $e) {
        echo $e . "<br><h3>" . $e -> getMessage() . "</h3>";
    }

?>
