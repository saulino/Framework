<?php

//automaticamente se ejecuta la funcion
function __autoload($name){
	require_once ROOT."libs".DS.$name.".php";
}