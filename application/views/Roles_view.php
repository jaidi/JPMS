<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Patient Record</title>
	<link href="<?php echo base_url();?>assets/jquery/css/redmond/jquery-ui-1.9.2.custom.css" rel="stylesheet" />
	<script src="<?php echo base_url();?>assets/jquery/js/jquery-1.8.3.js"></script>
	<script src="<?php echo base_url();?>assets/jquery/js/jquery-ui-1.9.2.custom.js"></script>
	<!-- Add Begin Patient Bio Data libraries -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/jquery/jqwidgets/styles/jqx.base.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/style.css" type="text/css" />
    <script type="text/javascript" src="<?php echo base_url();?>assets/jquery/scripts/gettheme.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/jquery/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/jquery/jqwidgets/jqxwindow.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/jquery/jqwidgets/jqxbuttons.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/jquery/jqwidgets/jqxsplitter.js"></script>
	<!-- Add End Patient Bio Data libraries -->
	
	<!-- Add Begin Drugs libraries -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/jquery/jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/jquery/jqwidgets/jqxlistbox.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/jquery/jqwidgets/jqxcombobox.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/jquery/jqwidgets/jqxdropdownlist.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/jquery/jqwidgets/jqxcheckbox.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/jquery/jqwidgets/jqxexpander.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/jquery/js/drugs.js"></script>
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
	<h2>Welcome <?php //echo $username; ?>!</h2>
	<div id="tabs">
		<ul>
			<li><a href="#tabs-1">Assign Roles</a></li>
		</ul>
		<div id="tabs-1">
			<div style="width: 100%; height: 550px auto;" id="jqxWidget">
				<div
					id="mainDemoContainer">
					<div id="customWindow">
						<div id="customWindowContent" style="overflow: hidden; width:100%;">
							<?php// echo form_open('RolesController/Update'); ?>
								<table id="roles_table">
									<tr>
										<th class="roles_header">Username</th>
										<th class="roles_header">Role</th>
										<th class="roles_header">Change Role</th>
										<th class="roles_header">Delete</th>
									</tr>
									<?php 
									$i=0;
									foreach($users as $user) { ?>
									<tr class="roles_row_odd">
										<td class="roles_col"><?php echo $user->username;?></td>
										<td class="roles_col">
											<?php
												if($user->type == ADMINISTRATOR) {
													echo "Administrator";
												}
												else if($user->type == USER) {
													echo "User";
												}
												else {	
													echo $user->type;
												}
											?>
										</td>
										
										<td class="roles_col">
											<!--select id="select_role<?php //echo $i?>">
												<option value="ADMINISTRATOR">Administrator</option>
												<option value="USER">User</option>
											</select-->
											<?php 
											$options = array(
													  'ADMINISTRATOR'  	=> 'Administrator',
													  'USER'    		=> 'User'
													);
											
											$js = 'id="select_role'.$i.'" onChange="UpdateRole();"';

											echo form_dropdown('role', $options, 'ADMINISTRATOR', $js); ?>
										</td>
										<script>
											function UpdateRole(){
												window.location = 'RolesController/updateRole(<?php echo $user->id;?>,<?php echo $user->type;?>)';
											}
										</script>
										<td class="roles_col"><?php echo anchor('RolesController/deleteUser/'.$user->id, 'Delete', array('onClick' => "return confirm('Are you sure you want to delete?')")) ?></td>
									</tr>	
									<?php $i++; } ?>
									
								</table>
								<br/>
								<!--div style="float: right">
									<input type="submit" value="Update" style="margin-bottom: 5px;" id="loginButton"/><br />
								</div>
							</form-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
 </body>
</html>

   
   
   
   
   
   
 

