<?php

$bd = new SQLite3("filmes.db");

$sql  = "DROP TABLE IF EXISTS filmes";

if ($bd->exec($sql)) 
    echo"\ntabela filmes apagada\n"; 


$sql = "CREATE TABLE filmes (
        id INTEGER PRIMARY KEY  AUTOINCREMENT,
        titulo VARCHAR (200) NOT NULL,
        poster VARCHAR (200),
        sinopse TEXT,
        nota DECIMAL (3,1) 
    )
";

if ($bd->exec($sql)) 
    echo"\ntabela filmes criada\n"; 
    else
    echo"\nerro ao criar tabela filmes\n"; 

$sql = "INSERT INTO filmes (id, titulo, poster, sinopse, nota) VALUES (
    
                '42 - A História de Uma Lenda',
            'https://image.tmdb.org/t/p/w300/9A2dpwg2ywDEU4h7SIwPWCt7dUJ.jpg',
            'Jackie Robinson é um jogador de baseball que disputa a liga nacional dos negros até ser recrutado por Branch Rickey, o executivo de um time que disputa a maior competição do esporte nos Estados Unidos. Rickey quer que Robinson seja o primeiro negro a disputar a Major League na era moderna, o que faz com que ambos tenham que enfrentar o racismo existente não apenas da torcida e da diretoria, mas também dentro dos campos.',
            9.7    
)";

if ($bd->exec($sql)) 
    echo "\nfilmes inseridos com sucesso\n"; 
else 
    echo "\nerro ao inserir filmes\n"; 

    $sql = "INSERT INTO filmes (titulo, poster, sinopse, nota) VALUES (
        'Pantera Negra',
        'https://image.tmdb.org/t/p/w300/7iIfPlDBkb6s7ZzxrhQCHtJ1reE.jpg',
        'Após a morte do Rei T'Chaka, o príncipe T'Challa retorna a Wakanda para a cerimônia de coroação. Nela são reunidas as cinco tribos que compõem o reino, sendo que uma delas, os Jabari, não apoia o atual governo. T'Challa logo recebe o apoio de Okoye, a chefe da guarda de Wakanda, da irmã Shuri, que coordena a área tecnológica do reino, e também de Nakia, a grande paixão do atual Pantera Negra, que não quer se tornar rainha. Juntos, eles estão à procura de Ulysses Klaue, que roubou de Wakanda um punhado de vibranium, alguns anos atrás.',
        9.9
    )";


    $sql = "INSERT INTO filmes (titulo, poster, sinopse, nota) VALUES (  
        'Get On Up: A História de James Brown',
        'https://image.tmdb.org/t/p/w300/eodvYgqvqQylOWsB9CJE637AxRR.jpg',
        'Ninguém jamais conseguiu ensinar-lhe regras. Então, desde o início seu destino foi quebrá-las. Baseado na incrível história do PAI do SOUL, este filme mostra uma corajosa e profunda visão da música, dos movimentos e humores de James Brown (Chadwick Boseman), lecando o público na jornada desde sua infância pobre, até a sua evolução a uma das mais influentes figuras do século 20.',
        9.5
)";

if ($bd->exec($sql)) 
echo "\nfilmes inseridos com sucesso\n"; 
else 
echo "\nerro ao inserir filmes\n"; 


$sql = "INSERT INTO filmes (titulo, poster, sinopse, nota) VALUES (
    'Crime Sem Saída',
    'https://image.tmdb.org/t/p/w300/i4AWAMPxqNpYTvp0RXL4JSKg7hh.jpg',
    'Um detetive da polícia de Nova Iorque recebe um complexo desafio no trabalho: ele precisa achar e prender um assassino de policiais que está à solta na cidade. Realizar a prisão do criminoso implicaria em recuperar a honra que ele perdeu durante algumas tarefas mal executadas nos últimos anos. No entanto, quanto mais ele avança na investigação mais ele percebe que os assassinatos se tratam de uma conspiração assombrosa entre criminosos e membros de sua própria categoria.',
    9.1
)";

if ($bd->exec($sql)) 
echo "\nfilmes inseridos com sucesso\n"; 
else 
echo "\nerro ao inserir filmes\n";


if ($bd->exec($sql)) 
echo "\nfilmes inseridos com sucesso\n"; 
else 
echo "\nerro ao inserir filmes\n";

?>