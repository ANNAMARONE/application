
<?php
require_once('config.php');
$id=$_GET['id'];
$sql='SELECT * FROM idée WHERE id=:id';

$statement=$conn->prepare($sql);
$statement->execute([':id'=>$id]);
$mode=$statement->fetch(PDO::FETCH_ASSOC);


if(isset($_POST['titre']) && isset($_POST['Contenu'])&&
isset($_POST['categorie']) && isset($_POST['id_utilisateur'])&&
isset($_POST['date_envoie'])){
$titre=$_POST['titre'];
$contenu=$_POST['Contenu'];
$categorie=$_POST['categorie'];
$auteur=$_POST['id_utilisateur'];
$date=$_POST['date_envoie'];
$sql = $conn->exec ("INSERT INTO idée (Contenu,date_envoie,categorie,id_utilisateur,titre)
         VALUES ('$contenu','$date','$categorie','$auteur','$titre')");
         $statement=$conn->prepare ($sql);
         if($statement->execute([':Contenu'=>$contenu,':categorie'=>$categorie,':id_utilisateur'=>$auteur,':date_envoie'=>$date,':titre'=>$titre])) {
            $message="modifier avec succe";
}
}
if (isset($_POST['Modifier'])) {
    header('location:affichage.php');
    

}
?>

<html lang="en" class="supernova ">
    <head>
        <script type="text/javascript" id="mobile-simulator">
        window.hasMobileFirstExtension = true;</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=https%3A%2F%2Fform.jotform.com%2F240597105205552" title="oEmbed Form">
<link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=https%3A%2F%2Fform.jotform.com%2F240597105205552" title="oEmbed Form">
<meta property="og:title" content="Idea Submission Form">
<meta property="og:url" content="https://form.jotform.com/240597105205552">
<meta property="og:description" content="Please click the link to complete this form.">
<meta name="slack-app-id" content="AHNMASS8M">
<meta property="og:image" content="https://cdn.jotfor.ms/assets/img/landing/opengraph.png">

<script>
          var favicon = document.querySelector('link[rel="shortcut icon"]');
          window.isDarkMode = (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches);
          if(favicon && window.isDarkMode) {
              favicon.href = favicon.href.replaceAll('favicon-2021-light%402x.png', 'favicon-2021-dark%402x.png');
          }
      </script><link rel="canonical" href="https://form.jotform.com/240597105205552">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1">
<meta name="HandheldFriendly" content="true">
<title>Idea Submission Form</title>
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/stylebuilder/static/form-common.css?v=21ce945
">
<style type="text/css">@media print{*{-webkit-print-color-adjust: exact !important;color-adjust: exact !important;}.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?v=3.3.51966&amp;themeRevisionID=5f7ed99c2c2c7240ba580251">
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_styles.css?3.3.51966">
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/css/styles/payment/payment_feature.css?3.3.51966">
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/stylebuilder/static/donationBox.css?v=3.3.51966">
<script src="https://cdn03.jotfor.ms/static/prototype.forms.js?v=3.3.51966" type="text/javascript"></script>
<script src="https://cdn01.jotfor.ms/static/jotform.forms.js?v=3.3.51966" type="text/javascript"></script>
<script src="https://cdn02.jotfor.ms/js/punycode-1.4.1.min.js?v=3.3.51966" type="text/javascript" defer=""></script>
<script src="https://cdn01.jotfor.ms/s/umd/86e4a7ae293/for-form-branding-footer.js?v=3.3.51966" type="text/javascript" defer=""></script>
<script src="https://cdn03.jotfor.ms/js/vendor/smoothscroll.min.js?v=3.3.51966" type="text/javascript"></script>
<script src="https://cdn01.jotfor.ms/js/errorNavigation.js?v=3.3.51966" type="text/javascript"></script>

</head>
<body cz-shortcut-listen="true">
<form action="affichage.php" class="jotform-form" onsubmit="return typeof testSubmitFunction !== 'undefined' &amp; testSubmitFunction();" action="https://submit.jotform.com/submit/240597105205552" method="post" name="form_240597105205552" id="240597105205552" accept-charset="utf-8" autocomplete="on" novalidate="true">
    <input type="hidden" name="formID" value="240597105205552">
    <input type="hidden" id="JWTContainer" value=""><input type="hidden" id="cardinalOrderNumber" value=""><input type="hidden" id="jsExecutionTracker" name="jsExecutionTracker" value="build-date-1709253765588=>init-started:1709253768792=>validator-called:1709253768801=>validator-mounted-true:1709253768801=>init-complete:1709253768803=>interval-complete:1709253789826">
    <input type="hidden" id="submitSource" name="submitSource" value="mounted"><input type="hidden" id="buildDate" name="buildDate" value="1709253765588">
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httac htvam">
            <h1 id="header_1" class="form-header" data-component="header">CRÉER DES IDÉES</h1>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_fullname" id="id_3"><label class="form-label form-label-top form-label-auto" id="label_3" for="first_3" aria-hidden="false"> catégories </label>
        <div id="cid_3" class="form-input-wide" data-layout="full">
          <div data-wrapper-react="true"><span class="form-sub-label-container" style="vertical-align:top" data-input-type="first" >
          <input type="text" id="first_3" name="categorie" class="form-textbox" data-defaultvalue="" autocomplete="section-input_3 given-name" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" value="<?= $mode['categorie']?>">
          </span><span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
          <input type="text" id="last_3" name="titre" class="form-textbox" data-defaultvalue="" autocomplete="section-input_3 family-name" size="15" data-component="last" aria-labelledby="label_3 sublabel_3_last" value="<?= $mode['titre']?>">
          <label class="form-sub-label" for="last_3" id="sublabel_3_last" style="min-height:13px">Titre</label></span></div>
        </div>
      </li>
      <li class="form-line" data-type="control_email" id="id_4"><label class="form-label form-label-top form-label-auto" id="label_4" for="input_4" aria-hidden="false"> Auteur </label>
        <div id="cid_4" class="form-input-wide" data-layout="half"> <span class="form-sub-label-container" style="vertical-align:top">
        <input type="number" id="input_4" name="id_utilisateur" class="form-textbox validate[Email]" data-defaultvalue="" autocomplete="section-input_4 email" style="width:310px" size="310" data-component="email" aria-labelledby="label_4 sublabel_input_4" value="<?= $mode['id_utilisateur']?>">
        </span> </div>
      </li>
     
      <li class="form-line" data-type="control_textbox" id="id_6"><label class="form-label form-label-top form-label-auto" id="label_6" for="input_6" aria-hidden="false"> date</label>
        <div id="cid_6" class="form-input-wide" data-layout="half"> <input type="date" id="input_6" name="date_envoie" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" data-component="textbox" aria-labelledby="label_6" value="<?= $mode['date_envoie']?>"> </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_7"><label class="form-label form-label-top form-label-auto" id="label_7" for="input_7" aria-hidden="false"> DESCRIPTION </label>
        <div id="cid_7" class="form-input-wide" data-layout="full"> <input id="input_7" class="form-textarea custom-hint-group form-custom-hint" name="Contenu" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_7" data-customhint="Type here..." customhinted="true" placeholder="ecrire ici" spellcheck="false" value="<?= $mode['Contenu']?>"> </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide" data-layout="full">
          <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField"><button id="input_2" type="submit" name="enregistrer" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="" aria-live="polite">enregistrer</button></div>
        </div>
      
  </div>
  </body></html>

