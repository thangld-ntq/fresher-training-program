<?php

function checkPhoneNumber($phone)
{
    try{
        if(preg_match('/^[0-9]{10,11}$/',$phone)){
            return true;
        }else {
            throw new Exception("This is not number phone");  
        }
    }
    catch (Exception $e){
        echo 'mesage: '.$e->getMessage();
    }
}
function checkFormatMobile($phone)
{
    //$viettel  = array('098','097','096','0169','0168','0167','0166','0165','0164','0163','0162');
    //$vinaphone = array('091', '094', '0123', '0124', '0125', '0127', '0129');
    //$mobiphone = array( '090', '093', '0120', '0121', '0122','0126','0128');
    try{
        if (preg_match('/^[0][1][2]\d{8}$|^[0][9][0134678]\d{7}$|[0][1][6][2-9]\d{7}$/',$phone)) {
            return true;
        }else {
                throw new Exception("This is not Format phone");  
            }
        }
    catch (Exception $e){
        echo 'mesage: '.$e->getMessage();
    }
    
}
function checkNetworkPhone($phone)
{
        if(checkPhoneNumber($phone) && checkFormatMobile($phone)){
            if (preg_match('/^[0][9][678]\d{7}$|^[0][1][6][2-9]\d{7}$/', $phone)) {
                echo "Viettel: ".$phone;
            }elseif (preg_match('/^[0][9][14]\d{7}$|^[0][1][2][34579]\d{7}$/', $phone)) {
                echo "Vinaphone: ".$phone;
            }else echo "Mobiphone: ".$phone;
            
        }
}
checkNetworkPhone('0906948508');
?>