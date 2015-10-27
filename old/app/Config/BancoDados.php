<?php
namespace Config;
/**
 * Class BancoDados com Singleton
 * @package Config
 */
class BancoDados
{
    private static $instancia;

    private function __construct(){

    }
    public static function getInstancia()
    {

        if(!isset(self::$instancia)){
            //criar conexao e inserir na $instancia
            try{
                //DSN
                $configuracoes = parse_ini_file('config.ini');
                $dsn = $configuracoes['driver'].':host='.$configuracoes['hostname'].';dbname='.$configuracoes['dbname'];
                //self::$instancia = new \PDO('mysql:host=localhost;dbname=blog','root','123');
                self::$instancia = new \PDO($dsn,$configuracoes['dbuser'],$configuracoes['dbpass']);
                self::$instancia->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);


            }catch(\PDOException $e){
                echo 'Problema na conexao ao banco: ' . $e->getMessage();
            }
        }
        return self::$instancia;
    }
}
