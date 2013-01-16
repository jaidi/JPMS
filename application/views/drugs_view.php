 
   <div style="width: 100%; height: 350px auto;" id="jqxWidget">
        <div
            id="mainDemoContainer">
            <div id="customWindow">
                <div id="customWindowContent" style="overflow: hidden">
                    <div style="margin: 10px; width: 30em">
						<?php echo form_open('PatientBioDataController/validateAndLoad'); ?>
                        <label class="cLabel" for="almoner_number">Almoner Number:</label>
                        <input class="cInput" type="text" size="20" id="almoner_number" name="almoner_number" />
						<br/>
						<br/>
						<label class="cLabel" for="drug_name">Drug Name:</label>
						<script type="text/javascript">
							$(document).ready(function () {
									$("#jqxComboBox").jqxComboBox({ autoComplete: true });
									$("#jqxComboBox").jqxComboBox({ disabled: false });
								var theme = getTheme();
								var source = new Array();
								var i =0; 
								<?php foreach (unserialize (DRUGS) as $drug){?>
											source[i] = <?php echo '\''.$drug.'\'';?>;
											i++;
								<?php 	} ?>
							//	alert (i);
							//	var source = new Array();
								//json_encode($php_array);
								
								/*[
									"Americano",
									"Bicerin",
									"Café au lait",
									"Espresso",
									"The Flat White",
									"Frappuccino",
									"Greek frappé coffee",
									"Iced Coffee",
									"Liqueur coffee"
								];*/
								// Create a jqxComboBox
								$("#jqxComboBox").jqxComboBox({ source: source, selectedIndex: 0, width: '176', height: '18', theme: theme });
							});
						</script>
						<div style='float: left; ' id='jqxComboBox'></div>
						<?php  //echo'<select name="drugs" id = "drugs">'; 
						// For each value of the array assign variable name "city" 
						//foreach(unserialize (DRUGS) as $drug){ 
						  //  echo'<option value="'.$drug.'">'.$drug.'</option>'; 
						//} 
						//echo'</select>'; ?>
                        <br/>
						<br/>
						<label class="cLabel" for="dose">Dose:</label>
						<input class="cInput" type="text" size="20" id="dose" name="dose" />
                        <br/>
						<br/>
						<label class="cLabel" for="route">Route:</label>
						<?php  echo'<select name="drugs" id = "drugs">'; 
						// For each value of the array assign variable name "city" 
						foreach(unserialize (DRUG_ROUTES) as $drug_route){ 
						    echo'<option value="'.$drug_route.'">'.$drug_route.'</option>'; 
						} 
						echo'</select>'; ?>
                        <br/>
						<br/>
						<label class="cLabel" for="start_date">Start Date:</label>
						<input class="cInput" type="text" size="50" id="start_date" name="start_date" />
                        <br/>
						<br/>
						<label class="cLabel" for="end_date">End Date:</label>
						<input class="cInput" type="text" size="50" id="end_date" name="end_date" />
                        <br/>
						<br/>
						<label class="cLabel" for="prescribed_by">Prescribed By:</label>
						<input class="cInput" type="text" size="20" id="prescribed_by" name="prescribed_by" />
                        <br/>
						<br/>
						<label class="cLabel" for="cancelled_by">Cancelled By:</label>
						<input class="cInput" type="text" size="20" id="cancelled_by" name="cancelled_by" />
                        <br/>
						<br/>
						<div >
                            <input type="button" value="Add" style="margin-bottom: 5px;" id="EnterButton" onclick= "addRow();"/><br />
                        </div>
						
                        <div >
                            <input type="submit" value="Enter" style="margin-bottom: 5px;" id="EnterButton"/><br />
                        </div>
                        </form>
					</div>
                </div>
            </div>
			<div id="customWindow">
				<div id="customWindowContent" style="overflow: hidden">
					<table style="border:1px solid black; border-collapse: collapse; width:100%" id = "drugs_table" name = "drugs_table">
						<tr style = "border:1px dotted;">
							<th style = "border:1px dotted; width:10%">
								Sr. #
							</th>
							<th style = "border:1px dotted;">
								Drug
							</th>
							<th style = "border:1px dotted;">
								Start Date
							</th>
							<th style = "border:1px dotted;">
								End Date
							</th>
						</tr>
						<tr style = "border:1px dotted;">
							<td style = "border:1px dotted;">
							hello
							</td>
							<td style = "border:1px dotted;">
							hiii
							</td>
							<td style = "border:1px dotted;">
							hello
							</td>
							<td style = "border:1px dotted;">
							hiii
							</td>
						</tr>
					</table>
				</div>
			</div>
        </div>
    </div>
   
 

