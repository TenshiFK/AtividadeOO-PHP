<?php
//Exercícios do 1, 2, 4 e 5 da segunda parte
//Exercício 3 está num arquivo apenas dele

// Defina uma classe base 'Veiculo' com propriedades como 'marca' e 'modelo'.
// Crie duas classes derivadas, 'Carro' e 'Moto', que herdam de 'Veiculo'.
// Implemente métodos específicos para cada classe e um método comum para exibir informações gerais.
// Demonstre o polimorfismo chamando o método comum com objetos de ambas as classes derivadas.
echo"EX 1";
echo "<br>";

    class Veiculo{
        private $marca;
        private $modelo;

        public function __construct($marca, $modelo){
            $this->marca = $marca;
            $this->modelo = $modelo;
        }

        public function getMarca(){
            return $this->marca;
        }

        public function getModelo(){
            return $this->modelo;
        }

        public function setMarca($novamarca){
            $this->marca = $novamarca;
        }

        public function setModelo($novoModelo){
            $this->modelo = $novoModelo;
        }

        public function exibirInformacoes(){
            echo "Marca: " . $this->getMarca() . "<br>";
            echo "Modelo: " . $this->getModelo() . "<br>";
        }
    }

    class Moto extends Veiculo{
        private $ano;

        public function __construct($marca, $modelo, $ano){
            parent::__construct($marca, $modelo);
            $this->ano = $ano;
        }

        public function getAno(){
            return $this->ano;
        }

        public function setAno($novoAno){
            $this->ano = $novoAno;
        }

        public function exibirInformacoes(){
            parent::exibirInformacoes();
            echo "Ano: " . $this->getAno() . "<br>";
        }
    }

    class Carro extends Veiculo{
        private $kilometragem;

        public function __construct($marca, $modelo, $kilometragem){
            parent::__construct($marca, $modelo);
            $this->kilometragem = $kilometragem;
        }

        public function getKm(){
            return $this->kilometragem;
        }

        public function setKm($novaKilometragem){
            $this->kilometragem = $novaKilometragem;
        }

        public function exibirInformacoes(){
            parent::exibirInformacoes();
            echo "Kilometragem: " . $this->getKm() . " km<br>";
        }
    }

    $moto = new Moto("Honda", "CBR600RR",  2020);
    $carro = new Carro("Toyota", "Corolla",  120000);
    
    echo "Infos da Moto: <br>";
    $moto->exibirInformacoes();
    echo "<br>";
    echo "Infos do Carro: <br>";
    $carro->exibirInformacoes();

echo "<br>";
echo "<br>";

// Crie uma trait chamada 'Mensagens' que define um método 'enviarMensagem'.
// Crie duas classes, 'EmailSender' e 'SMSSender', que utilizam a trait 'Mensagens'.
// Demonstre a utilização da trait em ambas as classes.
echo"EX 2";
echo "<br>";

    trait Mensagem{
        public function enviarMensagem($mensagem){
            echo "Mensagem enviada: $mensagem";
        }
    }
    
    class EmailSender {
        use Mensagem;
    
        public function enviarEmail($email, $mensagem) {
            echo "Destinatário:" . $email ."<br>";
            $this->enviarMensagem($mensagem);
        }
    }
    
    class SMSSender {
        use Mensagem;
    
        public function enviarSMS($numero, $mensagem) {
            echo "Número de telefone:" . $numero ."<br>";
            $this->enviarMensagem($mensagem);
        }
    }
    
    $emailSender = new EmailSender();
    $emailSender->enviarEmail("alguem@email.com", "Olá, este é um e-mail de teste.");
    
    echo "<br>";
    echo "<br>";
    
    $smsSender = new SMSSender();
    $smsSender->enviarSMS("1234567890", "Olá, este é um SMS de teste.");

echo "<br>";
echo "<br>";

// Crie uma classe base 'Animal' com um método 'emitirSom'.
// Crie duas classes derivadas, 'Cachorro' e 'Gato', que herdam de 'Animal'.
// Sobrescreva o método 'emitirSom' em ambas as classes derivadas para representar o som característico.
// Demonstre o polimorfismo chamando o método comum com objetos de ambas as classes derivadas.
echo"EX 4";
echo "<br>";

    class Animal1{

        private $animal;

        public function __construct($animal) {  
            $this->animal = $animal;
        }
        public function getAnimal() {
            return $this->animal;
        }
        public function setAnimal($novoAnimal) {
            $this->animal = $novoAnimal;
        }

        public function emitirSom(){
            echo 'Som do animal: ';
        }
    }

    class Cachorro1 extends Animal1 {
        public function __construct() {
            parent::__construct("Cachorro");
        }
    
        public function emitirSom() {
            echo 'Au... Au...';
        }
    }
    
    class Gato1 extends Animal1 {
        public function __construct() {
            parent::__construct("Gato");
        }
    
        public function emitirSom() {
            echo 'Miau... Miau...';
        }
    }
    
    // Demonstrando o polimorfismo
    $cachorro = new Cachorro1();
    $gato = new Gato1();
    
    echo 'Nome do animal: ' . $cachorro->getAnimal() . '<br> Som do animal: ';
    $cachorro->emitirSom();
    echo "<br><br>";
    echo 'Nome do animal: ' . $gato->getAnimal() . '<br> Som do animal: ';
    $gato->emitirSom();

echo "<br>";
echo "<br>";

// Crie duas traits, 'LogErro' e 'LogInfo', ambas com um método 'registrarLog'.
// Em seguida, crie uma classe 'Registro' que utiliza ambas as traits.
// Demonstre o uso da classe e resolva possíveis conflitos de métodos.
echo"EX 5";
echo "<br>";

    trait LogErro {
        public function registrarLogErro($log) {
            echo "Log de erro registrado: $log";
        }

    }

    trait LogInfo{
        public function registrarLogInfo($log) {
            echo "Log de info registrado: $log";
        }
    }

    class Registro{
        use LogInfo;
        use LogErro;

        public function registrarInfo($info) {
            $this->registrarLogInfo($info);
        }

        public function registrarErro($erro) {
            $this->registrarLogErro($erro);
        }
    }

    $registro = new Registro();
    $registro->registrarInfo("Sistema funcionando normalmente!");
    echo '<br>';
    $registro->registrarErro('Sistema travando muito!');
?>