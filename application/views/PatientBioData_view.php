
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Patient Bio Data</title>
    <link rel="stylesheet" href="assets/jquery/jqwidgets/styles/jqx.base.css" type="text/css" />
	<link rel="stylesheet" href="assets/style.css" type="text/css" />
    <script type="text/javascript" src="assets/jquery/scripts/gettheme.js"></script>
    <script type="text/javascript" src="assets/jquery/scripts/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="assets/jquery/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="assets/jquery/jqwidgets/jqxwindow.js"></script>
    <script type="text/javascript" src="assets/jquery/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript">
        var customButtonsDemo = (function () {
            var _collapsed = false;
            function _createElements() {
                $('#customWindow').jqxWindow({ theme: customButtonsDemo.config.theme, width: 400,
                    height: 450, resizable: false,
                    initContent: function () {
                        $('#EnterButton').jqxButton({ theme: customButtonsDemo.config.theme, width: '80px', disabled: false });
                    }
                });
            };
            return {
                config: {
                    theme: null
                },
                init: function () {
                    _createElements();
					$('#customWindow').jqxWindow('draggable', false);
                }
            };
        } ());
        $(document).ready(function () {
            var theme = $.data(document.body, 'theme', theme);
            if (theme == undefined) theme = '';
            customButtonsDemo.config.theme = theme;
            customButtonsDemo.init();
        });
    </script>
 </head>
 <body class="default">
      
   <div style="width: 100%; height: 650px;" id="jqxWidget">
        <div
            id="mainDemoContainer">
            <div id="customWindow">
                <div id="customWindowHeader">
                    <span id="captureContainer" style="float: left">Patient Bio Data</span>
                </div>
                <div id="customWindowContent" style="overflow: hidden">
                    <div style="margin: 10px">
						<?php echo form_open('PatientBioData'); ?>
                        <label class="cLabel" for="almoner_number">Almoner #:</label>
                        <input class="cInput" type="text" size="20" style="width: 175px; border: 1px solid #aaa" id="almoner_number" name="almoner_number" />
						<br/>
						<br/>
						<label class="cLabel" for="name">Name:</label>
						<input class="cInput" type="text" size="50" style="width: 175px; border: 1px solid #aaa" id="name" name="name" />
                        <br/>
						<br/>
						<label class="cLabel" for="age">Age:</label>
						<input class="cInput" type="text" size="3" style="width: 175px; border: 1px solid #aaa" id="age" name="age" />
                        <br/>
						<br/>
						<label class="cLabel" for="sex">Sex:</label>
						<input style="width:5em, float:left" type="radio" id="sex" name="sex" value="male"/>Male
						<input style="width:5em, float:left" type="radio" id="sex" name="sex" value="female"/>Female
                        <br/>
						<br/>
						<label class="cLabel" for="father_name">Father Name:</label>
						<input class="cInput" type="text" size="50" style="width: 175px; border: 1px solid #aaa" id="father_name" name="father_name" />
                        <br/>
						<br/>
						<label class="cLabel" for="occupation">Occupation:</label>
						<input class="cInput" type="text" size="50" style="width: 175px; border: 1px solid #aaa" id="occupation" name="occupation" />
                        <br/>
						<br/>
						<label class="cLabel" for="address">Address:</label>
						<input class="cInput" type="text" size="256" style="width: 175px; border: 1px solid #aaa" id="address" name="address" />
                        <br/>
						<br/>
						<label class="cLabel" for="telephone_number">Telephone #:</label>
						<input class="cInput" type="text" size="20" style="width: 175px; border: 1px solid #aaa" id="telephone_number" name="telephone_number" />
                        <br/>
						<br/>
						<label class="cLabel" for="bed_number">Bed #:</label>
						<input class="cInput" type="text" size="20" style="width: 175px; border: 1px solid #aaa" id="bed_number" name="bed_number" />
                        <br/>
						<br/>
						<label class="cLabel" for="admitted_from">Admitted From:</label>
						<input class="cInput" type="text" size="20" style="width: 175px; border: 1px solid #aaa" id="admitted_from" name="admitted_from" />
                        <br/><br/>
                        <div style="float: right">
                            <input type="submit" value="Enter" style="margin-bottom: 5px;" id="EnterButton"/><br />
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
   
   
 </body>
 
</html>

