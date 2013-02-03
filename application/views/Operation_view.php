   <div style="width: 100%; height: 550px auto;" id="jqxWidget">
        <div
            id="mainDemoContainer">
            <div id="customWindow">
                <div id="customWindowContent" style="overflow: hidden; width:100%;">
                    <div style="margin: 10px; float:left; width: 25% auto">
						<?php echo form_open('OperationController/validateAndLoad'); ?>
                        <label class="cLabel" for="almoner_number">Almoner Number:</label>
                        <input class="cInput" type="text" size="20" id="almoner_number" name="almoner_number" />
						<br/><br/>
						<label class="cLabel" for="bed_number">Bed Number:</label>
                        <input class="cInput" type="text" size="20" id="bed_number" name="bed_number" />
						<br/><br/>
						<div style='height:25px;'>
						<label class="cLabel" for="starting_time">Starting Time:</label>
						<script type="text/javascript">
								$(document).ready(function () {
									$("#starting_hour").jqxDropDownList({ autoComplete: true });
									$("#starting_hour").jqxDropDownList({ disabled: false });
								var theme = getTheme();
								var source = new Array();
								var i =0; 
								<?php foreach (unserialize (HOURS) as $hour){?>
											source[i] = <?php echo '\''.$hour.'\'';?>;
											i++;
								<?php 	} ?>
								$("#starting_hour").jqxDropDownList({ source: source, selectedIndex: 0, width: '50', height: '15', theme: theme });
							});
						</script>
						<div style='float: left; margin:none' id='starting_hour'></div>
						<script type="text/javascript">
								$(document).ready(function () {
									$("#starting_minutes").jqxDropDownList({ autoComplete: true });
									$("#starting_minutes").jqxDropDownList({ disabled: false });
								var theme = getTheme();
								var source = new Array();
								var i =0; 
								<?php foreach (unserialize (MINUTES) as $minute){?>
											source[i] = <?php echo '\''.$minute.'\'';?>;
											i++;
								<?php 	} ?>
								$("#starting_minutes").jqxDropDownList({ source: source, selectedIndex: 0, width: '50', height: '15', theme: theme });
							});
						</script>
						<div style='float:right; margin-right:45px' id='starting_minutes'></div>
						</div>
						<br/>
						<div style='height:25px;'>
						<label class="cLabel" for="ending_time">Ending Time:</label>
						<script type="text/javascript">
								$(document).ready(function () {
									$("#ending_hour").jqxDropDownList({ autoComplete: true });
									$("#ending_hour").jqxDropDownList({ disabled: false });
								var theme = getTheme();
								var source = new Array();
								var i =0; 
								<?php foreach (unserialize (HOURS) as $hour){?>
											source[i] = <?php echo '\''.$hour.'\'';?>;
											i++;
								<?php 	} ?>
								$("#ending_hour").jqxDropDownList({ source: source, selectedIndex: 0, width: '50', height: '15', theme: theme });
							});
						</script>
						<div style='float: left; margin:none' id='ending_hour'></div>
						<script type="text/javascript">
								$(document).ready(function () {
									$("#ending_minutes").jqxDropDownList({ autoComplete: true });
									$("#ending_minutes").jqxDropDownList({ disabled: false });
								var theme = getTheme();
								var source = new Array();
								var i =0; 
								<?php foreach (unserialize (MINUTES) as $minute){?>
											source[i] = <?php echo '\''.$minute.'\'';?>;
											i++;
								<?php 	} ?>
								$("#ending_minutes").jqxDropDownList({ source: source, selectedIndex: 0, width: '50', height: '15', theme: theme });
							});
						</script>
						<div style='float:right; margin-right:45px' id='ending_minutes'></div>
						</div>
						<br/>
						<label class="cLabel" for="operation">Operation:</label>
						<textarea class="cInputArea" rows="5" cols="50" size="256" id="operation" name="operation"></textarea>
                        <br/><br/>
						<label class="cLabel" for="surgeon"0>Surgeon:</label>
						<input class="cInput" type="text" size="20" id="surgeon" name="surgeon" />
                        <br/><br/>						
						<label class="cLabel" for="nurse">Nurse:</label>
						<input class="cInput" type="text" size="20" id="nurse" name="nurse" />
                        <br/><br/>						
						<label class="cLabel" for="anaesthesia">Anaesthesia:</label>
						<input class="cInput" type="text" size="20" id="anaesthesia" name="anaesthesia" />
                        <br/><br/>						
						<label class="cLabel" for="anaesthesia_by">Anaesthesia By:</label>
						<input class="cInput" type="text" size="20" id="anaesthesia_by" name="anaesthesia_by" />
                        <br/><br/>						
						<label class="cLabel" for="incision">Incision:</label>
						<input class="cInput" type="text" size="20" id="incision" name="incision" />
                        <br/><br/>						
						<label class="cLabel" for="findings">Findings:</label>
						<textarea class="cInputArea" rows="5" cols="50" size="256" id="findings" name="findings"></textarea>
                        <br/><br/>						
						<label class="cLabel" for="procedure">Procedure:</label>
						<textarea class="cInputArea" rows="5" cols="50" size="256" id="procedure" name="procedure"></textarea>
                        <br/><br/>						
						<label class="cLabel" for="closure">Closure:</label>
						<textarea class="cInputArea" rows="5" cols="50" size="256" id="closure" name="closure"></textarea>
                        <br/><br/>						
						<label class="cLabel" for="drain">Drain:</label>
						<input class="cInput" type="text" size="20" id="drain" name="drain" />
                        <br/><br/>
                        <div >
                            <input type="submit" value="Enter" style="margin-bottom: 5px;" id="EnterButton"/><br />
                        </div>
                        </form>
					</div>
                </div>
            </div>
        </div>
    </div>
   
 

