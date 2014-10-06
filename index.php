 <?php
	
	$tree = array();

	$handle = fopen("categories.csv", "r");
	while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) 
	{
   					
		array_push($tree,$data);

	};

	fclose($handle);

	
	function display($parent,$tree)
	{		
		foreach($tree as $d)		
		{
			echo "<ul>";
			if($d[1]==$parent)
			{
				echo "<li>".$d[2]."</li>";
				display($d[0],$tree);
			}
			echo "</ul>";
		}
	}	
		
	display("",$tree);
?> 