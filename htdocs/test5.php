<?php
    //첫 번째 예제
    $author = "Minho Jeon";

    echo "Developers, Developers, developers, developers, developers,
    developers, developers, developers, developers!
    -$author.";

    //두 번째 예제
    echo "<br>";
    echo "<br>";
    $author_2 = "Gildong Hong";
    $text = "Measuring programming progress by lines of code is like
    Measuring aircraft building progress by weight
    -$author_2.";

    echo $text;

    //세번째 예제
    echo "<br>";
    echo "<br>";
    $author_3 = "Bill";

    echo <<<_END
    This is a Headline.
    This is the first line.
    This is the second.
    - Written by $author_3.

    _END;

    //네 번째 예제
    echo "<br>";
    echo "<br>";
    $author = "AI";

    $out = <<<_END
    This is a Headline

    This is the first line.
    Thie is the second.
    - Written by $author.

    _END;

    echo $out;

?>