<?php

namespace App\Base\Interfaces\uploads;

use Illuminate\Http\UploadedFile;

interface ShouldHandleFileUpload
{
    /**
     * check specified file in storage
     * @param string $file
     * @return bool
     */

    public function exist(string $file): bool;

    /**
     * Handle class should implement file upload.
     *
     * @param string $disk
     * @param UploadedFile $file
     * @return string
     */

    public function upload(string $disk, UploadedFile $file): string;

    /**
     * Handle class should implement file delete.
     *
     * @param string $file
     * @return void
     */

    public function remove(string $file): void;
}
