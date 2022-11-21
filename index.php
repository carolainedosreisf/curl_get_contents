<?php
function curl_get_contents()
{
    $url = "https://mir-s3-cdn-cf.behance.net/project_modules/1400/1cb48c56801763.59bca8e44807a.jpg";
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_URL, $url);

    $data = curl_exec($ch);
    curl_close($ch);

    $imageData = base64_encode(($data));
    return 'data: image/jpg;base64,'.$imageData;

}

echo '<img src="' . curl_get_contents() . '" />';

