	function addRow(){
		var table = $("#drugs_table");
		var row = document.createElement('tr');
		var header = document.createElement('th');
		var cell = new Array();
		var col = new Array();

		if (!table.hasChildNodes()){
			for (var c = 0; c<6; c++)
			{
				col[c]=document.createElement('td');
				if (c==0)
				{
					col[c].innerHTML = "<h4>Sr. #</h4>"
				}
				else if (c==1)
				{
					col[c].innerHTML = "<h4>Drug</h4>"
				}
				else if (c==2)
				{
					col[c].innerHTML = "<h4>Dose</h4>"
				}
				else if (c==3)
				{
					col[c].innerHTML = "<h4>Route</h4>"
				}
				else if (c==4)
				{
					col[c].innerHTML = "<h4>Start Date</h4>"
				}
				else if (c==5)
				{
					col[c].innerHTML = "<h4>End Date</h4>";
				}
				header.appendChild(col[c]);
				
			}
		}
			
			table.appendChild(header);
				
			cell = document.createElement('td');
			cell.innerHtml=$("#drug_name").value;
			row.appendChild(cell);
			cell.innerHtml=$("#dose").value;
			row.appendChild(cell);
			cell.innerHtml=$("#drug_route").value;
			row.appendChild(cell);
			cell.innerHtml=$("#start_date").value;
			row.appendChild(cell);
			cell.innerHtml=$("#end_date").value;
			row.appendChild(cell);
			
			table.appendChild (row);
		}
	}