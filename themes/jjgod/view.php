<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php print getTitle() ?> &raquo; <?php print getPage() ?></title>
		<link rel="stylesheet" type="text/css" href="<?php print getCSSURL() ?>" />
	</head>
    <body>
        <div id="navigation">
            <p>
            <a href="<?php print getHomeURL() ?>">Home</a> |
            <a href="<?php print getGlobalHistoryURL() ?>">Changes</a>
               <?php if (getUser() != "") { ?>| Logged in as <?php print getUser(); } ?>
            </p>
        </div>

        <?php print getContent(); ?>

		<div id="footer">
            <p>Last modified on <?php print date("F d Y H:i:s", filemtime(getFile())); ?>.</p>
			<p><a href="<?php print getEditURL()?>">Edit</a> | 
               <a href="<?php print getHistoryURL()?>">History</a> | 
               Powered by <a href="http://el-tramo.be/software/wigit">WiGit</a>.
            </p>
		</div>
	</body>
</html>
