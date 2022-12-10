<?php
$jsonTestCases = file_get_contents('testcases.json');
$testCases = json_decode($jsonTestCases);
foreach($testCases as $caseName => $caseData) {
    echo "-----------------------------------<br />";
    echo $caseName . ' wordt getest<br />';
    echo 'expected output: <br />';
    echo str_replace("\n", '<br />', str_replace(' ', '&nbsp;', $caseData->expectedOutput)) . '<br /><br />';

    $input = explode("\n", $caseData->input);

    echo "-----------------------------------<br />";
    echo "actual output:<br />";

    extractOutputFromInput($input);
}

function extractOutputFromInput($lines)
{
    //todo: input is vervelend te converteren op de conventie manier, makkelijkere manier van inputconverting inbouwen/meerdere input velden toevoegen voor deze case
//    fscanf(STDIN, "%d", $N);
//// $Q: Number Q of file names to be analyzed.
//    fscanf(STDIN, "%d", $Q);
//    $lines = [];
//    for ($i = 0; $i < $N; $i++)
//    {
//        // $EXT: file extension
//        // $MT: MIME type.
//        fscanf(STDIN, "%s %s", $EXT, $MT);
//        $extensions[strtolower($EXT)] = $MT;
//    }
//    for ($i = 0; $i < $Q; $i++)
//    {
//        $lines[] = stream_get_line(STDIN, 256 + 1, "\n");// One file name per line.
//    }
//
//    $output = [];
//    foreach ($lines as $line) {
//        $outputLine = 'UNKNOWN';
//        if (strpos($line, '.') > -1) {
//            $lineSections = explode('.', $line);
//            $extensionIndex = strtolower($lineSections[count($lineSections) -1]);
//
//            if (isset($extensions[$extensionIndex])) {
//                $outputLine = $extensions[$extensionIndex];
//            }
//        }
//        $output[] = $outputLine;
//    }
//
//// Write an answer using echo(). DON'T FORGET THE TRAILING \n
//// To debug: error_log(var_export($var, true)); (equivalent to var_dump)
//
//
//// For each of the Q filenames, display on a line the corresponding MIME type. If there is no corresponding type, then display UNKNOWN.
//    foreach($output as $put) {
//        echo ("$put\n");
//    }
}
