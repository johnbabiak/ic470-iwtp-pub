<?php
	function printHTMLHeader() {
		echo "<!DOCTYPE html>\n";
		echo "<html>\n";
		echo "<head>\n";
		echo "<title>Page Title</title>\n";
		echo "</head>\n";
		echo "<body>\n\n";
	}

	function printHTMLFooter() {
		echo "\n\n</body>\n";
		echo "</html>";
	}	

	function displayContent($content) {
		showLinks();
		printHTMLHeader();
		echo $content;
		printHTMLFooter();
	}

	function showLinks() {
		echo "\n<a href=../../index.php>Challenges</a><br>\n";
		echo "<a href=../../tools.php>Tools</a><br>\n";
	}
?>
