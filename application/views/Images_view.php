   <div style="width: 100%; height: 550px auto;" id="jqxWidget">
        <div
            id="mainDemoContainer">
            <div id="customWindow">
                <div id="customWindowContent" style="overflow: hidden; width:100%;">
                    <div style="margin: 10px; float:left; width: 25% auto">
						
                        <?php echo $error;?>

                        <?php echo form_open_multipart('upload/do_upload');?>

                        <input type="file" name="userfile" size="20" />

                        <br /><br />

                        <input type="submit" value="upload" />

                        </form>
					</div>
                </div>
            </div>
        </div>
    </div>
   
 

