<?php
namespace utility;

class htmlTable
{
    public static function genarateTableFromMultiArray($array)
    {
        $tableGen = '<table border="2"cellpadding="10">';
        $tableGen .= '<tr>';
       
        $fieldHeadings = $array[0];
        $fieldHeadings = get_object_vars($fieldHeadings);
        $fieldHeadings = array_keys($fieldHeadings);
        $referingPage = $_REQUEST['page'];
        foreach ($fieldHeadings as $heading) {
            $tableGen .= '<th>' . $heading . '</th>';
        }
        $tableGen .= '</tr>';
        foreach ($array as $record) {
            $tableGen .= '<tr>';
            foreach ($record as $key => $value) {
                if ($key == 'id') {
                    $id1=$value;
                } 
                    $tableGen .= '<td>' . $value . '</td>';
            }
            $tableGen .= '<td><a href="index.php?page=' . $referingPage . '&action=show&id=' . $id1 . '">edit</a></td>';
            $tableGen .= '<td><a href="index.php?page=' . $referingPage . '&action=edit&id=' . $id1 . '">delete</a></td>';
            $id1='';
            $tableGen .= '</tr>';
        }
        $tableGen .= '</table>';
        return $tableGen;
    }
    public static function generateTableFromOneRecord($innerArray)
    {
        $tableGen = '<table border="1" cellpadding="10"><tr>';
        $tableGen .= '<tr>';
        foreach ($innerArray as $innerRow => $value) {
            $tableGen .= '<th>' . $innerRow . '</th>';
        }
        $tableGen .= '</tr>';
        foreach ($innerArray as $value) {
            $tableGen .= '<td>' . $value . '</td>';
        }
        $tableGen .= '</tr></table><hr>';
        return $tableGen;
    }
}
?>