<?php 
    
    echo form_open('user/valid_register_page', 'autocomplete="off"');
{
    $this->table->set_template(array('table_open'=>'<table class="table_form_register">')); 
    $this->table->add_row(form_label($label_email.
    form_label(form_error('email'),'',array('class' => 'error_label')),'label_email',
    array('class' => 'form_label')), 
    array('class' => 'align_right_td', 
    'data' => form_input('email', 
    set_value('email'),
    'class = "align_right_input require"')));  
}
  
{
    $this->table->add_row(form_label($label_invitation_key.
    form_label(form_error('invitation_key'),'',array('class' => 'error_label')),
    'label_invitation_key',array('class' => 'form_label')),
    array('class' => 'align_right_td',  
    'data' => form_password('invitation_key',
    set_value('invitation_key'),
    'class = "align_right_input require"')));
}

{
    $this->table->add_row('',array('class' => 'button_td',
    'data' => form_submit('register',  $button_register, 'class = "form_td_button"')));
    echo $this->table->generate();    

/**
 * No need to open and close php tags over and over. just open them at the beginning, then close them at the end.  
 * The indentation is not used consistently
 * Using the {}s to put code in blocks would make this code cleaner and easier to read
 * Appears to be using lots of arrays. I'm sure there's a better way of coding this'
 */
        
    echo form_close();
}

?>   

<?php
// This is code from another source. I started this on day 2.
class Start // A class should not be named a verb. Not sure what to call it.

{   // Variable: $name but not sure why he has var in front and he has not defined the variable
    var $name;
    var $type;
    //If construct not set, this is the construct.
    function __construct($name)
    $this->name = $name;
}

class Band extends Start
{   // Variable: $name
    // Variable: $type
    // Variable: $membersAndInstruments
    // Assignment operator: =
    var $name;
    var $type;
    var $membersAndInstruments = array();
    var $badArray = array();

    //Specify starting parameters.
    function __construct($type, $name)
{   // String: "This"
    // String: "has just been formed!"
    // I noticed the strings have double quotes instead of single
    $this->type = $type;
    $this->name = $name;
    echo isset($this->name)
    ? "This " . $type . " band called " . $this->name . " has just been formed!" //If name is set
    : "This band was formed. Genre: " . $type; //If name isn't.
}

    //Add new members. Instrument => Member
    function recruitMembers($instrument, $member)

{
    $this->membersAndInstruments[$instrument] = $member;
    //echo $instrument;
}
   
   //Reject members from the audition
    function reject($instrument, $rejectee)

{
    $this->badArray[] = array($instrument => $rejectee);
}   // Operator sign: =
    // array

    //Show the ones who didn't make it
    function sorryReject($msgStart, $msgEnd)
{
        echo "<br /><br />$msgStart, ";
        foreach($this->badArray as $k => $v)
    {
        //$k = array_values($k);
        $v = array_values($v);
        echo $v[0];
        if ($k != count($this->badArray)-1)
        {
            echo ", ";
        }
    }
        echo ". $msgEnd</br>";
}

    //Show the members in the group and their instruments.
    function displayMembers()
{
    foreach($this->membersAndInstruments as $craft => $member)
    {
        echo "<br />" . $member . " as " . $craft ;
    }
}

    //Challenge other bands. Input a band or an Array of bands.
    function battle($band2, $winMsg)
{
        echo "<br /><br /> BATTLE OF THE BANDS <br /><br />";
        $band1 = $this;
        if (!is_array($band2))
        {
            $contestants = array($band1, $band2); //Ready bands
        }
            else
        {
            $contestants = array($band1);
            foreach($band2 as $bandX){
                $contestants[] = $bandX;
            }

            //var_dump($contestants);
        }

        //Count members once and store in array of the same order the bands were entered
        for($i = 0; $i < count($contestants); $i++)
        
        {
            $numOfMembers[] = count($contestants[$i]->membersAndInstruments);
        }


        //echo "<br />";

        //var_dump($contestants);
        //var_dump($numOfMembers);
        // This entire line is a statement: $moreMembers = ($numOfMembers[0] > $numOfMembers[1]) ? 0 : 1;
        // Integer: 0 and 1
        $moreMembers = ($numOfMembers[0] > $numOfMembers[1]) ? 0 : 1; //Set to the index that has more.
        $winner = Randomizer($contestants, $contestants[$moreMembers], $numOfMembers[$moreMembers]);

        echo $winner->name . " $winMsg";
    }

}

