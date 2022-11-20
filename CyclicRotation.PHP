# CyclicRotation-PHP
function soution($A,$K){
  //to do
    $length =count($A);
    $rotatedArray=[];
    
    if ((!is_integer($length)|| ($length <0 ||$length>100))||
            (!is_integer($K)|| ($K <0 ||$K>100))){
        return [];
    }
  while ($K >0){
      $lastElement=$A[$length-1];
      $rotatedArray[0]=$lastElement;
      
      for ($i=0;$i<$length-1;$i++){
         if(!is_integer($A[$i]) || ($A[$i] <-abs(1000) || $A[$i]>1000)){
            return [];
            } 
          $rotatedArray[]=$A[$i];
        }
        $A=$rotatedArray;
        $rotatedArray=[];
      $K++;
    }
    return $A;
}
