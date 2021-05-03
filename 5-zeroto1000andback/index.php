<?php
/**
 * without spaces between numbers
 */

//64 chars
//$a=0;
//do{echo $a++;}
//while($a<999);
//do{echo $a--;}
//while($a>=0);

//82 chars
//function c($a,$b){
//    echo implode("\n", range($a, $b));
//}
//c(0, 1000);
//c(999, 0);

//52 chars
//var_export(range(0,999));
//var_export(range(1000,0));

//48 chars
//var_dump(range(0,999));
//var_dump(range(1000,0));

//46 chars
//print_r(range(0,1000));
//print_r(range(999,0));


/**
 * with spaces between
 */


//67 chars
//$a=array_merge(range(0,999),range(1000,0));
//echo implode("<p>",$a);

//69 chars
//$a=1000;
//foreach(range(0,$a) as $i){
//    echo $i." ".($a-$i)."<p>";
//}

//75 chars
//$a = fn($a,$b)=> implode("<p>",range($a,$b));
//echo $a(0, 1000), $a(999, 0);

//62 chars
//echo implode("<p>",range(0,999)),implode("<p>",range(1000,0));

//74 chars
//echo implode(PHP_EOL,range(0,999)).PHP_EOL.implode(PHP_EOL,range(1000,0));

//62 chars
//echo implode(PHP_EOL,array_merge(range(0,999),range(1000,0)));

//56 chars
//for($n=-1;++$n<2e3;)echo($n>1e3?2e3-$n:$n).'<p>';echo 0;

//49 chars
//for($n=-1;$n++<2e3;)echo($n>1e3?2e3-$n:$n).'<p>';

//43 chars
//for(;$i<2001;)echo 1e3-abs(1e3-$i++),'<p>';

//39chars
//for(;$i+=1|-$x|=$i>1e3;)echo$i-1,"<p>";

//38chars
//for(;$i-=1|$x|=$i/1001;)echo~$i,"<p>";

//59 chars
echo implode("<p>",array_merge(range(0,999),range(1e3,0)));
