<!DOCTYPE html>
<html>

	<body>
		<h1>Results</h1>
		
		<br>
		<br>
		{foreach $q as $k => $v}
			<div>{$v['Name']} <br> </div> <br>
			
		{/foreach}

		<a href='shroomsstartportal.html'><label id="gilled">back to portal</label></a>
		
	</body>

</html>