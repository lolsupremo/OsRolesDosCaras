<?php

function limparTela(): void
{

        system('clear');
}

require_once "/modelo/Casa.php";
require_once "/modelo/Carro.php";
require_once "/modelo/Moto.php";
require_once "/modelo/Camioneta.php";
require_once "/modelo/Caminhao.php";
require_once "/modelo/Oficina.php";
require_once "/modelo/BarResenha.php";
require_once "/modelo/PostoResenha.php";

echo "    ____        __            __              ______                   
   / __ \____  / /__     ____/ /___  _____   / ____/___ __________ ______
  / /_/ / __ \/ / _ \   / __  / __ \/ ___/  / /   / __ `/ ___/ __ `/ ___/
 / _, _/ /_/ / /  __/  / /_/ / /_/ (__  )  / /___/ /_/ / /  / /_/ (__  ) 
/_/ |_|\____/_/\___/   \__,_/\____/____/   \____/\__,_/_/   \__,_/____/  \n";

$Motos = [];
$Camionetas = [];
$Caminhaos = [];
$Carros = [];

$Bares = [];
$Casas = [];
$Oficinas = [];
$Postos = [];

$continuar = true;

while ($continuar) {
    $escolha = '0';

    do {
        echo "Oq voce deseja fazer?
    1 - Cadastrar Veiculo
    2 - Cadastrar Estabelecimento
    0 - Ja ta bom de cadastrar, vamos jogar\n";

        $escolha = trim(readline());
        limparTela();

        switch ($escolha) {
            case '1':
                echo "Qual veiculo deseja cadastrar?\n";
                echo "1 - Carro \n";
                echo "2 - Moto \n";
                echo "3 - Camioneta \n";
                echo "4 - Caminhao \n";

                $tipoVeiculo = trim(readline());

                switch ($tipoVeiculo) {
                    case '1':
                        $carro = new Carro();
                        $carro->setCor(trim(readline("Cor: ")));
                        $carro->setModelo(trim(readline("Modelo: ")));
                        $carro->setQntPortas(trim(readline("Quantidade de portas: ")));
                        $carro->setVelMaxima(trim(readline("Velocidade máxima: ")));
                        $carro->setPeso(trim(readline("Peso: ")));
                        $Carros[] = $carro;
                        echo "Carro cadastrado com sucesso!\n";
                        break;

                    case '2':
                        $moto = new Moto();
                        $moto->setCor(trim(readline("Cor: ")));
                        $moto->setModelo(trim(readline("Modelo: ")));
                        $moto->setVelMaxima(trim(readline("Velocidade máxima: ")));
                        $moto->setMaestria(trim(readline("Sua maestria com a moto: ")));
                        $Motos[] = $moto;
                        echo "Moto cadastrada com sucesso!\n";
                        break;

                    case '3':
                        $camioneta = new Camioneta();
                        $camioneta->setCor(trim(readline("Cor: ")));
                        $camioneta->setModelo(trim(readline("Modelo: ")));
                        $camioneta->setVelMaxima(trim(readline("Velocidade máxima: ")));
                        $camioneta->setPeso(trim(readline("Peso: ")));
                        $camioneta->setQntPortas(trim(readline("Quantidade de portas: ")));
                        $camioneta->setCapacidadeCarga(trim(readline("Capacidade de carga: ")));
                        $Camionetas[] = $camioneta;
                        echo "Camioneta cadastrada com sucesso!\n";
                        break;

                    case '4':
                        $caminhao = new Caminhao();
                        $caminhao->setCor(trim(readline("Cor: ")));
                        $caminhao->setModelo(trim(readline("Modelo: ")));
                        $caminhao->setVelMaxima(trim(readline("Velocidade máxima: ")));
                        $caminhao->setPeso(trim(readline("Peso: ")));
                        $caminhao->setQntPortas(trim(readline("Quantidade de portas: ")));
                        $caminhao->setCapacidadeCarga(trim(readline("Capacidade de carga: ")));
                        $caminhao->setQntEixos(trim(readline("Quantidade de eixos: ")));
                        $Caminhaos[] = $caminhao;
                        echo "Caminhão cadastrado com sucesso!\n";
                        break;

                    default:
                        echo "Tente cadastrar um veiculo valido.\n";
                        break;
                }
                break;

            case '2':
                echo "Qual estabelecimento deseja cadastrar?\n";
                echo "1 - Bar \n";
                echo "2 - Casa \n";
                echo "3 - Posto de Gasolina \n";
                echo "4 - Oficina Mecanica \n";

                $tipoEstabelecimento = trim(readline());

                switch ($tipoEstabelecimento) {
                    case '1':
                        $bar = new Bar();
                        $bar->setNome(trim(readline("Qual é o nome do bar: ")));
                        $bar->setDono(trim(readline("Qual é o dono do bar: ")));
                        $bar->setEndereco(trim(readline("Qual é o endereço do bar: ")));
                        $bar->setHorarioFunc(trim(readline("Qual é o horario de funcionamento do bar: ")));
                        $Bares[] = $bar;
                        echo "Bar cadastrado com sucesso!\n";
                        break;

                    case '2':
                        $casa = new Casa();
                        $casa->setNome(trim(readline("Qual é o nome da casa: ")));
                        $casa->setEndereco(trim(readline("Qual é o endereço da casa: ")));
                        $casa->setQtdComodos(trim(readline("Qual é a quantidade de comodos da casa: ")));
                        $Casas[] = $casa;
                        echo "Casa cadastrada com sucesso!\n";
                        break;

                    case '3':
                        $posto = new Posto();
                        $posto->setNome(trim(readline("Qual é o nome do posto: ")));
                        $posto->setEndereco(trim(readline("Qual é o endereço do posto: ")));
                        $posto->setQtdBomba(trim(readline("Qual é a quantidade de bombas do posto: ")));
                        $posto->setDono(trim(readline("Qual é o dono do posto: ")));
                        $posto->setHorarioFunc(trim(readline("Qual é o horario de funcionamento do posto: ")));
                        $Postos[] = $posto;
                        echo "Posto cadastrado com sucesso!\n";
                        break;

                    case '4':
                        $oficina = new Oficina();
                        $oficina->setNome(trim(readline("Qual é o nome da oficina: ")));
                        $oficina->setEndereco(trim(readline("Qual é o endereço da oficina: ")));
                        $oficina->setqtdElevador(trim(readline("Qual é a quantidade de elevadores da oficina: ")));
                        $oficina->setDono(trim(readline("Qual é o dono da oficina: ")));
                        $oficina->setHorarioFunc(trim(readline("Qual é o horario de funcionamento da oficina: ")));
                        $Oficinas[] = $oficina;
                        echo "Oficina cadastrada com sucesso!\n";
                        break;

                    default:
                        echo "Tente cadastrar um estabelecimento valido.\n";
                        break;
                }
                break;

            case '0':
                break 2;

            default:
                echo "Opcao invalida.\n";
                break;
        }
    } while ($escolha != '0');

    $veiculoEscolhido = null;
    $tipoVeiculo = null;
    $estabelecimentoEscolhido = null;
    $tipoEstabelecimento = null;

    do {
        echo "Voce acorda de manhã e percebe que teve um sonho muito louco, onde a resenha te chamava, voce sente que deve fazer um role sem os caras, mas antes de sair de casa voce precisa escolher um veiculo para ir, qual voce vai escolher?\n";

        do {
            echo "1 - Carro \n";
            echo "2 - Moto \n";
            echo "3 - Camioneta \n";
            echo "4 - Caminhao \n";

            $escolha = trim(readline());

            switch ($escolha) {
                case '1':
                    if (count($Carros) === 0) {
                        echo "Não há carros cadastrados.\n";
                        continue 2;
                    }

                    echo "Escolha um carro para ir: \n";
                    foreach ($Carros as $index => $carro) {
                        echo ($index + 1) . " - " . $carro->getModelo() . "\n";
                    }

                    $posicao = (int) trim(readline());
                    if ($posicao >= 1 && $posicao <= count($Carros)) {
                        $veiculoEscolhido = $Carros[$posicao - 1];
                        $tipoVeiculo = '1';
                        echo "Você escolheu o carro: " . $veiculoEscolhido->getModelo() . "\n";
                    } else {
                        echo "Escolha inválida.\n";
                    }
                    break;

                case '2':
                    if (count($Motos) === 0) {
                        echo "Não há motos cadastradas.\n";
                        continue 2;
                    }

                    echo "Escolha uma moto para ir: \n";
                    foreach ($Motos as $index => $moto) {
                        echo ($index + 1) . " - " . $moto->getModelo() . "\n";
                    }

                    $posicao = (int) trim(readline());
                    if ($posicao >= 1 && $posicao <= count($Motos)) {
                        $veiculoEscolhido = $Motos[$posicao - 1];
                        $tipoVeiculo = '2';
                        echo "Você escolheu a moto: " . $veiculoEscolhido->getModelo() . "\n";
                    } else {
                        echo "Escolha inválida.\n";
                    }
                    break;

                case '3':
                    if (count($Camionetas) === 0) {
                        echo "Não há camionetas cadastradas.\n";
                        continue 2;
                    }

                    echo "Escolha uma camioneta para ir: \n";
                    foreach ($Camionetas as $index => $camioneta) {
                        echo ($index + 1) . " - " . $camioneta->getModelo() . "\n";
                    }

                    $posicao = (int) trim(readline());
                    if ($posicao >= 1 && $posicao <= count($Camionetas)) {
                        $veiculoEscolhido = $Camionetas[$posicao - 1];
                        $tipoVeiculo = '3';
                        echo "Você escolheu a camioneta: " . $veiculoEscolhido->getModelo() . "\n";
                    } else {
                        echo "Escolha inválida.\n";
                    }
                    break;

                case '4':
                    if (count($Caminhaos) === 0) {
                        echo "Não há caminhões cadastrados.\n";
                        continue 2;
                    }

                    echo "Escolha um caminhão para ir: \n";
                    foreach ($Caminhaos as $index => $caminhao) {
                        echo ($index + 1) . " - " . $caminhao->getModelo() . "\n";
                    }

                    $posicao = (int) trim(readline());
                    if ($posicao >= 1 && $posicao <= count($Caminhaos)) {
                        $veiculoEscolhido = $Caminhaos[$posicao - 1];
                        $tipoVeiculo = '4';
                        echo "Você escolheu o caminhão: " . $veiculoEscolhido->getModelo() . "\n";
                    } else {
                        echo "Escolha inválida.\n";
                    }
                    break;

                default:
                    echo "Escolha inválida.\n";
                    break;
            }
        } while ($veiculoEscolhido === null);

        limparTela();

        echo "Agora que voce ja escolheu seu veiculo, voce precisa escolher um estabelecimento para ir, qual voce vai escolher?\n";

        do {
            echo "1 - Bar \n";
            echo "2 - Casa \n";
            echo "3 - Posto de Gasolina \n";
            echo "4 - Oficina Mecanica \n";

            $escolha = trim(readline());

            switch ($escolha) {
                case '1':
                    if (count($Bares) === 0) {
                        echo "Não há bares cadastrados.\n";
                        continue 2;
                    }

                    echo "Escolha um bar para ir: \n";
                    foreach ($Bares as $index => $bar) {
                        echo ($index + 1) . " - " . $bar->getNome() . "\n";
                    }

                    $posicao = (int) trim(readline());
                    if ($posicao >= 1 && $posicao <= count($Bares)) {
                        $estabelecimentoEscolhido = $Bares[$posicao - 1];
                        $tipoEstabelecimento = '1';
                        echo "Você escolheu o bar: " . $estabelecimentoEscolhido->getNome() . "\n";
                    } else {
                        echo "Escolha inválida.\n";
                    }
                    break;

                case '2':
                    if (count($Casas) === 0) {
                        echo "Não há casas cadastradas.\n";
                        continue 2;
                    }

                    echo "Escolha uma casa para ir: \n";
                    foreach ($Casas as $index => $casa) {
                        echo ($index + 1) . " - " . $casa->getNome() . "\n";
                    }

                    $posicao = (int) trim(readline());
                    if ($posicao >= 1 && $posicao <= count($Casas)) {
                        $estabelecimentoEscolhido = $Casas[$posicao - 1];
                        $tipoEstabelecimento = '2';
                        echo "Você escolheu a casa: " . $estabelecimentoEscolhido->getNome() . "\n";
                    } else {
                        echo "Escolha inválida.\n";
                    }
                    break;

                case '3':
                    if (count($Postos) === 0) {
                        echo "Não há postos de gasolina cadastrados.\n";
                        continue 2;
                    }

                    echo "Escolha um posto de gasolina para ir: \n";
                    foreach ($Postos as $index => $posto) {
                        echo ($index + 1) . " - " . $posto->getNome() . "\n";
                    }

                    $posicao = (int) trim(readline());
                    if ($posicao >= 1 && $posicao <= count($Postos)) {
                        $estabelecimentoEscolhido = $Postos[$posicao - 1];
                        $tipoEstabelecimento = '3';
                        echo "Você escolheu o posto de gasolina: " . $estabelecimentoEscolhido->getNome() . "\n";
                    } else {
                        echo "Escolha inválida.\n";
                    }
                    break;

                case '4':
                    if (count($Oficinas) === 0) {
                        echo "Não há oficinas mecânicas cadastradas.\n";
                        continue 2;
                    }

                    echo "Escolha uma oficina mecânica para ir: \n";
                    foreach ($Oficinas as $index => $oficina) {
                        echo ($index + 1) . " - " . $oficina->getNome() . "\n";
                    }

                    $posicao = (int) trim(readline());
                    if ($posicao >= 1 && $posicao <= count($Oficinas)) {
                        $estabelecimentoEscolhido = $Oficinas[$posicao - 1];
                        $tipoEstabelecimento = '4';
                        echo "Você escolheu a oficina mecânica: " . $estabelecimentoEscolhido->getNome() . "\n";
                    } else {
                        echo "Escolha inválida.\n";
                    }
                    break;

                default:
                    echo "Escolha inválida.\n";
                    break;
            }
        } while ($estabelecimentoEscolhido === null);

        limparTela();

        switch ($tipoVeiculo) {
            case '1':
                switch ($tipoEstabelecimento) {
                    case '1':
                        echo "Voce chegou no " . $estabelecimentoEscolhido->getNome() . " com seu " . $veiculoEscolhido->getModelo() . ", mas o bar estava fechado, voce decide ir embora e voltar para casa\n";
                        echo "Fim de jogo final 1/16\n";
                        break;
                    case '2':
                        echo "Voce chegou na " . $estabelecimentoEscolhido->getNome() . " com seu " . $veiculoEscolhido->getModelo() . ", mas estava rolando uma resenha na qual voce nao foi convidado, voce decide ir embora e voltar a dormir\n";
                        echo "Fim de jogo final 2/16\n";
                        break;
                    case '3':
                        echo "Voce estava indo para o " . $estabelecimentoEscolhido->getNome() . " com seu " . $veiculoEscolhido->getModelo() . ", mas quando antes de voce chegar la, a gasolina do seu carro acabou, voce vai de a pé para o " . $estabelecimentoEscolhido->getNome() . ", mas quando voce chega la, a resenha ja tinha acabado, mas pelo menos voce conseguiu chegar la e coletar gasolina para o seu carro\n";
                        echo "Fim de jogo final 3/16\n";
                        break;
                    case '4':
                        echo "Voce estava indo para a " . $estabelecimentoEscolhido->getNome() . " com seu " . $veiculoEscolhido->getModelo() . ", mas quando antes de voce chegar la, a galera da oficina mecanica te viu e te chamou para uma resenha, voce decide ir com eles\n";
                        echo "Fim de jogo final 4/16\n";
                        break;
                }
                break;

            case '2':
                switch ($tipoEstabelecimento) {
                    case '1':
                        echo "Voce chegou no " . $estabelecimentoEscolhido->getNome() . " com sua " . $veiculoEscolhido->getModelo() . ", mas como tu furou 5 semafaros e a policia te viu, voce foi preso e nao conseguiu chegar na resenha\n";
                        echo "Fim de jogo final 5/16\n";
                        break;
                    case '2':
                        echo "Voce chegou na " . $estabelecimentoEscolhido->getNome() . " com sua " . $veiculoEscolhido->getModelo() . ", mas como tu furou 5 semafaros e a policia não te viu, voce chegou na resenha na hora certa e conseguiu se divertir com os caras\n";
                        echo "Fim de jogo final 6/16\n";
                        break;
                    case '3':
                        echo "Voce estava indo para o " . $estabelecimentoEscolhido->getNome() . " com sua " . $veiculoEscolhido->getModelo() . ", mas quando antes de voce chegar la, a gasolina da sua " . $veiculoEscolhido->getModelo() . " acabou, voce empurrou a " . $veiculoEscolhido->getModelo() . " ate o posto de gasolina, mas quando voce chegou la, os guri tavam jogando bola e tu vai jogar bola com eles, mas apos cabeciar uma bola, voce bateu a cabeça e desmaiou, quando voce acordou, a resenha ja tinha acabado\n";
                        echo "Fim de jogo final 7/16\n";
                        break;
                    case '4':
                        echo "Voce estava indo para a " . $estabelecimentoEscolhido->getNome() . " com sua " . $veiculoEscolhido->getModelo() . ", mas quando antes de voce chegar la, um caminhão resenha acabou não te vendo e te atropelou, voce acordou no hospital e percebeu que perdeu a resenha, mas pelo menos voce sobreviveu\n";
                        echo "Fim de jogo final 8/16\n";
                        break;
                }
                break;

            case '3':
                switch ($tipoEstabelecimento) {
                    case '1':
                        echo "Voce chegou no " . $estabelecimentoEscolhido->getNome() . " com sua " . $veiculoEscolhido->getModelo() . ", você acabou chegando com respeito, mas so esqueceu de apertar o freio de mão do " . $veiculoEscolhido->getModelo() . " e ele acabou descendo a ladeira e atropelando todos os guri da resenha, voce foi preso e nao conseguiu chegar na resenha\n";
                        echo "Fim de jogo final 9/16\n";
                        break;
                    case '2':
                        echo "Voce chegou na " . $estabelecimentoEscolhido->getNome() . " com sua " . $veiculoEscolhido->getModelo() . ", mas a resenha ja tava muito louca e quando você percebeu levaram seu " . $veiculoEscolhido->getModelo() . " embora, voce ficou triste e voltou para casa\n";
                        echo "Fim de jogo final 10/16\n";
                        break;
                    case '3':
                        echo "Voce estava indo para o " . $estabelecimentoEscolhido->getNome() . " com sua " . $veiculoEscolhido->getModelo() . ", mas quando antes de voce chegar la, a gasolina da sua " . $veiculoEscolhido->getModelo() . " acabou, voce empurrou a " . $veiculoEscolhido->getModelo() . " ate o posto de gasolina, mas quando voce chegou la, os guri ja tavam te esperando para resenhar com você, logo a resenha se formou e voce conseguiu se divertir com os caras\n";
                        echo "Fim de jogo final 11/16\n";
                        break;
                    case '4':
                        echo "Voce estava indo para a " . $estabelecimentoEscolhido->getNome() . " com sua " . $veiculoEscolhido->getModelo() . ", mas quando antes de voce chegar la, a galera da oficina mecanica te viu e te chamou pra uma resenha, mas você não entendia nada  de mecânica, então você acabou estragando a resenha, você ficou triste e voltou para casa\n";
                        echo "Fim de jogo final 12/16\n";
                        break;
                }
                break;

            case '4':
                switch ($tipoEstabelecimento) {
                    case '1':
                        echo "Voce chegou no " . $estabelecimentoEscolhido->getNome() . " com seu " . $veiculoEscolhido->getModelo() . ", mas como tu tava com um " . $veiculoEscolhido->getModelo() . ", você acabou fechando a rua e a resenha acabou ficando resenhuda, voce foi o dono do role e resenhou com os caras\n";
                        echo "Fim de jogo final 13/16\n";
                        break;
                    case '2':
                        echo "Voce chegou na " . $estabelecimentoEscolhido->getNome() . " com seu " . $veiculoEscolhido->getModelo() . ", mas o " . $veiculoEscolhido->getModelo() . " acabou não cabendo na garagem da resenha e isso fez com que a resenha acabasse, voce ficou triste e voltou para casa\n";
                        echo "Fim de jogo final 14/16\n";
                        break;
                    case '3':
                        echo "Voce estava indo para o " . $estabelecimentoEscolhido->getNome() . " com seu " . $veiculoEscolhido->getModelo() . ", mas o " . $veiculoEscolhido->getModelo() . " ficou sem freio e você acabou explodindo o posto de gasolina, voce foi preso e nao conseguiu chegar na resenha\n";
                        echo "Fim de jogo final 15/16\n";
                        break;
                    case '4':
                        echo "Voce estava indo para a " . $estabelecimentoEscolhido->getNome() . " com seu " . $veiculoEscolhido->getModelo() . ", mas quando você chegou la os mecanicos não te deixaram entrar na resenha, voce ficou triste e voltou para casa\n";
                        echo "Fim de jogo final 16/16\n";
                        break;
                }
                break;
        }

        $resposta = strtolower(trim(readline("Deseja jogar novamente? (s/n): ")));
        $continuar = $resposta === 's';
    } while ($continuar);
}
