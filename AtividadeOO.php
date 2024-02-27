<?php
//Exercícios do 1 ao 5 da primeira parte

// Crie uma classe chamada 'Livro' com propriedades privadas 'titulo' e 'autor'.
// Implemente um método construtor para inicializar essas propriedades.
// Em seguida, crie um objeto da classe 'Livro' e exiba suas propriedades.

echo"EX 1";
echo "<br>";

    class Livro1{
        private $titulo;
        private $autor;

        public function __construct($titulo, $autor){
            $this->titulo = $titulo;

            $this->autor = $autor;
        }

        public function mostrarInfo(){
            echo"Nome do livro: {$this->titulo}";
            echo "<br>";
            echo"Nome do autor: {$this->autor}";
            echo "<br>";
        }

    }

$livro1 = new Livro1("Os Crimes da Rua Morgue", "Edgar Allan Poe");

$livro1->mostrarInfo();

echo "<br>";
echo "<br>";

// Modifique a classe 'Livro' do exercício anterior.
// Adicione métodos públicos 'setTitulo($novoTitulo)' e 'setAutor($novoAutor)' que permitem modificar as propriedades.
// Use esses métodos para alterar o título e o autor do objeto criado.
echo"EX 2";
echo "<br>";

    class Livro2{
        private $titulo;
        private $autor;

        public function __construct($titulo, $autor){
            $this->titulo = $titulo;

            $this->autor = $autor;
        }
        public function getTitulo(){
            return $this->titulo;
        }
        public function getAutor(){
            return $this->autor;
        }

        public function setTitulo($novoTitulo){
            $this->titulo = $novoTitulo;
        }
        public function setAutor($novoAutor){
            $this->autor = $novoAutor;
        }
    }

    $livro1 = new Livro2("Percy Jackson", "Rick Riordan");

    echo "Nome do livro:" . $livro1->getTitulo() ."<br>";
    echo "Nome do autor:". $livro1->getAutor() ."<br>";

echo "<br>";
echo "<br>";

// Crie uma classe base chamada 'Animal' com propriedades privadas 'nome' e 'idade'.
// Implemente um método construtor e métodos públicos para acessar e modificar essas propriedades.
// Crie uma classe derivada chamada 'Cachorro' que herda de 'Animal' e sobrescreva o método de acesso à propriedade 'idade'.
// Crie um objeto da classe 'Cachorro' e exiba suas propriedades.
echo"EX 3";
echo "<br>";

    class Animal{
        private $nome;
        private $idade;

        public function __construct($nome, $idade){
            $this->nome = $nome;

            $this->idade = $idade;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getIdade(){
            return $this->idade;
        }

        public function setNome($novoNome){
            $this->nome = $novoNome;
        }

        public function setIdade($novaIdade){
            $this->idade = $novaIdade;
        }
    }

    class Cachorro extends Animal{

        public function calcularIdadeCaoEmAnosHumanos($idade) {
            $idadeHumana =  0;
        
            if ($idade <=  1) {
                $idadeHumana = $idade *  15;
            } elseif ($idade <=  2) {
                $idadeHumana = $idade *  12;
            } elseif ($idade <=  3) {
                $idadeHumana = $idade *  9.3;
            } elseif ($idade <=  4) {
                $idadeHumana = $idade *  8;
            } elseif ($idade <=  5) {
                $idadeHumana = $idade *  7.2;
            } else {
                $idadeHumana =  36 + ($idade -  5) *  7;
            }
        
            return $idadeHumana;
        }
    }

$cachorro = new Cachorro("Yuri", 8);

    echo "Nome do cão:" . $cachorro->getNome() ."<br>";
    echo "Idade do cão:". $cachorro->getIdade() ."<br>";
    echo "Idade do cão em idade humana:". $cachorro->calcularIdadeCaoEmAnosHumanos($cachorro->getIdade()) ."<br>";

echo "<br>";
echo "<br>";

// Modifique a classe 'Cachorro' do exercício anterior.
// Torne as propriedades 'nome' e 'idade' protegidas e utilize métodos getters e setters para acessá-las e modificá-las.
echo"EX 4";
echo "<br>";

    class Animal2{
        protected $nome;
        protected $idade;

        public function __construct($nome, $idade){
            $this->nome = $nome;

            $this->idade = $idade;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getIdade(){
            return $this->idade;
        }

        public function setNome($novoNome){
            $this->nome = $novoNome;
        }

        public function setIedade($novaIdade){
            $this->idade = $novaIdade;
        }
    }

    class Cachorro1 extends Animal{

    }

$cachorro1 = new Cachorro1("Yuri", 8);

echo "Nome do cão:" . $cachorro1->getNome() . "<br>"; // Acessando o nome
echo "Idade do cão:" . $cachorro1->getIdade() . "<br>"; // Acessando a idade
echo "<br>";
$cachorro1->setNome("Max"); // Modificando o nome
echo "Novo nome do cão:" . $cachorro1->getNome() . "<br>"; // Acessando o novo nome
$cachorro1->setIdade(9); // Modificando a idade
echo "Nova idade do cão: " . $cachorro1->getIdade() . "<br>"; // Acessando a nova idade

echo "<br>";
echo "<br>";

// Crie uma classe chamada 'Calculadora' com um método estático chamado 'soma' que recebe dois números e retorna a soma.
// Não é necessário instanciar a classe para utilizar o método 'soma'.
// Demonstre a utilização deste método.
echo"EX 5";
echo "<br>";

    class Calculadora {
        public static function soma($numero1, $numero2) {
            return $numero1 + $numero2;
        }
    }

$resultado = Calculadora::soma(5,  3);
echo "A soma é: $resultado";

?>