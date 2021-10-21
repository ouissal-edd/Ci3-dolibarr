<?php
require '../main.clean.php';


?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" sizes="16x16" href="../erp/theme/assets/images/favicon.png">
	<title>IPTECHONLINE</title>
	<link href="../erp/theme/dist/css/style.css" rel="stylesheet">
	<!-- This page CSS -->
	<link href="../erp/theme/dist/css/pages/data-table.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../erp/theme/assets/libs/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css">
	<link href="../erp/theme/assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
	<link href="../erp/theme/assets/libs/sweetalert2/dist/sweetalert.css" rel="stylesheet" type="text/css">
	<link href="../erp/theme/dist/css/select2-materialize.css" rel="stylesheet">


</head>

<body>
	<style>
		#champe-hidden {
			display: none;
		}

		/* class="select-dropdown dropdown-trigger" */
		.dropdown-trigger {
			display: none !important;
		}

		#champe-hidden-identifiant {
			display: none;
		}

		#champe-hidden-exercice {
			display: none;
		}

		#champe-hidden-tva {
			display: none;
		}

		/* #hidden-organisation {
            display: none;
        } */

		#hidden-heur {
			display: none;
		}

		#hidden-reso {
			display: none;
		}

		#hidden-comptable {
			display: none;
		}
	</style>

	<div class="main-wrapper" id="main-wrapper">
		<!-- ============================================================== -->
		<!-- Preloader - style you can find in spinners.css -->
		<!-- ============================================================== -->
		<?php include '../theme/materialize/loader.php'; ?>
		<!-- ============================================================== -->
		<!-- Preloader - style you can find in spinners.css -->
		<!-- ============================================================== -->
		<?php include '../theme/materialize/header.php'; ?>
		<!-- ============================================================== -->
		<!-- Sidebar scss in sidebar.scss -->
		<!-- ============================================================== -->
		<?php include '../theme/materialize/menu_left.php'; ?>
		<!-- ============================================================== -->
		<!-- Sidebar scss in sidebar.scss -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Page wrapper scss in scafholding.scss -->
		<!-- ============================================================== -->
		<div class="page-wrapper">
			<!-- ============================================================== -->
			<!-- Title and breadcrumb -->
			<!-- ============================================================== -->
			<div class="page-titles">
				<div class="d-flex align-items-center">
					<h5 class="font-medium m-b-0">Société</h5>
				</div>
			</div>
			<!-- ============================================================== -->
			<!-- Container fluid scss in scafholding.scss -->
			<!-- ============================================================== -->
			<div class="container-fluid">
				<div class="row">
					<div class="col s12">
						<div class="card">
							<div class="card-content">
								<div class="d-flex no-block align-items-center">

									<ul style="display: flex; flex-direction:row; width:100% " class="navbar-nav mr-auto">
										<li style="margin-right: 2%;" class="nav-item active">
											<a class="nav-link" id="href-organisaton" href="#">Société/Organisation
												<span class="sr-only">(current)</span>
											</a>
										</li>
										<li style="margin-right: 2%;" class="nav-item ">
											<a class="nav-link" id="href-heur" href="#">Heures d'ouverture
												<span class="sr-only">(current)</span>
											</a>
										</li>
										<li style="margin-right: 2%;" class="nav-item ">
											<a class="nav-link" id="href-comptable" href="#">Comptable
												<span class="sr-only">(current)</span>
											</a>
										</li>
										<li style="margin-right: 2%;" class="nav-item ">
											<a class="nav-link" id="href-reso" href="#">Reseau Sociaux
												<span class="sr-only">(current)</span>
											</a>
										</li>
										<ul>


								</div>
								<hr>
								<form id="hidden-organisation">

									<div class="row">
										<div class="row" style="background:#0000001a; padding:1%">
											<div class="col s4">Société/Organisation </div>
											<div class="col s6"> <a href="#!" id="href-add" style="font-size: 21px; float: right;"><i class="material-icons dp48">add_circle</i></a> </div>
										</div>
										<div class="col s12" id="champe-hidden">
											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Nom/Enseigne/Raison sociale </label>
												</div>
												<div class="input-field col s4">
													<input id='nom_societe' value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_SOCIETE_NOM); ?>" type='text'>
												</div>
												<div class="input-field col s4">
													<input id="MAIN_INFO_SOCIETE_NOM" value="MAIN_INFO_SOCIETE_NOM" type="hidden">
												</div>
											</div>

											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Adresse</label>
												</div>
												<div class="input-field col s4">
													<textarea id="adresse" cols="30" rows="10"><?php echo dol_escape_htmltag($conf->global->MAIN_INFO_SOCIETE_ADDRESS); ?></textarea>
												</div>
												<div class="input-field col s4">
													<input id="MAIN_INFO_SOCIETE_ADDRESS" value="MAIN_INFO_SOCIETE_ADDRESS" type="hidden">
												</div>

											</div>

											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Code Postale</label>
												</div>
												<div class="input-field col s4">
													<input id="postale" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_SOCIETE_ZIP); ?>" type="text">
												</div>
												<div class="input-field col s4">
													<input id="MAIN_INFO_SOCIETE_ZIP" value="MAIN_INFO_SOCIETE_ZIP" type="hidden">
												</div>

											</div>

											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Ville</label>
												</div>
												<div class="input-field col s4">
													<input id="villle" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_SOCIETE_TOWN); ?>" type="text">

												</div>
												<div class="input-field col s4">
													<input type="hidden" id="MAIN_INFO_SOCIETE_TOWN" value="MAIN_INFO_SOCIETE_TOWN">
												</div>
											</div>

											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;"> Pays</label>
												</div>
												<div class="input-field col s4">
													<select id="pays">

													</select>
												</div>
												<div class="input-field col s4">
													<input type="hidden" value="MAIN_INFO_SOCIETE_COUNTRY" id="MAIN_INFO_SOCIETE_COUNTRY">
												</div>
											</div>


											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Devise principale</label>
												</div>
												<div class="input-field col s4">
													<select id="devise">
													</select>
												</div>
												<div class="input-field col s4">
													<input type="hidden" value="MAIN_MONNAIE" id="MAIN_MONNAIE">
												</div>
											</div>

											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Telephone</label>
												</div>
												<div class="input-field col s4">
													<input type="text" id="telephone" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_SOCIETE_TEL); ?>">
												</div>
												<div class="input-field col s4">
													<input type="hidden" name="" id="MAIN_INFO_SOCIETE_TEL" value="MAIN_INFO_SOCIETE_TEL">
												</div>
											</div>

											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Fax</label>
												</div>
												<div class="input-field col s4">
													<input type="text" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_SOCIETE_FAX); ?>" id="faax">
												</div>

												<div class="input-field col s4">
													<input type="hidden" value="MAIN_INFO_SOCIETE_FAX" id="MAIN_INFO_SOCIETE_FAX">
												</div>
											</div>


											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Email</label>
												</div>
												<div class="input-field col s4">
													<input type="text" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_SOCIETE_MAIL); ?>" id="email_a">
												</div>
												<div class="input-field col s4">
													<input type="hidden" value="MAIN_INFO_SOCIETE_MAIL" id="MAIN_INFO_SOCIETE_MAIL">
												</div>
											</div>

											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Web</label>
												</div>
												<div class="input-field col s4">
													<input type="text" name="" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_SOCIETE_WEB); ?>" id="weeb">

												</div>
												<div class="input-field col s4">
													<input type="hidden" name="" value="MAIN_INFO_SOCIETE_WEB" id="MAIN_INFO_SOCIETE_WEB">
												</div>
											</div>


											<div class="row">

												<div class="input-field col s4">
													<label style="color: black;">Logo</label>
												</div>
												<div class="input-field col s3">
													<input id="valuelogo" type="file">
												</div>

												<div class="input-field col s3" class="form-group">
													<button class="btn btn-success" id="btn_upload" type="submit">Upload</button>
												</div>
												<div id="div_logo_hidden" class="input-field col s2">
												</div>
												<!-- </form> -->

											</div>

											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Note
												</div>
												<div class="input-field col s4">
													<input type="text" name="" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_SOCIETE_NOTE); ?>" id="notee">
												</div>
												<div id="MAIN_INFO_SOCIETE_NOTE" value="MAIN_INFO_SOCIETE_NOTE" class="input-field col s4">
												</div>

											</div>

										</div>
									</div>











									<br>
									<div class="row">
										<div class="row" style="background:#0000001a; padding:1%">
											<div class="col s4">
												Identifiants société/organisation </div>
											<div class="col s6"> <a href="#!" id="href-add-identifiant" style="font-size: 21px; float: right;"><i class="material-icons dp48">add_circle</i></a> </div>
										</div>
										<div class="col s12" id="champe-hidden-identifiant">
											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Nom du(des) gestionnaire(s)
														(PDG, directeur, président...) </label>
												</div>
												<div class="input-field col s4">
													<input type="text" name="" id="pdj" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_SOCIETE_MANAGERS); ?>">
												</div>
												<div class="input-field col s4">
													<input type="hidden" id="MAIN_INFO_SOCIETE_MANAGERS" value="MAIN_INFO_SOCIETE_MANAGERS">
												</div>
											</div>

											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Responsable de la protection des données (DPO ou contact RGPD)</label>
												</div>
												<div class="input-field col s4">
													<input type="text" name="" id="dpo" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_GDPR); ?>">
												</div>
												<div class="input-field col s4">
													<input type="hidden" name="" id="MAIN_INFO_GDPR" value="MAIN_INFO_GDPR">
												</div>
											</div>

											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Capital</label>
												</div>
												<div class="input-field col s4">
													<input type="text" name="" id="capitale" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_CAPITAL); ?>">

												</div>
												<div class="input-field col s4">
													<input type="hidden" name="" id="MAIN_INFO_CAPITAL" value="MAIN_INFO_CAPITAL">

												</div>
											</div>

											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Id. prof. 1 (R.C.)</label>
												</div>
												<div class="input-field col s4">
													<input type="text" name="" id="Rc" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_SIREN); ?>">
												</div>
												<div class="input-field col s4">
													<input type="hidden" value="MAIN_INFO_SIREN" id="MAIN_INFO_SIREN">
												</div>
											</div>

											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Id. prof. 2 (Patente)</label>
												</div>
												<div class="input-field col s4">
													<input type="text" name="" id="patente" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_SIRET); ?>">
												</div>
												<div class="input-field col s4">
													<input type="hidden" name="" id="MAIN_INFO_SIRET" value="MAIN_INFO_SIRET">
												</div>
											</div>

											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Id. prof. 3 (I.F.)</label>
												</div>
												<div class="input-field col s4">
													<input type="text" name="" id="if" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_APE); ?>">
												</div>
												<div class="input-field col s4">
													<input type="hidden" name="" id="MAIN_INFO_APE" value="MAIN_INFO_APE">
												</div>
											</div>


											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Id. prof. 4 (C.N.S.S.)</label>
												</div>
												<div class="input-field col s4">
													<input type="text" id="cnss" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_RCS); ?>">
												</div>
												<div class="input-field col s4">
													<input type="hidden" value="MAIN_INFO_RCS" id="MAIN_INFO_RCS">
												</div>
											</div>


											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Id prof. 5 (I.C.E.)</label>
												</div>
												<div class="input-field col s4">
													<input type="text" id="ice" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_PROFID5); ?>">
												</div>
												<div class="input-field col s4">
													<input type="hidden" value="MAIN_INFO_PROFID5" id="MAIN_INFO_PROFID5">
												</div>
											</div>

											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Numéro de TVA</label>
												</div>
												<div id="div_tva" class="input-field col s4">
													<input id="tva" type="text">
												</div>
											</div>


											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Objet de la société</label>
												</div>
												<div class="input-field col s4">
													<input type="text" name="" id="objectif" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_SOCIETE_OBJECT); ?>">
												</div>
												<div class="input-field col s4">
													<input type="hidden" name="" id="MAIN_INFO_SOCIETE_OBJECT" value="MAIN_INFO_SOCIETE_OBJECT">
												</div>

											</div>
										</div>
									</div>





									<br>
									<div class="row">
										<div class="row" style="background:#0000001a; padding:1%">
											<div class="col s4">
												Exercice fiscal </div>
											<div class="col s6"> <a href="#!" id="href-add-exercice" style="font-size: 21px; float: right;"><i class="material-icons dp48">add_circle</i></a> </div>
										</div>
										<div class="col s12" id="champe-hidden-exercice">
											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Mois de début d'exercice </label>
												</div>
												<div class="input-field col s4">
													<select id="exercice">
														<option value="1">Janvier</option>
														<option value="2">Fevrier</option>
														<option value="3">Mars</option>
														<option value="4">Avril</option>
														<option value="5">Mai</option>
														<option value="6">Juin</option>
														<option value="7">Juillet</option>
														<option value="8">Aout</option>
														<option value="9">Septembre</option>
														<option value="10">Octobre</option>
														<option value="11">Novenmbre</option>
														<option value="12">Decembre</option>


													</select>
												</div>
												<div class="input-field col s4">
													<input type="hidden" name="" id="SOCIETE_FISCAL_MONTH_START" value="SOCIETE_FISCAL_MONTH_START">
												</div>
											</div>
										</div>
									</div>





									<br>
									<div class="row">
										<div class="row" style="background:#0000001a; padding:1%">
											<div class="col s4">
												Gestion TVA </div>
											<div class="col s6"> <a href="#!" id="href-add-tva" style="font-size: 21px; float: right;"><i class="material-icons dp48">add_circle</i></a> </div>
										</div>
										<div class="col s12" id="champe-hidden-tva">
											<div class="row">
												<div class="input-field col s3">
													<p>
														<label>
															<input class="inputcheck" name="ajustetva" type="radio" value="1" checked />
															<span> Assujetti à la TVA</span>
														</label>
													</p>
													<!-- <input type="radio" name="ajustetva" class="form-check-input"> Assujetti à la TVA -->
												</div>
												<div class="input-field col s6">
													<p>Le taux de TVA proposé par défaut lors de la création de propositions commerciales, factures, commandes, etc... répond à la règle standard suivante:
														Si vendeur non assujetti à TVA, TVA par défaut=0. Fin de règle.
														Si le (pays vendeur= pays acheteur) alors TVA par défaut=TVA du produit vendu. Fin de règle.
														Si vendeur et acheteur dans Communauté européenne et bien vendu= moyen de transport neuf (auto, bateau, avion), TVA par défaut=0 (La TVA doit être payée par acheteur au centre d'impôts de son pays et non au vendeur). Fin de règle.
														Si vendeur et acheteur dans Communauté européenne et acheteur= particulier alors TVA par défaut=TVA du produit vendu. Fin de règle.
														Si vendeur et acheteur sont dans la Communauté européenne et que l'acheteur est une société alors TVA par défaut=0. Fin de règle.
														Sinon la TVA proposée par défaut=0. Fin de règle.</p>
												</div>
											</div>


											<div class="row">
												<div class="input-field col s3">
													<p>
														<label>
															<input class="inputcheck" name="ajustetva" type="radio" value="0" />
															<span> Non assujetti à la TVA</span>
														</label>
													</p>
													<!-- <input type="radio" name="ajustetva" class="form-check-input"> Non assujetti à la TVA -->
												</div>
												<div class="input-field col s6">
													<p>Le taux de TVA proposé par défaut est 0. C'est le cas d'associations, particuliers ou certaines petites sociétés.</p>
												</div>
												<div class="input-field col s6">
													<input type="hidden" name="" id="FACTURE_TVAOPTION" value="FACTURE_TVAOPTION">
												</div>
											</div>



										</div>
										<br>
										<a href="#!" id="enregistrer_organisation" class="btn modal-action modal-close waves-effect waves-light cyan">Enregistrer</a>

									</div>




								</form>
								<!-- Fin Societe/Organisation -->

								<!-- Start Heures d ouverture -->
								<form id="hidden-heur">
									<br>
									<div class="row">
										<div class="row" style="background:#0000001a; padding:1%">
											<div class="col s4">
												Jour </div>
											<div class="col s6"> </div>
										</div>

										<div class="col s12">
											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Lundi</label>
												</div>
												<div class="input-field col s4">
													<input type="text" name="" id="lundi" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_OPENINGHOURS_MONDAY); ?>">
												</div>
												<div class="input-field col s4">
													<input type="hidden" name="" id="MAIN_INFO_OPENINGHOURS_MONDAY" value="MAIN_INFO_OPENINGHOURS_MONDAY">
												</div>
											</div>

											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Mardi</label>
												</div>
												<div class="input-field col s4">
													<input type="text" name="" id="mardi" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_OPENINGHOURS_TUESDAY); ?>">
												</div>
												<div class="input-field col s4">
													<input type="hidden" name="" id="MAIN_INFO_OPENINGHOURS_TUESDAY" value="MAIN_INFO_OPENINGHOURS_TUESDAY">
												</div>
											</div>

											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Mercredi</label>
												</div>
												<div class="input-field col s4">
													<input type="text" name="" id="mercredi" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_OPENINGHOURS_WEDNESDAY); ?>">
												</div>
												<div class="input-field col s4">
													<input type="hidden" name="" id="MAIN_INFO_OPENINGHOURS_WEDNESDAY" value="MAIN_INFO_OPENINGHOURS_WEDNESDAY">
												</div>
											</div>


											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Jeudi</label>
												</div>
												<div class="input-field col s4">
													<input type="text" name="" id="jeudi" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_OPENINGHOURS_THURSDAY); ?>">
												</div>
												<div class="input-field col s4">
													<input type="hidden" name="" id="MAIN_INFO_OPENINGHOURS_THURSDAY" value="MAIN_INFO_OPENINGHOURS_THURSDAY">
												</div>
											</div>

											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Vendredi</label>
												</div>
												<div class="input-field col s4">
													<input type="text" name="" id="vendredi" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_OPENINGHOURS_FRIDAY); ?>">
												</div>
												<div class="input-field col s4">
													<input type="hidden" name="" id="MAIN_INFO_OPENINGHOURS_FRIDAY" value="MAIN_INFO_OPENINGHOURS_FRIDAY">
												</div>
											</div>


											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Samedi</label>
												</div>
												<div class="input-field col s4">
													<input type="text" name="" id="samedi" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_OPENINGHOURS_SATURDAY); ?>">
												</div>
												<div class="input-field col s4">
													<input type="hidden" name="" id="MAIN_INFO_OPENINGHOURS_SATURDAY" value="MAIN_INFO_OPENINGHOURS_SATURDAY">
												</div>
											</div>

											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Dimanche</label>
												</div>
												<div class="input-field col s4">
													<input type="text" name="" id="dimanche" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_OPENINGHOURS_SUNDAY); ?>">
												</div>
												<div class="input-field col s4">
													<input type="hidden" name="" id="MAIN_INFO_OPENINGHOURS_SUNDAY" value="MAIN_INFO_OPENINGHOURS_SUNDAY">
												</div>
											</div>

											<br>
											<a href="#!" id="enregistrer_heur" class="btn modal-action modal-close waves-effect waves-light cyan">Enregistrer</a>


										</div>
									</div>
								</form>

								<!-- Start Comptavle -->

								<form id="hidden-comptable">

									<div class="row">
										<div class="row" style="background:#0000001a; padding:1%">
											<div class="col s4">Société/Organisation </div>
											<div class="col s6"> </div>
										</div>
										<div class="col s12">
											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Nom/Enseigne/Raison sociale </label>
												</div>
												<div class="input-field col s4">
													<input type="text" name="" id="socialcomptable" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_ACCOUNTANT_NAME); ?>">
												</div>
												<div class="input-field col s4">
													<input type="hidden" id="MAIN_INFO_ACCOUNTANT_NAME" value="MAIN_INFO_ACCOUNTANT_NAME">
												</div>
											</div>

											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Adresse</label>
												</div>
												<div class="input-field col s4">
													<textarea name="" id="adresscomptable" cols="30" rows="10"><?php echo dol_escape_htmltag($conf->global->MAIN_INFO_ACCOUNTANT_ADDRESS); ?>
												</textarea>
												</div>
												<div class="input-field col s4">
													<input type="hidden" name="" id="MAIN_INFO_ACCOUNTANT_ADDRESS" value="MAIN_INFO_ACCOUNTANT_ADDRESS">
												</div>
											</div>

											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Code postale</label>
												</div>
												<div class="input-field col s4">
													<input type="text" name="" id="zipcomptable" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_ACCOUNTANT_ZIP); ?>">
												</div>
												<div class="input-field col s4">
													<input type="hidden" name="" id="MAIN_INFO_ACCOUNTANT_ZIP" value="MAIN_INFO_ACCOUNTANT_ZIP">
												</div>
											</div>

											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Ville</label>
												</div>
												<div class="input-field col s4">
													<input type="text" name="" id="villecomptable" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_ACCOUNTANT_TOWN); ?>">
												</div>
												<div class="input-field col s4">
													<input type="hidden" name="" id="MAIN_INFO_ACCOUNTANT_TOWN" value="MAIN_INFO_ACCOUNTANT_TOWN">
												</div>
											</div>

											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;"> Pays</label>
												</div>
												<div class="input-field col s4">
													<select id="pays_comptable">
													</select>
												</div>

												<div class="input-field col s4">
													<input type="hidden" name="" id="MAIN_INFO_ACCOUNTANT_COUNTRY" value="MAIN_INFO_ACCOUNTANT_COUNTRY">

												</div>

											</div>

											<!-- <div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Département / Canton</label>
												</div>
												<div class="input-field col s4">
													<select class="comptablevalue" id="canton_comptable">
													</select>
												</div>
												<div id="div_canton_comptable_hid" class="input-field col s4">

												</div>
											</div> -->


											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Telephone</label>
												</div>
												<div class="input-field col s4">
													<input type="text" name="" id="telcomptable" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_ACCOUNTANT_PHONE); ?>">
												</div>
												<div class="input-field col s4">
													<input type="hidden" name="" id="MAIN_INFO_ACCOUNTANT_PHONE" value="MAIN_INFO_ACCOUNTANT_PHONE">
												</div>
											</div>

											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Fax</label>
												</div>
												<div class="input-field col s4">
													<input type="text" name="" id="faxcomptable" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_ACCOUNTANT_FAX); ?>">
												</div>
												<div class="input-field col s4">
													<input type="hidden" name="" id="MAIN_INFO_ACCOUNTANT_FAX" value="MAIN_INFO_ACCOUNTANT_FAX">
												</div>
											</div>


											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Email</label>
												</div>
												<div class="input-field col s4">
													<input type="text" name="" id="mailcomptable" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_ACCOUNTANT_MAIL); ?>">
												</div>
												<div class="input-field col s4">
													<input type="hidden" name="" id="MAIN_INFO_ACCOUNTANT_MAIL" value="MAIN_INFO_ACCOUNTANT_MAIL">
												</div>
											</div>

											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Web</label>
												</div>
												<div class="input-field col s4">
													<input type="text" name="" id="webcomptable" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_ACCOUNTANT_WEB); ?>">

												</div>
												<div class="input-field col s4">
													<input type="hidden" name="" id="MAIN_INFO_ACCOUNTANT_WEB" value="MAIN_INFO_ACCOUNTANT_WEB">

												</div>
											</div>

											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Code Comptable</label>
												</div>
												<div class="input-field col s4">
													<input type="text" name="" id="codecomptable" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_ACCOUNTANT_CODE); ?>">
												</div>
												<div class="input-field col s4">
													<input type="hidden" name="" id="MAIN_INFO_ACCOUNTANT_CODE" value="MAIN_INFO_ACCOUNTANT_CODE">

												</div>
											</div>

											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">Note
												</div>
												<div class="input-field col s4">
													<textarea name="" id="notecomptable" cols="30" rows="10"><?php echo dol_escape_htmltag($conf->global->MAIN_INFO_ACCOUNTANT_NOTE); ?></textarea>
												</div>
												<div class="input-field col s4">
													<input type="hidden" name="" id="MAIN_INFO_ACCOUNTANT_NOTE" value="MAIN_INFO_ACCOUNTANT_NOTE">
												</div>
											</div>

										</div>
									</div>
									<br>
									<a href="#!" id="enregistrer_comptable" class="btn modal-action modal-close waves-effect waves-light cyan">Enregistrer</a>
								</form>





								<!-- start reso -->
								<form id="hidden-reso">
									<br>
									<div class="row">
										<div class="row" style="background:#0000001a; padding:1%">
											<div class="col s4">
												Réseaux sociaux </div>
											<div class="col s6"> </div>
										</div>
										<div class="col s12">
											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">URL Facebook </label>
												</div>
												<div class="input-field col s4">
													<input type="text" name="" id="fb" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_SOCIETE_FACEBOOK_URL); ?>">
												</div>
												<div class="input-field col s4">
													<input type="hidden" name="" id="MAIN_INFO_SOCIETE_FACEBOOK_URL" value="MAIN_INFO_SOCIETE_FACEBOOK_URL">
												</div>
											</div>

											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">URL Twitter </label>
												</div>
												<div class="input-field col s4">
													<input type="text" name="" id="twitter" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_SOCIETE_TWITTER_URL); ?>">
												</div>

												<div class="input-field col s4">
													<input type="hidden" name="" id="MAIN_INFO_SOCIETE_TWITTER_URL" value="MAIN_INFO_SOCIETE_TWITTER_URL">
												</div>
											</div>

											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">URL Linkedin </label>
												</div>
												<div class="input-field col s4">
													<input type="text" name="" id="linkedin" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_SOCIETE_LINKEDIN_URL); ?>">
												</div>
												<div class="input-field col s4">
													<input type="hidden" name="" id="MAIN_INFO_SOCIETE_LINKEDIN_URL" value="MAIN_INFO_SOCIETE_LINKEDIN_URL">
												</div>
											</div>

											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">URL Instagram </label>
												</div>
												<div class="input-field col s4">
													<input type="text" name="" id="insta" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_SOCIETE_INSTAGRAM_URL); ?>">

												</div>
												<div class="input-field col s4">
													<input type="hidden" name="" id="MAIN_INFO_SOCIETE_INSTAGRAM_URL" value="MAIN_INFO_SOCIETE_INSTAGRAM_URL">
												</div>
											</div>

											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">URL Youtube </label>
												</div>
												<div class="input-field col s4">
													<input type="text" name="" id="youtube" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_SOCIETE_YOUTUBE_URL); ?>">
												</div>
												<div class="input-field col s4">
													<input type="hidden" name="" id="MAIN_INFO_SOCIETE_YOUTUBE_URL" value="MAIN_INFO_SOCIETE_YOUTUBE_URL">
												</div>

											</div>

											<div class="row">
												<div class="input-field col s4">
													<label style="color: black;">URL Github </label>
												</div>
												<div class="input-field col s4">
													<input type="text" name="" id="github" value="<?php echo dol_escape_htmltag($conf->global->MAIN_INFO_SOCIETE_GITHUB_URL); ?>">

												</div>
												<div class="input-field col s4">
													<input type="hidden" name="" id="MAIN_INFO_SOCIETE_GITHUB_URL" value="MAIN_INFO_SOCIETE_GITHUB_URL">
												</div>
											</div>
										</div>
									</div>
									<a href="#!" id="enregistrer_reso" class="btn modal-action modal-close waves-effect waves-light cyan">Enregistrer</a>

								</form>


							</div>
						</div>
					</div>
				</div>
			</div>





			<!-- ============================================================== -->
			<!-- Container fluid scss in scafholding.scss -->
			<!-- ============================================================== -->
			<?php include '../theme/materialize/footer.php'; ?>
		</div>
		<!-- ============================================================== -->
		<!-- Page wrapper scss in scafholding.scss -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Right Sidebar -->
		<!-- ============================================================== -->

		<div class="chat-windows"></div>
		<!-- ============================================================== -->
		<!-- Right Sidebar -->
		<!-- ============================================================== -->
	</div>
	<!-- ============================================================== -->
	<!-- All Required js -->
	<!-- ============================================================== -->
	<script src="../erp/theme/assets/libs/jquery/dist/jquery.min.js"></script>
	<script src="../erp/theme/dist/js/materialize.min.js"></script>
	<script src="../erp/theme/assets/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
	<!-- ============================================================== -->
	<!-- Apps -->
	<!-- ============================================================== -->
	<script src="../erp/theme/dist/js/app.js"></script>
	<script src="../erp/theme/dist/js/app.init.light-sidebar.js"></script>
	<script src="../erp/theme/dist/js/app-style-switcher.js"></script>
	<!-- ============================================================== -->
	<!-- Custom js -->
	<!-- ============================================================== -->
	<script src="../erp/theme/dist/js/custom.min.js"></script>
	<!-- ============================================================== -->
	<!-- This page plugin js -->
	<!-- ============================================================== -->
	<script src="../erp/theme/assets/extra-libs/DataTables/datatables.min.js"></script>
	<!-- start - This is for export functionality only -->
	<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
	<script src="../erp/theme/assets/libs/moment/moment.js"></script>
	<script src="../erp/theme/dist/js/pages/datatable/datatable-api.init.js"></script>
	<script src="../erp/theme/assets/libs/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker-custom.js"></script>
	<script src="../erp/theme/assets/libs/toastr/build/toastr.min.js"></script>
	<script src="../erp/theme/assets/libs/sweetalert2/dist/sweetalert.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>


