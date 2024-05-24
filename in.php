<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    date_default_timezone_set("Africa/Nairobi");

    echo"This is my first php code ";//displaying a sentence or a string
    print "<br>";//using html's <br > to break a line

    print "Today is <span style='color: #ff4856; text-transform: uppercase; '> Thursday </span>";
    
    print 1999;//this is an integer 

    print "<br>";

    print "5475"; //this is a string

    print "<br>";

    print date('l ');//displays curent day of the week. it is l no one

    print "<br>";// to break line

print date ('l,F js Y', strtotime('+5months'));
 
print " today is ". date('l, F js Y H:i:s');

//Creating a (Declaring) a variable-

$fname = "Alex"; // declaration of a variable of a string or a grouup of words 

$yob=1999;//decleration of digit or an integer

print "<br>";

print $fname;

print "<br>";

$user_dob="1999-10-12";

echo $fname . "was born in" .$yob;

print "<br>";

$current_year=date ('Y');

print "<br>";

echo $current_year;

print "<br>";

$age=$current_year-$yob;//you first have to define it then print it 

print "<br>";

print$age;

print "<br>";

print 44+6;

print "<br>";
print $fname ."is" .$age ."years old";
    
$birthday = new DateTime($user_dob)  ;

$today= new DateTime('today');

$interval=$birthday->diff($today);

echo'<pre>';
print_r($interval);
echo'</pre>';

print $fname . "is actually , " . $interval->y . "years " .$interval->m ." months, and " . $interval ->d . " days old .";
    
    $adult_age = 18;

    if($interval ->y > $adult_age){
        print $fname. "is an adult";// event in block to be exceted iff the condition is true 

    }
    else{
        PRINT $fname. "IS NOT AN ADULT";// event in block to be executed if the condition is false 
    }

    print"<br>";

//variable characteristics 

$last_name ="Okama ";

echo "My last name is $last_name";// putting a double quote processes and interprets the varibale value but the single quotes do not process and interpret the variable value but instead treats thee variable as a string 
    
echo "Today is ". date ('l'); // you type l instead of Y if you want it to output a different thing 

$call['lname']="Okama";
print $call['lname'];

print "<br>";
define ('LNAME', 'Okama');
echo LNAME;
/*Array for storing data
Indexed array- Arranged using indices*/
    $color=["Yellow", "Red","Pink","Blue"];
    
    print_r($color); /*for typing the data */
    
    $user=array("Pete","Mirina","Lydiah");
    print $user[2];
    print "<br>";
//Assosiative array
$user_data=[
    "fullname"=>"Alex Okama",
    "email"=>"AOkama@yahoo.com",
    "phone"=>"+254011887654",
];
    print $user_data["email"];




    ?>
    <pre><!--
        <?php print_r($user);?>
    </pre>
    
</body>
</html>