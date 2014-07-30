<form method="post" action="reception.php" enctype="multipart/form-data">

     <label for="icone">Icône Image (JPG, PNG ou GIF | max. 15 Ko) :</label><br />
     <input type="file" name="icone" id="icone" /><br />
     <label for="mon_fichier">Image (tous formats | max. 1 Mo) :</label><br />
	 
	 
     <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
	 
     <input type="file" name="mon_fichier" id="mon_image" /><br />
     <label for="titre">Titre Image (max. 50 caractères) :</label><br />
     <input type="text" name="titre" value="Titre Image" id="titre" /><br />
     <label for="description">Description de votre Image (max. 255 caractères) :</label><br />
     <textarea name="description" id="description"></textarea><br />
	 
     <input type="submit" name="submit" value="Envoyer" />
</form>
