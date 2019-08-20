<?php

/**
 * Description of json
 * www.ebubekirbastama.com
 * @author By &Ebubekir Bastama
 */
class json {

    function jsonveri($siteadresi,$dgr1,$dgr2, $text, $text1) {
        $post = [
            $dgr1 => $text,
            $dgr2 => $text1,
        ];
        $ch = curl_init($siteadresi);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        $response = curl_exec($ch);
        curl_close($ch);
        return $data = json_decode(iconv("ISO-8859-9", "UTF-8", $response));
    }

}
