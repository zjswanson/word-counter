<?php

    class Counter
    {

        // class and methods are designed to store all relevant information within a Counter object.  This will simplify storing and passing data during routing, and make it easier to add functionality.
        private $search_string;
        private $phrase_to_search;
        private $match_count;

        function getSearchString()
        {
            return $this->search_string;
        }
        function setSearchString($new_string)
        {
            $this->search_string = $new_string;
        }

        function getPhraseToSearch()
        {
            return $this->phrase_to_search;
        }
        function setPhraseToSearch($new_string)
        {
            $this->phrase_to_search = $new_string;
        }

        function getMatchCount()
        {
            return $this->match_count;
        }
        function setMatchCount($new_string)
        {
            $this->match_count = $new_string;
        }

        function __construct($search_string,$phrase_to_search)
        {
            $this->search_string = $search_string;
            $this->phrase_to_search = $phrase_to_search;
            $this->countMatch();
        }

        function countMatch()
        {
            // set relationship so count is set into object property.
            $count = 0;
            // create array of words in the phrase
            $search_array = explode(" ",strtolower(  str_ireplace(array(",",".","?",":",";","!","@","#","$","%","&","*","-"),"",$this->phrase_to_search)   ));
            // count matching words, ignoring case and punctuation
            foreach ($search_array as $word) {
                if (strtolower($this->search_string) == $word)
                {
                    ++$count;
                }
            }
            $this->match_count = $count;
        }





    }





?>
