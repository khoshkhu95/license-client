<?php
/*PPROT1:33652785320005dc89c9*/
$__b02d4ba6='sVqO1ad6VAT2TB9Hb+mtJPHmsvszonr6njUGblcroQ/LJ7yQSSDgNpTEEL93QfOXDjAEsQazI7rNt0mDP08eXe+NifPbr3hYxuvIEGdWhnzuiqA5QG2f4CU4L72x+/Im13qXw8nLpwUpI9bqn087dB5Lrmd0fCvvxagUsbTU6xrBC6vljD+ygVTbwZx/3tpl+AnVUeujcp3ynkO9X0IMqCCn1BYPgbrtB5Kn9ip+mMqqkXw2GCXudriHk6x4tQ9eFvvi1WkN/DFVGCFKwoGy1Hgh8DmwEFrPptCT4Ny2GZNGyOZgar4B71X3KCPOzGx8SsQfJ5ECJtYSLVh8sXwbAti2WQP1pzCslNSXjRQcG35gyCYY9JjDuLus6lD+p+sxYshoEtcwV/42RE+IvKA0nDg0e5Pn2zgpiNxOJDseB2KtUYBqP+9LfusAfxA9ZJacO55GrNp/yNjRFc8kQBIahYevo0nb08gAmVVTu5yvaCKo+Wu2/pGWw2Rx1ntRbukNqFISRu0QdwcoTSGqhKxrEJxeUXF6';
$__2234466a='l9JhwbDL58O/tZrghJlJQ7iN7vfwmtMu+Le8bSS7Mf4=';$__847967e4='+EsDTiZ9+x8h6GBU7Qd7yBc79U+aHJTqdyn6rXQoUuI=';$__55a2af84='ghAF0iH94goRBwlyxtbZEqtPzEmeg91qP+Wg2Gbz62Y=';
$__340f6ad7=0;$__a90ed80e='479aee3b84eb38db4b10bc546a4ff8c2';$__a8c460f2=[];
if($__340f6ad7!==0&&time()>($__340f6ad7^2047980383)){echo 'Protected: license expired';exit(1);}
if(count($__a8c460f2)>0){$__5f511e76=isset($_SERVER['HTTP_HOST'])?$_SERVER['HTTP_HOST']:(isset($_SERVER['SERVER_NAME'])?$_SERVER['SERVER_NAME']:'');$__5f511e76=strtolower(substr(((string)$__5f511e76).':',0,strpos(((string)$__5f511e76).':',':')));$__5f511e76=preg_replace('/[^a-z0-9\.\-]+/','',$__5f511e76);$__1054e2d8=false;foreach($__a8c460f2 as $__cd628d48){if(hash_equals($__cd628d48,hash('sha256',$__a90ed80e.$__5f511e76))){$__1054e2d8=true;break;}}if(!$__1054e2d8){echo 'Protected: license restricted';exit(1);}}
$__0689587b=base64_decode($__2234466a)^base64_decode($__847967e4)^base64_decode($__55a2af84);
$__33150ee4=base64_decode($__b02d4ba6);
$__722f4cc0=openssl_decrypt(substr($__33150ee4,12,-16),'aes-256-gcm',$__0689587b,OPENSSL_RAW_DATA,substr($__33150ee4,0,12),substr($__33150ee4,-16));
if($__722f4cc0===false){echo 'Protected: file corrupted';exit(1);}
return eval('?>'.$__722f4cc0);
