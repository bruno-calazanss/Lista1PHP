<?php 

class Lista {

    private static $instancia;

    public static function getInstancia() {
        if(self::$instancia == null) {
            self::$instancia = new Lista();
        }
        return self::$instancia;
    }

    public function getFunc($ex, $dados) {
        $info = new ReflectionMethod(self::getInstancia(), $ex);
        if($info->getNumberOfRequiredParameters() == sizeof($dados)) {
            return call_user_func_array(array(self::getInstancia(), $ex), $dados);
        }
        return null;
    }

    private function ex1($num1, $num2) {
        return "$num1 + $num2 = " . ($num1 + $num2) . '<br>';
    }

    private function ex2($num1, $num2) {
        $ret = "$num1  +  $num2  = " . ($num1 + $num2) . '<br>';
        $ret .= "$num1  -  $num2  = " . ($num1 - $num2) . '<br>';
        $ret .= "$num1  *  $num2  = " . ($num1 * $num2) . '<br>';
        if($num2 != 0) {
            $ret .= "$num1  /  $num2  = " . ($num1 / $num2);
        }
        else {
            $ret .= "Impossivel!";
        }
        return $ret;
    }

    private function ex3($km, $l) {
        return 'Consumo medio: ' . ($km / $l) . 'km/L<br>';
    }

    private function ex4($nome, $vendas, $salario) {
        $ret = "Nome: $nome<br>";
        $ret .= "Salário fixo: R$ $salario<br>";
        $ret .= 'Comissao: R$ ' . ($vendas*0.15) . '<br>';
        $ret .= 'Salário final: R$ ' . ($salario + ($vendas*0.15)) . '<br>';
        return $ret;
    }

    private function ex5($nome, $av1, $av2, $av3) {
        $ret = "Nome: $nome<br>";
        $ret .= "AV1: $av1<br>";
        $ret .= "AV2: $av2<br>";
        $ret .= "AV3: $av3<br>";
        $ret .= 'Media: ' . ($av1+$av2+$av3)/3 . '<br>';
        return $ret;
    }

    private function ex6($a, $b) {
        $ret = "A: $b<br>";
        $ret .= "B: $a<br>";
        return $ret;
    }

    private function ex7($celsius) {
        return 'Fahrenheit: ' . (9*$celsius+160)/5 . '<br>';
    }
    
    private function ex8($dolar, $cotacao) {
        $ret = "Valor em US$: $dolar<br>";
        $ret .= 'Valor em R$: ' . $cotacao*$dolar . '<br>';
        return $ret;
    }

    private function ex9($valor) {
        $ret = "Valor depositado: R$ $valor<br>";
        $ret .= 'Rendimento após um mês: R$ ' . ($valor+($valor*0.007)) . '<br>';
        return $ret;
    }

    private function ex10($valor) {
        $ret = "Valor da compra: R$ $valor<br>";
        $ret .= 'Valor da prestacao (x5): R$ ' . ($valor/5) . '<br>';
        return $ret;
    }

    private function ex11($custo, $percent) {
        $ret = "Custo do produto: RS$ $custo<br>";
        $ret .= 'Valor da compra: R$ ' . ($custo+(($custo/100)*$percent)) . '<br>';
        return $ret;
    }

    private function ex12($custo) {
        $imposto1 = $custo*0.45;
        $imposto2 = ($custo+$imposto1)*0.28;
        $ret = "Custo de fábrica: R$ $custo<br>";
        $ret .= 'Custo ao consumidor: R$ ' . ($custo+$imposto1+$imposto2) . '<br>';
        return $ret;
    }

    private function ex13($num) {
        if($num > 10) {
            return 'Maior que dez!!';
        }
        return '';
    }

    private function ex14($num1, $num2) {
        if($num1 > $num2) {
            return 'Maior: num1=' . $num1;
        }
        elseif($num1 < $num2) {
            return 'Maior: num2=' . $num2;
        }
        else {
            return 'Números iguais!';
        }
    }

    private function ex15($num) {
        if($num >= 100 && $num <= 200) {
            return "O número $num está no intervalo entre 100 e 200.";
        }
        else {
            return "O número $num nao está no intervalo entre 100 e 200.";
        }
    }

    private function ex16($nome, $av1, $av2, $av3) {
        $ret = "Nome: $nome<br>";
        $ret .= "AV1: $av1<br>";
        $ret .= "AV2: $av2<br>";
        $ret .= "AV3: $av3<br>";
        $media = ($av1+$av2+$av3)/3;
        $ret .= "Media: $media<br>";
        if($media >= 7) {
            $ret .= 'Situacao: aprovado';
        }
        elseif($media >= 5.1) {
            $ret .= 'Situacao: recuperacao';
        }
        else {
            $ret .= 'Situacao: reprovado';
        }
        return $ret;
    }

