<section id="inscription">
<h2>Ajoutez un film</h2>

	<form action="include/ajoutFilm.php" method="post">
		
		<div>
			<label for="title">Titre du film </label>
			<input type="text" id="title" name="title"/>
		</div>
		<div>
			<label for="actors">Acteurs : </label>
			<input type="text" id="actors" name="actors" />
		</div>

        <div>
			<label for="director">Réalisateur : </label>
			<input type="text" id="director" name="director" />
		</div>
		
		<div>
			<label for="producer">Nom du Producteur : </label>
			<input type="text" id="producer" name="producer"/>
		</div>

		<div>
			<label for="year">Année de production : </label>
			<select name="year" id="year">
                <option value="2018" label="2018" selected></option>
                <option value="2017" label="2017"></option>
                <option value="2016" label="2016"></option>
                <option value="2015" label="2015"></option>
                <option value="2014" label="2014"></option>
                <option value="2013" label="2013"></option>
                <option value="2012" label="2012"></option>
                <option value="2011" label="2011"></option>
                <option value="2010" label="2010"></option>
                <option value="2009" label="2009"></option>
                <option value="2008" label="2008"></option>
                <option value="2007" label="2007"></option>
                <option value="2006" label="2006"></option>
                <option value="2005" label="2005"></option>
                <option value="2004" label="2004"></option>
            </select>
		</div>

		<div>
			<label for="lang">Langue du film : </label>
			<input type="select" id="lang" name="lang"/>
		</div>

        <div>
			<label for="category">Catégorie : </label>
			<select name="category" id="category">
                <option value="Action" label="Action" selected></option>
                <option value="Guerre" label="Guerre"></option>
                <option value="Romantique" label="Romantique"></option>
                <option value="Comedie" label="Comédie"></option>
                <option value="Horreur" label="Horreur"></option>
                <option value="Drame" label="Drame"></option>
                <option value="Musical" label="Musical"></option>
                <option value="Science Fiction" label="Science Fiction"></option>
            </select>
		</div>
		
        <div>
			<label for="syno">Synopsis : </label>
			<input type="text" id="syno" name="syno"/>
		</div>

        <div>
			<label for="url">Bande annonce : </label>
			<input type="text" id="url" name="url"/>
		</div>

		<div>
            <input name="envoyer" type="submit" value="Envoyer"/>
		</div>
		
	</form>
</section>