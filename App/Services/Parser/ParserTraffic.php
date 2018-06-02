<?php
namespace App\Services\Parser;

class ParserTraffic
{
    private $subject;

    /**
     * ParserTraffic constructor.
     * @param $inputSubject
     */
    public function __construct($inputSubject)
    {
        $this->subject = $inputSubject;
    }

    public function parseTraffic()
    {
        $pattern = "/(?:HTTP[^\"]*\"\s\d{3})(\s\d+)/";
        preg_match_all($pattern, $this->subject, $matches);
        $matches[0] = null;
        $result = array_map('trim', $matches[1]);

        return $result;
    }
}