    private function ex17($n) {
        $ret = 'Números entre 10 e 150: <br><br>';
        for($i=0; $i<count($n); $i++)
        {
            if($n[$i] >= 10 && $n[$i] <= 150) {
                $ret .= 'Num' . ($i+1) . ":{$n[$i]}<br>";
            }
        }
        return $ret;
    }

    private function ex18($idade) {
        for($i=0, $ret=''; $i<count($idade); $i++) {
            if($idade[$i] >= 18) {
                $ret .= 'Pessoa ' . ($i+1) . ' = Maior de idade.<br>';
            }
        }
        return $ret;
    }

    private function ex19($nome, $sexo) {
        $sexoIndex = array("M" => "Masculino", "F" => "Feminino");
        $sexoCont = array("M" => 0, "F" => 0);
        for($i=0, $ret=''; $i<count($nome); $i++)
        {
            $ret .= "$nome[$i] = {$sexoIndex[$sexo[$i]]}<br>";
            $sexoCont[$sexo[$i]]++;
        }
        $ret .= '<br>';
        $ret .= "Total de homens: $sexoCont[M]<br>";
        $ret .= "Total de mulheres: $sexoCont[F]<br>";
        return $ret;
    }

    private function ex20($valor, $ano) {
        for($i=0, $ano2000Cont=0, $ret=''; $i<count($ano); $i++) {
            $ret .= 'Veiculo '.($i+1).':<br><br>';
            if($ano[$i] <= 2000) {
                $ret .= 'Valor do desconto = R$ ' . ($valor[$i]*0.12) . '<br>';
                $ret .= 'Valor a ser pago = R$ ' . ($valor[$i]*0.88) . '<br>';
            }
            else {
                $ret .= 'Valor do desconto = R$ ' . ($valor[$i]*0.07) . '<br>';
                $ret .= 'Valor a ser pago = R$ ' . ($valor[$i]*0.93) . '<br>';
            }
            $ret .= '<br>';
            $ano2000Cont = ($ano[$i] <= 2000) ? ++$ano2000Cont : $ano2000Cont;
        }
        $ret .= '<hr>';
        $ret .= "Total de carros ate o ano 2000 = $ano2000Cont<br>";
        $ret .= "Total geral = $i<br>";
        return $ret;
    }

    private function ex21($nome, $idade, $sexo, $saude) {
        for($i=0, $apto=0, $ret=''; $i<count($nome); $i++) {
            $ret .= "{$nome[$i]}<br>";
            if($idade[$i] >= 18 && $saude[$i] == "S") {
                $ret .= 'Apto para o servico militar<br><br>';
                $apto++;
            }
            else {
                $ret .= 'Nao apto para o servico militar<br><br>';
            }
        }
        $ret .= '<hr>';
        $ret .= "Total candidatos aptos para o servico militar = $apto<br>";
        $ret .= "Total geral = $i<br>";
        return $ret;
    }

    private function ex22($precoC, $precoV) {
        for($i=0, $n=1, $somaCusto=0, $somaVenda=0, $ret=''; $i<count($precoC); $i++, $n++) {
            $somaCusto += $precoC[$i];
            $somaVenda += $precoV[$i];
            $ret .= "Produto $n:<br>";
            if($precoC[$i] < $precoV[$i]) {
                $ret .= "Lucro: ";
            }
            elseif($precoC[$i] > $precoV[$i]) {
                $ret .= "Prejuizo: ";
            }
            else {
                $ret .= "Empate: ";
            }
            $ret .= "R$ " . ($precoV[$i]-$precoC[$i]) . "<br><br>";
        }
        $ret .= "<hr class='mt-0'>";
        $ret .= 'Media de preços de custo: ' . $somaCusto/count($precoC) . '<br>';
        $ret .= 'Media de preços de venda: ' . $somaVenda/count($precoC) . '<br>';
        return $ret;
    }

    private function ex23($num) {
        $ret = '';
        if($num > 80) {
            $ret .= "Maior que 80!";
        }
        elseif($num < 25) {
            $ret .= "Menor que 25!";
        }
        elseif($num == 40) {
            $ret .= "Igual a 40!";
        }
        return $ret;
    }

    private function ex24($num) {
        $ret = '';
        for($i=0; $i<count($num); $i++) {
            $ret .= "$num[$i] = ";
            if($num[$i] > 0) {
                $ret .= "Positivo";
            }
            elseif($num[$i] < 0) {
                $ret .= "Negativo";
            }
            else {
                $ret .= "Zero";
            }
            $ret .= "<br>";
        }
        return $ret;
    }

