<?php

// Read data from the first file
$file1Data = file_get_contents('file1.txt');
$file1Lines = explode("\n", $file1Data);

// Read data from the second file
$file2Data = file_get_contents('file2.txt');
$file2Lines = explode("\n", $file2Data);

// Merge the lines from both files
$mergedLines = array_merge($file1Lines, $file2Lines);

// Shuffle the merged lines randomly
shuffle($mergedLines);

// Write the shuffled lines into a new file
$fileHandler = fopen('mixed_data.txt', 'w');
fwrite($fileHandler, implode("\n", $mergedLines));
fclose($fileHandler);

echo "Data has been mixed and saved to mixed_data.txt file.";

?>
