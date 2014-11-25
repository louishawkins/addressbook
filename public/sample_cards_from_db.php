<?php

foreach ($rows as $row) {

	echo "<div class=\"container card\" id=\"card1\">
			<div class=\"row\" id=\"cardrow\">
				<div class=\"col-md-2\">
					<img src=\"{$row['image']}\" height=\"100px\" width=\"100px\" class=\"img-circle\">
					<a id=\"pencil-edit\" href=\"#\" data-toggle=\"modal\" data-target=\"#editAddressModal\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
				</div>
				<div class=\"col-md-6 col-md-offset-3\">
					<h3>{$row['first_name']} {$row['last_name']}</h3>
					<table>
						<tr>
							<td>{$row['phone']}</td>
						</tr>
						<tr>
							<td>{\$row['street']}</td>
						</tr>
						<tr>
							<td>{\$row['city']}, {\$row['state']}</td>
						</tr>
						<tr>
							<td>{\$row['zip']}</td>
						</tr>
					</table>
				</div>
			</div> <!-- cardrow -->
		</div> <!-- container card -->
		";
}

?>