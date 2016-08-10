<?php
	header('Access-Control-Allow-Origin: *'); 
    if(isset($_GET["symbol"])){
        $sym = urlencode($_GET["symbol"]);
        $jsres        = "http://dev.markitondemand.com/MODApis/Api/v2/Quote/json?symbol=" . $sym;
        $response     = file_get_contents($jsres);
        echo $response;
    }

    if(isset($_GET["chartsymbol"])){
        $sym1 = urlencode($_GET["chartsymbol"]);
        $jsres1        = 'http://dev.markitondemand.com/MODApis/Api/v2/InteractiveChart/json?parameters='.$sym1;
        $response1     = file_get_contents($jsres1);
        echo $response1;        
    }

    if(isset($_GET["yahoosymbol"])){
        $sym1 = urlencode($_GET["yahoosymbol"]);
        $jsres1        = 'http://chart.finance.yahoo.com/t?'.$sym1;
        $response1     = file_get_contents($jsres1);
        echo $response1;        
    }
    if(isset($_GET["autocompleteInput"])){
        $sym = urlencode($_GET["autocompleteInput"]);
        $jsres        = "http://dev.markitondemand.com/MODApis/Api/v2/Lookup/json?input=" . $sym;
        $response     = file_get_contents($jsres);
        echo $response;
    }
?>

