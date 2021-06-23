<?php

$zip= new ziparchive;

if($zip->open('NinjaResume.zip', ziparchive::CREATE) === TRUE)
{
	$zip->addFile('aniruddh 1.pdf');
	$zip->addFile('aniruddh 2.pdf');

	$zip->addFromString('autogenrate.txt', 'This is a AutoGenrated File');

	$zip->close();
	echo "SuccessFully Generate ZIP Folder";
}
?>