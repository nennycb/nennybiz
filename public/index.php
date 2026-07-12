require '../app/Core/Env.php';
require '../app/Core/Database.php';

Env::load('../.env');

$db = new Database();

echo "Database Connected";