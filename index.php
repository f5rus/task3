 <?php
	
	$tree = array();

	//заполняю массив данными из файла
	$handle = fopen("categories.csv", "r");
	while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) 
	{
   					
		array_push($tree,$data);

	};

	fclose($handle);

	//функция рекурсивного вывода дерева
	function display($parent,$tree)
	{		
		foreach($tree as $d)		
		{
			echo "<ul>";
			if($d[1]==$parent)
			{
				echo "<li>".$d[2]."</li>";
				//вывыод дочерних элементов
				display($d[0],$tree);
			}
			echo "</ul>";
		}
	}	
	
	//вывод корня дерева	
	display("",$tree);
?> 
