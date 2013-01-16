function getTheme() {
	var theme="ui-redmond";
    var url = "../assets/jquery/jqwidgets/styles/jqx." + theme + '.css';
    $(document).find('head').append('<link rel="stylesheet" href="' + url + '" media="screen" />');
    return theme;
};