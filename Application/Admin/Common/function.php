<?php
function checkcookie() {
	if (cookie('admin') === md5('admin+password')) {
		return TRUE;
	} else {
		exit ;
	}
}
?>