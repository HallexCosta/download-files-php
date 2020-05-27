<?php
/*
 * @author Hállex da Silva Costa <hallex.costa@hotmail.com>
 * @copyright (c) 2020 All rights reserved.
 */
namespace App\Models;

use App\Interfaces\InterfaceDownload;
use ZipArchive;

/**
 * [Description]
 * class Download
 */
final class Download extends Model implements InterfaceDownload
{
    /**
     * Directory the files download
     * @var string
     */
    private const _DIR_DOWNLOAD = 'assets/files';
    /**
     * Loading download files
     * @param  array $files
     * @return true        return true success or false in failed
     */
    final public static function load($files) : void
    {
        $zip_name = time() . '.zip';
        $zip = new ZipArchive;

        if (!$zip->open($zip_name, ZIPARCHIVE::CREATE)) {
            throw new InvalidArgumentException(
                sprintf('Failed at create file "%s" for download', $zip_name)
            );
        }

        foreach ($files as $file) {
            $pathname = static::_DIR_DOWNLOAD . '/' . $file;
            $zip->addFile($pathname, $file);
        }

        $zip->close();

        header('Content-Type: application/zip');
        header('Content-Disposition: attachment; filename="' . $zip_name . '"');

        readfile($zip_name);
        unlink($zip_name);
    }
}