    private function ex25($num1, $num2) {
        $ret = '';
        if($num1 > $num2) {
            $ret .= "Números diferentes.<br>";
            $ret .= "O primeiro número é maior.";
        }
        elseif($num2 > $num1) {
            $ret .= "Números diferentes.<br>";
            $ret .= "O segundo número é maior.";
        }
        else {
            $ret .= "Números iguais.";
        }
        return $ret;
    }

    private function ex26($num) {
        $nums = array(1 => "Um", "Dois", "Três", "Quatro", "Cinco");
        if($num >= 1 && $num <=5) {
            return $nums[$num];
        }
        else {
            return 'Número inválido!';
        }
    }

    private function ex27($valor, $combustivel) {
        for($i=0, $n=1, $totalDesconto=0, $totalPago=0, $ret=''; $i<count($valor); $i++, $n++) {
            $ret .= "Veículo $n:<br><br>";
            switch($combustivel[$i]) {
                case 'A': {
                    $valorDesconto = $valor[$i]*0.25;
                    break;
                }
                case 'G': {
                    $valorDesconto = $valor[$i]*0.21;
                    break;
                }
                case 'D': {
                    $valorDesconto = $valor[$i]*0.14;
                    break;
                } 
            }
            $totalDesconto += $valorDesconto;
            $totalPago += $valor[$i]-$valorDesconto;
            $ret .= "Valor do desconto = R$ $valorDesconto<br>";
            $ret .= "Valor à ser pago = R$ " . ($_GET['valor'][$i]-$valorDesconto) . "<br><br>";
        }
        $ret .= "<hr class='mt-0'>";
        $ret .= "Total de desconto = R$ $totalDesconto<br>";
        $ret .= "Total pago pelos clientes = R$ $totalPago<br>";
        return $ret;
    }

    private function ex28($salarioMin, $nome, $salario) {
        for($i=0, $n=1, $reajusteTotal=0, $ret=''; $i<count($nome); $i++, $n++) {
            $ret .= "Funcionario $n:<br><br>";
            if($_GET['salario'][$i] < ($_GET["salarioMin"]*3)) {
                $reajuste = $_GET['salario'][$i]*0.5;
            }
            elseif($_GET['salario'][$i] <= ($_GET["salarioMin"]*10)) {
                $reajuste = $_GET['salario'][$i]*0.2;
            }
            elseif($_GET['salario'][$i] <= ($_GET["salarioMin"]*20)) {
                $reajuste = $_GET['salario'][$i]*0.15;
            }
            else {
                $reajuste = $_GET['salario'][$i]*0.10;
            }
            $ret .= "Reajuste: R$ $reajuste<br>";
            $ret .= "Novo salário: R$ " . ($_GET['salario'][$i]+$reajuste) . "<br><br>";
            $reajusteTotal+=$reajuste;
        }
        $ret .= "<hr class='mt-0'>";
        $ret .= "Aumento total da folha de pagamento = R$ $reajusteTotal<br>";
        return $ret;
    }

