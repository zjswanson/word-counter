<?php

    class Defaults
    {
        private $jabberwocky;
        private $gettysburg;
        private $stairway;

        function getJabberwocky()
        {
            return $this->jabberwocky;
        }
        function cleanJabberwocky()
        {
            return strip_tags($this->jabberwocky);
        }

        function getGettysburg()
        {
            return $this->gettysburg;
        }
        function cleanGettysburg()
        {
            return strip_tags($this->gettysburg);
        }

        function getStairway()
        {
            return $this->stairway;
        }
        function cleanStairway()
        {
            return strip_tags($this->stairway);
        }

        function __construct()
        {
            $this->jabberwocky = "  ’Twas brillig, and the slithy toves<br>
                                    Did gyre and gimble in the wabe:<br>
                                    All mimsy were the borogoves,<br>
                                    And the mome raths outgrabe.<br>
                                    <br>
                                    'Beware the Jabberwock, my son!<br>
                                    The jaws that bite, the claws that catch!<br>
                                    Beware the Jubjub bird, and shun<br>
                                    The frumious Bandersnatch!'<br>
                                    <br>
                                    He took his vorpal sword in hand<br>
                                    Long time the manxome foe he sought—<br>
                                    So rested he by the Tumtum tree<br>
                                    And stood awhile in thought.<br>
                                    <br>
                                    And, as in uffish thought he stood,<br>
                                    The Jabberwock, with eyes of flame,<br>
                                    Came whiffling through the tulgey wood,<br>
                                    And burbled as it came!<br>

                                    One, two! One, two! And through and through<br>
                                    The vorpal blade went snicker-snack!<br>
                                    He left it dead, and with its head<br>
                                    He went galumphing back.<br>
                                    <br>
                                    'And hast thou slain the Jabberwock?<br>
                                    Come to my arms, my beamish boy!<br>
                                    O frabjous day! Callooh! Callay!'<br>
                                    He chortled in his joy.<br>
                                    <br>
                                    ’Twas brillig, and the slithy toves<br>
                                    Did gyre and gimble in the wabe:<br>
                                    All mimsy were the borogoves,<br>
                                    And the mome raths outgrabe.<br>";
            $this->gettysburg = "   Four score and seven years ago our fathers      brought forth on this continent, a new nation, conceived in Liberty, and dedicated to the proposition that all men are created equal.<br>
            <br>
            Now we are engaged in a great civil war, testing whether that nation, or any nation so conceived and so dedicated, can long endure. We are met on a great battle-field of that war. We have come to dedicate a portion of that field, as a final resting place for those who here gave their lives that that nation might live. It is altogether fitting and proper that we should do this.<br>
            <br>
            But, in a larger sense, we can not dedicate—we can not consecrate—we can not hallow—this ground. The brave men, living and dead, who struggled here, have consecrated it, far above our poor power to add or detract. The world will little note, nor long remember what we say here, but it can never forget what they did here. It is for us the living, rather, to be dedicated here to the unfinished work which they who fought here have thus far so nobly advanced. It is rather for us to be here dedicated to the great task remaining before us—that from these honored dead we take increased devotion to that cause for which they gave the last full measure of devotion—that we here highly resolve that these dead shall not have died in vain—that this nation, under God, shall have a new birth of freedom—and that government of the people, by the people, for the people, shall not perish from the earth.<br>";

            $this->stairway = " There's a lady who's sure<br>
                                All that glitters is gold<br>
                                And she's buying a stairway to heaven.<br>
                                When she gets there she knows<br>
                                If the stores are all closed<br>
                                With a word she can get what she came for.<br>
                                Ooh ooh and she's buying a stairway to heaven.<br>
                                There's a sign on the wall<br>
                                But she wants to be sure<br>
                                'Cause you know sometimes words have two meanings.<br>
                                In a tree by the brook<br>
                                There's a songbird who sings,<br>
                                Sometimes all of our thoughts are misgiven.<br>
                                Ooh, it makes me wonder,<br>
                                Ooh, it makes me wonder.<br>
                                There's a feeling I get<br>
                                When I look to the west,<br>
                                And my spirit is crying for leaving.<br>
                                In my thoughts I have seen<br>
                                Rings of smoke through the trees,<br>
                                And the voices of those who standing looking.<br>
                                Ooh, it makes me wonder,<br>
                                Ooh, it really makes me wonder.<br>
                                And it's whispered that soon, If we all call the tune<br>
                                Then the piper will lead us to reason.<br>
                                And a new day will dawn<br>
                                For those who stand long<br>
                                And the forests will echo with laughter.<br>
                                If there's a bustle in your hedgerow,<br>
                                Don't be alarmed now,<br>
                                It's just a spring clean for the May queen.<br>
                                Yes, there are two paths you can go by<br>
                                But in the long run<br>
                                There's still time to change the road you're on.<br>
                                And it makes me wonder.<br>
                                Your head is humming and it won't go<br>
                                In case you don't know,<br>
                                The piper's calling you to join him,<br>
                                Dear lady, can you hear the wind blow,<br>
                                And did you know<br>
                                Your stairway lies on the whispering wind.<br>
                                And as we wind on down the road<br>
                                Our shadows taller than our soul.<br>
                                There walks a lady we all know<br>
                                Who shines white light and wants to show<br>
                                How ev'rything still turns to gold.<br>
                                And if you listen very hard<br>
                                The tune will come to you at last.<br>
                                When all are one and one is all<br>
                                To be a rock and not to roll.<br>
                                And she's buying a stairway to heaven.";


        }


    }





?>
