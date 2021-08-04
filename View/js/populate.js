 function buildTable(jsonData){
 	var tableData=document.getElementByID("data");
 	tableData.innerHTML ="";
 	for (var i=0;i<jsonData.legnth;i++){
 		var row=  <tr>
 					<td>${jasonData[i].phone} </td>
 					<td>${jasonData[i].amount}</td>
 				  </tr>;

 	    tableData.innerHTML +=row;
 	    



 	}

}