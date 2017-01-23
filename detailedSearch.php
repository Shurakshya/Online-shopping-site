<!DOCTYPE html>
<html>
<head>
<title>Web Programming</title>
<link href="" rel="stylesheet" type="text/css">
</head>
<body>

	<form action="searchResult.php" name="myform" method= "GET">
                <Table>

		
		<tr>	<td><label for="name">
                        Product Name:
                 </label>
                 <input type="text" id="proName" name="productName">
		</td><td>
		<label for="price">
			Min. Price:
		</label>
		<input type="text" id="MinPrice" name="minCost"></td><td>
		<label for="price">
			Max. Price:
		</label>
		<input type="text" id="MaxPrice" name="maxCost"></td>
		</tr>
		</table>
		<input type="submit" name="detailSearch" value = "search now" id = "detailSearch">
	</form>

</body>
</html>
	