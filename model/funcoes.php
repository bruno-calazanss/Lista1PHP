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
            $ret .= "Impossível!";
        }
        return $ret;
    }

    private function ex3($km, $l) {
        return 'Consumo médio: ' . ($km / $l) . 'km/L<br>';
    }

    private function ex4($nome, $vendas, $salario) {
        $ret = "Nome: $nome<br>";
        $ret .= "Salário fixo: R$ $salario<br>";
        $ret .= 'Comissão: R$ ' . ($vendas*0.15) . '<br>';
        $ret .= 'Salário final: R$ ' . ($salario + ($vendas*0.15)) . '<br>';
        return $ret;
    }

    private function ex5($nome, $av1, $av2, $av3) {
        $ret = "Nome: $nome<br>";
        $ret .= "AV1: $av1<br>";
        $ret .= "AV2: $av2<br>";
        $ret .= "AV3: $av3<br>";
        $ret .= 'Média: ' . ($av1+$av2+$av3)/3 . '<br>';
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
        $ret .= 'Valor da prestação (x5): R$ ' . ($valor/5) . '<br>';
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
            return "O número $num não está no intervalo entre 100 e 200.";
        }
    }

    private function ex16($nome, $av1, $av2, $av3) {
        $ret = "Nome: $nome<br>";
        $ret .= "AV1: $av1<br>";
        $ret .= "AV2: $av2<br>";
        $ret .= "AV3: $av3<br>";
        $media = ($av1+$av2+$av3)/3;
        $ret .= "Média: $media<br>";
        if($media >= 7) {
            $ret .= 'Situação: aprovado';
        }
        else {
            if($media >= 5.1) {
                $ret .= 'Situação: recuperação';
            }
            else {
                $ret .= 'Situação: reprovado';
            }
        }
        return $ret;
    }
}

?>