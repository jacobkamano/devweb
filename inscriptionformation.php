<?php
   
   require_once("../config/database.php");
   require_once('modules.php');
   

?>

<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->



<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>ONFPP</title>
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="../fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="../fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="../fonts/font-awesome/v6/css/all.css" rel="stylesheet" type="text/css" />
	<link href="../fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="../assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="../assets/css/material_style.css">
	<!-- Theme Styles -->
	<link href="../assets/css/theme/full/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="../assets/css/theme/full/style.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/theme/full/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- dropzone -->
	<link href="../assets/plugins/dropzone/dropzone.css" rel="stylesheet" media="screen">
	<!-- Date Time item CSS -->
	<link rel="stylesheet" href="../assets/plugins/flatpicker/css/flatpickr.min.css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="https://www.einfosoft.com/templates/admin/smart/source/assets/img/favicon.ico" />
    <!-- Inclure le lien CDN pour SweetAlert -->
    
    

</head>
<!-- END HEAD -->

<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md page-full-width header-white white-sidebar-color logo-indigo">
	<div class="page-wrapper">
		<!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
			<div class="page-header-inner ">
				<!-- logo start -->
				<div class="page-logo">
					<a href="../">
						<span class="logo-icon material-icons fa-rotate-45"></span>
						<span class="logo-default">ONFPP</span> </a>
				</div>
				<!-- logo end -->
				
				<!-- start mobile menu -->
				<a href="javascript:;" class="menu-toggler responsive-toggler" data-bs-toggle="collapse"
					data-bs-target=".navbar-collapse">
					<span></span>
				</a>
				<!-- end mobile menu -->
				<!-- start header menu -->
				<div class="top-menu">
					<ul class="nav navbar-nav pull-right">
						<li><a class="fullscreen-btn"><i data-feather="maximize"></i></a></li>
						
						<!-- start manage user dropdown -->
						<li class="dropdown dropdown-user">
						   <a href="javascript:;" class="dropdown-toggle" data-bs-toggle="dropdown"
								data-hover="dropdown" data-close-others="true">
								<img alt="" class="img-circle " src="../" />
								<span class="username username-hide-on-mobile"> 
							</a>
							<ul class="dropdown-menu dropdown-menu-default">
								<li>
									<a href="edit_directeur.php">
										<i class="icon-user"></i> Profile </a>
								</li>
								<li>
									<a href="#">
										<i class="icon-settings"></i> Settings
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-directions"></i> Help
									</a>
								</li>
								<li class="divider"> </li>
								<li>
									<a href="lock_screen.html">
										<i class="icon-lock"></i> Lock
									</a>
								</li>
								<li>
									<a href="../logout.php">
										<i class="icon-logout"></i> Se deconnecter </a>
								</li>
							</ul>
						</li>
						<!-- end manage user dropdown -->
						<li class="dropdown dropdown-quick-sidebar-toggler">
							<a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right"
								data-upgraded=",MaterialButton">
								<i class="material-icons">more_vert</i>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- start horizontal menu -->
			
			<!-- end horizontal menu -->
		</div>
		<!-- end header -->
		<!-- start color quick setting -->
		<div class="settingSidebar">
			<a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
			</a>

		</div>
		<!-- end color quick setting -->
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->

			<!-- end sidebar menu -->
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Nouvel Organisme de Formation</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Formation</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Ajouter un organisme de formation</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">

									<header>Les Informations de base</header>
									<button id="panel-button"
										class="mdl-button mdl-js-button mdl-button--icon pull-right"
										data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>
									<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
										data-mdl-for="panel-button">
										<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">print</i>Another action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
											here</li>
									</ul>
								</div>
								<form name="inscriptionForm" action="ajoutNewFormation.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
								<div class="card-body row">

								   <div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input form-control" name="denomination" type="text" >
											<label class="mdl-textfield__label">Dénomination *:</label>
										</div>
									</div>
									

									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input form-control" name="tel" type="text"
												pattern="-?[0-9]*(\.[0-9]+)?" >
											<label class="mdl-textfield__label" >Telephone</label>
											<span class="mdl-textfield__error">Numbéro Obligatoire!</span>
										</div>
									</div>
									<!-- Champ de mot de passe -->
                                    <div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input form-control" name="pwd" type="password" id="pwd" placeholder="Mot de passe">
											
											<span onclick="togglePassword('pwd')" class="mdl-textfield mdl-js-textfield floating-label text-secondary" style="cursor: pointer;"><i class="fa fa-eye" aria-hidden="true"></i></span>
										</div>
									</div>

                                    <!-- Champ de confirmation du mot de passe -->
                                    <div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input form-control" name="re-pwd" type="password" id="re-pwd" placeholder="Confirmer Mot de passe">
											
											<span onclick="togglePassword('re-pwd')" class="mdl-textfield mdl-js-textfield floating-label text-secondary" style="cursor: pointer;"><i class="fa fa-eye" aria-hidden="true"></i></span>
										</div>
									</div>
                                    
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input form-control" type="email" name="email" >
											<label class="mdl-textfield__label">Email</label>
											<span class="mdl-textfield__error">Saisir votre adresse E-mail!</span>
										</div>
									</div>
                                    <div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input form-control" name="adresse" type="text" >
											<label class="mdl-textfield__label">adresse:</label>
										</div>
									</div>
                                    
                                    <div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input form-control" name="capital" type="text" >
											<label class="mdl-textfield__label">Capital *:</label>
										</div>
									</div>
                                    
                                     
									


									<div class="col-lg-6 p-t-20">
										<div

											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input form-control" name="form_juridique" type="text" >
											<label class="mdl-textfield__label">Forme juridique:</label>

										</div>
									</div>


									
									<div class="col-lg-6 p-t-20">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                            <select name="habilitation" id="habilitation" class="form-control">
                                                <option value="">Habilitation ONFPP</option>
                                                <option value="Oui">OUI</option>
                                                <option value="non">NON</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 p-t-20" id="num_habilitation" style="display: none;">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                            <input class="mdl-textfield__input form-control" type="text" name="num_habilitation" placeholder="N° d'habilitation">
                                            <label class="mdl-textfield__label">N° d'habilitation</label>
                                        </div>
                                    </div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input form-control" name="historique_onfpp" type="text" >
											<label class="mdl-textfield__label">Historique avec onfpp:</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">

										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<span class="mdl-textfield--floating-label text-secondary">Charger votre RCCM</span>
										<input type="file" name="rccm" id="rccm" class="mdl-textfield__input form-control" placeholder="Numéro RCCM">

                                        

										</div>
									</div>
									
									
                                   <!-- Champs pour les domaines -->
                                   <div class="col-lg-6 p-t-20 text-center">
                                        <?php
                                        $coms = $bdd->query("SELECT * FROM domaine");
                                        ?>
                                        <label for="domaines" class="text-secondary left"> Maintenir la touche MAJ ou CTRL et choisir les domaines de compétences (maximum 3) :</label>
                                        <select name="domaines[]" id="domaines" class="form-control" multiple >
                                            <?php
                                            while ($donnees = $coms->fetch()) {
                                                echo "<option value=\"" . $donnees['id_domaine'] . "\" class='text-secondary'>" . $donnees['libelle'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>


									<div id="cvFieldsContainer">
										<div class="col-lg-6 p-t-20 cv-upload-field">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<span class="mdl-textfield--floating-label text-secondary">Charger CV du consultant</span>
												<input type="file" class="form-control" name="cv_consultant" id="cv_consultant" onchange="uploadCV(this)">
											</div>
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<textarea class="mdl-textfield__input form-control" name="reference" id="" cols="30" rows="5" ></textarea>
											
											<label class="mdl-textfield__label">References: Exple: Dr Alpha Oumar Kourouma Tel: 00224 628 06 92 00 E-mail: alphaoumar@gmail.com</label>
										</div>
									</div>
									<div class="col-lg-12 p-t-20 text-center">
                                        <input type="submit" name="submit_fournisseur" value="Valider" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-circle btn-success">
                                        <a href="../../inscription.php" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-circle btn-danger">Annuler</a>
                                    </div>

								</div>
                                 </form>

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->
			<!-- start chat sidebar -->

			<!-- end chat sidebar -->
		</div>
		<!-- end page container -->
		<!-- start footer -->
		<div class="page-footer">
			<div class="page-footer-inner"> 2024 &copy; ONFPP design by
				<a href="mailto:fayajacob.kamano@metfp.gov.gn" target="_top" class="makerCss">KDI</a>
			</div>
			<div class="scroll-to-top">
				<i class="icon-arrow-up"></i>
			</div>
		</div>
		<!-- end footer -->
	</div>
    
              
            <!-- Inclure jQuery (assurez-vous qu'il est inclus dans votre projet) -->



       


	<!-- start js include path -->
	<script src="../assets/plugins/jquery/jquery.min.js"></script>
	<script src="../assets/plugins/popper/popper.js"></script>
	<script src="../assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="../assets/plugins/feather/feather.min.js"></script>
	<!-- bootstrap -->
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- Common js-->
	<script src="../assets/js/app.js"></script>
	<script src="../assets/js/validation.module.js"></script>
	<script src="../assets/js/layout.js"></script>
	<script src="../assets/js/theme-color.js"></script>
	<!-- Material -->
	<script src="../assets/plugins/material/material.min.js"></script>
	<script src="../assets/js/pages/material-select/getmdl-select.js"></script>
	<script src="../assets/plugins/flatpicker/js/flatpicker.min.js"></script>
	<script src="../assets/js/pages/date-time/date-time.init.js"></script>
    
	<script src="../assets/plugins/sweet-alert/sweetalert2.all.min.js"></script>
	<script src="../assets/plugins/sweet-alert/sweetalert2.min.js"></script>
	<script src="../assets/js/pages/sweet-alert/sweet-alert-data.js"></script>
	<!-- end js include path -->
	<!-- dropzone -->
	<script src="../assets/plugins/dropzone/dropzone.js"></script>
	<script src="../assets/plugins/dropzone/dropzone-call.js"></script>
	<!-- end js include path -->
    <!-- Pour gerer l'habilitation -->
	
    <script>
		
		document.addEventListener('DOMContentLoaded', function () {
    var habilitationSelect = document.getElementById('habilitation');
    var numHabilitationField = document.getElementById('num_habilitation');
    var domainesSelect = document.getElementById('domaines');
    var cvFieldsContainer = document.getElementById('cvFieldsContainer');

    // Fonction pour afficher ou masquer le champ "N° d'habilitation"
    function toggleNumHabilitationField() {
        numHabilitationField.style.display = habilitationSelect.value === 'Oui' ? 'block' : 'none';
    }

    // Ajouter un écouteur d'événement pour détecter les changements dans la liste déroulante "Habilitation"
    habilitationSelect.addEventListener('change', function () {
        toggleNumHabilitationField();
    });

    // Appel initial pour configurer l'état du champ
    toggleNumHabilitationField();

    // Ajouter la logique pour la notification
    domainesSelect.addEventListener('change', function () {
        // Si le nombre d'options sélectionnées est supérieur à 3, afficher une notification
        if (domainesSelect.selectedOptions.length > 3) {
            Swal.fire({
                icon: 'error',
                title: 'Erreur',
                text: 'Vous ne pouvez sélectionner que jusqu\'à 3 domaines de compétences.'
            });
            // Désélectionner la dernière option
            domainesSelect.selectedOptions[domainesSelect.selectedOptions.length - 1].selected = false;
        }
    });

    // Ajouter un écouteur d'événement pour chaque champ d'import de CV
	domainesSelect.addEventListener('change', function () {
		// Supprimer les anciens champs de téléchargement
		cvFieldsContainer.innerHTML = '';

		// Ajouter de nouveaux champs de téléchargement en fonction des domaines sélectionnés
		const selectedDomaines = Array.from(domainesSelect.selectedOptions).map(function (option) {
			return option.text; // Utilisez option.text pour récupérer le texte de l'option (nom du domaine)
		});

		selectedDomaines.forEach(function (nom_domaine, index) {
			// Créer un champ de téléchargement de CV pour chaque domaine
			for (var i = 1; i <= 3; i++) {
				var cvField = document.createElement('div');
				cvField.className = 'col-lg-6 p-t-20 cv-upload-field';
				cvField.innerHTML = `
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
						<span>Charger le CV ${i} pour le domaine ${nom_domaine}</span>
						<input type="file" class="form-control" name="cv_consultant_${i}_${nom_domaine}" id="cv_consultant_${i}_${nom_domaine}">
						
					</div>
				`;

				cvFieldsContainer.appendChild(cvField);
			}
		});
	});
});

</script>
        

      
     <!-- Pour le mot de passe afficher -->
<script>
                    function togglePassword(fieldId) {
				var pwdField = document.getElementById(fieldId);

				if (pwdField.type === "password") {
					pwdField.type = "text";
				} else {
					pwdField.type = "password";
				}
			}
</script>
<script>
                $(document).ready(function () {
                    // Sélectionnez l'élément de domaine
                    var domaineSelect = $('#domaines');

                    // Sélectionnez le conteneur des champs de CV
                    var cvFieldsContainer = $('#cvFieldsContainer');

                    // Écoutez les changements dans la liste déroulante de domaine
                    domaineSelect.change(function () {
                        // Effacer les champs de CV existants
                        cvFieldsContainer.empty();

                        // Récupérer les domaines sélectionnés
                        var selectedDomaines = domaineSelect.val();

                        // Ajouter un champ de CV pour chaque domaine sélectionné
                        if (selectedDomaines) {
                            selectedDomaines.forEach(function (domaine) {
                                // Créer un champ de CV
                                var cvField = $('<div class="col-lg-6 p-t-20">\
                                                    <label for="cv_' + domaine + '">Charger le CV pour ' + domaine + ' :</label>\
                                                    <input type="file" class="form-control" name="cv_' + domaine + '">\
                                                </div>');

                                // Ajouter le champ de CV au conteneur
                                cvFieldsContainer.append(cvField);
                            });
                        }
                    });
                });
				function uploadCV(input) {
					const file = input.files[0];
					const formData = new FormData();
					formData.append('cv_consultant', file);

					const xhr = new XMLHttpRequest();
					xhr.open('POST', 'ajoutNewFormation.php');
					xhr.onload = function() {
						if (xhr.status === 200) {
							// Traiter la réponse du serveur (message de succès ou d'erreur)
							console.log(xhr.responseText);
						} else {
							console.error('Échec du téléchargement du CV.');
						}
					};

					xhr.send(formData);
				}
    </script>
        <!-- Pour la validation du formulaire avant la soumission -->
		
		<script src="../assets/js/validation.module.js">
		validateForm();
	</script>
	
    
</body>

</html>