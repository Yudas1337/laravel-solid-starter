<?php

namespace App\Base\Interfaces\uploads;

interface CustomUploadValidation
{
    /**
     * Handle custom upload validation.
     *
     * @param string $disk
     * @param object $file
     * @param string|null $old_file
     * @return string
     */

    public function validateAndUpload(string $disk, object $file, string $old_file = null): string;
}
