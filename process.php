<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['file1']) && isset($_FILES['file2'])) {
        // Get uploaded files
        $file1 = $_FILES['file1']['tmp_name'];
        $file2 = $_FILES['file2']['tmp_name'];

        // Define output file paths
        $output1 = 'output1.txt';
        $output2 = 'output2.txt';

        // Read both input files into arrays
        $lines1 = file($file1, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $lines2 = file($file2, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        // Initialize arrays for the outputs
        $onlyInFile1 = [];
        $onlyInFile2 = [];

        // Use two pointers to traverse both sorted arrays
        $i = 0;
        $j = 0;

        while ($i < count($lines1) && $j < count($lines2)) {
            if ($lines1[$i] < $lines2[$j]) {
                $onlyInFile1[] = $lines1[$i];
                $i++;
            } elseif ($lines1[$i] > $lines2[$j]) {
                $onlyInFile2[] = $lines2[$j];
                $j++;
            } else {
                $i++;
                $j++;
            }
        }

        while ($i < count($lines1)) {
            $onlyInFile1[] = $lines1[$i];
            $i++;
        }

        while ($j < count($lines2)) {
            $onlyInFile2[] = $lines2[$j];
            $j++;
        }

        // Write the results to the output files
        file_put_contents($output1, implode(PHP_EOL, $onlyInFile1) . PHP_EOL);
        file_put_contents($output2, implode(PHP_EOL, $onlyInFile2) . PHP_EOL);

        echo "<p>Comparison complete!</p>";
        echo "<a href='$output1' download>Download Output 1</a><br>";
        echo "<a href='$output2' download>Download Output 2</a>";
    } else {
        echo "<p>Please upload both files.</p>";
    }
} else {
    echo "<p>Invalid request method.</p>";
}
?>
