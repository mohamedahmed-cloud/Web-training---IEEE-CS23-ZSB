<?php
/*
    Author : Mohamed Yousef 
    Date   : 2023-04-28
*/

function change_permissions($file_name)
{
    if (is_dir($file_name))
    {
        echo "This Is Directory And Only Files Allowed" . "<br>";
    }
    else 
    {
        if (pathinfo($file_name)["extension"] == "txt")
        {
            chmod($file_name,0700);
            echo "Permissions Changed" . "<br>";
        }
        else 
        {
            echo "File Extension Is Not Txt" . "<br>";
        }

    }
}

// echo "<pre>";
// print_r();
// echo "</pre>";

echo change_permissions("Elzero"); // This Is Directory And Only Files Allowed
echo change_permissions("Work.docx"); // File Extension Is Not Txt
echo change_permissions("Result.txt"); // Permissions Changed