<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->
<?php 

class Movie {

    public $title;
    public $language;
    public $genre;
    public $details;

    public static function MethodHello() {
        echo '--Film Details-- <br>';
      }

    function __construct($title, $language, $genre, $details = null)
    {
        $this->title = isset($title) ? $title : 'undefined';
        $this->language = isset($language) ? $language : 'undefined';
        $this->genre = isset($genre) ? $genre : 'undefined';
        $this->details = isset($details) ? $details : 'undefined';
    }
    // function setTitle($title){
    //     $this->title = $title;
    // }
    // function setLanguage($language){
    //     $this->language = $language;
    // }
    // function setGenres($genre){
    //     $this->genre = $genre;
    // }
    // function setDetails($details){
    //     $this->details = $details;
    // }

    function __destruct(){
        self::MethodHello();
        
        echo "Title: {$this->title} <br>
        Language: {$this->language} <br>
        Genre: {$this->genre}<br>
        Details: {$this->details}<br><br>";
        
    }

    // function getTitle(){
    //     return $this->title;
    // }
    // function getLanguage(){
    //     return $this->language;
    // }
    // function getGenres(){
    //     return $this->genre;
    // }
    // function getDetails(){
    //     return $this->details;
    // }

    
}

?>