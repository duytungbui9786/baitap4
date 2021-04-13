<?php
class QuestionsList {

    public function GetContent($path){
        $content = file_get_contents($path);
        return $content;
    }

    public function all($explode, $content_parse){
        $questions_array = explode($explode, $content_parse);
        array_shift($questions_array);
        return $questions_array;
    }

    public function fuzzySearch($array_questions, $keyword){
        $result = [];
        foreach($array_questions as $value){
            if(strpos($value, $keyword)!== false){
                $result[] = $value;
            }
        }
        return $result;
    }
    public function ChanceColor($str, $keyword)
    {
        return str_replace($keyword, "<span style='color:red;'>$keyword</span>", $str);
    }
}

?>