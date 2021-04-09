<?php
//class ConvertToString {
//    public function __toString(){
//        return "Hello";
//    }
//}
//$data = new ConvertToString();


$data = ["H","e","l","l","o","!"];
$data = implode("",$data);

// NO CHANGES ALLOWED BELOW
for ($i = 0; $i <= count($data); $i++) {
    $data++;
}

echo $data;

/*
 * Magic output:
 *
 * Hello