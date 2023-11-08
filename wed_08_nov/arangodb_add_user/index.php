<?php
require_once __DIR__ . '/_arangodb.php';

try {
    $user = ['name' => $_POST['user_name']];

    if (isset($user)) {
        $q = ['query' => 'INSERT @user IN users RETURN NEW', 'bindVars' => ['user' => $user]];
        $response = _db($q);
        if ($response['error']) {
            throw new Exception($response['errorMessage']);
        } else {
            echo json_encode($response['result']);
        }
    }
} catch (Exception $e) {
    http_response_code(500);
    echo $e;
}
?>

<form method="post">
    <label for="user_name">name</label>
    <input id="user_name" name="user_name" type="text">
    <button>Submit</button>
</form>