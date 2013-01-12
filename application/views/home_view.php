
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
	<title>Home</title>
    <link rel="stylesheet" href="../assets/jquery/jqwidgets/styles/jqx.base.css" type="text/css"/>
	<link rel="stylesheet" href="../assets/style.css" type="text/css"/>
    <script type="text/javascript" src="../assets/jquery/scripts/gettheme.js"></script>
    <script type="text/javascript" src="../assets/jquery/scripts/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="../assets/jquery/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="../assets/jquery/jqwidgets/jqxwindow.js"></script>
    <script type="text/javascript" src="../assets/jquery/jqwidgets/jqxbuttons.js"></script>
	
	<!-- Dialog links Begin -->
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
	<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
	<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
	<!-- Dialog links Begin -->
	
    <script type="text/javascript">
		var homeView = (function () {
            var _collapsed = false;
            function _createElements() {
                $('#homeWindow').jqxWindow({ 
					theme: homeView.config.theme,
					width: 400,
                    height: 150,
					resizable: false,
                    initContent: function () {
                        $('#loginButton').jqxButton({ theme: homeView.config.theme, width: '80px', disabled: false });
                    }
                });
            };
            return {
                config: {
                    theme: null
                },
                init: function () {
                    _createElements();
					$('#homeWindow').jqxWindow('draggable', false);
                }
            };
        } ());
        $(document).ready(function () {
            var theme = getTheme();//$.data(document.body, 'theme', theme);
            if (theme == undefined) theme = 'redmond';
            homeView.config.theme = theme;
            homeView.init();
        });
    </script>
	
 </head>
 <body class="default">
      
   <div style="width: 100%; height: 650px;">
		<div id="homeWindow">
			<div id="homeWindowHeader">
				<span id="def" style="float: left">Home</span>
			</div>
			<div id="homeWindowContent" style="overflow: hidden">
				<label class="cLabel" id ="opener"><a href="">Add New Record</a><?php //echo anchor('PatientBioDataController', 'Add New Record'); ?></label>
				<!-- <button id="opener">open the dialog</button> -->
				<div id="dialog" title="Add New Record">
					<?php echo form_open('DpnController/validateAndLoad'); ?>
                    <label class="cLabel" for="almoner_number">Almoner Number:</label>
                    <input class="cInput" type="text" size="20" id="almoner_number" name="almoner_number" />
					</form>
				</div>
				<script>
					$( "#dialog" ).dialog({ autoOpen: false });
					$( "#opener" ).click(function() {
						$( "#dialog" ).dialog( "open" );
					});
				</script>
				<br/>
				<br/>
				<label class="cLabel"><?php echo anchor('PatientBioDataController', 'Update Existing Record'); ?></label>
				<br/><br/>
			</div>
		</div>
    </div>
   
   
 </body>
 
</html>