    private function ex29($num) {
        $meses = array(1 => 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho',
        'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
        return $meses[$_GET['mes']];
    }

    private function ex31($nums) {
        sort($_GET['num']);
        return "{$_GET['num'][0]} < {$_GET['num'][1]} < {$_GET['num'][2]}";
    }

    private function ex32($num1, $num2, $op) {
        $ret = '';
        switch($op) {
            case "+": {
                $ret .= "$num1 + $num2 = " . ($num1 + $num2);
                break;
            }
            case "-": {
                $ret .= "$num1 - $num2 = " . ($num1 - $num2);
                break;
            }
            case "*": {
                $ret .= "$num1 * $num2 = " . ($num1 * $num2);
                break;
            }
            case "/": {
                if($num2 != 0) {
                    $ret .= "$num1 / $num2 = " . ($num1 / $num2);
                }
                else {
                    $ret .= "Erro: Divisão por zero!";
                }
                break;
            }
            default: {
                $ret .= "Operador não definido!";
            }
        }
        return $ret;
    }

    private function ex33($lado1, $lado2, $lado3) {
        if($lado1 < ($lado2 + $lado3) && $lado2 < ($lado1 + $lado3) && $lado3 < ($lado1 + $lado2)) {
            if($lado1 == $lado2 && $lado1 == $lado3) {
                return "Trinângulo equilátero";
            }
            elseif($lado1 != $lado2 && $lado1 != $lado3 && $lado2 != $lado3) {
                return "Trinângulo escaleno";
            }
            else {
                return "Trinângulo isósceles";
            }
        }
        else {
            return "Não é um triângulo!";
        }
    }

    private function ex34($aulas, $horas, $nivel) {
        switch($nivel) {
            case "N1": {
                $salario = $horas*$aulas*12;
                break;
            }
            case "N2": {
                $salario = $horas*$aulas*17;
                break;
            }
            case "N3": {
                $salario = $horas*$aulas*25;
                break;
            }
        }
        return "Salário: R$ $salario";
    }

    private function ex35($idade) {
        $ret = '';
        if($idade >= 5 && $idade <= 25) {
            $ret .= "Categoria: ";
            if($idade <= 7) {
                $ret .= "Infantil A";
            }
            elseif($idade <= 10) {
                $ret .= "Infantil B";
            }
            elseif($idade <= 13) {
                $ret .= "Juvenil A";
            }
            elseif($idade <= 17) {
                $ret .= "Juvenil B";
            }
            else {
                $ret .= "Sênior";
            }
        }
        else {
            $ret .= "Idade fora da faixa etária!";
        }
        return $ret;
    }

    private function ex36($kw, $tipo) {
        $ret = '';
        switch($tipo) {
            case "R": {
                $conta = $kw*0.6;
                break;
            }
            case "C": {
                $conta = $kw*0.48;
                break;
            }
            case "I": {
                $conta = $kw*1.29;
                break;
            }
        }
        $ret .= "Valor da conta: R$ $conta";
        return $ret;
    }

    private function ex37($nome, $altura, $idade, $sexo) {
        $ret = '';
        $ret .= "Nome: $nome<br>";
        $ret .= "Peso ideal: Kg ";
        if($sexo == "M") {
            if($altura <= 1.7) {
                if($idade <= 40) {
                    $ret .= (72.7*$altura)-50;
                }
                else {
                    $ret .= (72.7*$altura)-58;
                }
            }
            else {
                if($idade <= 20) {
                    $ret .= (72.7*$altura)-58;
                }
                elseif($idade <= 39) {
                    $ret .= (72.7*$altura)-53;
                }
                else {
                    $ret .= (72.7*$altura)-45;
                }
            }
        }
        else {
            if($altura <= 1.5) {
                if($idade >= 35) {
                    $ret .= (62.1*$altura)-45;
                }
                else {
                    $ret .= (62.1*$altura)-49;
                }
            }
            else {
                $ret .= (62.1*$altura)-44.7;
            }
        }
        return $ret;
    }

    private function ex38($laboratorio, $avs, $ef) {
        return "Média ponderada = " . (($laboratorio*2) + ($avs*3) + ($ef*5))/10;
    }

    private function ex39($nome, $matricula, $laboratorio, $avs, $ef) {
        $ret = '';
        $ret .= "Nome: $nome<br>";
        $ret .= "Matrícula: $matricula<br>";
        $media = (($laboratorio*2) + ($avs*3) + ($ef*5))/10;
        $ret .= "Média ponderada = " . (($laboratorio*2) + ($avs*3) + ($ef*5))/10 . "<br>";
        $ret .= "Classificação: ";
        if($media >= 8) {
            $ret .= 'A';
        }
        elseif($media >= 7) {
            $ret .= 'B';
        }
        elseif($media >= 6) {
            $ret .= 'C';
        }
        elseif($media >= 5) {
            $ret .= 'D';
        }
        else {
            $ret .= 'R';
        }
        return $ret;
    }

    private function ex40($nome, $idade, $grupo) {
        $ret = '';
        $ret .= "Nome: $nome<br>";
        $ret .= "Idade: $idade<br>";
        if($idade >= 17 && $idade <= 70) {
            $gAlto = array(3,4,5,6,9);
            $gMedio = array(2,3,4,5,8);
            $gBaixo = array(1,2,3,4,7);
            $indice = array("A" => $gAlto, "M" => $gMedio, "B" => $gBaixo);
            $ret .= "Categoria: ";
            if($idade <= 20) {
                $ret .= $indice[$grupo][0];
            }
            elseif($idade <= 24) {
                $ret .= $indice[$grupo][1];
            }
            elseif($idade <= 34) {
                $ret .= $indice[$grupo][2];
            }
            elseif($idade <= 64) {
                $ret .= $indice[$grupo][3];
            }
            else {
                $ret .= $indice[$grupo][4];
            }
        }
        else {
            $ret .= "Idade fora da faixa necessária!";
        }
        return $ret;
    }
}

?>