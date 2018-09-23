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
        else {
            if($num1 < $num2) {
                return 'Maior: num2=' . $num2;
            }
            else {
                return 'Números iguais!';
            }
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
        else {
            if($media >= 5.1) {
                $ret .= 'Situacao: recuperacao';
            }
            else {
                $ret .= 'Situacao: reprovado';
            }
        }
        return $ret;
    }

    private function ex17($n) {
        $ret = 'Números entre 10 e 150: <br><br>';
        for($i=0; $i<count($n); $i++)
        {
            if($n[$i] >= 10 && $n[$i] <= 150)
            {
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
}

?>