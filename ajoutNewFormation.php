<?php
include("../config/database.php");

if (
    !empty($_POST['denomination']) && !empty($_POST['tel']) && !empty($_POST['email']) &&
    !empty($_POST['adresse'])  && !empty($_POST['form_juridique']) &&
    !empty($_POST['habilitation']) && !empty($_POST['historique_onfpp']) &&
    !empty($_FILES['rccm']['tmp_name'])  
) {
    // Upload du fichier RCCM
    $nomFichierRCCM = $_FILES['rccm']['name'];
    $cheminFichierRCCM = $_FILES['rccm']['tmp_name'];
    $extensionFichierRCCM = pathinfo($nomFichierRCCM)['extension'];
    $dossierRCCM = "assets/img/formation/documents/rccm/";  // Remplacez par le chemin réel
    $nouveauNomFichierRCCM = $_POST['denomination'] . '_rccm_' . time() . '.' . $extensionFichierRCCM;
    $nouveauCheminFichierRCCM = $dossierRCCM . $nouveauNomFichierRCCM;
    
    // Upload du fichier CV du consultant
    $nomFichierCV = $_FILES['cv_consultant']['name'];
    $cheminFichierCV = $_FILES['cv_consultant']['tmp_name'];
    $extensionFichierCV = pathinfo($nomFichierCV)['extension'];
    $dossierCV = "assets/img/formation/documents/cv/";  // Remplacez par le chemin réel
    $nouveauNomFichierCV = $_POST['denomination'] . '_cv_' . time() . '.' . $extensionFichierCV;
    $nouveauCheminFichierCV = $dossierCV . $nouveauNomFichierCV;

    // Déplacer les fichiers vers leur dossier respectif
    if (
        move_uploaded_file($cheminFichierRCCM, "../" . $nouveauCheminFichierRCCM) &&
       
        move_uploaded_file($cheminFichierCV, "../" . $nouveauCheminFichierCV)
    ) {
        $pwd=htmlspecialchars($_POST['pwd']); 
        // Requête préparée pour éviter l'injection SQL
        $req = $bdd->prepare('INSERT INTO organisme_formation(denomination,pwd,tel,email,adresse,domaine,form_juridique,habilitation,historique_onfpp,rccm,cv_consultant,uid)
                            VALUES(:denomination,:pwd,:tel,:email,:adresse,:domaine,:form_juridique,:habilitation,:historique_onfpp,:rccm,:cv_consultant,:uid)');

        $req->execute(array(
            'denomination' => htmlspecialchars($_POST['denomination']),
            'tel' => htmlspecialchars($_POST['tel']),
            'email' => htmlspecialchars($_POST['email']),
            'adresse' => htmlspecialchars($_POST['adresse']),
            'domaine' => htmlspecialchars($_POST['domaine']),
            'form_juridique' => htmlspecialchars($_POST['form_juridique']),
            'effectif' => htmlspecialchars($_POST['effectif']),
            'habilitation' => htmlspecialchars($_POST['habilitation']),
            'historique_onfpp' => htmlspecialchars($_POST['historique_onfpp']),
            'rccm' => $nouveauCheminFichierRCCM,
            'image' => $nouveauCheminFichierImage,
            'cv_consultant' => $nouveauCheminFichierCV,
            
            'pwd' => password_hash($pwd, PASSWORD_BCRYPT),
            'uid' => $uid
        ));
        

        // Ajoutez une notification
        $type = "Organisme de formation"; // ou "formation" en fonction de votre cas
        $message = "Nouvel organisme de formation ajoutée : $denomination";
        insertNotification($type, $message);

        header('location:allFormation.php');
    } else {
        echo "<h2 class='text-danger'>Échec du téléchargement des fichiers.</h2>";
    }
} else {
    echo "<h2 class='text-danger'>Veuillez remplir tous les champs vides </h2> ";
    echo "<a href='inscriptionformation.php' class='btn btn-danger'>Retour</a>";
}
?>
