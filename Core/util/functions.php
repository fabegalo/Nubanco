<?php
/**
 * Arquivo contendo funções que podem ser chamadas em todo o sistema
 */

function ver($var, $continue = false) 
{
    echo '<pre style="color: red;">';
    print_r($var);
    echo '</pre>';
    if (!$continue) {
        die();
    }
}


/**
 * Trata os textos para não permitir inserção de códigos 
 */
function sanitizar($str,$mysql=true)
{
	$str = str_replace("'","&#39;",$str);
	$str = str_replace("\"","&quot;",$str);
	$str = str_replace("<","&lt;",$str);	
	$str = str_replace(">","&gt;",$str);	
	$str = filter_input_array(INPUT_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
	if($mysql){
		$str = str_replace('\\',"\\\\",$str);
		$str = str_replace('\'',"\\'",$str);
	}

	return $str;
}

function desanitizar($str)
{
	$str = str_replace("&#39;" ,"'" ,$str);
	$str = str_replace("&quot;","\"",$str);
	$str = str_replace("&lt;"  ,"<" ,$str);	
	$str = str_replace("&gt;"  ,">" ,$str);	

	return $str;
}

/**
 * Passa data de "AAAA-MM-DD" para "DD/MM/AAAA"
 */
function dtoc($data)
{
	if ($data == '') return '';
	$data = explode('-', $data);
	return $data[2].'/'.$data[1].'/'.$data[0];
}

/**
* Passa data de "YYYY-MM-DD H:i:s" para "DD/MM/AAAA H:i:s"
*/
function dateTimetoc($datetime)
{
	$dataHora = dtoc(substr($datetime, 0, 10));
	$dataHora .= substr($datetime, 10, 19);
	return $dataHora;
}

/**
 * Passa data de "DD/MM/AAAA" para "AAAA-MM-DD" *
 */
function ctod($data)
{
	if ($data == '') return '';
	$dttrat = explode("/",$data);
	return $dttrat[2]."-".$dttrat[1]."-".$dttrat[0];
}


//-- Passa data de "AAAA-MM-DD" para "AAAAMMDD"
function dtomsd($data)
{
	return str_replace('-','',$data);
}

//-- Passa data de "DD/MM/AAAA" para "AAAAMMDD"
function ctomsd($data)
{
	return substr($data,6,4).substr($data,3,2).substr($data,0,2);
}

//-- Passa data de "AAAAMMDD" para "DD/MM/AAAA"
function msdtoc($data)
{
	//recebe o parâmetro e armazena em um array separado por -
	return substr($data,6,2).'/'.substr($data,4,2).'/'.substr($data,0,4);
}

function msdtod($data)
{
	$data = substr($data,0,4).'-'.substr($data,4,2).'-'.substr($data,6,2);
	return $data;
}

//passa a data do formato DD/MM/YYYY para DD/MM/YY
function year2digits($data)
{
	if ($data == '') return '';
	$aux = explode("/", $data);
	$dia = $aux[0];
	$mes = $aux[1];
	$ano = substr($aux[2], -2);
	$data = $dia."/".$mes."/".$ano;
	return $data;
}

function array_map_recursive($function, $arr)
{
	$result = array();
	foreach ($arr as $key => $val)
		$result[$key] = (is_array($val) ? array_map_recursive($function, $val) : $function($val));
	
	return $result;
}

/**
 * Função para abstrair o retorno de JSON com header correto
 * Caso precise utiliza a função array_map_recursive basta informar o segundo parametro como true
 * Autor: Maycon de Moraes
 */
function arrToJson(Array $arr, $recursive = false)
{
	ob_end_clean();// limpa todo o "lixo" de saida
	if ($recursive) {
		$arr = array_map_recursive('utf8_encode', $arr);
	}else{
		$arr = array_map('utf8_encode', $arr);
	}

	header('Content-Type: application/json');
	echo json_encode($arr);
	ob_end_flush(); // desativa o buffer de saida
}

function redirect(String $page)
{
	header('Location: '.$page);
}

//Valida CPF
function validaCPF($cpf)
{
	$cpf = preg_replace("/[^0-9]/", "", $cpf);
	$cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

	if (strlen($cpf) != 11) {
		return false;
	} else if ($cpf == '00000000000' || 
		$cpf == '11111111111' || 
		$cpf == '22222222222' || 
		$cpf == '33333333333' || 
		$cpf == '44444444444' || 
		$cpf == '55555555555' || 
		$cpf == '66666666666' || 
		$cpf == '77777777777' || 
		$cpf == '88888888888' || 
		$cpf == '99999999999'){
			return false;
	} else {

		$val1 = $cpf[0] * 10 + $cpf[1] * 9 + $cpf[2] * 8 + $cpf[3] * 7 + $cpf[4] * 6 + $cpf[5] * 5 + $cpf[6] * 4 + $cpf[7] * 3 + $cpf[8] * 2;
			
		$val1 = $val1 * 10 % 11;
		
		$val2 = $cpf[0] * 11 + $cpf[1] * 10 + $cpf[2] * 9 + $cpf[3] * 8 + $cpf[4] * 7 + $cpf[5] * 6 + $cpf[6] * 5 + $cpf[7] * 4 + $cpf[8] * 3 + $cpf[9] * 2;
			
		$val2 = $val2 * 10 % 11;
			
		if ($val1 == $cpf[9]){
			$val1 = true;
		}else {
			$val1 = false;
		}

		if ($val2 == $cpf[10]){
			$val2 = true;
		}else {
			$val2 = false;
		}

		if ($val1 == true && $val2 == true){
			return true;
		}else {
			return false;
		}
		
	}
}