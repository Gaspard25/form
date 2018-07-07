<?php

if(empty($_POST['nom'])){
    $nom = false;
} else {
    $nom = ($_POST['nom']);
}

if(empty($_POST['prenom'])){
    $prenom = false;
} else {
    $prenom = ($_POST['prenom']);
}

if(empty($_POST['email'])){
    $email = false;
} else {
    $email = ($_POST['email']);
}

if(empty($_POST['telephone'])){
    $telephone = false;
} else {
    $telephone = ($_POST['telephone']);
}

if(empty($_POST['message'])){
    $message = false;
} else {
    $message = ($_POST['message']);
}

$tab = ['nom'       => $nom, 
        'prenom'    => $prenom,
        'email'     => $email,
        'telephone' => $telephone,
        'message'   => $message
];

echo json_encode($tab);

// $send = array_search('false', $tab);

// if ($send == null ){

//     $from = "test@votredomaine.com";
//     $to = "lecram.antoine@gmail.com";
//     $subject = "Vérification PHP mail";
//     $message = $tab;
//     $headers = "From:" . $from;
//     mail($to,$subject,$message, $headers);
// }
       
?>