
<?php

function hey($l, $s = ""){
    echo($s.$l."<br>");
}

function usuario($id){
    $dao = new UserDAO();
    $res = $dao->findById($id);
    $dao->close();
    return $res;
}

function evento($id){
    $dao = new EventDAO();
    $res = $dao->findById($id);
    $dao->close();
    return $res;
}

function escrever($s) {
    $f = fopen("C:\\Users\\Anderson\\Desktop\\anderson.txt", "w");
    fwrite($f, $s);
    fclose($f);
}

function find_block($lista, $pos, $len){
    if($pos<=0) return [];
    $ini = ($pos-1)*$len;
    $tam = count($lista);
    $res = [];
    if($tam>$ini) 
        for($k=$ini,$i=0;$k<$tam && $i<$len;$k++,$i++) {
            $res[$i] = $lista[$k];
            //echo($i."<br>");
        }
    return $res;
}

?>
