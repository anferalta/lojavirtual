<?php

namespace app\Core;
use app\Core\Model;

/**
 * Description of Model
 *
 * @author Administrador
 */
abstract class Model
{
    protected static string $tabela;
    
    public static function buscar(): ?array
    {
        try {
            $conn = Database::getConexao();
            $query = "SELECT * FROM ".static::$tabela;
            $stmt = $conn->prepare($query);
            $stmt->execute();
        
        return $stmt->fetchAll() ?: null;
            
        } catch (\PDOException $ex) {
            throw new \PDOException("Erro ao buscar os dados".$ex);
        }
    }
}
