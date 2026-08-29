<?php
/*PPROT1:4cd50ec80555280e2138*/
$__643f2b83='01kuVJnzMC440+S6fvti07wczBbC3GFnIUGI7Pyf26PC5MfYOVIaswxnUNvZ95DZpmFbmRCq1ov5g4DSDqYMMQeEBYRhvyyakY0RWns7omM6awaWC5CnXWG5LNky2OBuG/2ZHHlWTa7Fm+e0jDvfB8y0rij3AOn4X5uc/j/xfUIIEJSbkVoEW20p4rj+enSTKpnAPhWzTaifbX1vJc5X0iTY+eL6B0H0ZZVmyAZsYlbK7THRgM65M2//2u9W9HR4kELnb2ckJdbOKYENr9/7t9AMj9cJjMdz2r3iKPW49+GU3VV8WvG9E8AVzamJ/owAUVvr24pRJqoRatIgzBJLnGc9yH5E7aNbA3kdYZR0pJX3dJunv3GZ9iXRNNzwcgISek6tWLyph1PsjYwWn2VKTq1Hff0u/H0FhICiwIzec9WShnP3DoQW63hFwyBurZZdSTi9QIzkDqBSL/hf63YW3vKJZHsfvRlLZ6CX4n4tQ4i0E5WtC38tpFGdshDeQJeKJnQAp0a8BIiewZ2cRj5OpBhqioUq';
$__0bffc2ae='oMmTtP7MYB2QQ1LbzfYOS+ytowKSbgaAOGFaXCKW6Zo=';$__0ce13b24='GNKKcwq5whZV+RaQsCo4P9sSLKsGzPlWLc45NiHN7J0=';$__3e218136='1xX85hC01S4AitJuxh3xe0FmG8OokTLdVFOwydlzjOs=';
$__81809450=0;$__d0b9392a='44998c6e44f1f7c7b8484ee699f23cac';$__058b5ddf=[];
if($__81809450!==0&&time()>($__81809450^2047980383)){echo 'Protected: license expired';exit(1);}
if(count($__058b5ddf)>0){$__196f18da=isset($_SERVER['HTTP_HOST'])?$_SERVER['HTTP_HOST']:(isset($_SERVER['SERVER_NAME'])?$_SERVER['SERVER_NAME']:'');$__196f18da=strtolower(substr(((string)$__196f18da).':',0,strpos(((string)$__196f18da).':',':')));$__196f18da=preg_replace('/[^a-z0-9\.\-]+/','',$__196f18da);$__14a2202b=false;foreach($__058b5ddf as $__082a8d87){if(hash_equals($__082a8d87,hash('sha256',$__d0b9392a.$__196f18da))){$__14a2202b=true;break;}}if(!$__14a2202b){echo 'Protected: license restricted';exit(1);}}
$__ac61c289=base64_decode($__0bffc2ae)^base64_decode($__0ce13b24)^base64_decode($__3e218136);
$__20069ab1=base64_decode($__643f2b83);
$__a2c5c657=openssl_decrypt(substr($__20069ab1,12,-16),'aes-256-gcm',$__ac61c289,OPENSSL_RAW_DATA,substr($__20069ab1,0,12),substr($__20069ab1,-16));
if($__a2c5c657===false){echo 'Protected: file corrupted';exit(1);}
return eval('?>'.$__a2c5c657);
