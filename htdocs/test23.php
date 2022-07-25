<?php
    //key와 value
    $p1 = array("Copier", "Inkjet", "Laser", "Photo");

    echo "p1 element: ".$p1[2]."<br>";

    $p2 = array('copier' => "Copier & Multipurpose",
                'inkjet' => "Inkjet Printer",
                'laser' => "Laser Printer",
                'photo' => "Photographic Paper");
    echo "p2 element: ".$p2['inkjet']."<br>";

    echo "<br>----------------------------------------------<br><br>";

    //foreach
    $paper = array("Copier", "Inkjet", "Laser", "Photo");
    $j = 0;

    foreach($paper as $item)
    {
        echo "$j: $item<br>";
        ++$j;
    }

    echo "<br>----------------------------------------------<br><br>";

    $paper = array('copier' => "Copier & Multipurpose",
                'inkjet' => "Inkjet Printer",
                'laser' => "Laser Printer",
                'photo' => "Photographic Paper");

    foreach($paper as $item => $description)
    {
        echo "$item: $description<br>";
    }
            
    echo "<br>----------------------------------------------<br><br>";

    $products = array(
        'paper' => array(
            'copier' => "Copier & Multipurpose",
            'inkjet' => "Inkjet Printer",
            'laser' => "Laser Printer",
            'photo' => "Photographic Paper"),
        'pens' => array(
            'ball' => "Ball Point",
            'hilite' => "Highlighters",
            'marker' => "Markers"),   
        'misc' => array(
            'tape' => "Sticky Tape",
            'glue' => "Adhesivers",
            'clips' => "Paperclips"),   
        );

        echo "<pre>";
        foreach ($products as $section => $items)
            foreach($items as $key => $value)
                echo "$section:\t$key\t($value)<br>";
        echo "</pre>";
?>