   <div style="width: 100%; height: 550px auto;" id="jqxWidget">
        <div
            id="mainDemoContainer">
            <div id="customWindow">
                <div id="customWindowContent" style="overflow: hidden; width:100%;">
                    <div style="margin: 10px; float:left; width: 25% auto">
						<?php echo form_open('SearchController'); ?>
                        <label class="cLabel" for="almoner_number">Almoner Number:</label>
                        <input class="cInput" type="text" size="20" id="almoner_number" name="almoner_number" />
						<br/>
						<br/>
						<label class="cLabel" for="name">Name:</label>
						<input class="cInput" type="text" size="50" id="name" name="name" />
                        <br/>
						<br/>
						<label class="cLabel" for="age">Date:</label>
						<input class="cInput" type="text" size="3" id="date" name="date" />
                        <br/>
						<br/>

						<label class="cLabel" for="father_name">M.R No:</label>
						<input class="cInput" type="text" size="50" id="mr_no" name="mr_no" />
                        <br/>
						<br/>					
						
                        <div >
                            <input type="submit" value="Enter" style="margin-bottom: 5px;" id="EnterButton"/><br />
                        </div>
                        </form>
					</div>
                </div>
            </div>
        </div>
    </div>
   
 

