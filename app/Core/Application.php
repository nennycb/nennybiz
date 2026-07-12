class Application
{
    private $db;

    public function __construct()
    {
        Env::load('../.env');

        $this->db = new Database();
    }

    public function run()
    {
        echo "NennyBiz Framework Started";
    }
}