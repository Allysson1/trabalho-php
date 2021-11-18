<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Conhecimento Básico PHP</title>
    <link rel="stylesheet" href="../trabalho-php/css/estilo.css">
</head>

<body>

    <header id="topo">
        <h1 class="h1header">PHP</h1>
    </header>


    <!-- conteúdo principal -->
    <article>

        <!-- estrutura de dados -->
        <h1 id="ced">Estrutura de dados</h1>
        <p id="conceito-dados"> O conceito de estrutura de dados é um estudo dentro da
            área da programação, onde o principal objetivo é apresentar
            dados organizados de uma maneira legível para o computador
            interpretar.
            Uma estrutura de dados pode ser armazenada dentro do próprio
            computador, por esse motivo é utilizada em diversos trabalhos
            de criação de software e bancos de dados utilizando linguagens
            como python, php, SQL, C# etc.
        </p>

        <p>As principais estruturas de dados utilizadas atualmente são Listas,
            Árvores, Grafos e Pilhas. Abaixo estão alguns exemplos de como
            utilizá-las corretamente.</p>


        <!-- lista -->
        <h1 id="lista">Conceito de lista</h1>
        <p id="conceito-lista">A lista em php pode ser interpretada como uma
            lista de compras que você irá fazer no mercado. Com a lista em
            php é possível adicionar limites aos itens que nela serão colocados.
        </p>
        <p id="lista-code">exemplo em codigo</p>



        <!-- fila -->
        <h1 id="fila">conceito de fila</h1>
        <p id="conceito-fila">Com este exemplo de organização de dados, conseguimos colocar
            dados um atrás do outro exatamente como uma fila de pessoas em
            um caixa de supermercado por exemplo.</p>
        <p>Exemplo:</p>


        <img src="../trabalho-php/images/filacode.png" id="fila-code" alt="Imagem mostrando um exemplo de fila em php">

        <p>Obs: A tag "print_r" exibe a ordem de cada item alocado além do conteúdo da lista. É possivel que o resultado apareça como o exemplo a seguir:</p>
        <p> "Array ( [0] => Allysson [1] => Ana [2] => Júlio [3] => Nayara ) )"</p>



        <!-- Pilha -->
        <h1 id="pilha">Conceito de pilha</h1>
        <p id="conceito-pilha">Na programação, pilhas são estruturas que armazenam
            elementos em uma ordem específica, e no caso de uma pilha, os últimos
            adicionados nela se tornam os primeiros. Pense em uma pilha de livros,
            o primeiro que você coloca vira base para os outros, logo, o primeiro
            livro adicionado se torna o último da pilha, enquanto o último
            adicionado fica por cima, se tornando o primeiro da pilha.</p>
        <p id="pilha-code">exemplo:</p>

        <img src="../trabalho-php/images/pilhacode.png" id="pilha-code" alt="Imagem mostrando um exemplo de pilha em php">

        <p>Seguindo a lógica de que o ultimo colocado é o que fica por
            cima em uma pilha,o resultado no navegador para este código
            é "o primeiro da pilha é o prato 4", lembrando que a posição "$pilha[0]" é a primeira. </p>

        <p>Agora um exemplo inserindo mais itens na pilha:</p>

        <img src="../trabalho-php/images/pilhacode2.png" id="pilha-code" alt="Imagem mostrando um exemplo de pilha em php">

        <p>Agora o reslutado de $pilha[0] passa a ser "o primeiro da pilha é o prato 7".</p>

        <!-- arvore -->
        <h1 id="arvore">Conceito de árvore</h1>
        <p id="conceito-arvore">Seu uso é mais voltado a dados não lineares que
            podem ter diversas variáveis. A arvore é composta por vários nós que
            possuem ligação com o elemento raiz. Um exemplo de árvore muito
            conhecida por todos é a árvore genealógica, onde a partir do termo
            Pai e Mãe, surgem vários galhos mostrando as gerações que vieram
            posteriormente. A árvore é um conceito muito mais fácil de lidar,
            uma vez que é usada em várias outros tipos de casos como Banco de
            dados e pasta de arquivos dentro de outras pastas.</p>
        <p id="arvore-code">exemplo em codigo</p>

    </article>




    <!-- menu fixo lateral esquerdo -->
    <aside>
        <ul>
            <li class="principal"><a href="index.php#ced">Estrutura de dados</a></li>
            <li class="sub"><a href="index.php#conceito-dados">conceito</li>

            <li class="principal"><a href="index.php#lista">Conceito de lista</a></li>
            <li class="principal"><a href="index.php#conceito-lista">como usar lista no php</a></li>
            <li class="sub"><a href="index.php#lista-code">exemplo em codigo</a></li>

            <li class="principal"><a href="index.php#fila">conceito de fila</a></li>
            <li class="principal"><a href="index.php#conceito-fila">como usar fila no php</a></li>
            <li class="sub"><a href="index.php#fila-code">exemplo em codigo</a></li>

            <li class="principal"><a href="index.php#pilha">conceito de Pilha</a></li>
            <li class="principal"><a href="index.php#conceito-pilha">como usar Pilha no php</a></li>
            <li class="sub"><a href="index.php#pilha-code">exemplo em codigo</a></li>

            <li class="principal"><a href="index.php#arvore">conceito de Árvore</a></li>
            <li class="principal"><a href="index.php#conceito-arvore">como usar árvore no php</a></li>
            <li class="sub"><a href="index.php#arvore-code">exemplo em codigo</a></li>

        </ul>
    </aside>


</body>


<footer>
    <ul class="ulfooter">
        <li>Integrantes do Grupo:</li>
        <li>Allysson Ernandes Gomes de Oliveira RA:2650832113020</li>
        <li>Ana Clara</li>
        <li>Júlio Teixeira</li>
        <li>Nayara Jessica</li>
    </ul>

    <h5><a href="index.php#topo">Voltar ao Topo</a></h5>

</footer>

</html>