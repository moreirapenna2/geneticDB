<?php

include_once('config.php');
/**
 * @param string $sQuery string of query to search
 * 
 * @return object $o object returned from the db search
 */
function searchDB($sQuery){
    global $db;
    
    $oResult = mysqli_query($db,$sQuery);
    
    if($oResult != false){
        $aResult = [];
        while ($oRow = $oResult->fetch_array(MYSQLI_ASSOC)) {
            array_push($aResult, $oRow);
        }
        return $aResult;
    }

    return $oResult;
}
?>