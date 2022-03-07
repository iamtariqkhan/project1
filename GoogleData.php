<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
    require __DIR__ . '/vendor/autoload.php';
    //Reading data from spreadsheet.

$client = new\Google_Client();

$client->setApplicationName('Google Sheets and PHP');

$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);

$client->setAccessType('offline');

$client->setAuthConfig(__DIR__ . '/credentials.json');

$service = new Google_Service_Sheets($client);

// Now we need to provide our SpreadsheetID and range

$spreadsheetId = "1eV39YX_qySbRIfqJ82CFas6w3aeAKiaTOB6hFY7hCMM"; //It is present in your URL

// $get_range = "Your Sheet Name! Range”;

$get_range = "certificate";

//Request to get data from spreadsheet.

$response = $service->spreadsheets_values->get($spreadsheetId, $get_range);

$values = $response->getValues();
// if (empty($values)) {
//     print "No data found.\n";
// } else {
//     print "Name, Major:\n";
//     foreach ($values as $row) {
//         // Print columns A and E, which correspond to indices 0 and 4.
//         printf("%s, %s\n", $row[0], $row[1]);
//     }
// }
// print_r($values);

?>