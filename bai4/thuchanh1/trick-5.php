<?php
//cách 1
//class ConvertToString {
//    public function __toString(){
//        return "Hello";
//    }
//}
//$data = new ConvertToString();

//cách 2
//$data = ["H","e","l","l","o","!"];
//$data = implode("",$data);

//cách 3
$data = 'Hellm';
// NO CHANGES ALLOWED BELOW
for ($i = 0; $i <= count($data); $i++) {
    $data++;
}

echo $data;

/*
 * Magic output:
 *
 * Hello