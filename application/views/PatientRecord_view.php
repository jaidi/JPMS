<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Patient Record</title>
	<link href="../assets/jquery/css/redmond/jquery-ui-1.9.2.custom.css" rel="stylesheet" />
	<script src="../assets/jquery/js/jquery-1.8.3.js"></script>
	<script src="../assets/jquery/js/jquery-ui-1.9.2.custom.js"></script>
	<!-- Add Begin Patient Bio Data libraries -->
	<link rel="stylesheet" href="../assets/jquery/jqwidgets/styles/jqx.base.css" type="text/css" />
	<link rel="stylesheet" href="../assets/style.css" type="text/css" />
    <script type="text/javascript" src="../assets/jquery/scripts/gettheme.js"></script>
    <script type="text/javascript" src="../assets/jquery/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="../assets/jquery/jqwidgets/jqxwindow.js"></script>
    <script type="text/javascript" src="../assets/jquery/jqwidgets/jqxbuttons.js"></script>
	<script type="text/javascript" src="../assets/jquery/jqwidgets/jqxsplitter.js"></script>
	<!-- Add End Patient Bio Data libraries -->
	
	<!-- Add Begin Drugs libraries -->
    <script type="text/javascript" src="../assets/jquery/jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="../assets/jquery/jqwidgets/jqxlistbox.js"></script>
    <script type="text/javascript" src="../assets/jquery/jqwidgets/jqxcombobox.js"></script>
    <script type="text/javascript" src="../assets/jquery/jqwidgets/jqxdropdownlist.js"></script>
    <script type="text/javascript" src="../assets/jquery/jqwidgets/jqxcheckbox.js"></script>
    <script type="text/javascript" src="../assets/jquery/jqwidgets/jqxexpander.js"></script>
    <script type="text/javascript" src="../assets/jquery/js/drugs.js"></script>
	<!-- Add End Drugs libraries -->
		
	<script>
	 $(function() {
	    $( "#start_date" ).datepicker();
	  });

	  $(function() {
	    $( "#end_date" ).datepicker();
	  });
	$(function() {
		$( "#accordion" ).accordion();
		
		var availableTags = [
			"ActionScript",
			"AppleScript",
			"Asp"
		];
		$( "#autocomplete" ).autocomplete({
			source: availableTags
		});
		

		
		$( "#button" ).button();
		$( "#radioset" ).buttonset();
		

		
		$( "#tabs" ).tabs();
		

		
		$( "#dialog" ).dialog({
			autoOpen: false,
			width: 400,
			buttons: [
				{
					text: "Ok",
					click: function() {
						$( this ).dialog( "close" );
					}
				},
				{
					text: "Cancel",
					click: function() {
						$( this ).dialog( "close" );
					}
				}
			]
		});

		// Link to open the dialog
		$( "#dialog-link" ).click(function( event ) {
			$( "#dialog" ).dialog( "open" );
			event.preventDefault();
		});
		

		
		$( "#datepicker" ).datepicker({
			inline: true
		});
		

		
		$( "#slider" ).slider({
			range: true,
			values: [ 17, 67 ]
		});
		

		
		$( "#progressbar" ).progressbar({
			value: 20
		});
		

		// Hover states on the static widgets
		$( "#dialog-link, #icons li" ).hover(
			function() {
				$( this ).addClass( "ui-state-hover" );
			},
			function() {
				$( this ).removeClass( "ui-state-hover" );
			}
		);
	});
	</script>
	<script type="text/javascript">
	   $(document).ready(function () {
            var theme = getTheme();
            $('#mainSplitter').jqxSplitter({ width: 600, height: 480, theme: theme, panels: [{ size: 300 }, { size: 300}] });
        });

    </script> 
	<style>
	body{
		font: 62.5% "Trebuchet MS", sans-serif;
		margin: 50px;
	}
	.demoHeaders {
		margin-top: 2em;
	}
	#dialog-link {
		padding: .4em 1em .4em 20px;
		text-decoration: none;
		position: relative;
	}
	#dialog-link span.ui-icon {
		margin: 0 5px 0 0;
		position: absolute;
		left: .2em;
		top: 50%;
		margin-top: -8px;
	}
	#icons {
		margin: 0;
		padding: 0;
	}
	#icons li {
		margin: 2px;
		position: relative;
		padding: 4px 0;
		cursor: pointer;
		float: left;
		list-style: none;
	}
	#icons span.ui-icon {
		float: left;
		margin: 0 4px;
	}
	</style>
 </head>
 <body class="default">
	<h2>Welcome </h2>
	<div id="tabs">
		<ul>
			<li><a href="#tabs-1">Search Patient</a></li>
			<li><a href="#tabs-2">Patient Bio Data</a></li>
			<li><a href="#tabs-3">Daily Progress Notes</a></li>
			<li><a href="#tabs-4">Drugs</a></li>
			<li><a href="#tabs-5">Examination</a></li>
			<li><a href="#tabs-6">History</a></li>
			<li><a href="#tabs-7">Operation</a></li>
			<li><a href="#tabs-8">Investigation</a></li>
			<li><a href="#tabs-9">Discharge</a></li>
			<li><a href="#tabs-10">Images</a></li>
			
		</ul>
		
		<div id="tabs-1">
			<?php $this->load->view('Search_view');	?>
		</div>
		<div id="tabs-2">
			<?php $this->load->view('PatientBioData_view');	?>
		</div>
		<div id="tabs-3">
			<?php $this->load->view('DPN_view'); ?>
		</div>
		<div id="tabs-4">
			<?php $this->load->view('drugs_view');	?>
		</div>
		<div id="tabs-5">
			<?php $this->load->view('Examination_view');	?>
		</div>
		<div id="tabs-6">
			<?php $this->load->view('History_view');	?>
		</div>
		<div id="tabs-7">
			<?php $this->load->view('Operation_view');	?>
		</div>
		<div id="tabs-8">
			<?php //$this->load->view('Investigation_view');	?>
		</div>
		<div id="tabs-9">
			<?php //$this->load->view('Discharge_view');	?>
		</div>
		<div id="tabs-10">
			<?php $this->load->view('Images_view', array('error' => ' ' ));	?>
		</div>
	</div>
 </body>
</html>

