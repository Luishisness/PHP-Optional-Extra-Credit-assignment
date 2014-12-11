<html>
<head>
  <title>CSCI-UA.60-1 Fall 2014 POP CULTURE QUIZ!!!</title>
  <link rel="stylesheet" type="text/css"  href="shawn_desktop.css" />

</head>
<body>
   <h3>POP CULTURE QUIZ!!!</h3>
   <hr />
   <?php
                
             
		$userOne = $_GET['qOne'];
                $userTwo = $_GET['qTwo'];
                $userThree = $_GET['qThree'];
                $userFour = $_GET['qFour'];
                $userFive = $_GET['qFive'];
                $userSix = $_GET['qSix'];
		$userTally=0;
		

		if ($userOne == "Swan"){
			print("<p>What animal did BJORK famously wear to an award show?</p>");
			print("<p>$userOne is Correct</p>");
			$userTally++;
		}
		else{
			print("<p>What animal did BJORK famously wear to an award show?</p>");
			print("<p>$userOne is Incorrect </p>");
		}

                if ($userTwo =="three"){
			print("<p> Kim Kardashian's marriage to Kanye West is her (select a number)  marriage?</p>");
			print("<p>$userTwo is Correct</p>");
                        $userTally++;
                }
                else{
			print("<p> Kim Kardashian's marriage to Kanye West is her (select a number)  marriage?</p>");
                        print("<p>$userTwo is Incorrect </p>");
                }

                if ($userThree == "Tatum O'neal"){
		        print("<p> Who is the youngest person to win an academy award?</p>");
                        print("<p>$userThree is Correct</p>");
                        $userTally++;
                }
                else{	
	         	 print("<p> Who is the youngest person to win an academy award?</p>");
                        print("<p>$userThree is Incorrect </p>");
                }

                if ($userFour == "Lily-rose"){
			 print("<p> What is the name of Johnny Depp's daughter?</p>");
                        print("<p>$userFour is Correct</p>");
                        $userTally++;
                }
                else{
			 print("<p> What is the name of Johnny Depp's daughter?</p>");
                        print("<p>$userFour is Incorrect </p>");
                }
	         if ($userFive == "twentyTwo"){
			print("<p> How long have the Obama's been married?</p>");
                        print("<p>$userFive is Correct</p>");
                        $userTally++;
                }
                else{
			 print("<p> How long have the Obama's been married?</p>");
                        print("<p>$userFive is Incorrect </p>");
                }
  		if ($userSix == "Will Smith"){
			 print("<p> Which one of these movie stars is not vegetarian?</p>");
                        print("<p>$userSix is Correct</p>");
                        $userTally++;
                }
                else{	
			 print("<p> Which one of these movie stars is not vegetarian?</p>");
                        print("<p>$userSix is Incorrect </p>");
                }

		if($userTally==6){
			print("<p>Great Job!! Final Score: $userTally/6</p>");
		}
		if($userTally<6){
			print("<p>You should brush up on your pop culture:
			Final Score: $userTally/6</p>");
		}
	print( '<p><a style="text-align:center " href="db_hw6.html">Please click here to try the quiz again!</a></p>' );	
		
   ?>
</body>
</html>
