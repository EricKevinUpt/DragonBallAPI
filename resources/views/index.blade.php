<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="assets/images/favicon.png" rel="icon" />
<title>Dragon Ball API</title>
<meta name="description" content="Your ThemeForest item Name and description">
<meta name="author" content="harnishdesign.net">

<!-- Stylesheet
============================== -->
<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- Font Awesome Icon -->
<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css" />
<!-- Magnific Popup -->
<link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min.css" />
<!-- Highlight Syntax -->
<link rel="stylesheet" type="text/css" href="assets/vendor/highlight.js/styles/github.css" />
<!-- Custom Stylesheet -->
<link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css" />
</head>

<body data-spy="scroll" data-target=".idocs-navigation" data-offset="125">



<!-- Document Wrapper   
=============================== -->
<div id="main-wrapper"> 
  
  
  
  <!-- Content
  ============================ -->
  <div id="content" role="main">
    
	<!-- Sidebar Navigation
	============================ -->
	<div class="idocs-navigation bg-light">
      <ul class="nav flex-column ">
        <li class="nav-item"><a class="nav-link active" href="#idocs_start">Getting Started</a>
          <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link" href="#idocs_installation">Use of API</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="#idocs_content">Content</a>
			<ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link" href="#idocs_typography">Character</a></li>
            <li class="nav-item"><a class="nav-link" href="#idocs_code">Sagas</a></li>
          </ul>
		</li>
      </ul>
    </div>
    
    <!-- Docs Content
	============================ -->
    <div class="idocs-content">
      <div class="container"> 
        
        <!-- Getting Started
		============================ -->
        <section id="idocs_start">
        <h1>Dragon Ball API</h1>
		<hr>
		<div class="row">
			<div class="col-sm-6 col-lg-4">
				<ul class="list-unstyled">
					<li><strong>Version:</strong> 1.0</li>
					<li><strong>Author:</strong> <a href="https://portfoliokevin.herokuapp.com/" target="_blank">Eric Kevin Sanhez Garrido</a></li>
				</ul>
			</div>
			<div class="col-sm-6 col-lg-4">
				<ul class="list-unstyled">
					<li><strong class="font-weight-700">Created:</strong> 23 Feb, 2022</li>
					<li><strong>Update:</strong> 23 Feb, 2022</li>
				</ul>
			</div>
		</div>
        </section>
        
		<hr class="divider">
		
        <!-- Installation
		============================ -->
        <section id="idocs_installation">
          <h2>Use of API</h2>
          <p class="lead">The next steps is to the correct use of the API Dragon Ball:</p>
          <ol>
            <li>In your browser write <code>https://api-dragonball.herokuapp.com/api</code></li>
            <li>When entering it will show the following <b>JSON</b> document
            <ul>
			        <pre>
                <code class="html">
{
  "character": "Se ingresa mediante /api/character y devuelve un json con el nombre de los personaje",
  "sagas": "Se ingresa mediante /api/sagas y devuelve un json con el nombre de las sagas",
  "Buscar personaje": "Se ingresa mediante /api/character/{id} y devuelve un json con el nombre del personaje",
  "Buscar saga": "Se ingresa mediante /api/saga/{id} y devuelve un json con el nombre de la saga"
{
                </code>
              </pre>
            </li>
            <li>This describes the two categories found in the API.</li>
            <li>The <b>characters</b> of the series and the <b>sagas</b> of this</li>
          </ol>
        </section>
        
		<hr class="divider">
		
		<!-- Content
		============================ -->
        <section id="idocs_content">
          <h2>Content</h2>
          <p class="lead mb-5">These are the content found in the API</p>
        </section>
		  
		<!-- Typography
		============================ -->
		<section id="idocs_typography">
		  <h2>characters</h2>
		  <p class="text-4">Whit the main route <code>/api/character/</code> we can access all the characters that are in the API</p>
		  <h3>Example</h3>
		  <pre>
        <code class="html">
[
{
    "id": 1,
    "name": "Goku",
    "description": "Goku es el protagonista principal del manga y anime de Dragon Ball creado por Akira Toriyama. Su nombre real y de nacimiento es Kakarotto y es uno de los pocos saiyanos que lograron sobrevivir a la destrucción total del Planeta Vegeta del Universo 7.",
    "avatar": "https://vignette.wikia.nocookie.net/dragonball/images/5/5b/Gokusteppingoutofaspaceship.jpg/revision/latest/scale-to-width-down/224?cb=20150325220848",
    "created_at": "2022-02-22T16:36:52.000000Z",
    "updated_at": "2022-02-22T16:36:52.000000Z"
},
{
    "id": 2,
    "name": "Vegeta",
    "description": "Vegeta es el deuteragonista de de la seria. Es el príncipe más reciente de la familia real saiyana y uno de los pocos supervivientes tras el genocidio saiyano del planeta Vegeta del Universo 7.",
    "avatar": "https://static.wikia.nocookie.net/dragonball/images/0/0b/Vegeta_DBZ_Episode_222.png/revision/latest?cb=20220113045006",
    "created_at": "2022-02-22T16:36:54.000000Z",
    "updated_at": "2022-02-22T16:36:54.000000Z"
}, ...
        </code>
      </pre>
		
		<h3 class="mt-5">Search by ID</h3>
		<p>To obtain a more specific search for any character, it is achieved using the following route<code>/api/character/"id"</code></p>
		<p class="mt-5">In "id" the assigned number for each character is written.</p>
    <h3>Example </h3>
    <p class="mt-5">Whit the route <code>/api/character/2</code> we get the next result</p>
		<pre>
      <code class="html">
{
  "id": 2,
  "name": "Vegeta",
  "description": "Vegeta es el deuteragonista de de la seria. Es el príncipe más reciente de la familia real saiyana y uno de los pocos supervivientes tras el genocidio saiyano del planeta Vegeta del Universo 7.",
  "avatar": "https://static.wikia.nocookie.net/dragonball/images/0/0b/Vegeta_DBZ_Episode_222.png/revision/latest?cb=20220113045006",
  "created_at": "2022-02-22T16:36:54.000000Z",
  "updated_at": "2022-02-22T16:36:54.000000Z"
}
      </code>
    </pre>
		
		<hr class="divider">
		
		<!-- Code
		============================ -->
		<section id="idocs_code">
		  <h2>Sagas</h2>
		  <p class="text-4">Whit the main route <code>/api/saga/</code> we can access all the sagas that are in the API</p>
		  <h3>Example</h3>

		  <pre>
        <code class="html">
[
{
    "id": 1,
    "name": "Dragon Ball",
    "description": "Dragon Ball es la adaptación a anime producida por Toei Animation del manga homónimo del autor Akira Toriyama.",
    "image": "https://i.pinimg.com/originals/77/82/f0/7782f08f34d373c4caf42aee9160a32d.jpg",
    "created_at": "2022-02-22T16:41:15.000000Z",
    "updated_at": "2022-02-22T16:41:15.000000Z"
},
{
    "id": 2,
    "name": "Dragon Ball Z",
    "description": "Dragon Ball Z es la secuela de la serie de anime Dragon Ball. La serie es una adaptación de los sucesos posteriores al Arco de la 23.ª Edición del Torneo Mundial de las Artes Marciales del manga de Dragon Ball escrito e ilustrado por Akira Toriyama.",
    "image": "http://ptanime.com/wp-content/uploads/2015/05/Dragon_Ball_Z_Analise_Imagem_Saga_Majin_Buu.jpg",
    "created_at": "2022-02-22T16:41:18.000000Z",
    "updated_at": "2022-02-22T16:41:18.000000Z"
},...
        </code>
      </pre>
		  
		  <h3 class="mt-5">Search by ID</h3>
		<p>To obtain a more specific search for any saga, it is achieved using the following route<code>/api/saga/"id"</code></p>
		<p class="mt-5">In "id" the assigned number for each saga is written.</p>
    <h3>Example </h3>
    <p class="mt-5">Whit the route <code>/api/saga/1</code> we get the next result</p>
    <pre>
      <code class="html">
{
  "id": 1,
  "name": "Dragon Ball",
  "description": "Dragon Ball es la adaptación a anime producida por Toei Animation del manga homónimo del autor Akira Toriyama.",
  "image": "https://i.pinimg.com/originals/77/82/f0/7782f08f34d373c4caf42aee9160a32d.jpg",
  "created_at": "2022-02-22T16:41:15.000000Z",
  "updated_at": "2022-02-22T16:41:15.000000Z"
}
      </code>
    </pre>
		

  <!-- Footer
  ============================ -->
  <footer id="footer" class="section bg-dark footer-text-light">
    <div class="container">
      <ul class="social-icons social-icons-lg social-icons-muted justify-content-center mb-3">
        <li><a data-toggle="tooltip" href="" target="_blank" title="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a></li>
        <li><a data-toggle="tooltip" href="" target="_blank" title="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
        <li><a data-toggle="tooltip" href="" target="_blank" title="" data-original-title="Dribbble"><i class="fab fa-dribbble"></i></a></li>
        <li><a data-toggle="tooltip" href="https://github.com/EricKevinUpt" target="_blank" title="" data-original-title="GitHub"><i class="fab fa-github"></i></a></li>
      </ul>
      <p class="text-center">Copyright &copy; 2022 <a href="">KevinS</a>. All Rights Reserved.</p>
	  <p class="text-2 text-center mb-0">Design &amp; Develop by <a class="btn-link" target="_blank" href="https://portfoliokevin.herokuapp.com/">Kevin Sanchez</a>.</p>
    </div>
  </footer>
  <!-- Footer end -->
  
</div>
<!-- Document Wrapper end --> 

<!-- Back To Top --> 
<a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a> 

<!-- JavaScript
============================ -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- Highlight JS -->
<script src="assets/vendor/highlight.js/highlight.min.js"></script> 
<!-- Easing --> 
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script> 
<!-- Magnific Popup --> 
<script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script> 
<!-- Custom Script -->
<script src="assets/js/theme.js"></script>
</body>
</html>
