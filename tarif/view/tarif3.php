<?php
require '../main.clean.php';

$dt = date("Y-m-d");
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
        /* #section_two {
			display: none;
		} */

        .dropdown-trigger {
            display: none !important;
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
                    <h5 class="font-medium m-b-0">Gestion des tarifs</h5>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="card">
                    <div class="card-content wizard-content">
                        <h5 class="card-title">Remplir les informations suivantes</h5>
                        <!--h6 class="card-subtitle">You can us the validation like what we did</h6-->
                        <form action="#" id="demoForm" class="myForm validation-wizard wizard-circle m-t-40 ">
                            <!-- Step 1 -->
                            <section id="section_one">
                                <div class="row dr">
                                    <div class=" col s6">
                                        <label class="">Utilisateur</label>
                                        <select class="required" id="user_select">
                                        </select>
                                    </div>

                                    <div class=" col s6">
                                        <label class="">Libellé tarif</label>
                                        <input type="text" name="" id="libelle_tarif">
                                    </div>
                                </div>

                                <div class="row dr">
                                    <div class='col s6'>
                                        <label>Date début </label>
                                        <input id="date_debut" type="date" value='<?php echo date("Y-m-01", strtotime($dt)); ?>'>
                                    </div>
                                    <div class='col s6'>
                                        <label> Date fin</label>
                                        <input id="date_fin" type="date" value='<?php echo date("Y-m-t", strtotime($dt)); ?>'>
                                    </div>
                                </div>

                                <br>
                                <div class="row dr">
                                    <div class=" col s6">
                                        <label class="">Client</label>
                                        <select class="required" id="client_select">
                                        </select>
                                    </div>

                                    <label style="margin-left: 1%;">Statut</label> <br><br>
                                    <p class='col s3'>
                                        <label>
                                            <input value="1" class="with-gap" name="statut" type="radio" checked />
                                            <span> active</span>
                                        </label>
                                    </p>
                                    <p class='col s3'>
                                        <label>
                                            <input value="0" class="with-gap" name="statut" type="radio" checked />
                                            <span> non active</span>
                                        </label>
                                    </p>
                                </div>

                    </div>

                    <br>


                    <br>

                    <!-- Step 2 -->

                    <section id="section_two">
                        <div style="background: #ededed; padding: 6px 0; border-top: 1px solid #ccc;border-bottom: 1px solid #ccc;" class="row">
                            <div class="col s2">
                                <span style="color:#000">Produit</span>
                            </div>
                            <div class="col s2">
                                <span style="color:#000">Unité</span>
                            </div>
                            <div class="col s2">
                                <span style="color:#000">Prix HT</span>
                            </div>
                            <div class="col s2">
                                <span style="color:#000">TVA</span>
                            </div>
                            <div class="col s2">
                                <span style="color:#000">TTC</span>
                            </div>

                            <div class="col s2">
                                <a href="#modal2" id="add_row_product" class="modal-trigger counter"><i style="cursor: pointer; font-size: 19px;" class="fas fa-plus-circle"></i></a>
                            </div>


                        </div>


                        <div id="diplucate">

                        </div>
                        <div class="card-action">
                            <a href="#" id="add-product" class="right btn modal-action modal-close waves-effect waves-light cyan">Enregistrer</a>
                        </div>
                        <br>
                        <br>


                </div>
            </div>


            </section>
            </form>
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
    $('#user_select').select2();
    $('#client_select').select2();


    function fetch_user() {
        $.ajax({
            url: "<?php echo DOL_URL_ROOT; ?>/code4/userr",
            type: "post",
            dataType: "json",
            success: function(data) {
                var tbody = "";
                for (i in data) {
                    tbody += "<option value=" + data[i]['rowid'] + ">" + data[i]['login'] + "</option>";
                }
                $("#user_select").html(tbody);
            }
        });


    }
    fetch_user();

    function fetch_client() {
        var entity = '<?php echo $_SESSION['dol_entity']; ?>';

        $.ajax({
            url: "<?php echo DOL_URL_ROOT; ?>/code4/client_fetch",
            type: "post",
            dataType: "json",
            data: {
                entity: entity
            },
            success: function(data) {
                var tbody = "";
                tbody += "<option> Selectionner un client</option>";

                for (i in data) {
                    tbody += "<option value=" + data[i]['rowid'] + ">" + data[i]['nom'] + "</option>";
                }
                $("#client_select").html(tbody);
            }
        });


    }
    fetch_client();

    $(document).on('change', '.produit_select', function() {
        var fk_product = $(this).val();
        var client = $("#client_select").val();

        var c = $(this).data('selectp');
        $.ajax({
            url: "<?php echo DOL_URL_ROOT; ?>/code4/price_product_client",
            method: "post",
            dataType: "json",
            data: {
                client: client,
            },
            success: function(data) {
                console.log(data);
                var unite = '';
                var tva = "";
                var ttc = "";
                var prix_ht = "";


                unite += "<option selected value='" + data[0]["fk_unite"] + "'>" + data[0]["short_label"] + "</option>"
                tva += "<option selected value='" + data[0]["tva"] + "'>" + data[0]["tva"] + "%</option>"



                $("#UnitForm" + c).html(unite);
                $("#tva" + c).html(tva);
                $(".TTC" + c).val(data[0]['ttc']);
                $("#prix_ht" + c).val(data[0]['prix_ht']);


            }
        });

    });







    function fetch_Prod(b) {
        $.ajax({
            url: "<?php echo DOL_URL_ROOT; ?>/code4/fetch_pr",
            type: "post",
            dataType: "json",

            success: function(data) {
                console.log(data);
                var tbody = "";
                tbody += "<option >Select prodyct </option>";
                for (key in data) {
                    tbody += "<option  value='" + data[key]['rowid'] + "'> " + data[key]['ref'] + "-" + data[key]['label'] + " </option>";

                }
                $('#product_select' + b).html(tbody);

            }

        });
    }




    $(document).ready(function() {
        var max_fields = 10;
        var wrapper = $("#diplucate");
        var add_button = $("#add_row_product");
        var x = 0;
        $(add_button).click(function(e) {
            e.preventDefault();
            if (x < max_fields) {
                x++;
                // console.log(x);
                $(wrapper).append(
                    `
			<div>
					<div class="row">
		
							<div class=" col s2">
								<select data-selectp=` + x + ` id="product_select` + x + `" class="required produit_select" >

								</select>
							</div>
							<div class="col s2">
								<select id="UnitForm` + x + `" class="UnitForm">
								</select>
							</div>

							<div class=" col s2">
								<input type="text" data-count="` + x + `" id="prix_ht` + x + `"  name="prix_ht" class="prix_HT">
							</div>


							<div class=" col s2">
								<select id="tva` + x + `" class="tva tva` + x + `">
									<option value='0'>0%</option>
									<option value='7'>7%</option>
									<option value='10'>10%</option>
									<option value='14'>14%</option>
									<option selected value='20'>20%</option>
								</select>
							</div>


							<div class=" col s2">
								<input  type="text" id="TTC` + x + ` " class="TTC TTC` + x + `" disabled>
							</div>
							
							<a href="#" id="remove_product" class=" cancel"><i style="cursor: pointer; font-size: 19px;" class="material-icons dp48">cancel</i></a>
							

						</div>
		`
                )
                $('.UnitForm').select2();
                $('.produit_select').select2();
                $('.tva').select2();
                $('.name_entity').select2();

                fetch_Prod(x);
                // get_price(x);

            }
        });
        $(wrapper).on("click", "#remove_product", function(e) {
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
        })

    });



    $(document).on("click", "#add-product", function(e) {
        e.preventDefault();


        var utilisateur = $('#user_select').val();
        var libelle = $('#libelle_tarif').val();
        var date_d = $('#date_debut').val();
        var date_f = $('#date_fin').val();
        var stat = $('input[name="statut"]:checked').val();
        var fk_soc = $('#client_select').val();;

        $.ajax({
            url: "<?php echo DOL_URL_ROOT; ?>/code4/insert_info",
            type: "post",
            dataType: "json",
            data: {
                fk_user: utilisateur,
                libelle: libelle,
                date_debut: date_d,
                date_fin: date_f,
                statut: stat,
                fk_soc: fk_soc,


            },
            success: function(data) {

                var tarif = (data.last_id);
                var name_entity = "<?php echo $_SESSION['dol_entity'] ?>";
                var produit_select = [];
                var UnitForm = [];
                var prix_HT = [];
                var tva = [];
                var Tttc = [];


                $('.produit_select').each(function() {
                    produit_select.push($(this).val());
                });
                $('.UnitForm').each(function() {
                    UnitForm.push($(this).val());
                });
                $('.prix_HT').each(function() {
                    prix_HT.push($(this).val());
                });
                $('.tva').each(function() {
                    tva.push($(this).val());
                });
                $('.TTC').each(function() {
                    Tttc.push($(this).val());
                });
                alert(produit_select);

                $.ajax({
                    url: "<?php echo DOL_URL_ROOT; ?>/code4/insert_data",
                    method: "POST",
                    data: {
                        produit_select: produit_select,
                        UnitForm: UnitForm,
                        name_entity: name_entity,
                        prix_HT: prix_HT,
                        tva: tva,
                        Tttc: Tttc,
                        tarif: tarif,
                    },
                    success: function(data) {
                        swal("Added", "your data is added", "success");


                    }
                });
            }
        });


    });

    $(document).ready(function() {


        $(document).on('keyup', '.prix_HT', function() {
            var count = $(this).data("count");
            var prix_ht = $(this).val();
            var taux_tva = $('.tva' + count).val();

            var new_prix_ttc = parseFloat((prix_ht * (1 + taux_tva / 100))).toFixed(2);
            $('.TTC' + count).val(new_prix_ttc);


        });
    });
</script>

</html>