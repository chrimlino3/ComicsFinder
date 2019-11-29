<?php

require_once(__DIR__ . '../../../src/includes/db_conn.php');
require_once(__DIR__ . '../../../config.php');

$input = !empty($_GET['c']) ? $_GET('c') : '';
$url = 'http://gateway.marvel.com:80/v1/public/characters?' . $input;

?>
<form method="POST">
    <input name="c" value="" type="text" size="25"/>
    <input type="submit" name= "submit" value="Search"/>
</form>
<?php

if (empty($_POST['submit']))
{
    if (empty($_POST['c'])) {
        $map = mysqli_real_escape_string($con, $_POST['c']);

        $query = "SELECT * FROM characters WHERE `name` = '$input'";
        $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0)
    {
        $data = mysqli_fetch_array($result);

        foreach ($data as $value)
        {
            echo $value['name'];
        }
    }
    else {
        echo "Please enter a name";
    }
}
}