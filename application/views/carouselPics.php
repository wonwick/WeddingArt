<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<div class="container">
  <h2>Carousel Images</h2>
  <p>here you can change the banner images</p>
  <table class="table">
    <thead>
      <tr>
        <th>picId</th>
        <th>Title</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
		<?php
		foreach($curPicData as $caroPic){
			//print_r($caroPic);
			$picId=$caroPic["picId"];
			$title=$caroPic["title"];
			$description=$caroPic["description"];
      echo "<tr>
        			<td>$picId</td>
        			<td>$title</td>
        			<td>$description</td>
      			</tr>";
			}
			?>
    </tbody>
  </table>
</div>
