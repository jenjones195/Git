<?php
    function navibar(){ //I want to put the header and navbar here
        echo "STL BLOG";
        $items = array("home", "food", "fun", "about me") //initialize items in the navbar menuitems

        foreach ($items as $item) {
            if (isset ($_GET['page']) && $_GET['page'] == $item) { //iterates through each menu items
                echo '<a href="?page=' . $item . '" class="active"> ' . $item . '</a></br>';
                $activePage = $item . ".php."
            }
            else {
                echo '<a href="?page=' . $item . '"> ' . $item . '</a><br>';
            }
        }
        if (isset($activePage))
    }

    function footer(){//this is going to create the bottom of the page
        <html>
            <div>
    }
