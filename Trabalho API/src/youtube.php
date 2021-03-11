<?php
    include('src/config.php');

    $search = isset($_POST['search']) ? removerEspacos($_POST['search']) : 'Fatec';

    $maxResults = isset($_POST['maxResults']) ? $_POST['maxResults'] : '15';

    // Key da API gerada no site developers.google.com
    $keyAPI = KEY;

    $type = "&type=video&part=snippet&maxResults={$maxResults}";

    $searching = "&q={$search}";

    $url = "https://www.googleapis.com/youtube/v3/search?key={$keyAPI}{$type}{$searching}";

    $videos = json_decode(file_get_contents($url));

    function exibirVideos(object $videos) {
        $link = '';
        foreach ($videos->items as $video) {
            $link .= "       
            <div class='embed-responsive embed-responsive-4by3 mt-4'>
                <iframe class='embed-responsive-item' src='https://www.youtube.com/embed/{$video->id->videoId}' allowfullscreen></iframe>
            </div>
            ";
        }       
        return $link;         
    }

    function exibirDescricao(object $videos) {
        $link = '';
        foreach ($videos->items as $video) {
            $link .= "
            <div class ='embed-responsive embed-responsive-16by9'>
            <div class ='embed-responsive-item mt-5'>
            <h4>{$video->snippet->title}</h4>   
            <p class='lead fontRezise'>{$video->snippet->description}</p>
            </div>
            </div>
            ";
        }       
        return $link;         
    }

    function exibirTitulo(object $videos) {
        $titulo = '';
        foreach ($videos->items as $video) {
            $titulo = $video->snippet->title;
        }        
        return $titulo;         
    }

    function removerEspacos(String $string){
        return preg_replace('/[ -]+/','_',$string);
    }

?>

