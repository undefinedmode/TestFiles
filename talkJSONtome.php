<?PHP
// Return JSON response
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
 $response = array();
    $response[0] = array(
'soupstatus' => 'nosoupforyou',
'trophy'    => 'pancakes',
);

echo json_encode($response); 
?>
