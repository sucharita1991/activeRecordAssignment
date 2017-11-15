<?php

class htmlTable{
    public static function genarateTableFromMultiArray($arr){
        $tableGen = '<table border="1" cellpadding="2" cellspacing="3">';
        foreach($arr as $row => $innerArray){
            $tableGen .= '<tr>';
            foreach($innerArray as $innerRow => $value){
                $tableGen .= '<td>' . $value . '</td>';
            }
            $tableGen .= '</tr>';
        }
        $tableGen .= '</table><hr>';
        return $tableGen;
    }
    public static function generateTableFromOneRecord($innerArray){
        $tableGen = '<table border="1" cellpadding="2" cellspacing="3"><tr>';

            foreach($innerArray as $value){
                $tableGen .= '<td>' . $value . '</td>';
            }

        $tableGen .= '</tr></table><hr>';
        return $tableGen;
    }
}

?>