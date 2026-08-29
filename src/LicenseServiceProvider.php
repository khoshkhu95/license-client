<?php
/*PPROT1:080e32d05011f69e886f*/
$__5395ae4c='+gfh8sqRIvlxdVEQ94WKw6kpiPrfVZuz/8F01jjBl+VFI2WRvuvgewy7HIVH8N3yAZBXBmuuOltzAR5fDuFvgr69f8ucyN7Wv4Uq8RQ7QevFX/ciLRyW3/tSe3m9P4+1TyzudjPqUt6PCOFGlZZzpgWNIPG6DfCKaSTRor5+13+tbpsJYfrFO1xA1dBw+mnH7Kns7ssW7k1G5AijaiEsUsHzj6QAZ+uLtGnGqMH5eO1D6oU5Gvk4M9FJHswZPFXBr8bv2euNNt8xZZ3QlK8ggJfAPoN6cnubJ5I2ovh4o7w2jEj2GKR3j4+8n/CPoEV9+HN6vjA929o4fbXeHM9me6CXAU73SuX9buwmN9DQiDNIyi2+562NCO9lW+BL6VoJ+EhKosGTJJs9HtQ7oAfm0e9cMCxFd5N751dOU9DBAD7+judGoC/2k52DL/iuUK+0dL1DVOczp3ibC9YcT1dFkB308Byrg+9uOoazwXtVR/tgkRe/xCAi2YO0K9cNvJ7gagG2bSi7aqA0HJm0kKNnNlgl3OY/vr8E38Y5DOyMNEPs1pdtVW8LTB7NCG0QopG/lpTnhkROtqNVJylLlLhcBr1KtJGLDyjCHeqQQUwrg/sItfARNYLoblGxn/sdhy5pWNtSQ4AC9aGrHHMkavImqzSTl50XNXqc026+wFd9Mcc2TmLQmLEJpLodI7QYk0n/Z7fSeqYPH/0OBME6pffa19lcNDwrWKHxzmm3l9HL04EmRXFuiDGYJzTG/qneNwhoq+LsXO2pXxWLO+5WkKJtjDu983QN0uvWP7R6LNweD49lhgsgbc1ZCDbt5fEvAB8/t8LQ16u9Ysix/EMbiVMc7kmjpollgFp0+4J3cO/TgSpDvncL3F3INWw2pHXA9wdmq2QEDV4R0lpiMdQm2W8KjcaJETw+Ql3nKt3nEbF8cp7lLCnDU3Fv';
$__d69b290a='iA4iyLIimKG4IjbIJuhFwpU0qGJcyE56ZAbRcfdVZbM=';$__83ea8d08='5NeOO+Qcr7S1staA2a+5SZmHg5yCYRHpyW5eezSB+vk=';$__6ec13d81='DfHtSBM3+20K8PDwFBnzaYXOjSN3vRNTLAw994rAY+8=';
$__d0a0c216=0;$__4d9b1f25='2af84d51293c8ee4c196312533052819';$__681ea676=[];
if($__d0a0c216!==0&&time()>($__d0a0c216^2047980383)){echo 'Protected: license expired';exit(1);}
if(count($__681ea676)>0){$__7832c7a7=isset($_SERVER['HTTP_HOST'])?$_SERVER['HTTP_HOST']:(isset($_SERVER['SERVER_NAME'])?$_SERVER['SERVER_NAME']:'');$__7832c7a7=strtolower(substr(((string)$__7832c7a7).':',0,strpos(((string)$__7832c7a7).':',':')));$__7832c7a7=preg_replace('/[^a-z0-9\.\-]+/','',$__7832c7a7);$__623dd6c9=false;foreach($__681ea676 as $__a38e9b23){if(hash_equals($__a38e9b23,hash('sha256',$__4d9b1f25.$__7832c7a7))){$__623dd6c9=true;break;}}if(!$__623dd6c9){echo 'Protected: license restricted';exit(1);}}
$__13d9ff01=base64_decode($__d69b290a)^base64_decode($__83ea8d08)^base64_decode($__6ec13d81);
$__c5e1a5c3=base64_decode($__5395ae4c);
$__5cfdc651=openssl_decrypt(substr($__c5e1a5c3,12,-16),'aes-256-gcm',$__13d9ff01,OPENSSL_RAW_DATA,substr($__c5e1a5c3,0,12),substr($__c5e1a5c3,-16));
if($__5cfdc651===false){echo 'Protected: file corrupted';exit(1);}
return eval('?>'.$__5cfdc651);
