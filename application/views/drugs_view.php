 
   <div style="width: 100%; height: 350px auto;" id="jqxWidget">
        <div
            id="mainDemoContainer">
            <div id="customWindow">
                <div id="customWindowContent" style="overflow: hidden">
                    <div style="margin: 10px; width: 32em">
						<?php echo form_open('PatientBioDataController/validateAndLoad'); ?>
                        <label class="cLabel" for="almoner_number">Almoner Number:</label>
                        <input class="cInput" type="text" size="20" id="almoner_number" name="almoner_number" />
						<br/>
						<br/>
						<label class="cLabel" for="drug_name">Drug Name:</label>
						<script type="text/javascript">
							$(document).ready(function () {
									$("#drug_name").jqxDropDownList({ autoComplete: true });
									$("#drug_name").jqxDropDownList({ disabled: false });
								var theme = getTheme();
								var source = new Array();
								var i =0; 
								<?php foreach (unserialize (DRUGS) as $drug){?>
											source[i] = <?php echo '\''.$drug.'\'';?>;
											i++;
								<?php 	} ?>
								$("#drug_name").jqxDropDownList({ source: source, selectedIndex: 0, width: '176', height: '18', theme: theme });
							});
						</script>
						<div style='float: left;' id='drug_name'></div>
                        <br/>
						<br/>
						<label class="cLabel" for="dose">Dose:</label>
						<input class="cInput" type="text" size="20" id="dose" name="dose" />
                        <br/>
						<br/>
						<label class="cLabel" for="route">Route:</label>
						<script type="text/javascript">
							$(document).ready(function () {
									$("#drug_route").jqxDropDownList({ autoComplete: true });
									$("#drug_route").jqxDropDownList({ disabled: false });
								var theme = getTheme();
								var source = new Array();
								var i =0; 
								<?php foreach (unserialize (DRUG_ROUTES) as $drug_route){?>
											source[i] = <?php echo '\''.$drug_route.'\'';?>;
											i++;
								<?php 	} ?>
								$("#drug_route").jqxDropDownList({ source: source, selectedIndex: 0, width: '176', height: '18', theme: theme });
							});
							
						</script>
						<div style='float: left; ' id='drug_route'></div>
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
                        </form>
					</div>
                </div>
            </div>
			<div id="customWindow">
				<div id="customWindowContent" style="overflow: hidden">
					<table 	 id = "drugs_table" name = "drugs_table">
						<tr class="drugs_row">
							<th class = "drugs_header">
								Sr. #
							</th>
							<th class = "drugs_header">
								Drug
							</th>
							<th class = "drugs_header">
								Dose
							</th>
							<th class = "drugs_header">
								Route
							</th>
							<th class = "drugs_header">
								Start Date
							</th>
							<th class = "drugs_header">
								End Date
							</th>
							<th class = "drugs_header">
								Action
							</th>
						</tr>
					</table>
				</div>
			</div>
        </div>
    </div>
   
 

