<?php
namespace PromptProcessor;

class PromptProcessor {
    public static function processPrompt(string $prompt, string|array $marking, string|array $end): string {
        $finalFind = substr($prompt, strlen($prompt) - 1);
        $end = self::findEnd($prompt, $end);
        $mark = self::findMark($prompt, $marking);
        if ($mark !== '') {
            $start = substr($prompt, 0, strlen($mark));
            if (self::wordExists($start, $marking)) {
                $prompt = trim(str_replace($mark, '', $prompt));
                if ($finalFind !== $end && strtoupper($prompt) !== 'HELLO') {
                    return '';
                } elseif ($finalFind !== $end && strtoupper($prompt) !== 'HELLO') {
                    return $prompt.$end;
                } elseif (is_array($end) && !in_array($finalFind, $end) && strtoupper($prompt) !== 'HELLO') {
                    $signal = ["!", "?"];
                    $prompt .= $signal[rand(0, count($signal) - 1)];
                }
            } else {
                return '';
            }
        }
        return "";
    }

    private static function wordExists(string $word, string|array $haystack): bool {
        if (is_array($haystack)) {
            return in_array($word, $haystack);
        } elseif (is_string($haystack)) {
            return strpos($haystack, $word) !== false;
        } else {
            return false;
        }
    }

    private static function findMark(string $prompt, string|array $marking): string {
        if (is_array($marking)) {
            foreach ($marking as $mark) {
                if ($mark === substr($prompt, 0, strlen($prompt))) {
                    return $mark;
                }
            }
        } elseif (is_string($marking) && $marking === substr($prompt, 0, strlen($prompt))) {
            return $marking;
        }
        return '';
    }

    private static function findEnd(string $prompt, string|array $end): string {
        if (is_array($end)) {
            foreach ($end as $final) {
                if ($final === substr($prompt, strlen($prompt)-1)) {
                    return $final;
                }
            }
        } elseif (is_string($end) && $end === substr($prompt, 0, strlen($prompt))) {
            return $end;
        }
        return '';
    }
}

?>
