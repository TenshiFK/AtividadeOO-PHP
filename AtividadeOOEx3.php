<?php
//Exercício 3 da segunda parte

// Definindo o namespace 'Loja'
namespace Loja;
// Crie duas classes, 'Cliente' e 'Pedido', no namespace 'Loja'.
// Em seguida, crie uma classe 'Pagamento' em um namespace diferente, por exemplo, 'Financeiro'.
// Demonstre a utilização das classes em seus respectivos namespaces.
echo"EX 3";
echo "<br>";

// Definindo a classe 'Cliente' no namespace 'Loja'
class Cliente {
    private $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($novoNome) {
        $this->nome = $novoNome;
    }
}

// Definindo a classe 'Pedido' no namespace 'Loja'
class Pedido {
    private $id;
    private $cliente;

    public function __construct($id, Cliente $cliente) {
        $this->id = $id;
        $this->cliente = $cliente;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($novoId) {
        $this->id = $novoId;
    }

    public function getCliente() {
        return $this->cliente;
    }
    public function setCliente($novoCliente) {
        $this->cliente = $novoCliente;
    }
}

// Definindo o namespace 'Financeiro' e a classe 'Pagamento'
namespace Financeiro;

    class Pagamento{
        private $id;
        private $valor;

        public function __construct($id, $valor) {
            $this->id = $id;
            $this->valor = $valor;
        }

        public function getIdPagamento() {
            return $this->id;
        }

        public function setIdPagamento($novoIdPagamento) {
            $this->id = $novoIdPagamento;
        }

        public function getValor() {
            return $this->valor;
        }

        public function setValor($novoValor) {
            $this->valor = $novoValor;
        }
    }

// Utilizando as classes
use Loja\Cliente as Client; 
use Loja\Pedido as NovoPedido;
use Financeiro\Pagamento as Compra;

$cliente = new Client("João");
$pedido = new NovoPedido(1, $cliente);
$pagamento = new Compra(1,  100.00);

echo "Cliente: " . $pedido->getCliente()->getNome() . "<br>";
echo "Pedido ID: " . $pedido->getId() . "<br>";
echo "Pagamento ID: " . $pagamento->getIdPagamento() . "<br>";
echo "Valor do Pagamento: " . $pagamento->getValor() . "<br>";

?>