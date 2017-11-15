<?php

class model {

    public function save()
    {
        if ($this->id != '') {
            $sql = $this->update($this->id);
        } else {
           $sql = $this->insert();
        }
        $db = dbConn::getConnection();
        $statement = $db->prepare($sql);
        $statement->bindParam(':email', $this->email);
        $statement->bindParam(':fname', $this->fname);
        $statement->bindParam(':lname', $this->lname);
        $statement->bindParam(':phone', $this->phone);
        $statement->bindParam(':birthday', $this->birthday);
        $statement->bindParam(':gender', $this->gender);
        $statement->bindParam(':password', $this->password);
        $statement->execute();

    }
    private function insert() {
        $modelName=get_called_class();
        $tableName = $modelName::getTablename();
        $array = get_object_vars($this);
        $columnString = implode(',', array_flip($array));
        $valueString = ':'.implode(',:', array_flip($array));
        $sql =  'INSERT INTO '.$tableName.' ('.$columnString.') VALUES ('.$valueString.')';
        return $sql;
    }

    private function update($id) {
        $modelName=get_called_class();
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
        $modelName=get_called_class();
        $tableName = $modelName::getTablename();
        $sql = 'DELETE FROM '.$tableName.' WHERE id='.$id;
        $statement = $db->prepare($sql);
        $statement->execute();
    }
}

?>