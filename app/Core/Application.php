public function __construct()
{
    Env::load('../.env');

    $this->db = new Database();

    $this->router = new Router();

    $router = $this->router;

    require __DIR__ . '/../../routes/web.php';
}