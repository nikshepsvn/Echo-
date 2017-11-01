<?php
$FILEPATH="gpsdata.dat";

if(!file_exists($FILEPATH))
{
	file_put_contents($FILEPATH,"{}");
}

$data=file_get_contents($FILEPATH);
$data=json_decode($data,true);

$request=array_merge([
	"ID"=>0,
	"LAT"=>0,
	"LONG"=>0
], $_POST);

print_r($data);
$count=0;

for($i=0; $i<count($data);$i++)
{
	if(in_array($request["ID"],array_keys($data)))
	{	
		$request["ID"]=($request["ID"]).'_'.$count;
		$count++;
	}
}


$moo=array(
	"LAT"=>$request["LAT"],
	"LONG"=>$request["LONG"]
);

$data[$request["ID"]] = $moo;


file_put_contents($FILEPATH,json_encode($data));

echo "DATA SENT SUCCESFULLY";
	

















