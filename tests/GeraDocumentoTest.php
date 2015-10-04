<?php
if(is_file(dirname(__DIR__) . "/src/config/global.ini"))    $ini = parse_ini_file(dirname(__DIR__) . "/src/config/global.ini");
//Se houver um arquivo local de configurações, sobrescreve
if(is_file(dirname(__DIR__) . "/src/config/local.ini"))     $ini = parse_ini_file(dirname(__DIR__) . "/src/config/local.ini");

require dirname(__DIR__) . "/src/_conexao/conecta.inc.php"; 
require dirname(__DIR__) . "/src/GeraDocumento.class.php";

/**
* @backupGlobals disabled
* @backupStaticAttributes disabled
*/
//Usa-se esse recurso em função de um erro:
//https://blogs.kent.ac.uk/webdev/2011/07/14/phpunit-and-unserialized-pdo-instances/
class GeraDocumentoTest extends PHPUnit_Framework_TestCase
{
    public function testIfCreateObject()
    {
        $documento = new GeraDocumento();
        $this->assertEquals('Cria documento', $documento->mensagem);
        //$this->assertAttributeEquals('Cria documento', 'mensagem', $documento);
    }
}
?>