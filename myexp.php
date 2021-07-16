<!-- regular expression -->
<?php
$email="kowsalya12@gmail.com";
if(preg_match('/[a-z]+[0-9]{2}@(gmail|yahoo)(.com)/',$email))
{
    echo "valid mail id";
}
else
{
    echo "invalid mail id";
}
?>