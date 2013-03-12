<script type="text/javascript">
	$(document).ready(function () {
			$("#role").jqxDropDownList({ autoComplete: true });
			$("#role").jqxDropDownList({ disabled: false });
		var theme = getTheme();
		var source = new Array();
		var i =0; 
		<?php foreach (unserialize (ROLE) as $role){?>
					source[i] = <?php echo '\''.$role.'\'';?>;
					i++;
		<?php 	} ?>
		$("#role").jqxDropDownList({ source: source, selectedIndex: 0, width: '120', height: '15', theme: theme });
	});
	
</script>
<div style='margin:0 auto;' id='role'></div>




$options = array(
              'small'  => 'Small Shirt',
              'med'    => 'Medium Shirt',
              'large'   => 'Large Shirt',
              'xlarge' => 'Extra Large Shirt',
            );

$js = 'id="shirts" onChange="some_function();"';

echo form_dropdown('shirts', $options, 'large', $js);



<td class="roles_col">
	<select id="select_role<?php echo $i?>">
		<option value="ADMINISTRATOR">Administrator</option>
		<option value="USER">User</option>
	</select>
	<script>
		var i = <?php echo $i ?>;
		$(function(){
		  $('#select_role'.i).bind('change', function () {
			  var selected_role = $(this).val(); // get selected value
			  alert(i	);
			  
			  // if (selected_role) { 
				  // window.location = RolesController/updateRole; // redirect
			  // }
			  return false;
		  });
		});
	</script>
</td>