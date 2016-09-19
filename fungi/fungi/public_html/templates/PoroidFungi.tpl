<!DOCTYPE html>
<html>

	<body>
		<h1>Poroid Fungi</h1>
		
		<br>
		<br>
		
		<form id='Poroidform' action="poroidphp.php" method="POST">
			
			{foreach $characteristics as $cur => $char}
					<h3>{$char['Name']}</h3> <br>
					{foreach $char['Option'] as $acur => $v}
						<label>
							<input type="radio" name="{$cur}" value="{$acur}">
								{$v}
						</label>				
					{/foreach}
				{/foreach}
				<br>
				<br>
				<input type="submit" value="Submit">

		</form>
	</body>


</html>