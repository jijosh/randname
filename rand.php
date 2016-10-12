Create an array() with the names of your closest family and friends. The more names in your array, the more fun your game will be!

After you've created your list, sort it and randomly select a name from the list.

When you have your winning name, print it to the screen in caps so everyone knows how awesome the winner is.

Functions we'll use here: array(), array_push(), sort(), count(), rand(), and strtoupper(). Play around with some of the other functions you've learned as well.

<html>
    <p>
		<?php
	// Create an array and push on the names
    // of your closest family and friends
    $list = array('hello', 'there', 'cool', 'nik', 'is');
    array_push($list, 'jijosh');
    count($list);
    rand(10, 20);
    //print_r($list);
	// Sort the list
	sort($list);
	// Randomly select a winner!
	$winnerId = array_rand($list, 1);
	// Print the winner's name in ALL CAPS
	echo $winner = strtoupper($list[$winnerId]);
	?>
	</p>
</html>
