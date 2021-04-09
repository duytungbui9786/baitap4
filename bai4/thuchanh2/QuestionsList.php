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
        $result_array = [];
        foreach($array_questions as $value){
            // var_dump(stristr($value, $keyword));die;
            if(strpos($value, $keyword)!== false){
                $result_array[] = $value;
            }
        }
        return $result_array;
    }
}

?>