</body>
<script>
	// $('#pays').selectstyle();
	$('#exercice').select2();


	$("#href-add").click(function() {
		$('#champe-hidden').slideToggle(100);
	});

	$("#href-add-identifiant").click(function() {
		$('#champe-hidden-identifiant').slideToggle(100);
	});
	$("#href-add-exercice").click(function() {
		$('#champe-hidden-exercice').slideToggle(100);
	});
	$("#href-add-tva").click(function() {
		$('#champe-hidden-tva').slideToggle(100);
	});

	$("#href-organisaton").click(function() {
		$('#hidden-organisation').show();
		$('#hidden-heur').hide();
		$('#hidden-reso').hide();
		$('#hidden-comptable').hide();
	});

	$("#href-heur").click(function() {
		$('#hidden-heur').show();
		$('#hidden-organisation').hide();
		$('#hidden-reso').hide();
		$('#hidden-comptable').hide();


	});
	$("#href-comptable").click(function() {
		$('#hidden-comptable').show();
		$('#hidden-reso').hide();
		$('#hidden-heur').hide();
		$('#hidden-organisation').hide();
	});
	$("#href-reso").click(function() {
		$('#hidden-reso').show();
		$('#hidden-comptable').hide();
		$('#hidden-heur').hide();
		$('#hidden-organisation').hide();
	});


	// Remplir select contry/ Societé
	function fetch_Contry() {
		$.ajax({
			url: "<?php echo DOL_URL_ROOT; ?>/code4/pays",
			type: "post",
			dataType: "json",
			success: function(data) {
				var tbody = "";
				var comptable = "";

				for (key in data) {
					if (data[key]['code'] == "MA") {
						tbody += "<option value='" + data[key]["rowid"] + ":" + data[key]["code"] + ":" + data[key]["label"] + "'>" + data[key]["label"] + "</option>"
						comptable += "<option value='" + data[key]["rowid"] + ":" + data[key]["code"] + ":" + data[key]["label"] + "'>" + data[key]["label"] + "</option>"
					} else if (data[key]['code'] == "FR") {
						tbody += "<option value='" + data[key]["rowid"] + ":" + data[key]["code"] + ":" + data[key]["label"] + "'>" + data[key]["label"] + "</option>"
						comptable += "<option value='" + data[key]["rowid"] + ":" + data[key]["code"] + ":" + data[key]["label"] + "'>" + data[key]["label"] + "</option>"
					} else if (data[key]['code'] == "ES") {
						tbody += "<option value='" + data[key]["rowid"] + ":" + data[key]["code"] + ":" + data[key]["label"] + "'>" + data[key]["label"] + "</option>"
						comptable += "<option value='" + data[key]["rowid"] + ":" + data[key]["code"] + ":" + data[key]["label"] + "'>" + data[key]["label"] + "</option>"
					} else if (data[key]['code'] == "US") {
						tbody += "<option value='" + data[key]["rowid"] + ":" + data[key]["code"] + ":" + data[key]["label"] + "'>" + data[key]["label"] + "</option>"
						comptable += "<option value='" + data[key]["rowid"] + ":" + data[key]["code"] + ":" + data[key]["label"] + "'>" + data[key]["label"] + "</option>"
					}




				}
				$('#pays').html(tbody);
				$('#pays').select2();

				$('#pays_comptable').html(comptable)
				$('#pays_comptable').select2();

			}

		});
	}
	fetch_Contry();
	// $(document).ready(function() {});

	function fetch_departement() {
		$.ajax({
			url: "<?php echo DOL_URL_ROOT; ?>/code4/departement",
			type: "post",
			dataType: "json",
			success: function(data) {
				var tbody = "";
				var comptable = "";

				tbody += "<option value=''>Selectioner departement</option>"
				for (key in data) {

					tbody += "<option selected value='" + data[key]["rowid"] + ":" + data[key]["code_departement"] + " :" + data[key]["nom"] + "'>" + data[key]["code_departement"] + "-" + data[key]["nom"] + "</option>"
					comptable += "<option selected value='" + data[key]["rowid"] + ":" + data[key]["code_departement"] + " :" + data[key]["nom"] + "'>" + data[key]["code_departement"] + "-" + data[key]["nom"] + "</option>"


				}


				$('#canton').html(tbody)
				$('#canton').formSelect();
				$('#canton_comptable').html(comptable)
				$('#canton_comptable').formSelect();

			}

		});
	}
	fetch_departement();



	function fetch_devise() {
		$.ajax({
			url: "<?php echo DOL_URL_ROOT; ?>/code4/devise",
			type: "post",
			dataType: "json",
			success: function(data) {
				var tbody = "";
				tbody += "<option value=''>Selectioner devise</option>"
				for (key in data) {
					if (data[key]["code_iso"] == 'MAD') {
						tbody += "<option selected value='" + data[key]["code_iso"] + "'>" + data[key]["label"] + "</option>"

					} else {

						tbody += "<option value='" + data[key]["rowid"] + "'>" + data[key]["label"] + "</option>"
					}
				}


				$('#devise').html(tbody)
				$('#devise').select2();

			}

		});
	}
	fetch_devise();








	// ------------Update


	$(document).on("click", "#enregistrer_organisation", function(e) {
		e.preventDefault();

		// $('.valueinput').each(function() {
		// 	all_value.push($(this).val());
		// });


		// $('.namehidden').each(function() {
		// 	All_name.push($(this).val());
		// })
		// console.log(All_name);
		// console.log(all_value);
		// all_value.push($('input[name="ajustetva"]:checked').val());
		const MAIN_INFO_SOCIETE_NOTE = $('#MAIN_INFO_SOCIETE_NOTE').val();
		const MAIN_INFO_SOCIETE_WEB = $('#MAIN_INFO_SOCIETE_WEB').val();
		const MAIN_INFO_SOCIETE_MAIL = $('#MAIN_INFO_SOCIETE_MAIL').val();
		const MAIN_INFO_SOCIETE_FAX = $('#MAIN_INFO_SOCIETE_FAX').val();
		const MAIN_INFO_SOCIETE_TEL = $('#MAIN_INFO_SOCIETE_TEL').val();
		const MAIN_INFO_SOCIETE_ZIP = $('#MAIN_INFO_SOCIETE_ZIP').val();
		const MAIN_MONNAIE = $('#MAIN_MONNAIE').val();
		const MAIN_INFO_SOCIETE_COUNTRY = $('#MAIN_INFO_SOCIETE_COUNTRY').val();
		const MAIN_INFO_SOCIETE_TOWN = $('#MAIN_INFO_SOCIETE_TOWN').val();
		const MAIN_INFO_SOCIETE_ADDRESS = $('#MAIN_INFO_SOCIETE_ADDRESS').val();
		const MAIN_INFO_SOCIETE_NOM = $('#MAIN_INFO_SOCIETE_NOM').val();

		const MAIN_INFO_SOCIETE_MANAGERS = $('#MAIN_INFO_SOCIETE_MANAGERS').val();
		const MAIN_INFO_GDPR = $('#MAIN_INFO_GDPR').val();
		const MAIN_INFO_CAPITAL = $('#MAIN_INFO_CAPITAL').val();
		const MAIN_INFO_SIREN = $('#MAIN_INFO_SIREN').val();
		const MAIN_INFO_SIRET = $('#MAIN_INFO_SIRET').val();
		const MAIN_INFO_APE = $('#MAIN_INFO_APE').val();
		const MAIN_INFO_RCS = $('#MAIN_INFO_RCS').val();
		const MAIN_INFO_PROFID5 = $('#MAIN_INFO_PROFID5').val();
		const MAIN_INFO_SOCIETE_OBJECT = $('#MAIN_INFO_SOCIETE_OBJECT').val();
		const SOCIETE_FISCAL_MONTH_START = $('#SOCIETE_FISCAL_MONTH_START').val();
		const FACTURE_TVAOPTION = $('#FACTURE_TVAOPTION').val();


		var nom_societe = $('#nom_societe').val();
		var adresse = $('#adresse').val();
		var postale = $('#postale').val();
		var villle = $('#villle').val();
		var pays = $('#pays').val();
		var devise = $('#devise').val();
		var telephone = $('#telephone').val();
		var faax = $('#faax').val();
		var email_a = $('#email_a').val();
		var weeb = $('#weeb').val();
		var notee = $('#notee').val();

		var pdj = $('#pdj').val();
		var dpo = $('#dpo').val();
		var capitale = $('#capitale').val();
		var Rc = $('#Rc').val();
		var patente = $('#patente').val();
		var ape = $('#if').val();
		var cnss = $('#cnss').val();
		var ice = $('#ice').val();
		var objectif = $('#objectif').val();
		var exercice = $('#exercice').val();
		var tva = $("input[name='ajustetva']:checked").val();






		var All_name = [MAIN_INFO_SOCIETE_NOM, MAIN_INFO_SOCIETE_ADDRESS, MAIN_INFO_SOCIETE_ZIP, MAIN_INFO_SOCIETE_TOWN, MAIN_INFO_SOCIETE_COUNTRY, MAIN_MONNAIE, MAIN_INFO_SOCIETE_TEL, MAIN_INFO_SOCIETE_FAX, MAIN_INFO_SOCIETE_MAIL, MAIN_INFO_SOCIETE_WEB, MAIN_INFO_SOCIETE_NOTE, MAIN_INFO_SOCIETE_MANAGERS, MAIN_INFO_GDPR, MAIN_INFO_CAPITAL, MAIN_INFO_SIREN, MAIN_INFO_SIRET, MAIN_INFO_APE, MAIN_INFO_RCS, MAIN_INFO_PROFID5, MAIN_INFO_SOCIETE_OBJECT, SOCIETE_FISCAL_MONTH_START, FACTURE_TVAOPTION];
		var all_value = [nom_societe, adresse, postale, villle, pays, devise, telephone, faax, email_a, weeb, notee, pdj, dpo, capitale, Rc, patente, ape, cnss, ice, objectif, exercice, tva];



		if (nom_societe == "") {
			alert(" id required");
		} else {

			$.ajax({
				url: "<?php echo DOL_URL_ROOT; ?>/code4/edit_companyc",
				type: "post",
				dataType: "json",
				data: {
					nom: All_name,
					adress: all_value,

				},
				success: function(data) {

					swal("Updated", "your data is updated", "success");


				}





			});

		}
	});

	// update heur d ouverture

	$(document).on("click", "#enregistrer_heur", function(e) {
		e.preventDefault();


		const MAIN_INFO_OPENINGHOURS_MONDAY = $('#MAIN_INFO_OPENINGHOURS_MONDAY').val();
		const MAIN_INFO_OPENINGHOURS_TUESDAY = $('#MAIN_INFO_OPENINGHOURS_TUESDAY').val();
		const MAIN_INFO_OPENINGHOURS_WEDNESDAY = $('#MAIN_INFO_OPENINGHOURS_WEDNESDAY').val();
		const MAIN_INFO_OPENINGHOURS_THURSDAY = $('#MAIN_INFO_OPENINGHOURS_THURSDAY').val();
		const MAIN_INFO_OPENINGHOURS_FRIDAY = $('#MAIN_INFO_OPENINGHOURS_FRIDAY').val();
		const MAIN_INFO_OPENINGHOURS_SATURDAY = $('#MAIN_INFO_OPENINGHOURS_SATURDAY').val();
		const MAIN_INFO_OPENINGHOURS_SUNDAY = $('#MAIN_INFO_OPENINGHOURS_SUNDAY').val();



		var lundi = $('#lundi').val();
		var mardi = $('#mardi').val();
		var mercredi = $('#mercredi').val();
		var jeudi = $('#jeudi').val();
		var vendredi = $('#vendredi').val();
		var samedi = $('#samedi').val();
		var dimanche = $('#dimanche').val();

		var All_name_jour = [MAIN_INFO_OPENINGHOURS_MONDAY, MAIN_INFO_OPENINGHOURS_TUESDAY, MAIN_INFO_OPENINGHOURS_WEDNESDAY, MAIN_INFO_OPENINGHOURS_THURSDAY, MAIN_INFO_OPENINGHOURS_FRIDAY, MAIN_INFO_OPENINGHOURS_SATURDAY, MAIN_INFO_OPENINGHOURS_SUNDAY];
		var all_value_jour = [lundi, mardi, mercredi, jeudi, vendredi, samedi, dimanche];





		// $('.jourvalue').each(function() {
		// 	all_value_jour.push($(this).val());
		// });
		// $('.journame').each(function() {
		// 	All_name_jour.push($(this).val());
		// });
		// alert(all_value_jour);


		if (All_name_jour == "") {
			alert(" id required");
		} else {

			$.ajax({
				url: "<?php echo DOL_URL_ROOT; ?>/code4/edit_jour",
				type: "post",
				dataType: "json",
				data: {
					journame: All_name_jour,
					jourvalue: all_value_jour,

				},
				success: function(data) {
					swal("Updated", "your data is updated", "success");



				}





			});

		}
	});












	// update reseau

	$(document).on("click", "#enregistrer_reso", function(e) {
		e.preventDefault();


		const MAIN_INFO_SOCIETE_FACEBOOK_URL = $('#MAIN_INFO_SOCIETE_FACEBOOK_URL').val();
		const MAIN_INFO_SOCIETE_TWITTER_URL = $('#MAIN_INFO_SOCIETE_TWITTER_URL').val();
		const MAIN_INFO_SOCIETE_LINKEDIN_URL = $('#MAIN_INFO_SOCIETE_LINKEDIN_URL').val();
		const MAIN_INFO_SOCIETE_INSTAGRAM_URL = $('#MAIN_INFO_SOCIETE_INSTAGRAM_URL').val();
		const MAIN_INFO_SOCIETE_YOUTUBE_URL = $('#MAIN_INFO_SOCIETE_YOUTUBE_URL').val();
		const MAIN_INFO_SOCIETE_GITHUB_URL = $('#MAIN_INFO_SOCIETE_GITHUB_URL').val();

		var fb = $('#fb').val();
		var twitter = $('#twitter').val();
		var linkedin = $('#linkedin').val();
		var insta = $('#insta').val();
		var youtube = $('#youtube').val();
		var github = $('#github').val();



		var All_name_reseau = [MAIN_INFO_SOCIETE_FACEBOOK_URL, MAIN_INFO_SOCIETE_TWITTER_URL, MAIN_INFO_SOCIETE_LINKEDIN_URL, MAIN_INFO_SOCIETE_INSTAGRAM_URL, MAIN_INFO_SOCIETE_YOUTUBE_URL, MAIN_INFO_SOCIETE_GITHUB_URL];
		var all_value_reseau = [fb, twitter, linkedin, insta, youtube, github];

		// $('.resovalue').each(function() {
		// 	all_value_reseau.push($(this).val());
		// });
		// $('.resoname').each(function() {
		// 	All_name_reseau.push($(this).val());
		// });
		// alert(all_value_reseau);


		if (All_name_reseau == "") {
			alert(" id required");
		} else {

			$.ajax({
				url: "<?php echo DOL_URL_ROOT; ?>/code4/edit_reso",
				type: "post",
				dataType: "json",
				data: {
					resoname: All_name_reseau,
					resovalue: all_value_reseau,

				},
				success: function(data) {
					swal("Updated", "your data is updated", "success");


				}





			});

		}
	});

	// update comptable
	$(document).on("click", "#enregistrer_comptable", function(e) {
		e.preventDefault();



		const MAIN_INFO_ACCOUNTANT_NAME = $('#MAIN_INFO_ACCOUNTANT_NAME').val();
		const MAIN_INFO_ACCOUNTANT_ADDRESS = $('#MAIN_INFO_ACCOUNTANT_ADDRESS').val();
		const MAIN_INFO_ACCOUNTANT_ZIP = $('#MAIN_INFO_ACCOUNTANT_ZIP').val();
		const MAIN_INFO_ACCOUNTANT_TOWN = $('#MAIN_INFO_ACCOUNTANT_TOWN').val();
		const MAIN_INFO_ACCOUNTANT_COUNTRY = $('#MAIN_INFO_ACCOUNTANT_COUNTRY').val();
		const MAIN_INFO_ACCOUNTANT_PHONE = $('#MAIN_INFO_ACCOUNTANT_PHONE').val();
		const MAIN_INFO_ACCOUNTANT_FAX = $('#MAIN_INFO_ACCOUNTANT_FAX').val();
		const MAIN_INFO_ACCOUNTANT_MAIL = $('#MAIN_INFO_ACCOUNTANT_MAIL').val();
		const MAIN_INFO_ACCOUNTANT_WEB = $('#MAIN_INFO_ACCOUNTANT_WEB').val();
		const MAIN_INFO_ACCOUNTANT_CODE = $('#MAIN_INFO_ACCOUNTANT_CODE').val();
		const MAIN_INFO_ACCOUNTANT_NOTE = $('#MAIN_INFO_ACCOUNTANT_NOTE').val();




		var socialcomptable = $('#socialcomptable').val();
		var adresscomptable = $('#adresscomptable').val();
		var zipcomptable = $('#zipcomptable').val();
		var villecomptable = $('#villecomptable').val();
		var pays_comptable = $('#pays_comptable').val();
		var telcomptable = $('#telcomptable').val();
		var faxcomptable = $('#faxcomptable').val();
		var mailcomptable = $('#mailcomptable').val();
		var webcomptable = $('#webcomptable').val();
		var codecomptable = $('#codecomptable').val();
		var notecomptable = $('#notecomptable').val();



		var All_name_comptable = [MAIN_INFO_ACCOUNTANT_NAME, MAIN_INFO_ACCOUNTANT_ADDRESS, MAIN_INFO_ACCOUNTANT_ZIP, MAIN_INFO_ACCOUNTANT_TOWN, MAIN_INFO_ACCOUNTANT_COUNTRY, MAIN_INFO_ACCOUNTANT_PHONE, MAIN_INFO_ACCOUNTANT_FAX, MAIN_INFO_ACCOUNTANT_MAIL, MAIN_INFO_ACCOUNTANT_WEB, MAIN_INFO_ACCOUNTANT_CODE, MAIN_INFO_ACCOUNTANT_NOTE];
		var all_value_comptable = [socialcomptable, adresscomptable, zipcomptable, villecomptable, pays_comptable, telcomptable, faxcomptable, mailcomptable, webcomptable, codecomptable, notecomptable];

		// $('.comptablevalue').each(function() {
		// 	all_value_comptable.push($(this).val());
		// });
		// $('.comptablename').each(function() {
		// 	All_name_comptable.push($(this).val());
		// });
		console.log(All_name_comptable);
		console.log(all_value_comptable);


		// alert(all_value_comptable);



		if (All_name_comptable == "") {
			alert(" id required");
		} else {

			$.ajax({
				url: "<?php echo DOL_URL_ROOT; ?>/code4/edit_comptable",
				type: "post",
				dataType: "json",
				data: {
					compname: All_name_comptable,
					compvalue: all_value_comptable,

				},
				success: function(data) {
					swal("Updated", "your data is updated", "success");


				}
			});
		}
	});

	// update img

	$(document).on("click", "#btn_upload", function(e) {
		e.preventDefault();
		var namelogoo = $('.name_logo').val();
		// var valeurlogo = $('.valuelogo').val();
		var chemin = '<?php echo $dolibarr_main_document_root; ?>/admin/upload';
		var files = $("#valuelogo")[0].files;
		var fd = new FormData();
		for (var count = 0; count < files.length; count++) {
			fd.append('files', files[count]);
		}
		fd.append('chemin', chemin);
		fd.append('name', namelogoo);

		$.ajax({
			url: "<?php echo DOL_URL_ROOT; ?>/code4/upload",
			type: "post",
			dataType: "json",
			data: fd,
			contentType: false,
			cache: false,
			processData: false,
			success: function(data) {
				swal("Updated", "your image is updated", "success");
			}
		});
	});
</script>

</html>