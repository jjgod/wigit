<html xmlns="http://www.w3.org/1999/xhtml">
	<?php $historyTitle = "History" . ($wikiPage == "" ? "" : " of " . $wikiPage); ?>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php print $wikiTitle ?> &raquo; <?php print $historyTitle ?></title>
		<link rel="stylesheet" type="text/css" href="<?php print $wikiCSS ?>" />
	</head>
	<body>
		<div id="navigation">
			<p><a href="<?php print $wikiHome ?>">Home</a> 
			| <a href="<?php print $wikiHistoryURL ?>">History</a>
			<?php if ($wikiUser != "") { ?>| Logged in as <?php print $wikiUser; } ?>
			</p>
		</div>

		<div id="header">
			<h1 id="title"><?php print $historyTitle ?></h1>
			<p>[ <a href="<?php print $wikiPageViewURL?>">view</a> ]</p>
		</div>

		<div id="history">
			<table>
			<?php 
				foreach ($wikiHistory as $item) {
					print "<tr><td>" . $item["date"] . "</td><td class='author'>" . $item["linked-author"] . "</td><td>" . $item["message"] . "</td></tr>\n";
				}
			?>
			</table>
		</div>
	</body>
</html>