
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
        }
    return $res;
}

function send_mail_retrieve_password($mail, $password){

    $myMail = "onmyway.live@gmail.com";
    $subject = "Password recovery On My Way";
 
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: Team On My Way! <'.$myMail.'>';
    $msg = "Your password On My Way was successfully changed!<br>".
           "The next time you access the application, please, change your password.<br><br>".
           "This is your new password:<b>".$password."</b><br><br>".
           "Thank you for your preference,<br><br>".
           "<br><i>Team On My Way!</i></b>";
    
    mail($mail, $subject, $msg, $headers);
}

?>