class Person extends Start{
    var $goodAtInstrument;

    function __construct($name, $good)
    {
        $this->name = $name;
        $this->goodAtInstrument = $good;
    }
    function audition($band, $good, $instrument)
    {
        $this->goodAtInstrument = $instrument;
        $instrument = killTheLastLetter($instrument, "s");
        $instrument != "Drum" ? $instrument .= "ist" : $instrument .= "mer";
        if ($good)
        {
            $band->recruitMembers($instrument, $this->name);
        }else
        
        {
            $band->reject($instrument, $this->name);
            //echo "<br /> Sorry, " . $this->name . "....you didn't make it.";
        }
    }
}

//Looks for a specified ending letter and cuts it if found and returns.
function killTheLastLetter($input, $cutThisLetter)
{   // If statement
    if (substr($input, -2, 2) == "ss")
    {
        return $input;
    }
    substr($input, -1) == $cutThisLetter // Here's an operator sign that means what's on the left is equal to what's on the right
    ? $input = substr($input, 0, -1)
    : $input = $input;
    return $input;
}

    //This is a function 
function Randomizer($choiceArray, $chanceChoice, $chances = 0)

{
    !$choiceArray
    ? $TorF = array(true, false)
    : $TorF = $choiceArray;
    for($i = 0; $i < $chances; $i++)
    {
        //echo "DOJNE";
        $TorF[] = $chanceChoice;
    }
    //var_dump($TorF);
    $random = array_rand($TorF);
    //echo $random;
    return $TorF[$random];
}

//====================================================================================================
$FirstRockBand = new Band("Progressive Rock","Erais");

// this is an array 
// String: Shepard
// Object: Randomizer
$bandMembers = array (
    "Bass" => $M1 = new Person("Shepard", Randomizer()),
    "Guitar" => $M2 = new Person("Sy", Randomizer()),
    "Drums" => $M3 = new Person("Chris", Randomizer()),
    "Keyboards" => $M4 = new Person("Jill", Randomizer()),
    "Vocals" => $M5 = new Person("Michele", Randomizer()),
    "Cowbell" => $M6 = new Person("Ben", Randomizer())
);


echo "<br /> Welcome to the auditions. <br />";

foreach($bandMembers as $k => $v)
{
    $v->audition($FirstRockBand, $v->goodAtInstrument, $k);
}


$FirstRockBand->displayMembers();


//echo count($FirstRockBand->badArray);

if (count($FirstRockBand->badArray) > 0){


    $FirstRockBand->sorryReject("Sorry", "you didn't make it in.");


    echo "<br /><br /> The rejected members have started their own group: " . $SecondRockBand->name . "<br /><br />";


    $SecondRockBand = new Band("Death Metal", "Sideshow Hubris");
    $RockBands = array(
       $FirstRockBand,
       $SecondRockBand
            );


    foreach($FirstRockBand->badArray as $k => $v)
    {
        foreach($v as $inst => $member)
        {
            $SecondRockBand->recruitMembers($inst, $member);
        }

    }



    //echo '<div style = "background-color: 00FFFF">';
    $SecondRockBand->displayMembers();
    //echo "</div>";

//Battle of the Bands! Scales tipped on the side that has more members. Need to work on the whole talent thing.

    $FirstRockBand->battle($SecondRockBand, "blew the crowd away!");

}