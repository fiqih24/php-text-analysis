<?php

namespace TextAnalysis\Tokenizers;

/**
 * Tokenize on periods only
 * @package Tokenizers\SentenceTokenizer
 * @author yooper
 */
class SentenceTokenizer extends GeneralTokenizer
{
    /**
     * 
     */
    public function __construct()
    {
        parent::__construct(".");
    }
       
}

