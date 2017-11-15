<?php

class htmlTable{
    public static function genarateTableFromMultiArray($arr){
        $tableGen = '<table cellpadding="5" cellspacing="5">';
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
        $tableGen = '<table cellpadding="5" cellspacing="5"><tr>';

            foreach($innerArray as $value){
                $tableGen .= '<td>' . $value . '</td>';
            }

        $tableGen .= '</tr></table><hr>';
        return $tableGen;
    }
}

?>