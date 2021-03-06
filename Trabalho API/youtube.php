<?php
    $search = isset($_POST['search']) ? $_POST['search'] : '';

    $maxResults = isset($_POST['maxResults']) ? $_POST['maxResults'] : '';


    // Key da API gerada no site developers.google.com
    $keyAPI = "AIzaSyDeUoN9GWfvAaKxsYTAYgPKjeUzIHF_kHs";

    $type = "&type=video&part=snippet&maxResults={$maxResults}&q=" . removerEspacos($search);

    $url = "https://www.googleapis.com/youtube/v3/search?key={$keyAPI}{$type}";

    $videos = json_decode(file_get_contents($url));

     echo $url;

    function exibirVideos(object $videos) {
        $link = '';
        foreach ($videos->items as $video) {
            $link .= "
            <h3 class='mt-4'>{$video->snippet->title}</h3>        
            <div class='embed-responsive embed-responsive-4by3'>
                <iframe class='embed-responsive-item' src='https://www.youtube.com/embed/{$video->id->videoId}' allowfullscreen></iframe>
            </div>";
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


    // echo '<pre>';
    // print_r($videos->items[0]);


   















    // function getAdress () {
    //     $address = (object) [
    //         'cep' => '',
    //         'logradouro' => '',
    //         'bairro' => '',
    //         'localidade' => '',
    //         'uf' => ''
    //     ];
        
    //     if (isset($_POST['cep'])) {
    //         $cep = $_POST['cep'];

    //         $cep = filterCep($cep);

    //         if (isCep($cep)) {
    //             $address = getAdressViaCep($cep);
    //             if (property_exists($address, 'erro')){
    //                 $address = addressEmpty();
    //                 $address->cep = 'CEP Não Encontrado!';
    //             }
    //         } else {
    //             $address = addressEmpty();
    //             $address->cep = 'CEP Inválido!';
    //         }
    //     } else {
    //         $address = addressEmpty();
    //     }
    //     return $address;
    // }


    // function getAdressViaCep (String $cep){
    //     $url = "https://viacep.com.br/ws/{$cep}/json/";
    //     return json_decode(file_get_contents($url));
    // }

    // function isCep(String $cep):bool {
    //     return preg_match('/^[0-9]{5}-?[0-9]{3}$/', $cep);
    // }
    
    // function filterCep(String $cep):String {
    //     return preg_replace('/[^0-9]/', '', $cep);
    // }

    // function addressEmpty() {
    //     return (object) [
    //         'cep' => '',
    //         'logradouro' => '',
    //         'bairro' => '',
    //         'localidade' => '',
    //         'uf' => ''
    //     ];
    // }

?>

