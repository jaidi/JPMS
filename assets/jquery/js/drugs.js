	function addRow(){
		
		var table = document.getElementById("drugs_table");
		var i = table.rows.length;
		var rowClass;
		if ( i%2 == 0 ){
			rowClass = "drugs_row_even";
		}
		else {
			rowClass = "drugs_row_odd"
		}
		var row = document.createElement('tr');
		table.style.display = "block";
		row.className = rowClass;
	//	row.style.width = "100%";
	
		var ser = document.createElement('td');
//		ser.class = "drug_col"
//		ser.style.width = "10%";
		ser.innerHTML = i;
		row.appendChild(ser);
		
		var	cell = document.createElement('td');
		cell.className = "drugs_col";
		cell.innerHTML=document.getElementById("ddList_drug_name").value;
	//	cell.style.width = "15%";
		row.appendChild(cell);
		
		cell = document.createElement('td');
		cell.className = "drugs_col";
		cell.innerHTML=document.getElementById("dose").value;
		//cell.style.width = "15%";
		row.appendChild(cell);

		cell = document.createElement('td');
		cell.className = "drugs_col";
		cell.innerHTML=document.getElementById("ddList_drug_route").value;
		row.appendChild(cell);
//		cell2.style.width = "15%";
		

		cell = document.createElement('td');
		cell.className = "drugs_col";
		cell.innerHTML=document.getElementById("start_date").value;
//		cell.style.width = "15%";
		row.appendChild(cell);

		cell = document.createElement('td');
		cell.className = "drugs_col";
		cell.innerHTML=document.getElementById("end_date").value;
		row.appendChild(cell);
//		cell4.style.width = "15%";

		cell = document.createElement('td');
		cell.className = "drugs_col";
		cell.innerHTML='<a href="#" onclick='+'"removeRow(['+row+'])"'+'>Remove</a>';
		row.appendChild(cell);
//		cell5.style.width = "15%";
		
		table.appendChild (row);
		
	}
	function removeRow(row){
		var table = document.getElementById("drugs_table");
	//	table.deleteRow(row);
		for (var i=0; i<table.rows.length; i++){
			if (row == table.childNodes[i]){
			//	table.deleteRow(i);
				break;
			}
		}
	}