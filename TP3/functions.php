<?php
function getHeader($startSession,$title){
	if($startSession){
		session_start();
	}
}
