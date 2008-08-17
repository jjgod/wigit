<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php print getTitle() ?> &raquo; Editing <?php print getPage() ?></title>
		<link rel="stylesheet" type="text/css" href="<?php print getCSSURL() ?>" />
	</head>
	<body>
		<div id="navigation">
			<p><a href="<?php print getHomeURL() ?>">Home</a> 
			| <a href="<?php print getGlobalHistoryURL() ?>">History</a>
			<?php if (getUser() != "") { ?>| Logged in as <?php print getUser(); } ?>
			</p>
		</div>

		<div id="header">
			<h1 id="title">Editing <?php print getPage() ?></h1>
		</div>

		<div id="form">
			<form method="post" action="<?php print getPostURL(); ?>">
				<p><textarea name="data" cols="80" rows="20" style="width: 100%"><?php print getRawData(); ?></textarea></p>
				<p><input type="submit" value="publish" /></p>
			</form>
		</div>

		<div id="footer" style='text-align: left;'>
			<p class='syntax'>
				<span style='font-weight: bold;'>Syntax:</span> Besides normal HTML
				code (e.g. <code>&lt;b&gt;Bold&lt;/b&gt;</code>), the following 
				markup is available as well:
				<ul>
					<li><code>[SomePage]</code>, <code>[SomePage|Display Name]</code>: Internal link to SomePage</li>
					<li><code># Section</code>, <code>## Subsection</code>: 
						Section headers</li>
					<li><code>1. Item</code>:
						Enumerated list</li>
					<li><code>* Item</code>, <code>** Second-level item</code>:
						Itemized list</li>
					<li><code>[an example](http://example.com/)</code>: External links</li>
					<li><code>![Alt text](/path/img.jpg "Optional title")</code>: Embedded images</li>
					<li><code>_Emphasised text_, *strong text*, ??citations??, `code`,
						+Inserted text+, -Removed text-</code> &rarr; 
						<em>Emphasized text</em>, <strong>strong text</strong>,
						<cite>citation</cite>, <ins>inserted text</ins>, <del>removed
						text</del></li>
					<li><code>H~2~O, A^2^</code> &rarr; H<sub>2</sub>O, A<sup>2</sup></li>
					<li><code>|Cell 1|Cell 2|</code>: Tables</li>
				</ul>
				For more markup styles, see the 
                <a href="http://daringfireball.net/projects/markdown/syntax">Markdown Syntax</a>.
				Powered by <a href="http://el-tramo.be/software/wigit">WiGit</a>.
            </p>
		</div>
	</body>
</html>
