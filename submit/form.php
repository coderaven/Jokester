<form action="?addjoke" method="post"> 
	<fieldset>
		<legend>Crack a joke!</legend>
		<ul>
			<li>
				<label for="name">Name</label>
				<input type="text" name="name" id="name">
			</li>
			<li> 
				<label for="title">Joke Title</label>
				<input type="text" name="title" id="joketitle">
			</li>
			<li> 
				<label for="joke">Your Joke</label>
				<textarea cols="50" rows="10" name="joke" id="joke"></textarea>
			</li>
			<li> 
				<button type="submit">Submit!</button>
			</li>
		</ul>
	</fieldset>
</form>	