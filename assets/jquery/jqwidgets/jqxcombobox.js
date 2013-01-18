/*
jQWidgets v2.6.0 (2012-Dec-27)
Copyright (c) 2011-2013 jQWidgets.
License: http://jqwidgets.com/license/
 */

(function(a) {
	a.jqx.jqxWidget("jqxComboBox", "", {});
	a.extend(
					a.jqx._jqxComboBox.prototype,
					{
						defineInstance : function() {
							this.disabled = false;
							this.width = null;
							this.height = null;
							this.items = new Array();
							this.selectedIndex = -1;
							this.source = null;
							this.scrollBarSize = 15;
							this.arrowSize = 18;
							this.enableHover = true;
							this.enableSelection = true;
							this.visualItems = new Array();
							this.groups = new Array();
							this.equalItemsWidth = true;
							this.itemHeight = -1;
							this.visibleItems = new Array();
							this.emptyGroupText = "Group";
							this.emptyString = "";
							if (this.openDelay == undefined) {
								this.openDelay = 350
							}
							if (this.closeDelay == undefined) {
								this.closeDelay = 400
							}
							this.animationType = "default";
							this.dropDownWidth = "auto";
							this.dropDownHeight = "200px";
							this.autoDropDownHeight = false;
							this.enableBrowserBoundsDetection = false;
							this.dropDownHorizontalAlignment = "left";
							this.searchMode = "startswithignorecase";
							this.autoComplete = false;
							this.remoteAutoComplete = false;
							this.remoteAutoCompleteDelay = 500;
							this.minLength = 2;
							this.displayMember = "";
							this.valueMember = "";
							this.keyboardSelection = true;
							this.renderer = null;
							this.autoOpen = false;
							this.checkboxes = false;
							this.promptText = "";
							this.events = [ "open", "close", "select",
									"unselect", "change", "checkChange",
									"bindingComplete" ]
						},
						createInstance : function(b) {
							this.render()
						},
						render : function() {
							this.removeHandlers();
							this.isanimating = false;
							this.id = a.jqx.utilities.createId();
							this.element.innerHTML = "";
							var d = a("<div style='background-color: transparent; -webkit-appearance: none; outline: none; width:100%; height: 100%; padding: 0px; margin: 0px; border: 0px; position: relative;'><div id='dropdownlistWrapper' style='padding: 0; margin: 0; border: none; background-color: transparent; float: left; width:100%; height: 100%; position: relative;'><div id='dropdownlistContent' style='padding: 0; margin: 0; border-left: none; border-top: none; border-bottom: none; float: left; position: absolute;'/><div id='dropdownlistArrow' style='padding: 0; margin: 0; border-left-width: 1px; border-bottom-width: 0px; border-top-width: 0px; border-right-width: 0px; float: right; position: absolute;'/></div></div>");
							this.comboStructure = d;
							if (a.jqx._jqxListBox == null
									|| a.jqx._jqxListBox == undefined) {
								throw "jqxListBox is not loaded."
							}
							this.touch = a.jqx.mobile.isTouchDevice();
							this.host.append(d);
							this.dropdownlistWrapper = this.host
									.find("#dropdownlistWrapper");
							this.dropdownlistArrow = this.host
									.find("#dropdownlistArrow");
							this.dropdownlistContent = this.host
									.find("#dropdownlistContent");
							this.dropdownlistContent.addClass(this
									.toThemeProperty("jqx-combobox-content"));
							this.dropdownlistContent.addClass(this
									.toThemeProperty("jqx-widget-content"));
							this.dropdownlistWrapper[0].id = "dropdownlistWrapper"
									+ this.element.id;
							this.dropdownlistArrow[0].id = "dropdownlistArrow"
									+ this.element.id;
							this.dropdownlistContent[0].id = "dropdownlistContent"
									+ this.element.id;
							this.dropdownlistContent
									.append(a('<input autocomplete="off" style="margin: 0; padding: 0; border: 0;" type="textarea"/>'));
							this.input = this.dropdownlistContent.find("input");
							this.input.addClass(this
									.toThemeProperty("jqx-combobox-input"));
							this.input.addClass(this
									.toThemeProperty("jqx-widget-content"));
							this._addInput();
							try {
								var k = "listBox" + this.id;
								var g = a(a.find("#" + k));
								if (g.length > 0) {
									g.remove()
								}
								var b = a("<div style='overflow: hidden; border: none; background-color: transparent; position: absolute;' id='listBox"
										+ this.id
										+ "'><div id='innerListBox"
										+ this.id + "'></div></div>");
								b.hide();
								b.appendTo(document.body);
								this.container = b;
								this.listBoxContainer = a(a
										.find("#innerListBox" + this.id));
								var c = this.width;
								if (this.dropDownWidth != "auto") {
									c = this.dropDownWidth
								}
								if (this.dropDownHeight == null) {
									this.dropDownHeight = 200
								}
								var i = this;
								this.container.width(parseInt(c) + 25);
								this.container
										.height(parseInt(this.dropDownHeight) + 25);
								this.addHandler(this.listBoxContainer,
										"bindingComplete", function(e) {
											i._raiseEvent("6")
										});
								this.listBoxContainer
										.jqxListBox( {
											checkboxes : this.checkboxes,
											emptyString : this.emptyString,
											renderer : this.renderer,
											itemHeight : this.itemHeight,
											incrementalSearch : false,
											width : c,
											scrollBarSize : this.scrollBarSize,
											autoHeight : this.autoDropDownHeight,
											height : this.dropDownHeight,
											displayMember : this.displayMember,
											valueMember : this.valueMember,
											source : this.source,
											theme : this.theme,
											rendered : function() {
												i.listBox = a.data(
														i.listBoxContainer[0],
														"jqxListBox").instance;
												if (!i.autoComplete
														&& !i.remoteAutoComplete) {
													i.listBoxContainer
															.jqxListBox(
																	"selectIndex",
																	i.selectedIndex)
												}
												if (i.autoComplete
														&& !i.remoteAutoComplete) {
													i.clearSelection()
												}
												if (i.remoteAutoComplete) {
													i.container
															.height(i.listBox.virtualSize.height + 25);
													i.listBoxContainer
															.height(i.listBox.virtualSize.height);
													if (i.searchString != undefined) {
														var e = i.listBoxContainer
																.jqxListBox("items");
														if (e) {
															if (e.length > 0) {
																if (!i
																		.isOpened()) {
																	i.open()
																}
															} else {
																i.close()
															}
														} else {
															i.close()
														}
													}
												} else {
													i.renderSelection("mouse")
												}
												if (i.rendered) {
													i.rendered()
												}
											}
										});
								this.listBoxContainer.css( {
									position : "absolute",
									zIndex : 100000,
									top : 0,
									left : 0
								});
								this.listBoxContainer.css("border-top-width",
										"1px");
								this.listBox = a.data(this.listBoxContainer[0],
										"jqxListBox").instance;
								this.listBox.enableSelection = this.enableSelection;
								this.listBox.enableHover = this.enableHover;
								this.listBox.equalItemsWidth = this.equalItemsWidth;
								this.listBox.selectIndex(this.selectedIndex);
								this.listBox._arrange();
								this.addHandler(this.host, "loadContent",
										function(e) {
											i._arrange()
										});
								this.addHandler(this.listBoxContainer,
										"unselect", function(e) {
											i._raiseEvent("3", {
												index : e.args.index,
												type : e.args.type,
												item : e.args.item
											})
										});
								this.addHandler(this.listBoxContainer,
										"change", function(e) {
											i._raiseEvent("4", {
												index : e.args.index,
												type : e.args.type,
												item : e.args.item
											})
										});
								if (this.animationType == "none") {
									this.container.css("display", "none")
								} else {
									this.container.hide()
								}
							} catch (h) {
							}
							var l = this;
							l.input.attr("disabled", l.disabled);
							var f = a.browser.msie && a.browser.version < 8;
							if (!f) {
								l.input.attr("placeholder", l.promptText)
							}
							this.propertyChangeMap.disabled = function(e, n, m,
									o) {
								if (o) {
									e.host
											.addClass(l
													.toThemeProperty("jqx-combobox-state-disabled"));
									e.host
											.addClass(l
													.toThemeProperty("jqx-fill-state-disabled"));
									e.dropdownlistContent
											.addClass(l
													.toThemeProperty("jqx-combobox-content-disabled"))
								} else {
									e.host
											.removeClass(l
													.toThemeProperty("jqx-combobox-state-disabled"));
									e.host
											.removeClass(l
													.toThemeProperty("jqx-fill-state-disabled"));
									e.dropdownlistContent
											.removeClass(l
													.toThemeProperty("jqx-combobox-content-disabled"))
								}
								e.input.attr("disabled", l.disabled)
							};
							if (this.disabled) {
								this.host
										.addClass(this
												.toThemeProperty("jqx-combobox-state-disabled"));
								this.host
										.addClass(this
												.toThemeProperty("jqx-fill-state-disabled"));
								this.dropdownlistContent
										.addClass(this
												.toThemeProperty("jqx-combobox-content-disabled"))
							}
							this.host
									.addClass(this
											.toThemeProperty("jqx-combobox-state-normal"));
							this.host.addClass(this
									.toThemeProperty("jqx-rc-all"));
							this.host.addClass(this
									.toThemeProperty("jqx-widget"));
							this.host.addClass(this
									.toThemeProperty("jqx-widget-content"));
							this.dropdownlistArrowIcon = a("<div></div>");
							this.dropdownlistArrowIcon.addClass(this
									.toThemeProperty("icon-arrow-down"));
							this.dropdownlistArrowIcon.addClass(this
									.toThemeProperty("icon"));
							this.dropdownlistArrow
									.append(this.dropdownlistArrowIcon);
							this.dropdownlistArrow
									.addClass(this
											.toThemeProperty("jqx-combobox-arrow-normal"));
							this.dropdownlistArrow.addClass(this
									.toThemeProperty("jqx-fill-state-normal"));
							this.dropdownlistArrow.addClass(this
									.toThemeProperty("jqx-rc-r"));
							this._setSize();
							this._updateHandlers();
							this.addHandler(this.input, "keyup.textchange",
									function(e) {
										var m = i._search(e)
									});
							if (a.browser.msie && a.browser.version < 8) {
								if (this.host.parents(".jqx-window").length > 0) {
									var j = this.host.parents(".jqx-window")
											.css("z-index");
									b.css("z-index", j + 10);
									this.listBoxContainer
											.css("z-index", j + 10)
								}
							}
							if (this.checkboxes) {
								this.input.attr("readonly", true)
							}
						},
						_addInput : function() {
							var b = this.host.attr("name");
							if (!b) {
								b = this.element.id
							}
							this.cinput = a("<input type='hidden'/>");
							this.host.append(this.cinput);
							this.cinput.attr("name", b)
						},
						_updateInputSelection : function() {
							if (this.cinput) {
								if (this.selectedIndex == -1) {
									this.cinput.val("")
								} else {
									var d = this.getSelectedItem();
									if (d != null) {
										this.cinput.val(d.value)
									} else {
										this.cinput
												.val(this.dropdownlistContent
														.text())
									}
								}
								if (this.checkboxes) {
									var b = this.getCheckedItems();
									var e = "";
									if (b != null) {
										for ( var c = 0; c < b.length; c++) {
											if (c == b.length - 1) {
												e += b[c].value
											} else {
												e += b[c].value + ","
											}
										}
									}
									this.cinput.val(e)
								}
							}
						},
						_search : function(d) {
							if (d.keyCode == 9) {
								return
							}
							if (this.searchMode == "none"
									|| this.searchMode == null
									|| this.searchMode == "undefined") {
								return
							}
							if (d.keyCode == 16 || d.keyCode == 17
									|| d.keyCode == 20) {
								return false
							}
							if (this.checkboxes) {
								return false
							}
							if (!this.isanimating) {
								if (d.altKey && d.keyCode == 38) {
									this.hideListBox();
									return false
								}
								if (d.altKey && d.keyCode == 40) {
									if (!this.isOpened()) {
										this.showListBox()
									}
									return false
								}
							}
							if (d.keyCode == 37 || d.keyCode == 39) {
								return false
							}
							if (d.altKey || d.keyCode == 18) {
								return
							}
							if (d.keyCode >= 33 && d.keyCode <= 40) {
								return
							}
							var i = this.input.val();
							if (i.length == 0 && !this.autoComplete) {
								this.hideListBox();
								this.listBox.selectIndex(-1, true);
								return
							}
							if (this.remoteAutoComplete) {
								var g = this;
								var l = function() {
									g.listBox.vScrollInstance.value = 0;
									g.selectedIndex = -1;
									g.listBox.selectedIndex = -1;
									g.listBox.clearSelection()
								};
								if (i.length >= g.minLength) {
									if (!d.ctrlKey && !d.shiftKey && !d.altKey) {
										if (g.searchString != i) {
											if (this._searchTimer) {
												clearTimeout(this._searchTimer)
											}
											if (d.keyCode != 13
													&& d.keyCode != 27) {
												this._searchTimer = setTimeout(
														function() {
															l();
															g.listBox.autoHeight = true;
															g.searchString = g.input
																	.val();
															g.search(g.input
																	.val())
														},
														this.remoteAutoCompleteDelay)
											}
										}
										g.searchString = i
									}
								} else {
									if (this._searchTimer) {
										clearTimeout(this._searchTimer)
									}
									l();
									g.searchString = g.input.val();
									g.listBoxContainer.jqxListBox( {
										source : null
									})
								}
								return
							}
							var g = this;
							var e = this._getMatches(i);
							var j = e.matchItems;
							var f = e.index;
							if (g.autoComplete) {
								if (j != undefined || i == "") {
									this.listBox.vScrollInstance.value = 0;
									this.listBox._addItems();
									this.listBox.autoHeight = false;
									if (this.listBox.virtualSize.height < parseInt(this.dropDownHeight)) {
										this.listBox.autoHeight = true;
										this.container
												.height(this.listBox.virtualSize.height + 25);
										this.listBoxContainer
												.height(this.listBox.virtualSize.height);
										this.listBox._arrange()
									} else {
										this.listBox.height = this.dropDownHeight;
										this.container
												.height(parseInt(this.dropDownHeight) + 25);
										this.listBoxContainer
												.height(parseInt(this.dropDownHeight));
										this.listBox._arrange()
									}
									this.listBox._addItems();
									this.listBox._renderItems();
									f = 0
								} else {
									f = -1
								}
								if (f == -1) {
									this.hideListBox()
								}
							}
							if (d.keyCode == "13") {
								var b = this.container.css("display") == "block";
								if (b && !this.isanimating) {
									this.hideListBox();
									return
								}
							} else {
								if (d.keyCode == "27") {
									var b = this.container.css("display") == "block";
									if (b && !this.isanimating) {
										this.hideListBox();
										d.preventDefault();
										return false
									}
								} else {
									if (f > -1) {
										var c = this.listBox.selectedIndex;
										if (!this.isOpened() && !this.opening
												&& !d.ctrlKey) {
											if (this.listBox.visibleItems
													&& this.listBox.visibleItems.length > 0) {
												if (this.input.val() != this.searchString
														&& this.searchString != undefined) {
													this.showListBox()
												}
											}
										}
										this.searchString = this.input.val();
										this.listBox.clearSelection();
										var k = this.listBox.getVisibleItem(f);
										if (k != undefined
												&& (this.searchMode == "startswith" || this.searchMode == "startswithignorecase")) {
											this.listBox.selectIndex(f, true);
											var h = this.input.val();
											var g = this;
											if (!d.ctrlKey
													&& parseInt(d.keyCode) != 8
													&& parseInt(d.keyCode) != 46) {
												if (k.label != g.input.val()) {
													if (k.label != undefined) {
														g.input.val(k.label);
														g.input.focus();
														g._setSelection(
																h.length,
																k.label.length)
													}
												}
											}
										}
									} else {
										if (f == -1) {
											this.listBox.clearSelection()
										}
									}
								}
							}
						},
						val : function(b) {
							if (!this.input) {
								return ""
							}
							if (typeof b === "object") {
								return this.input.val()
							} else {
								this.input.val(b);
								return this.input.val()
							}
						},
						focus : function() {
							var c = this;
							var b = function() {
								c.input.focus();
								var d = c.input.val();
								c._setSelection(0, d.length)
							};
							b();
							setTimeout(function() {
								b()
							}, 10)
						},
						_setSelection : function(e, b) {
							try {
								if ("selectionStart" in this.input[0]) {
									this.input[0].focus();
									this.input[0].setSelectionRange(e, b)
								} else {
									var c = this.input[0].createTextRange();
									c.collapse(true);
									c.moveEnd("character", b);
									c.moveStart("character", e);
									c.select()
								}
							} catch (d) {
							}
						},
						setContent : function(b) {
							this.input.val(b)
						},
						_getMatches : function(f) {
							var b = this.getItems();
							if (b == undefined) {
								return {
									index : -1,
									mathItem : new Array()
								}
							}
							var e = this;
							var c = -1;
							var g = new Array();
							var d = 0;
							a
									.each(
											b,
											function(h) {
												var k = "";
												if (!this.isGroup) {
													if (this.label) {
														k = this.label
													} else {
														if (this.value) {
															k = this.value
														} else {
															if (this.title) {
																k = this.title
															} else {
																k = "jqxItem"
															}
														}
													}
													var j = false;
													switch (e.searchMode) {
													case "containsignorecase":
														j = a.jqx.string
																.containsIgnoreCase(
																		k, f);
														break;
													case "contains":
														j = a.jqx.string
																.contains(k, f);
														break;
													case "equals":
														j = a.jqx.string
																.equals(k, f);
														break;
													case "equalsignorecase":
														j = a.jqx.string
																.equalsIgnoreCase(
																		k, f);
														break;
													case "startswith":
														j = a.jqx.string
																.startsWith(k,
																		f);
														break;
													case "startswithignorecase":
														j = a.jqx.string
																.startsWithIgnoreCase(
																		k, f);
														break;
													case "endswith":
														j = a.jqx.string
																.endsWith(k, f);
														break;
													case "endswithignorecase":
														j = a.jqx.string
																.endsWithIgnoreCase(
																		k, f);
														break
													}
													if (e.autoComplete && !j) {
														this.visible = false
													}
													if (j && e.autoComplete) {
														g[d++] = this;
														this.visible = true
													}
													if (f == ""
															&& e.autoComplete) {
														this.visible = true;
														j = false
													}
													if (j && !e.autoComplete) {
														c = this.visibleIndex;
														return false
													}
												}
											});
							return {
								index : c,
								matchItems : g
							}
						},
						findItems : function(e) {
							var b = this.getItems();
							var d = this;
							var c = 0;
							var f = new Array();
							a
									.each(
											b,
											function(g) {
												var j = "";
												if (!this.isGroup) {
													if (this.label) {
														j = this.label
													} else {
														if (this.value) {
															j = this.value
														} else {
															if (this.title) {
																j = this.title
															} else {
																j = "jqxItem"
															}
														}
													}
													var h = false;
													switch (d.searchMode) {
													case "containsignorecase":
														h = a.jqx.string
																.containsIgnoreCase(
																		j, e);
														break;
													case "contains":
														h = a.jqx.string
																.contains(j, e);
														break;
													case "equals":
														h = a.jqx.string
																.equals(j, e);
														break;
													case "equalsignorecase":
														h = a.jqx.string
																.equalsIgnoreCase(
																		j, e);
														break;
													case "startswith":
														h = a.jqx.string
																.startsWith(j,
																		e);
														break;
													case "startswithignorecase":
														h = a.jqx.string
																.startsWithIgnoreCase(
																		j, e);
														break;
													case "endswith":
														h = a.jqx.string
																.endsWith(j, e);
														break;
													case "endswithignorecase":
														h = a.jqx.string
																.endsWithIgnoreCase(
																		j, e);
														break
													}
													if (h) {
														f[c++] = this
													}
												}
											});
							return f
						},
						_resetautocomplete : function() {
							a.each(this.listBox.items, function(b) {
								this.visible = true
							});
							this.listBox.vScrollInstance.value = 0;
							this.listBox._addItems();
							this.listBox.autoHeight = false;
							this.listBox.height = this.dropDownHeight;
							this.container
									.height(parseInt(this.dropDownHeight) + 25);
							this.listBoxContainer
									.height(parseInt(this.dropDownHeight));
							this.listBox._arrange();
							this.listBox._addItems();
							this.listBox._renderItems()
						},
						getItems : function() {
							var b = this.listBox.items;
							return b
						},
						_setSize : function() {
							if (this.width != null
									&& this.width.toString().indexOf("px") != -1) {
								this.host.width(this.width)
							} else {
								if (this.width != undefined
										&& !isNaN(this.width)) {
									this.host.width(this.width)
								}
							}
							if (this.height != null
									&& this.height.toString().indexOf("px") != -1) {
								this.host.height(this.height)
							} else {
								if (this.height != undefined
										&& !isNaN(this.height)) {
									this.host.height(this.height)
								}
							}
							var e = false;
							if (this.width != null
									&& this.width.toString().indexOf("%") != -1) {
								e = true;
								this.host.width(this.width)
							}
							if (this.height != null
									&& this.height.toString().indexOf("%") != -1) {
								e = true;
								this.host.height(this.height)
							}
							if (e) {
								var c = this;
								c._arrange();
								var b = this.host.width();
								if (this.dropDownWidth != "auto") {
									b = this.dropDownWidth
								}
								this.listBoxContainer.jqxListBox( {
									width : b
								});
								this.container.width(parseInt(b) + 25);
								var d = function() {
									c._arrange();
									if (c.dropDownWidth == "auto") {
										var f = c.host.width();
										c.listBoxContainer.jqxListBox( {
											width : f
										});
										c.container.width(parseInt(f) + 25)
									}
								};
								a(window).unbind("resize." + this.id);
								a(window).bind("resize." + this.id, function() {
									d()
								})
							}
						},
						isOpened : function() {
							var c = this;
							var b = a.data(document.body,
									"openedComboJQXListBox");
							if (this.container.css("display") != "block") {
								return false
							}
							if (b != null && b == c.listBoxContainer) {
								return true
							}
							return false
						},
						_updateHandlers : function() {
							var c = this;
							var d = false;
							this.removeHandlers();
							if (!this.touch) {
								this.host
										.hover(
												function() {
													if (!c.disabled
															&& c.enableHover) {
														d = true;
														c.host
																.addClass(c
																		.toThemeProperty("jqx-combobox-state-hover"));
														c.dropdownlistArrowIcon
																.addClass(c
																		.toThemeProperty("icon-arrow-down-hover"));
														c.dropdownlistArrow
																.addClass(c
																		.toThemeProperty("jqx-combobox-arrow-hover"));
														c.dropdownlistArrow
																.addClass(c
																		.toThemeProperty("jqx-fill-state-hover"))
													}
												},
												function() {
													if (!c.disabled
															&& c.enableHover) {
														c.host
																.removeClass(c
																		.toThemeProperty("jqx-combobox-state-hover"));
														c.dropdownlistArrowIcon
																.removeClass(c
																		.toThemeProperty("icon-arrow-down-hover"));
														c.dropdownlistArrow
																.removeClass(c
																		.toThemeProperty("jqx-combobox-arrow-hover"));
														c.dropdownlistArrow
																.removeClass(c
																		.toThemeProperty("jqx-fill-state-hover"));
														d = false
													}
												})
							}
							if (c.autoOpen) {
								this.addHandler(this.host, "mouseenter",
										function() {
											var f = c.isOpened();
											if (!f && c.autoOpen) {
												c.open();
												c.host.focus()
											}
										});
								a(document)
										.bind(
												"mousemove." + c.id,
												function(i) {
													var h = c.isOpened();
													if (h && c.autoOpen) {
														var m = c.host.offset();
														var l = m.top;
														var k = m.left;
														var j = c.container
																.offset();
														var f = j.left;
														var g = j.top;
														canClose = true;
														if (i.pageY >= l
																&& i.pageY <= l
																		+ c.host
																				.height()
																		+ 2) {
															if (i.pageX >= k
																	&& i.pageX < k
																			+ c.host
																					.width()) {
																canClose = false
															}
														}
														if (i.pageY >= g
																&& i.pageY <= g
																		+ c.container
																				.height()
																		- 20) {
															if (i.pageX >= f
																	&& i.pageX < f
																			+ c.container
																					.width()) {
																canClose = false
															}
														}
														if (canClose) {
															c.close()
														}
													}
												})
							}
							var b = "mousedown";
							if (this.touch) {
								b = a.jqx.mobile
										.getTouchEventName("touchstart")
							}
							this
									.addHandler(
											this.dropdownlistArrow,
											b,
											function(h) {
												if (!c.disabled) {
													var f = c.container
															.css("display") == "block";
													if (!c.isanimating) {
														if (f) {
															c.hideListBox();
															c.input.focus();
															setTimeout(
																	function() {
																		c.input
																				.focus()
																	}, 10)
														} else {
															if (c.autoComplete) {
															}
															if (c.autoDropDownHeight) {
																c.container
																		.height(c.listBoxContainer
																				.height() + 25);
																var g = c.listBoxContainer
																		.jqxListBox("autoHeight");
																if (!g) {
																	c.listBoxContainer
																			.jqxListBox( {
																				autoHeight : c.autoDropDownHeight
																			});
																	c.listBox
																			._arrange();
																	c.listBox
																			.ensureVisible(0);
																	c.listBox
																			._renderItems();
																	c.container
																			.height(c.listBoxContainer
																					.height() + 25)
																}
															}
															c.showListBox();
															c.input.focus();
															setTimeout(
																	function() {
																		c.input
																				.focus()
																	}, 10)
														}
													}
												}
											});
							this
									.addHandler(
											this.input,
											"focus",
											function() {
												c.focused = true;
												c.host
														.addClass(c
																.toThemeProperty("jqx-combobox-state-focus"));
												c.host
														.addClass(c
																.toThemeProperty("jqx-fill-state-focus"));
												c.dropdownlistContent
														.addClass(c
																.toThemeProperty("jqx-combobox-content-focus"))
											});
							this
									.addHandler(
											this.input,
											"blur",
											function() {
												c.focused = false;
												if (!c.isOpened() && !c.opening) {
													c.host
															.removeClass(c
																	.toThemeProperty("jqx-combobox-state-focus"));
													c.host
															.removeClass(c
																	.toThemeProperty("jqx-fill-state-focus"));
													c.dropdownlistContent
															.removeClass(c
																	.toThemeProperty("jqx-combobox-content-focus"))
												}
												if (c._searchTimer) {
													clearTimeout(c._searchTimer)
												}
											});
							this.addHandler(a(document),
									"mousedown." + this.id,
									c.closeOpenedListBox, {
										me : this,
										listbox : this.listBox,
										id : this.id
									});
							if (this.touch) {
								this.addHandler(a(document), a.jqx.mobile
										.getTouchEventName("touchstart")
										+ "." + this.id, c.closeOpenedListBox,
										{
											me : this,
											listbox : this.listBox,
											id : this.id
										})
							}
							if (document.referrer != "" || window.frameElement) {
								if (window.top != null) {
									if (window.parent && document.referrer) {
										parentLocation = document.referrer
									}
									if (parentLocation
											.indexOf(document.location.host) != -1) {
										var e = function(f) {
											if (c.isOpened()) {
												var g = {
													me : c,
													listbox : c.listBox,
													id : c.element.id
												};
												f.data = g
											}
										};
										if (window.top.document.addEventListener) {
											window.top.document
													.addEventListener(
															"mousedown", e,
															false)
										} else {
											if (window.top.document.attachEvent) {
												window.top.document
														.attachEvent(
																"onmousedown",
																e)
											}
										}
									}
								}
							}
							this
									.addHandler(
											this.host,
											"keydown",
											function(i) {
												var h = c.container
														.css("display") == "block";
												if (c.host.css("display") == "none") {
													return true
												}
												if (i.keyCode == "13") {
													if (h && !c.isanimating) {
														c
																.renderSelection("mouse");
														var f = c.listBox.selectedIndex;
														c
																._setSelection(
																		c.input
																				.val().length,
																		c.input
																				.val().length);
														c.hideListBox();
														if (!c.keyboardSelection) {
															c
																	._raiseEvent(
																			"2",
																			{
																				index : c.selectedIndex,
																				type : "keyboard",
																				item : c
																						.getItem(c.selectedIndex)
																			})
														} else {
															if (c.autoComplete) {
																c
																		._raiseEvent(
																				"2",
																				{
																					index : c.selectedIndex,
																					type : "keyboard",
																					item : c.listBox
																							.getVisibleItem(c.selectedIndex)
																				})
															}
														}
														return false
													}
												}
												if (i.keyCode == 115) {
													if (!c.isanimating) {
														if (!c.isOpened()) {
															c.showListBox()
														} else {
															if (c.isOpened()) {
																c.hideListBox()
															}
														}
													}
													return false
												}
												if (i.altKey) {
													if (c.host.css("display") == "block") {
														if (!c.isanimating) {
															if (i.keyCode == 38) {
																if (c
																		.isOpened()) {
																	c
																			.hideListBox()
																}
															} else {
																if (i.keyCode == 40) {
																	if (!c
																			.isOpened()) {
																		c
																				.showListBox()
																	}
																}
															}
														}
													}
												}
												if (i.keyCode == "27") {
													if (c.isOpened()
															&& !c.isanimating) {
														c.hideListBox();
														i.preventDefault();
														return false
													}
												}
												if (h && !c.disabled) {
													return c.listBox
															._handleKeyDown(i)
												} else {
													if (!c.disabled && !h) {
														var g = i.keyCode;
														if (g == 33 || g == 34
																|| g == 35
																|| g == 36
																|| g == 38
																|| g == 40) {
															return c.listBox
																	._handleKeyDown(i)
														}
													}
												}
											});
							this.addHandler(this.listBoxContainer,
									"checkChange", function(f) {
										c.renderSelection("mouse");
										c._updateInputSelection();
										c._raiseEvent(5, {
											label : f.args.label,
											value : f.args.value,
											checked : f.args.checked,
											item : f.args.item
										})
									});
							this
									.addHandler(
											this.listBoxContainer,
											"select",
											function(f) {
												if (!c.disabled) {
													if (f.args.type != "keyboard"
															|| c.keyboardSelection) {
														c
																.renderSelection(f.args.type);
														c
																._raiseEvent(
																		"2",
																		{
																			index : f.args.index,
																			type : f.args.type,
																			item : f.args.item
																		});
														if (f.args.type == "mouse") {
															if (f.args.item != undefined) {
																c.tempSelectedValue = f.args.item.value
															}
															if (!c.checkboxes) {
																c.hideListBox();
																c.input.focus()
															}
														}
													}
												}
											});
							if (this.listBox != null
									&& this.listBox.content != null) {
								this
										.addHandler(
												this.listBox.content,
												"click",
												function(f) {
													if (!c.disabled) {
														if (f.target === c.listBox.itemswrapper[0]) {
															return true
														}
														c
																.renderSelection("mouse");
														if (!c.touch
																&& !c.ishiding) {
															if (!c.checkboxes) {
																c.hideListBox();
																c.input.focus()
															}
														}
													}
												})
							}
						},
						removeHandlers : function() {
							var b = this;
							if (this.dropdownlistWrapper != null) {
								this.removeHandler(this.dropdownlistWrapper,
										"mousedown")
							}
							this.removeHandler(this.host, "keydown");
							this.host.unbind("hover");
							if (this.input != null) {
								this.removeHandler(this.input, "focus");
								this.removeHandler(this.input, "blur")
							}
							this.removeHandler(this.host, "mouseenter");
							a(document).unbind("mousemove." + b.id)
						},
						getItem : function(b) {
							var c = this.listBox.getItem(b);
							return c
						},
						getItemByValue : function(c) {
							var b = this.listBox.getItemByValue(c);
							return b
						},
						getVisibleItem : function(b) {
							var c = this.listBox.getVisibleItem(b);
							return c
						},
						renderSelection : function(j) {
							if (j == undefined || j == "none") {
								return
							}
							if (this.listBox == null) {
								return
							}
							var k = this.listBox.visibleItems[this.listBox.selectedIndex];
							if (this.checkboxes) {
								var f = this.getCheckedItems();
								if (f != null && f.length > 0) {
									k = f[0]
								} else {
									k = null
								}
							}
							if (k == null) {
								var d = a.browser.msie && a.browser.version < 8;
								if (!d) {
									this.input.attr("placeholder",
											this.promptText)
								}
								this._updateInputSelection();
								return
							}
							this.selectedIndex = this.listBox.selectedIndex;
							var c = a("<span></span>");
							if (k.label != undefined && k.label != null
									&& k.label.toString().length > 0) {
								c.html(k.label)
							} else {
								if (k.value != undefined && k.value != null
										&& k.value.toString().length > 0) {
									c.html(k.value)
								} else {
									if (k.title != undefined && k.title != null
											&& k.title.toString().length > 0) {
										c.html(k.title)
									} else {
										c.html(this.emptyString)
									}
								}
							}
							var b = c.outerHeight();
							if (this.checkboxes) {
								var g = this.getCheckedItems();
								var h = "";
								for ( var e = 0; e < g.length; e++) {
									if (e == g.length - 1) {
										h += g[e].label
									} else {
										h += g[e].label + ","
									}
								}
								this.input.val(h)
							} else {
								this.input.val(c.text())
							}
							c.remove();
							if (this.renderSelectedItem) {
								var l = this.renderSelectedItem(
										this.listBox.selectedIndex, k);
								if (l != undefined) {
									this.input.val(l)
								}
							}
							this._updateInputSelection()
						},
						dataBind : function() {
							this.listBoxContainer.jqxListBox( {
								source : this.source
							});
							this.renderSelection("mouse");
							if (this.source == null) {
								this.clearSelection()
							}
						},
						clear : function() {
							this.listBoxContainer.jqxListBox( {
								source : null
							});
							this.clearSelection()
						},
						clearSelection : function(b) {
							this.selectedIndex = -1;
							this.listBox.clearSelection();
							this.input.val("")
						},
						unselectIndex : function(b, c) {
							if (isNaN(b)) {
								return
							}
							this.listBox.unselectIndex(b, c);
							this.renderSelection("mouse")
						},
						selectIndex : function(b, d, e, c) {
							this.listBox.selectIndex(b, d, e, c);
							this.renderSelection("mouse");
							this.selectedIndex = b
						},
						selectItem : function(b) {
							if (this.listBox != undefined) {
								this.listBox.selectItem(b);
								this.selectedIndex = this.listBox.selectedIndex;
								this.renderSelection("mouse")
							}
						},
						unselectItem : function(b) {
							if (this.listBox != undefined) {
								this.listBox.unselectItem(b);
								this.renderSelection("mouse")
							}
						},
						checkItem : function(b) {
							if (this.listBox != undefined) {
								this.listBox.checkItem(b)
							}
						},
						uncheckItem : function(b) {
							if (this.listBox != undefined) {
								this.listBox.uncheckItem(b)
							}
						},
						indeteterminateItem : function(b) {
							if (this.listBox != undefined) {
								this.listBox.indeteterminateItem(b)
							}
						},
						getSelectedValue : function() {
							return this.listBox.selectedValue
						},
						getSelectedIndex : function() {
							return this.selectedIndex
						},
						getSelectedItem : function() {
							return this.getItem(this.selectedIndex)
						},
						getCheckedItems : function() {
							return this.listBox.getCheckedItems()
						},
						checkIndex : function(b) {
							this.listBox.checkIndex(b)
						},
						uncheckIndex : function(b) {
							this.listBox.uncheckIndex(b)
						},
						indeterminateIndex : function(b) {
							this.listBox.indeterminateIndex(b)
						},
						checkAll : function() {
							this.listBox.checkAll()
						},
						uncheckAll : function() {
							this.listBox.uncheckAll()
						},
						insertAt : function(c, b) {
							if (c == null) {
								return false
							}
							return this.listBox.insertAt(c, b)
						},
						addItem : function(b) {
							return this.listBox.addItem(b)
						},
						removeAt : function(c) {
							var b = this.listBox.removeAt(c);
							this.renderSelection("mouse");
							return b
						},
						ensureVisible : function(b) {
							this.listBox.ensureVisible(b)
						},
						disableAt : function(b) {
							this.listBox.disableAt(b)
						},
						enableAt : function(b) {
							this.listBox.enableAt(b)
						},
						_findPos : function(c) {
							while (c
									&& (c.type == "hidden" || c.nodeType != 1 || a.expr.filters
											.hidden(c))) {
								c = c.nextSibling
							}
							var b = a(c).offset();
							return [ b.left, b.top ]
						},
						testOffset : function(h, f, c) {
							var g = h.outerWidth();
							var j = h.outerHeight();
							var i = a(window).width() + a(window).scrollLeft();
							var e = a(window).height() + a(window).scrollTop();
							if (f.left + g > i) {
								if (g > this.host.width()) {
									var d = this.host.offset().left;
									var b = g - this.host.width();
									f.left = d - b + 2
								}
							}
							if (f.left < 0) {
								f.left = parseInt(this.host.offset().left)
										+ "px"
							}
							f.top -= Math.min(f.top,
									(f.top + j > e && e > j) ? Math.abs(j + c
											+ 23) : 0);
							return f
						},
						open : function() {
							this.showListBox()
						},
						close : function() {
							this.hideListBox()
						},
						hide : function() {
							this.close()
						},
						show : function() {
							this.open()
						},
						_getBodyOffset : function() {
							var c = 0;
							var b = 0;
							if (a("body").css("border-top-width") != "0px") {
								c = parseInt(a("body").css("border-top-width"));
								if (isNaN(c)) {
									c = 0
								}
							}
							if (a("body").css("border-left-width") != "0px") {
								b = parseInt(a("body").css("border-left-width"));
								if (isNaN(b)) {
									b = 0
								}
							}
							return {
								left : b,
								top : c
							}
						},
						showListBox : function() {
							if (this.listBox.items
									&& this.listBox.items.length == 0) {
								return
							}
							if (this.dropDownWidth == "auto"
									&& this.width != null && this.width.indexOf
									&& this.width.indexOf("%") != -1) {
								if (this.listBox.host.width() != this.host
										.width()) {
									var c = this.host.width();
									this.listBoxContainer.jqxListBox( {
										width : c
									});
									this.container.width(parseInt(c) + 25)
								}
							}
							var p = this;
							var e = this.listBoxContainer;
							var j = this.listBox;
							var m = a(window).scrollTop();
							var h = a(window).scrollLeft();
							var k = parseInt(this._findPos(this.host[0])[1])
									+ parseInt(this.host.outerHeight()) + "px";
							var g = parseInt(this.host.offset().left) + "px";
							if (a.browser.mozilla) {
							}
							if (!this.keyboardSelection) {
								this.listBox.selectIndex(this.selectedIndex);
								this.listBox.ensureVisible(this.selectedIndex)
							}
							if (this.autoComplete && !this.isOpened()
									&& !this.opening) {
								this.listBox.clearSelection();
								this._updateSearch()
							}
							var o = a.jqx.mobile.isSafariMobileBrowser()
									|| a.jqx.mobile.isWindowsPhone();
							this.ishiding = false;
							if (a("body").css("border-top-width") != "0px") {
								k = parseInt(k) + this._getBodyOffset().top
										+ "px"
							}
							if (a("body").css("border-left-width") != "0px") {
								g = parseInt(g) + this._getBodyOffset().left
										+ "px"
							}
							var d = a.jqx.utilities.hasTransform(this.host);
							if (d || (o != null && o)) {
								g = a.jqx.mobile.getLeftPos(this.element);
								k = a.jqx.mobile.getTopPos(this.element)
										+ parseInt(this.host.outerHeight())
							}
							this.host
									.addClass(this
											.toThemeProperty("jqx-combobox-state-selected"));
							this.dropdownlistArrowIcon
									.addClass(this
											.toThemeProperty("icon-arrow-down-selected"));
							this.dropdownlistArrow
									.addClass(this
											.toThemeProperty("jqx-combobox-arrow-selected"));
							this.dropdownlistArrow.addClass(this
									.toThemeProperty("jqx-fill-state-pressed"));
							this.host
									.addClass(this
											.toThemeProperty("jqx-combobox-state-focus"));
							this.host.addClass(this
									.toThemeProperty("jqx-fill-state-focus"));
							this.dropdownlistContent
									.addClass(this
											.toThemeProperty("jqx-combobox-content-focus"));
							this.container.css("left", g);
							this.container.css("top", k);
							j._arrange();
							var f = true;
							var q = false;
							if (this.dropDownHorizontalAlignment == "right") {
								var l = this.container.width();
								var b = Math.abs(l - this.host.width());
								if (l > this.host.width()) {
									this.container.css("left", 25 + parseInt(g)
											- b + "px")
								} else {
									this.container.css("left", 25 + parseInt(g)
											+ b + "px")
								}
							}
							if (this.enableBrowserBoundsDetection) {
								var i = this.testOffset(e,
										{
											left : parseInt(this.container
													.css("left")),
											top : parseInt(k)
										}, parseInt(this.host.outerHeight()));
								if (parseInt(this.container.css("top")) != i.top) {
									q = true;
									e.css("top", 23)
								} else {
									e.css("top", 0)
								}
								this.container.css("top", i.top);
								this.container.css("top", i.top);
								if (parseInt(this.container.css("left")) != i.left) {
									this.container.css("left", i.left)
								}
							}
							if (this.animationType == "none") {
								this.container.css("display", "block");
								a.data(document.body,
										"openedComboJQXListBoxParent", p);
								a.data(document.body, "openedComboJQXListBox",
										e);
								e.css("margin-top", 0);
								e.css("opacity", 1)
							} else {
								this.container.css("display", "block");
								var n = e.outerHeight();
								e.stop();
								if (this.animationType == "fade") {
									e.css("margin-top", 0);
									e.css("opacity", 0);
									e.animate( {
										opacity : 1
									}, this.openDelay, function() {
										p.isanimating = false;
										p.opening = false;
										a.data(document.body,
												"openedComboJQXListBoxParent",
												p);
										a.data(document.body,
												"openedComboJQXListBox", e)
									})
								} else {
									e.css("opacity", 1);
									if (q) {
										e.css("margin-top", n)
									} else {
										e.css("margin-top", -n)
									}
									this.isanimating = true;
									this.opening = true;
									e.animate( {
										"margin-top" : 0
									}, this.openDelay, function() {
										p.isanimating = false;
										p.opening = false;
										a.data(document.body,
												"openedComboJQXListBoxParent",
												p);
										a.data(document.body,
												"openedComboJQXListBox", e)
									})
								}
							}
							j._renderItems();
							this._raiseEvent("0", j)
						},
						_updateSearch : function() {
							var c = this;
							if (c.autoComplete && !c.remoteAutoComplete) {
								var e = this.input.val();
								var d = this._getMatches(e);
								var f = d.matchItems;
								var b = d.index;
								if (f.length > 0 || e == "") {
									this.listBox.vScrollInstance.value = 0;
									this.listBox._addItems();
									this.listBox.autoHeight = false;
									if (this.listBox.virtualSize.height < parseInt(this.dropDownHeight)) {
										this.listBox.autoHeight = true;
										this.container
												.height(this.listBox.virtualSize.height + 25);
										this.listBoxContainer
												.height(this.listBox.virtualSize.height);
										this.listBox._arrange()
									} else {
										this.listBox.height = this.dropDownHeight;
										this.container
												.height(parseInt(this.dropDownHeight) + 25);
										this.listBoxContainer
												.height(parseInt(this.dropDownHeight));
										this.listBox._arrange()
									}
									this.listBox._addItems();
									this.listBox._renderItems();
									b = 0
								}
							}
						},
						hideListBox : function() {
							var f = this.listBoxContainer;
							var g = this.listBox;
							var c = this.container;
							if (this.container.css("display") == "none") {
								return
							}
							var d = this;
							a
									.data(document.body,
											"openedComboJQXListBox", null);
							if (this.animationType == "none") {
								this.container.css("display", "none")
							} else {
								if (!this.ishiding) {
									var b = f.outerHeight();
									f.css("margin-top", 0);
									f.stop();
									this.isanimating = true;
									var e = -b;
									if (parseInt(this.container.offset().top) < parseInt(this.host
											.offset().top)) {
										e = b
									}
									if (this.animationType == "fade") {
										f.css( {
											opacity : 1
										});
										f.animate( {
											opacity : 0
										}, this.closeDelay, function() {
											d.isanimating = false;
											c.css("display", "none");
											d.ishiding = false
										})
									} else {
										f.animate( {
											"margin-top" : e
										}, this.closeDelay, function() {
											d.isanimating = false;
											c.css("display", "none");
											d.ishiding = false
										})
									}
								}
							}
							this.ishiding = true;
							this.host
									.removeClass(this
											.toThemeProperty("jqx-combobox-state-selected"));
							this.dropdownlistArrowIcon
									.removeClass(this
											.toThemeProperty("icon-arrow-down-selected"));
							this.dropdownlistArrow
									.removeClass(this
											.toThemeProperty("jqx-combobox-arrow-selected"));
							this.dropdownlistArrow.removeClass(this
									.toThemeProperty("jqx-fill-state-pressed"));
							if (!this.focused) {
								this.host
										.removeClass(this
												.toThemeProperty("jqx-combobox-state-focus"));
								this.host
										.removeClass(this
												.toThemeProperty("jqx-fill-state-focus"));
								this.dropdownlistContent
										.removeClass(this
												.toThemeProperty("jqx-combobox-content-focus"))
							}
							this._raiseEvent("1", g)
						},
						closeOpenedListBox : function(e) {
							var d = e.data.me;
							var b = a(e.target);
							var c = e.data.listbox;
							if (c == null) {
								return true
							}
							if (a(e.target).ischildof(e.data.me.host)) {
								return
							}
							var f = d;
							var g = false;
							a
									.each(
											b.parents(),
											function() {
												if (this.className != "undefined") {
													if (this.className.indexOf) {
														if (this.className
																.indexOf("jqx-listbox") != -1) {
															g = true;
															return false
														}
														if (this.className
																.indexOf("jqx-combobox") != -1) {
															if (d.element.id == this.id) {
																g = true
															}
															return false
														}
													}
												}
											});
							if (c != null && !g) {
								d.hideListBox()
							}
							return true
						},
						loadFromSelect : function(b) {
							this.listBox.loadFromSelect(b)
						},
						refresh : function(b) {
							this._setSize();
							this._arrange();
							if (this.listBox) {
								this.renderSelection()
							}
						},
						_arrange : function() {
							var f = parseInt(this.host.width());
							var b = parseInt(this.host.height());
							var e = this.arrowSize;
							var d = this.arrowSize;
							var i = 1;
							var c = f - d - 1 * i;
							if (c > 0) {
								this.dropdownlistContent.width(c + "px")
							}
							this.dropdownlistContent.height(b);
							this.dropdownlistContent.css("left", 0);
							this.dropdownlistContent.css("top", 0);
							this.dropdownlistArrow.width(d);
							this.dropdownlistArrow.height(b);
							this.dropdownlistArrow.css("left", 1 + c + "px");
							this.input.css("width", "100%");
							var g = this.input.height();
							if (g == 0) {
								g = parseInt(this.input.css("font-size")) + 3
							}
							this.input.addClass(this
									.toThemeProperty("jqx-rc-all"));
							var h = parseInt(b) / 2 - parseInt(g) / 2;
							if (h > 0) {
								this.input.css("margin-top", h)
							}
						},
						destroy : function() {
							this.listBoxContainer.remove();
							this.host.removeClass();
							this.removeHandler(a(document), "mousedown."
									+ this.id, self.closeOpenedListBox)
						},
						_raiseEvent : function(f, c) {
							if (c == undefined) {
								c = {
									owner : null
								}
							}
							var d = this.events[f];
							args = c;
							args.owner = this;
							var e = new jQuery.Event(d);
							e.owner = this;
							if (f == 2 || f == 3 || f == 4 || f == 5) {
								e.args = c
							}
							var b = this.host.trigger(e);
							return b
						},
						propertyChangedHandler : function(b, c, f, e) {
							if (b.isInitialized == undefined
									|| b.isInitialized == false) {
								return
							}
							if (c == "autoOpen") {
								b._updateHandlers()
							}
							if (c == "renderer") {
								b.listBox.renderer = b.renderer
							}
							if (c == "itemHeight") {
								b.listBox.itemHeight = e
							}
							if (c == "source") {
								b.input.val("");
								b.listBoxContainer.jqxListBox( {
									source : b.source
								});
								b.renderSelection("mouse");
								if (b.source == null) {
									b.clearSelection()
								}
							}
							if (c == "displayMember" || c == "valueMember") {
								b.listBoxContainer.jqxListBox( {
									displayMember : b.displayMember,
									valueMember : b.valueMember
								});
								b.renderSelection("mouse")
							}
							if (c == "autoDropDownHeight") {
								b.listBoxContainer.jqxListBox( {
									autoHeight : b.autoDropDownHeight
								});
								if (b.autoDropDownHeight) {
									b.container.height(b.listBoxContainer
											.height() + 25)
								} else {
									b.listBoxContainer.jqxListBox( {
										height : b.dropDownHeight
									});
									b.container
											.height(parseInt(b.dropDownHeight) + 25)
								}
							}
							if (c == "dropDownHeight") {
								if (!b.autoDropDownHeight) {
									b.listBoxContainer.jqxListBox( {
										height : b.dropDownHeight
									});
									b.container
											.height(parseInt(b.dropDownHeight) + 25)
								}
							}
							if (c == "dropDownWidth" || c == "scrollBarSize") {
								var d = b.width;
								if (b.dropDownWidth != "auto") {
									d = b.dropDownWidth
								}
								b.listBoxContainer.jqxListBox( {
									width : d,
									scrollBarSize : b.scrollBarSize
								});
								b.container.width(parseInt(d) + 25)
							}
							if (c == "autoComplete") {
								b._resetautocomplete()
							}
							if (c == "checkboxes") {
								b.listBoxContainer.jqxListBox( {
									checkboxes : b.checkboxes
								});
								if (b.checkboxes) {
									b.input.attr("readonly", true)
								}
							}
							if (c == "theme" && e != null) {
								b.listBoxContainer.jqxListBox( {
									theme : e
								});
								b.dropdownlistContent.removeClass();
								b.dropdownlistContent
										.addClass(b
												.toThemeProperty("jqx-combobox-content"));
								b.dropdownlistContent.addClass(b
										.toThemeProperty("jqx-widget-content"));
								b.input.removeClass();
								b.input.addClass(b
										.toThemeProperty("jqx-combobox-input"));
								b.input.addClass(this
										.toThemeProperty("jqx-widget-content"));
								b.host.removeClass();
								b.host
										.addClass(b
												.toThemeProperty("jqx-combobox-state-normal"));
								b.host
										.addClass(b
												.toThemeProperty("jqx-rc-all"));
								b.host
										.addClass(b
												.toThemeProperty("jqx-widget"));
								b.host.addClass(b
										.toThemeProperty("jqx-widget-content"));
								b.dropdownlistArrow.removeClass();
								b.dropdownlistArrowIcon.addClass(b
										.toThemeProperty("icon-arrow-down"));
								b.dropdownlistArrow
										.addClass(b
												.toThemeProperty("jqx-combobox-arrow-normal"));
								b.dropdownlistArrow
										.addClass(b
												.toThemeProperty("jqx-fill-state-normal"))
							}
							if (c == "width" || c == "height") {
								b._setSize();
								if (c == "width") {
									if (b.dropDownWidth == "auto") {
										var d = b.host.width();
										b.listBoxContainer.jqxListBox( {
											width : d
										});
										b.container.width(parseInt(d) + 25)
									}
								}
								b._arrange()
							}
							if (c == "selectedIndex") {
								b.listBox.selectIndex(e);
								b.renderSelection("mouse")
							}
						}
					})
})(jQuery);