<?php
require_once "QuestionsList.php";

//function my_autoloader($class) {
//    require $class.'.php';
//}
//spl_autoload_register('my_autoloader');

$questions = new QuestionsList();
$file = $questions->GetContent('questions.md');
$all = $questions->all('######', $file);
if(isset($_GET['search']) && $_GET['search'] ==! "" ){
    $keyword = $_GET['search'];
    $all = $questions->fuzzySearch($all, $keyword);
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <h1>Tìm kiếm</h1>
    <form method ="GET">
        <input type= "text" name="search"/>
        <button type = "submit">Tìm</button>
    </form>
    <div>
        <p>
            <?php
            if(count($all) != 0){
                echo "<h2>từ khóa:.$keyword.</h2>";
            foreach($all as $item){
            ?>
            <b>Câu hỏi:</b><?php echo $questions->ChanceColor($item,$keyword) ?> <hr>
        <?php }
        }else{
                echo "từ khóa: $keyword không có kết quả";
        }?>
        </p>
    </div>
    </body>
</html>
