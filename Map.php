<?php
    
    $name = $_GET['name'];
    $title = $_GET['title'];

?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="Base.css">
        <?php echo('<link rel="stylesheet" type="text/css" href="' . $name . '.maze.css">'); ?>
        <?php echo('<link rel="stylesheet" type="text/css" href="' . $name . '.overlays.css">'); ?>
		<script type="text/javascript" src="SmoothMovement.js"></script>
		<script type="text/javascript" src="Maze.js"></script>
	</head>
	<body>
		<div id="Maze">
			<table>
				<tr>
					<td class="Block" id="Block_A01"><div class="Overlay" id="Overlay_A01"></div></td>
					<td class="Block" id="Block_A02"><div class="Overlay" id="Overlay_A01"></div></td>
					<td class="Block" id="Block_A03"><div class="Overlay" id="Overlay_A01"></div></td>
					<td class="Block" id="Block_A04"><div class="Overlay" id="Overlay_A01"></div></td>
					<td class="Block" id="Block_A05"><div class="Overlay" id="Overlay_A01"></div></td>
					<td class="Block" id="Block_A06"><div class="Overlay" id="Overlay_A01"></div></td>
					<td class="Block" id="Block_A07"><div class="Overlay" id="Overlay_A01"></div></td>
					<td class="Block" id="Block_A08"><div class="Overlay" id="Overlay_A01"></div></td>
					<td class="Block" id="Block_A09"><div class="Overlay" id="Overlay_A01"></div></td>
					<td class="Block" id="Block_A10"><div class="Overlay" id="Overlay_A01"></div></td>
					<td class="Block" id="Block_A11"><div class="Overlay" id="Overlay_A01"></div></td>
					<td class="Block" id="Block_A12"><div class="Overlay" id="Overlay_A01"></div></td>
				</tr>
				<tr>
					<td class="Block" id="Block_B01"><div class="Overlay" id="Overlay_B01"></div></td>
					<td class="Block" id="Block_B02"><div class="Overlay" id="Overlay_B02"></div></td>
					<td class="Block" id="Block_B03"><div class="Overlay" id="Overlay_B03"></div></td>
					<td class="Block" id="Block_B04"><div class="Overlay" id="Overlay_B04"></div></td>
					<td class="Block" id="Block_B05"><div class="Overlay" id="Overlay_B05"></div></td>
					<td class="Block" id="Block_B06"><div class="Overlay" id="Overlay_B06"></div></td>
					<td class="Block" id="Block_B07"><div class="Overlay" id="Overlay_B07"></div></td>
					<td class="Block" id="Block_B08"><div class="Overlay" id="Overlay_B08"></div></td>
					<td class="Block" id="Block_B09"><div class="Overlay" id="Overlay_B09"></div></td>
					<td class="Block" id="Block_B10"><div class="Overlay" id="Overlay_B10"></div></td>
					<td class="Block" id="Block_B11"><div class="Overlay" id="Overlay_B11"></div></td>
					<td class="Block" id="Block_B12"><div class="Overlay" id="Overlay_B12"></div></td>
				</tr>                                                                 
				<tr>                                                                  
					<td class="Block" id="Block_C01"><div class="Overlay" id="Overlay_C01"></div></td>
					<td class="Block" id="Block_C02"><div class="Overlay" id="Overlay_C02"></div></td>
					<td class="Block" id="Block_C03"><div class="Overlay" id="Overlay_C03"></div></td>
					<td class="Block" id="Block_C04"><div class="Overlay" id="Overlay_C04"></div></td>
					<td class="Block" id="Block_C05"><div class="Overlay" id="Overlay_C05"></div></td>
					<td class="Block" id="Block_C06"><div class="Overlay" id="Overlay_C06"></div></td>
					<td class="Block" id="Block_C07"><div class="Overlay" id="Overlay_C07"></div></td>
					<td class="Block" id="Block_C08"><div class="Overlay" id="Overlay_C08"></div></td>
					<td class="Block" id="Block_C09"><div class="Overlay" id="Overlay_C09"></div></td>
					<td class="Block" id="Block_C10"><div class="Overlay" id="Overlay_C10"></div></td>
					<td class="Block" id="Block_C11"><div class="Overlay" id="Overlay_C11"></div></td>
					<td class="Block" id="Block_C12"><div class="Overlay" id="Overlay_C12"></div></td>
				</tr>                                                                 
				<tr>                                                                  
					<td class="Block" id="Block_D01"><div class="Overlay" id="Overlay_D01"></div></td>
					<td class="Block" id="Block_D02"><div class="Overlay" id="Overlay_D02"></div></td>
					<td class="Block" id="Block_D03"><div class="Overlay" id="Overlay_D03"></div></td>
					<td class="Block" id="Block_D04"><div class="Overlay" id="Overlay_D04"></div></td>
					<td class="Block" id="Block_D05"><div class="Overlay" id="Overlay_D05"></div></td>
					<td class="Block" id="Block_D06"><div class="Overlay" id="Overlay_D06"></div></td>
					<td class="Block" id="Block_D07"><div class="Overlay" id="Overlay_D07"></div></td>
					<td class="Block" id="Block_D08"><div class="Overlay" id="Overlay_D08"></div></td>
					<td class="Block" id="Block_D09"><div class="Overlay" id="Overlay_D09"></div></td>
					<td class="Block" id="Block_D10"><div class="Overlay" id="Overlay_D10"></div></td>
					<td class="Block" id="Block_D11"><div class="Overlay" id="Overlay_D11"></div></td>
					<td class="Block" id="Block_D12"><div class="Overlay" id="Overlay_D12"></div></td>
				</tr>                                                                    
				<tr>                                                                     
					<td class="Block" id="Block_E01"><div class="Overlay" id="Overlay_E01"></div></td>
					<td class="Block" id="Block_E02"><div class="Overlay" id="Overlay_E02"></div></td>
					<td class="Block" id="Block_E03"><div class="Overlay" id="Overlay_E03"></div></td>
					<td class="Block" id="Block_E04"><div class="Overlay" id="Overlay_E04"></div></td>
					<td class="Block" id="Block_E05"><div class="Overlay" id="Overlay_E05"></div></td>
					<td class="Block" id="Block_E06"><div class="Overlay" id="Overlay_E06"></div></td>
					<td class="Block" id="Block_E07"><div class="Overlay" id="Overlay_E07"></div></td>
					<td class="Block" id="Block_E08"><div class="Overlay" id="Overlay_E08"></div></td>
					<td class="Block" id="Block_E09"><div class="Overlay" id="Overlay_E09"></div></td>
					<td class="Block" id="Block_E10"><div class="Overlay" id="Overlay_E10"></div></td>
					<td class="Block" id="Block_E11"><div class="Overlay" id="Overlay_E11"></div></td>
					<td class="Block" id="Block_E12"><div class="Overlay" id="Overlay_E12"></div></td>
				</tr>                                                                    
				<tr>                                                                     
					<td class="Block" id="Block_F01"><div class="Overlay" id="Overlay_F01"></div></td>
					<td class="Block" id="Block_F02"><div class="Overlay" id="Overlay_F02"></div></td>
					<td class="Block" id="Block_F03"><div class="Overlay" id="Overlay_F03"></div></td>
					<td class="Block" id="Block_F04"><div class="Overlay" id="Overlay_F04"></div></td>
					<td class="Block" id="Block_F05"><div class="Overlay" id="Overlay_F05"></div></td>
					<td class="Block" id="Block_F06"><div class="Overlay" id="Overlay_F06"></div></td>
					<td class="Block" id="Block_F07"><div class="Overlay" id="Overlay_F07"></div></td>
					<td class="Block" id="Block_F08"><div class="Overlay" id="Overlay_F08"></div></td>
					<td class="Block" id="Block_F09"><div class="Overlay" id="Overlay_F09"></div></td>
					<td class="Block" id="Block_F10"><div class="Overlay" id="Overlay_F10"></div></td>
					<td class="Block" id="Block_F11"><div class="Overlay" id="Overlay_F11"></div></td>
					<td class="Block" id="Block_F12"><div class="Overlay" id="Overlay_F12"></div></td>
				</tr>                                
				<tr>                                 
					<td class="Block" id="Block_G01"><div class="Overlay" id="Overlay_G01"></div></td>
					<td class="Block" id="Block_G02"><div class="Overlay" id="Overlay_G02"></div></td>
					<td class="Block" id="Block_G03"><div class="Overlay" id="Overlay_G03"></div></td>
					<td class="Block" id="Block_G04"><div class="Overlay" id="Overlay_G04"></div></td>
					<td class="Block" id="Block_G05"><div class="Overlay" id="Overlay_G05"></div></td>
					<td class="Block" id="Block_G06"><div class="Overlay" id="Overlay_G06"></div></td>
					<td class="Block" id="Block_G07"><div class="Overlay" id="Overlay_G07"></div></td>
					<td class="Block" id="Block_G08"><div class="Overlay" id="Overlay_G08"></div></td>
					<td class="Block" id="Block_G09"><div class="Overlay" id="Overlay_G09"></div></td>
					<td class="Block" id="Block_G10"><div class="Overlay" id="Overlay_G10"></div></td>
					<td class="Block" id="Block_G11"><div class="Overlay" id="Overlay_G11"></div></td>
					<td class="Block" id="Block_G12"><div class="Overlay" id="Overlay_G12"></div></td>
				</tr>                                
				<tr>                                 
					<td class="Block" id="Block_H01"><div class="Overlay" id="Overlay_H01"></div></td>
					<td class="Block" id="Block_H02"><div class="Overlay" id="Overlay_H02"></div></td>
					<td class="Block" id="Block_H03"><div class="Overlay" id="Overlay_H03"></div></td>
					<td class="Block" id="Block_H04"><div class="Overlay" id="Overlay_H04"></div></td>
					<td class="Block" id="Block_H05"><div class="Overlay" id="Overlay_H05"></div></td>
					<td class="Block" id="Block_H06"><div class="Overlay" id="Overlay_H06"></div></td>
					<td class="Block" id="Block_H07"><div class="Overlay" id="Overlay_H07"></div></td>
					<td class="Block" id="Block_H08"><div class="Overlay" id="Overlay_H08"></div></td>
					<td class="Block" id="Block_H09"><div class="Overlay" id="Overlay_H09"></div></td>
					<td class="Block" id="Block_H10"><div class="Overlay" id="Overlay_H10"></div></td>
					<td class="Block" id="Block_H11"><div class="Overlay" id="Overlay_H11"></div></td>
					<td class="Block" id="Block_H12"><div class="Overlay" id="Overlay_H12"></div></td>
				</tr>                                
				<tr>                                 
					<td class="Block" id="Block_I01"><div class="Overlay" id="Overlay_I01"></div></td>
					<td class="Block" id="Block_I02"><div class="Overlay" id="Overlay_I02"></div></td>
					<td class="Block" id="Block_I03"><div class="Overlay" id="Overlay_I03"></div></td>
					<td class="Block" id="Block_I04"><div class="Overlay" id="Overlay_I04"></div></td>
					<td class="Block" id="Block_I05"><div class="Overlay" id="Overlay_I05"></div></td>
					<td class="Block" id="Block_I06"><div class="Overlay" id="Overlay_I06"></div></td>
					<td class="Block" id="Block_I07"><div class="Overlay" id="Overlay_I07"></div></td>
					<td class="Block" id="Block_I08"><div class="Overlay" id="Overlay_I08"></div></td>
					<td class="Block" id="Block_I09"><div class="Overlay" id="Overlay_I09"></div></td>
					<td class="Block" id="Block_I10"><div class="Overlay" id="Overlay_I10"></div></td>
					<td class="Block" id="Block_I11"><div class="Overlay" id="Overlay_I11"></div></td>
					<td class="Block" id="Block_I12"><div class="Overlay" id="Overlay_I12"></div></td>
				</tr>                                
				<tr>                                 
					<td class="Block" id="Block_J01"><div class="Overlay" id="Overlay_J01"></div></td>
					<td class="Block" id="Block_J02"><div class="Overlay" id="Overlay_J02"></div></td>
					<td class="Block" id="Block_J03"><div class="Overlay" id="Overlay_J03"></div></td>
					<td class="Block" id="Block_J04"><div class="Overlay" id="Overlay_J04"></div></td>
					<td class="Block" id="Block_J05"><div class="Overlay" id="Overlay_J05"></div></td>
					<td class="Block" id="Block_J06"><div class="Overlay" id="Overlay_J06"></div></td>
					<td class="Block" id="Block_J07"><div class="Overlay" id="Overlay_J07"></div></td>
					<td class="Block" id="Block_J08"><div class="Overlay" id="Overlay_J08"></div></td>
					<td class="Block" id="Block_J09"><div class="Overlay" id="Overlay_J09"></div></td>
					<td class="Block" id="Block_J10"><div class="Overlay" id="Overlay_J10"></div></td>
					<td class="Block" id="Block_J11"><div class="Overlay" id="Overlay_J11"></div></td>
					<td class="Block" id="Block_J12"><div class="Overlay" id="Overlay_J12"></div></td>
				</tr>                                
				<tr>                                 
					<td class="Block" id="Block_K01"><div class="Overlay" id="Overlay_K01"></div></td>
					<td class="Block" id="Block_K02"><div class="Overlay" id="Overlay_K02"></div></td>
					<td class="Block" id="Block_K03"><div class="Overlay" id="Overlay_K03"></div></td>
					<td class="Block" id="Block_K04"><div class="Overlay" id="Overlay_K04"></div></td>
					<td class="Block" id="Block_K05"><div class="Overlay" id="Overlay_K05"></div></td>
					<td class="Block" id="Block_K06"><div class="Overlay" id="Overlay_K06"></div></td>
					<td class="Block" id="Block_K07"><div class="Overlay" id="Overlay_K07"></div></td>
					<td class="Block" id="Block_K08"><div class="Overlay" id="Overlay_K08"></div></td>
					<td class="Block" id="Block_K09"><div class="Overlay" id="Overlay_K09"></div></td>
					<td class="Block" id="Block_K10"><div class="Overlay" id="Overlay_K10"></div></td>
					<td class="Block" id="Block_K11"><div class="Overlay" id="Overlay_K11"></div></td>
					<td class="Block" id="Block_K12"><div class="Overlay" id="Overlay_K12"></div></td>
				</tr>                                
				<tr>                                 
					<td class="Block" id="Block_L01"><div class="Overlay" id="Overlay_L01"></div></td>
					<td class="Block" id="Block_L02"><div class="Overlay" id="Overlay_L02"></div></td>
					<td class="Block" id="Block_L03"><div class="Overlay" id="Overlay_L03"></div></td>
					<td class="Block" id="Block_L04"><div class="Overlay" id="Overlay_L04"></div></td>
					<td class="Block" id="Block_L05"><div class="Overlay" id="Overlay_L05"></div></td>
					<td class="Block" id="Block_L06"><div class="Overlay" id="Overlay_L06"></div></td>
					<td class="Block" id="Block_L07"><div class="Overlay" id="Overlay_L07"></div></td>
					<td class="Block" id="Block_L08"><div class="Overlay" id="Overlay_L08"></div></td>
					<td class="Block" id="Block_L09"><div class="Overlay" id="Overlay_L09"></div></td>
					<td class="Block" id="Block_L10"><div class="Overlay" id="Overlay_L10"></div></td>
					<td class="Block" id="Block_L11"><div class="Overlay" id="Overlay_L11"></div></td>
					<td class="Block" id="Block_L12"><div class="Overlay" id="Overlay_L12"></div></td>
				</tr>
			</table>
		</div>
	</body>
</html>