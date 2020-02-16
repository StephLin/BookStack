<?php namespace BookStack\Entities;

use Exception;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

/**
 * Class HackMD
 * @package BookStack\Entities
 */
class HackMD
{
    /*
     * Get full information of hackmd note
     */
    static function getHackmdNote($hackmdHost, $hackmdId)
    {
        $noteUrl = HackMD::getNoteUrl($hackmdHost, $hackmdId);
        $text = @file_get_contents($noteUrl . '/download') or $text = '';
        return [
            'url' => $noteUrl,
            'text' => $text
        ];
    }

    /*
     * Get url of HackMD note with accordance to host and id
     */
    static function getNoteUrl($hackmdHost, $hackmdId)
    {
        if (Str::endsWith($hackmdHost, '/')) {
            $hackmdHost = Str::replaceLast('/', '', $hackmdHost);
        }

        $hackmdId = str_replace('/', '', $hackmdId);

        $noteUrl = "$hackmdHost/s/$hackmdId";
        return trim($noteUrl);
    }
}
