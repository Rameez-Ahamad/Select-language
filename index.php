<body><center><h1>
<form method = "post">
	<select name = "dropdown" , value = "select">
		<option value = "select">  select  </option>
		<option value = "Telugu">  Telugu  </option>
		<option value = "Hindi">   Hindi   </option>
		<option value = "English"> English </option>
		<option value = "kashmiri"> Kashmiri </option>
	</select>
	<input type = "submit", name = "submit" , value = "submit">
</form>
	
		<?php
		if ($_POST)
		{
			$x = $_POST['dropdown'];
			switch($x)  
			{ 

			case "Telugu": echo "Namsthe";
			break;

			case "Hindi": echo "Namshkar";
			break;

			case "English": echo "Hello";
			break;
			case "kashmiri": echo "salamalykum";
			break;

			default: echo "Input did not match with any case";

			  }
		}
		?> 
	</h1> </center>	
</body>
</html>