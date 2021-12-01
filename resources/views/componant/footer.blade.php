<div class="footer">
    <!-- <img onclick="window.open('http://www.ville-paimpol.fr/')"class="paimpol clickable"src="../img/logo_paimpol.jpeg" alt=""> -->
    <img onclick="window.open('https://www.biocooppaimpol.com/')"class="biocoop clickable"src="{{ asset('images/logo_biocoop.png') }}"alt="">
    <img onclick="window.open('https://www.guingamp-paimpol-agglo.bzh/')"class="gpa clickable"src="{{ asset('images/logo_gpa.svg') }}" alt="">
    <img onclick="window.open('https://www.reseau-coherence.org/')"src="{{ asset('images/logo_coherence.jpg') }}" alt="" class="coherence clickable">
    <img onclick="window.open('http://www.ville-paimpol.fr/le-chato/')" class="lechato clickable"src="{{ asset('images/logo_lechato.jpg') }}" alt="">
    <img onclick="window.open('http://adess-ouest22.bzh/')" class="lechato clickable"src="{{ asset('images/adess.png') }}" alt="">
    <img onclick="window.open('https://www.facebook.com/Les-graines-du-go%C3%ABlo-1626470134314629')" class="coherence clickable"src="{{ asset('images/graines_goelo.jpg') }}" alt="">
    <img onclick="window.open('https://www.bretagne-vivante.org/')" class="biocoop clickable"src="{{ asset('images/bretagne_vivante.png') }}" alt="">
</div>
<script src="{{ asset('js/script.js') }}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
@yield('mailtoAll_scripts')
{{--@yield('form_scripts')--}}
</body>
</html>
