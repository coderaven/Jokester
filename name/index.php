<?php include "../include/header.php" ?>
			<article class="jokester"> 
				<h2>The Joke Brief</h2>
				<ul> 
					<li> 
						<h4>The Jokester:</h4>
						<p>
						<?php 
							// Get Name
							if (isset($_POST['name']))$name = $_POST['name']; else $name = null;
							if ($name != null)echo ucfirst(htmlspecialchars($name,ENT_QUOTES,'UTF-8')); 
							else echo 'Unknown';
						 ?>
						</p>
					</li>

					<li> 
						<h4>Email:</h4>
						<p>
						<?php 
							// Get Email
							if (isset($_POST['email']))$email = $_POST['email']; else $email = null;
							if ($email != null)echo (htmlspecialchars($email,ENT_QUOTES,'UTF-8')); 
							else echo 'Unknown';
						 ?>
						 </p>
					</li>

					<li> 
						<h4>Joke Cracked:</h4>
						<p>
						<?php 
							// Get Joke
							if (isset($_POST['joke']))$joke = $_POST['joke']; else $joke = null;
							if ($joke != null)echo ucfirst(htmlspecialchars($joke,ENT_QUOTES,'UTF-8')); 
							else echo "No joke cracked. Well, he's not funny.";
						 ?>
						 </p>
					</li>
				</ul>
			</article>	
<?php include "../include/footer.php" ?>	