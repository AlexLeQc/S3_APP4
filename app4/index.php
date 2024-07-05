<?php session_start(); ?>
<html>

<head>
<meta http-equiv="Content-Language" content="fr-ca">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link rel="stylesheet" type="text/css" href="/images/sds12-contenu.css">

<style type="text/css">
p {
		padding: 0px;
		margin: 0px;

}
</style>

</head>
<body>
<?php 
	$section="entete";
	include($_SERVER['DOCUMENT_ROOT']."/applic/nouvelles/sectionIndex.php"); 
?>

<hr align="left">

<table cellspacing="0" border="0" cellpadding="0" width="100%">
	<tr>
		<td style="width: 50%">
			<?php
			include_once($_SERVER['DOCUMENT_ROOT']."/applic/nouvelles/index_nouv.php"); 
			echo "<hr>";
			$section="sectionDuBas";
			include($_SERVER['DOCUMENT_ROOT']."/applic/nouvelles/sectionIndex.php"); 
			?>
		</td>
		<td align="left" valign="top" background="/images/sds12-filet6.JPG" width="4"> 
		&nbsp;</td>
		<td class="appZoneDocument" style="width: 50%"> <b><i>Documents</i></b>
		
		<?php 
			$section="documents";
			include($_SERVER['DOCUMENT_ROOT']."/applic/nouvelles/sectionIndex.php"); 
		?>
		
		</td>
	</tr>
</table>

</body>

</html>
