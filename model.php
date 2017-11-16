<?php

class model {

    public function save()
    {
        if ($this->id != '') {
            $sql = $this->update($this->id);
        } else {
           $sql = $this->insert();
        }
        echo $sql;
        $db = dbConn::getConnection();
        $statement = $db->prepare($sql);
        $array = get_object_vars($this);
        foreach (array_flip($array) as $key=>$value){
            $statement->bindParam(":$value", $this->$value);
        }
        $statement->execute();

    }
    private function insert() {

        $modelName=static::$modelName;
        $tableName = $modelName::getTablename();
        $array = get_object_vars($this);
        $columnString = implode(',', array_flip($array));
        $valueString = ':'.implode(',:', array_flip($array));
        $sql =  'INSERT INTO '.$tableName.' ('.$columnString.') VALUES ('.$valueString.')';
        return $sql;
    }

    private function update($id) {

        $modelName=static::$modelName;
        $tableName = $modelName::getTablename();
        $array = get_object_vars($this);

        $comma = " ";
        $sql = 'UPDATE '.$tableName.' SET ';
        foreach ($array as $key=>$value){
            if( ! empty($value)) {
                $sql .= $comma . $key . ' = "'. $value .'"';
                $comma = ", ";
            }
        }
        $sql .= ' WHERE id='.$id;
        return $sql;

    }
    public function delete($id) {
        $db = dbConn::getConnection();
        $modelName=static::$modelName;
        $tableName = $modelName::getTablename();
        $sql = 'DELETE FROM '.$tableName.' WHERE id='.$id;
        echo $sql;
        $statement = $db->prepare($sql);
        $statement->execute();
    }
}

?>