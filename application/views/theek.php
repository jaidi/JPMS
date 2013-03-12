<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="keywords" content="jQuery ComboBox, DropDownList, List, ListBox, Popup List, jqxDropDownList, jqxComboBox, jqxListBox, List Widget, ListBox Widget, DropDownList Widget" />
    <meta name="description" content="The jqxComboBox represents a widget that contains a list of
        selectable items displayed in a drop-down. Users can enter information in the text box portion and search for a specific item. The widget comes with built-in auto-complete support.
        jqxComboBox has built-in auto complete functionality which enables users to quickly find and select from a pre-populated list of values as they type." />
    <title id='Description'>jqxComboBox has built-in auto complete functionality which enables users to quickly find and select from a pre-populated list of values as they type.
    </title>
	<link href="assets/jquery/css/redmond/jquery-ui-1.9.2.custom.css" rel="stylesheet" />
	<script src="assets/jquery/js/jquery-1.8.3.js"></script>
	<script src="assets/jquery/js/jquery-ui-1.9.2.custom.js"></script>
	<link rel="stylesheet" href="assets/jquery/jqwidgets/styles/jqx.base.css" type="text/css" />
	<link rel="stylesheet" href="assets/style.css" type="text/css" />
    <script type="text/javascript" src="assets/jquery/scripts/gettheme.js"></script>
    <script type="text/javascript" src="assets/jquery/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="assets/jquery/jqwidgets/jqxwindow.js"></script>
    <script type="text/javascript" src="assets/jquery/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="assets/jquery/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="assets/jquery/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="assets/jquery/jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="assets/jquery/jqwidgets/jqxlistbox.js"></script>
    <script type="text/javascript" src="assets/jquery/jqwidgets/jqxcombobox.js"></script>
    <script type="text/javascript" src="assets/jquery/jqwidgets/jqxdropdownlist.js"></script>
    <script type="text/javascript" src="assets/jquery/jqwidgets/jqxcheckbox.js"></script>
    <script type="text/javascript" src="assets/jquery/jqwidgets/jqxexpander.js"></script>
</head>
<body>
        <script type="text/javascript">
            $(document).ready(function () {
                    $("#jqxComboBox").jqxComboBox({ autoComplete: true });
                    $("#jqxComboBox").jqxComboBox({ disabled: false });
                var theme = getTheme();
                var source = [
                    "Americano",
                    "Bicerin",
                    "Café au lait",
                    "Espresso",
                    "The Flat White",
                    "Frappuccino",
                    "Greek frappé coffee",
                    "Iced Coffee",
                    "Liqueur coffee"
		        ];
                // Create a jqxComboBox
                $("#jqxComboBox").jqxComboBox({ source: source, selectedIndex: 0, width: '200', height: '25', theme: theme });
            });
        </script>
        <div style='float: left; margin-top: 10px;' id='jqxComboBox'></div>
</body>
</html>