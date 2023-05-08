<form action="{{ url('formulaire') }}" method="POST">
        @csrf
        <label for="nom">Entrez votre nom : </label>
        <input type="text" name="nom" id="nom">
        <label for="prenom">Entrez votre prénom : </label>
        <input type="text" name="prenom" id="prenom">
        <input type="submit" value="Envoyer !">
</form>