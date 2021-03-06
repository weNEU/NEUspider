<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc0cc3ab87cc8b9c97e628c0b3f5b2443
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'thiagoalessio\\TesseractOCR\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'thiagoalessio\\TesseractOCR\\' => 
        array (
            0 => __DIR__ . '/..' . '/thiagoalessio/tesseract_ocr/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc0cc3ab87cc8b9c97e628c0b3f5b2443::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc0cc3ab87cc8b9c97e628c0b3f5b2443::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
