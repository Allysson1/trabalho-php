<!-- exemplo de fila -->

 <?php

// $nome = new SplQueue();

// $nome -> enqueue("Allysson");
// $nome -> enqueue("Ana");
// $nome -> enqueue("Júlio");
// $nome -> enqueue("Nayara");

// print_r ($nome); 


 // $nome = array("Allysson", "Ana", "Júlio", "Nayara");

// print($nome);


// $queue = new SplQueue();
// $queue->enqueue("pessoa 1");
// $queue->enqueue("pessoa 2");
// $queue->enqueue("pessoa 3");
// $queue->enqueue("pessoa 4");

// echo $queue->dequeue(); // Remove “pessoa 1”
// echo $queue->dequeue();  







// Exemplo de pilha
$pilha = new SplStack();
$pilha->push("prato 1");
$pilha->push("prato 2");
$pilha->push("prato 3");
$pilha->push("prato 4");

print"o primeiro da pilha é o ". $pilha[0];

echo "<br>";

$pilha->push("prato 6");
$pilha->push("prato 7");

print"o primeiro da pilha é o ". $pilha[0];

?>









