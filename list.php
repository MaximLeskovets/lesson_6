<?php
    if (isPost()) {
        $name = getNameFiles();
        $question = $_POST['question'];
        $answer = $_POST['answer'];
        $array = array(
            "question" => $question,
            "answer" => $answer);
        $json = json_encode($array, JSON_UNESCAPED_UNICODE);
        $f = fopen("json/$name.json", 'w');
        $f = fwrite($f, $json);
    }