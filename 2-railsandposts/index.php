<?php
    define('$POST', 0.10);
    define('$RAILING', 1.5);

    if(isset($_POST['posts-input'])&&isset($_POST['railings-input'])){
        $postsInput = $_POST['posts-input'];
        $railingsInput = $_POST['railings-input'];
        $isMaxLengthValid = calculateMaxLength($postsInput, $railingsInput);
        if ($isMaxLengthValid!==null){
            $maxLengthAnswer = calculateMaxLength($postsInput, $railingsInput) . ' m';
        } else {
            $maxLengthAnswer = 'invalid input';
        }

    } else {
        $maxLengthAnswer = null;
    }

    if(isset($_POST['max-length-input'])){
        $maxLengthInput = $_POST['max-length-input'];
        $postsAndRailings = calculatePostsAndRailings($maxLengthInput);
        if ($postsAndRailings==null){
            $railingsAnswer = 'invalid input';
            $postsAnswer = 'invalid input';
        } else {
            $railingsAnswer = 'Railings: ' .  ($postsAndRailings - 1);
            $postsAnswer = 'Posts: ' . $postsAndRailings;
        }

    } else {
        $postsAnswer = null;
        $railingsAnswer = null;
    }

    Function calculateMaxLength($posts, $railings){
        if ($posts==null || $railings==null){
            return null;
        } else {
            if($posts>$railings){
                return ($railings * 1.6)+ 0.1;
            } else{
                return (($posts - 1) * 1.6) + 0.1;
            }
        }
    }

    Function calculatePostsAndRailings($maxLength){
        if ($maxLength==null){
            return $postAndRailings = null;
        } else {
            return $postAndRailings = ceil(($maxLength-0.1)/1.6);
            }
    }
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <link type="text/css" rel="stylesheet" href="style.css">
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rails and Posts</title>
    </head>
    <body>
        <div class="container">
            <div class="header-container">
                <h1>Posts and Railings Challenge</h1>
            </div>
            <div class="input-container">
                <form action="index.php" method="post" class="posts-and-railings-form-input form-position">
                    <input type="number" placeholder="Posts" name="posts-input">
                    <input type="number" placeholder="Railings" name="railings-input">
                    <input type="submit" value="Show me the Max Length">
                </form>
                <form action="index.php" method="post" class="max-length-form-input form-position">
                    <input type="number" placeholder="Max Length" name="max-length-input">
                    <input type="submit" value="Show me what's needed">
                </form>

            </div>
            <div class="output-container">
                <div class="max-length-output-container form-position">
                    <output class="max-length-output">
                        <span class="max-length-answer-message"><?php echo 'Your Max Length is:'; ?></span>
                        <span class="max-length-answer-container"><?php echo $maxLengthAnswer; ?></span>
                    </output>

                </div>
                <div class="posts-and-railings-output-container form-position">
                    <output class="posts-and-railings-output">
                        <span class="max-length-answer-message"><?php echo 'You Will Require: '; ?></span>
                        <span class="max-length-answer-container"><?php echo $postsAnswer; ?></span>
                        <span class="max-length-answer-container"><?php echo $railingsAnswer; ?></span>
                    </output>
                </div>
            </div>
        </div>
    </body>
</html>
