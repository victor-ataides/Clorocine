<?php include "cabecalho.php" ?>

<?php

$bd = new SQLite3("filmes.db");
$sql = "SELECT * FROM filmes";
$filmes = $bd->query ($sql);
    
$filme1 = [
  "titulo"=>"42 - A História de Uma Lenda",
    "nota"=> 9.7,
    "sinopse"=> "Jackie Robinson é um jogador de baseball que disputa a liga nacional dos negros até ser recrutado por Branch Rickey, o executivo de um time que disputa a maior competição do esporte nos Estados Unidos. Rickey quer que Robinson seja o primeiro negro a disputar a Major League na era moderna, o que faz com que ambos tenham que enfrentar o racismo existente não apenas da torcida e da diretoria, mas também dentro dos campos.",
    "poster"=> "https://image.tmdb.org/t/p/w300/9A2dpwg2ywDEU4h7SIwPWCt7dUJ.jpg"
]; 
$filme2 = [
    "titulo"=>"Pantera Negra",
    "nota"=> 9.9,
    "sinopse"=> "Após a morte do Rei T'Chaka, o príncipe T'Challa retorna a Wakanda para a cerimônia de coroação. Nela são reunidas as cinco tribos que compõem o reino, sendo que uma delas, os Jabari, não apoia o atual governo. T'Challa logo recebe o apoio de Okoye, a chefe da guarda de Wakanda, da irmã Shuri, que coordena a área tecnológica do reino, e também de Nakia, a grande paixão do atual Pantera Negra, que não quer se tornar rainha. Juntos, eles estão à procura de Ulysses Klaue, que roubou de Wakanda um punhado de vibranium, alguns anos atrás.",
    "poster"=> "https://image.tmdb.org/t/p/w300/7iIfPlDBkb6s7ZzxrhQCHtJ1reE.jpg"
];
$filme3 = [
	"titulo"=> "Get On Up: A História de James Brown",
    "nota"=>9.5,
    "sinopse"=> "Ninguém jamais conseguiu ensinar-lhe regras. Então, desde o início seu destino foi quebrá-las. Baseado na incrível história do PAI do SOUL, este filme mostra uma corajosa e profunda visão da música, dos movimentos e humores de James Brown (Chadwick Boseman), lecando o público na jornada desde sua infância pobre, até a sua evolução a uma das mais influentes figuras do século 20.",
    	"poster"=>"https://image.tmdb.org/t/p/w300/eodvYgqvqQylOWsB9CJE637AxRR.jpg"
];
$filme4 = [
	"titulo"=>"Crime Sem Saída",
	"nota"=>9.1,
	"sinopse"=>"Um detetive da polícia de Nova Iorque recebe um complexo desafio no trabalho: ele precisa achar e prender um assassino de policiais que está à solta na cidade. Realizar a prisão do criminoso implicaria em recuperar a honra que ele perdeu durante algumas tarefas mal executadas nos últimos anos. No entanto, quanto mais ele avança na investigação mais ele percebe que os assassinatos se tratam de uma conspiração assombrosa entre criminosos e membros de sua própria categoria.",
	"poster"=>"https://image.tmdb.org/t/p/w300/i4AWAMPxqNpYTvp0RXL4JSKg7hh.jpg"
];

//$filmes = [$filme1, $filme2, $filme3, $filme4];

?>

<body>
    <nav class="nav-extended blue-grey lighten-4">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li class="active"><a href="galeria.php">Galeria</a></li>
                <li><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1>CHADCINE</h1>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent blue-grey darken-1">
                <li class="tab"><a class="active" href="#test1">Todos</a></li>
                <li class="tab"><a href="#test2">Assistidos</a></li>
                <li class="tab"><a href="#test3">Favoritos</a></li>
            </ul>
        </div>
    </nav>

<div class="container">
    <div class="row">

        <?php while ($filme = $filmes->fetchArray()) : ?>
            <div class="col s12 m6 l3">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="<?= $filme["poster"]?>">
                        <a class="btn-floating halfway-fab waves-effect waves-light red">
                        <i class="material-icons">favorite_border</i>
                        </a>
                        </div>
                        <div class="card-content">
                        <p class="valign-wrapper">
                        <i class="material-icons amber-text">star</i> <?= $filme["nota"]?>
                        </p>
                        <span class="card-title"><?= $filme["titulo"]?></span>

                        <p><?= $filme["sinopse"] ?></p>
                    </div>
                </div>
            </div>
        <?php endwhile ?>
    </div>
</div>


</div>

</body>

</html>