<?php
function hooktest_theme_main() {
	echo '<a href="?module=hooktest&amp;page=hook">Module page link</a>';
}

//Site pages.
function hooktest_page_site_list() {
	$module_page_site[] = array(
		'func'  => 'hook',
		'title' => 'Hooks are great!'
	);
	return $module_page_site;
}

function hooktest_page_site_hook() {
	echo 'Hooks are great when they can have their own pages.';
}

function hooktest_site_before_redirects() {
	global $language;
	//NOTE: This is just to show how it works, and that's why I haven't created an admin page for it.
	$mode = false;
	if ($mode == true) {
		echo $language['hooktest']['message'];
		exit;
	}
}
?>