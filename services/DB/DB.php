<?php 

namespace Services\DB;

class DB 
{
    /** @var \PDO */
    private object $pdo;

    public function __construct()
    {
        $dsnOptions = (require __DIR__ . '/../Config.php')['db'];

        $this->pdo = new \PDO(
            'mysql:host=' . $dsnOptions['host'] . ';dbname=' . $dsnOptions['dbname'], 
            $dsnOptions['user'],
            $dsnOptions['password']
            
        );
        $this->pdo->exec('SET NAMES UTF8');
    }

    /**
     * Query function to select data from DB
     *
     * @param string $sql
     * @param array $params
     * @return array|null
     */
    public function query(string $sql, array $params = [], string $className = 'stdClass'): ?array
    {
        $prepareStatement = $this->pdo->prepare($sql);
        $statementResult = $prepareStatement->execute($params);

        if(false === $statementResult):
            return null;
        endif;

        return $prepareStatement->fetchAll(\PDO::FETCH_CLASS, $className);
    }
}