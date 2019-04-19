<?php

namespace App;

use Endroid\QrCode\QrCode as EndroidQrCode;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\LabelAlignment;
use Endroid\QrCode\Response\QrCodeResponse;

class QrCode
{
    public static function create($text)
    {
        $qrCode = new EndroidQrCode();
        $qrCode->setText($text);
        $qrCode->setMargin(0);

        $qrCode->setErrorCorrectionLevel(new ErrorCorrectionLevel(ErrorCorrectionLevel::HIGH));
        $qrCode->setForegroundColor(array('r' => 0, 'g' => 0, 'b' => 0, 'a' => 0));
        $qrCode->setBackgroundColor(array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0));

        $logoPath = __DIR__. '/../docs/logo/qr-code.png';
        $qrCode->setLogoPath($logoPath);
        $qrCode->setLogoSize(80, 80);

        return $qrCode;
    }

    public static function getString($text) {
        $qrCode = QrCode::create($text);
        return $qrCode->writeString();
    }

    public static function getImageTag($text, $size = 150) {
        $data = QrCode::getString($text);
        $data = base64_encode($data);
        $data = '<img style="width:'.$size.'px" src="data:image/png;base64, ' . $data . '" />';
        return $data;
    }

    public static function getAffected($affected, $size = 150) {
        $qrCode = '';
        try
        {
            $url = config('eallergiepass.url') . '/spa/add/' . $affected->unique_id;
            $qrCode =  QrCode::getImageTag($url, $size);
        } catch (Exception $e) {
            $qrCode = $e;
        }

        return $qrCode;
    }
}

