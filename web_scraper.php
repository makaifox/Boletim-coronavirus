<?php
header('Content-Type: text/html; charset=utf-8');
include('simple_html_dom.php');
require './DadosCorona.php';

$html = file_get_html('http://coronavirus.mesquita.rj.gov.br/coronaapp1_list.php');

date_default_timezone_set('America/Sao_Paulo');
$hoje = date('d-m-Y');
$date = getdate();


$dadosTotais = [
    'obitos' => $obitos = $html->find('span[id="edit4_sum_of_obito"]', 0)->plaintext,
    'suspeitosComTeste' => $suspeitosComTeste = $html->find('span[id="edit4_sum_of_casos_suspeitos_com_teste"]', 0)->plaintext,
    'descartadosComTeste' => $descartadosComTeste = $html->find('span[id="edit4_sum_of_casos_descartados_com_teste"]', 0)->plaintext,
    'descartados' => $descartados = $html->find('span[id="edit4_sum_of_casos_descartados"]', 0)->plaintext,
    'suspeitos' => $suspeitos = $html->find('span[id="edit4_sum_of_casos_suspeitos"]', 0)->plaintext,
    'confirmados' => $confirmados = $html->find('span[id="edit4_sum_of_casos_confirmados"]', 0)->plaintext,
    'descartadosClinicos' => $descartadosClinicos = $html->find('span[id="edit4_sum_of_casos_descartados_clinicos"]', 0)->plaintext
];




$dadosCorona = new DadosCorona($obitos, $suspeitosComTeste, $descartadosComTeste, $descartados, $descartadosClinicos, $confirmados);
$read = $dadosCorona->read();


$dadosHoje = [
    'confirmadosHoje' => $confirmadosHoje = $confirmados - $read[0]['casosConfirmados'] ,
    'obitosHoje' => $obitosHoje = $obitos - $read[0]['obitos'],
    'suspeitosTesteHoje' => $suspeitosTesteHoje = $suspeitosComTeste - $read[0]['suspeitosTeste'],
    'descartadosTesteHoje' => $descartadosTesteHoje = $descartadosComTeste - $read[0]['descartadosTeste'],
    'descartadosHoje' => $descartadosHoje = $descartados - $read[0]['descartados'],
    'descartadosClinicosHoje' => $descartadosClinicosHoje = $descartadosClinicos - $read[0]['descartadosClinico']
];

if($date['hours'] == 23) {
    $dadosCorona->update($obitos, $suspeitosComTeste, $descartadosComTeste, $descartados, $descartadosClinicos, $confirmados);
} 

$format = [
    '0.0',
    '00.00',
    '0.00',
    '0.'
];

$replace = str_replace($format, '', $dadosHoje); 
$jsonDadosHoje = json_encode($replace, JSON_PRETTY_PRINT);
$jsonDadosTotais = json_encode($dadosTotais, JSON_PRETTY_PRINT);



$htmlPostsCovid = file_get_html('http://www.mesquita.rj.gov.br/pmm/news_covid/', 'id="eael-post-grid-1befde2"');

            // foreach($htmlPostsCovid->find('a[class="eael-grid-post-link"]') as $title)
            //      echo $title->plaintext . '<br>';

            // foreach($htmlPostsCovid->find('div[class="eael-entry-thumbnail"]') as $img)
            //      echo $img . '<br>';

            // foreach($htmlPostsCovid->find('div[class="eael-grid-post-excerpt"]') as $content)
            //     echo $content->plaintext . '<br>';

            // foreach($htmlPostsCovid->find('span[class="eael-posted-on"] time') as $time)
            //     echo $time->plaintext . '<br>';
            
            // foreach($htmlPostsCovid->find('a[class="eael-grid-post-link"]') as $link)
            //      echo $link->href . '<br>';


                 foreach($htmlPostsCovid->find('div[class="eael-grid-post-holder-inner"]') as $post) {
                    $item['title']     = $post->find('a[class="eael-grid-post-link"]', 0)->plaintext;
                    $item['img']    = $post->find('div[class="eael-entry-thumbnail"] img', 0)->src;
                    $item['content'] = $post->find('div[class="eael-grid-post-excerpt"]', 0)->plaintext;
                    $item['time']    = $post->find('span[class="eael-posted-on"] time', 0)->plaintext;
                    $item['link'] = $post->find('a[class="eael-grid-post-link"]', 0)->href;
                    $posts[] = $item;
                }

                //print_r($posts);


    //    $title0 = $htmlPostsCovid->find('a[class="eael-grid-post-link"]', 0)->plaintext;
    //     echo $title0;
    
    //    $img0 = $htmlPostsCovid->find('div[class="eael-entry-thumbnail"]',0);
    //    echo $img0;
    //    $content0 = $htmlPostsCovid->find('div[class="eael-grid-post-excerpt"]',0)->children(0)->plaintext;
    //    echo $content0;
    //    $date0 = $htmlPostsCovid->find('span[class="eael-posted-on"] time',0)->plaintext;;
    //    echo $date0;
    //    $link0 = $htmlPostsCovid->find('a[class="eael-grid-post-link"]',0)->href;
    //    echo $link0;

      


// $htmlPosts = file_get_html('http://www.mesquita.rj.gov.br/pmm/categoria/covid-19/','id="primary" class="content-area');


    
//     $title1 = $htmlPosts->find('h2[class="entry-title"]', 0)->plaintext;
    
//     $img1 = $htmlPosts->find('div[class=post-image-wrap]',0);

//     $content1 = $htmlPosts->find('div[class="entry-content"]',0)->children(0)->plaintext;

//     $date1 = $htmlPosts->find('div[class="post-date"] span[class="posted-on"] time[class="entry-date published"]',0)->plaintext;
//     $link1 = $htmlPosts->find('div[class="entry-content"]',0)->children(1)->href;

//     $title2 = $htmlPosts->find('h2[class="entry-title"]', 1)->plaintext;
    
//     $img2 = $htmlPosts->find('div[class=post-image-wrap]',1);

//     $content2 = $htmlPosts->find('div[class="entry-content"]',1)->children(0)->plaintext;

//     $date2 = $htmlPosts->find('div[class="post-date"] span[class="posted-on"] time[class="entry-date published"]',1)->plaintext;

//     $link2 = $htmlPosts->find('div[class="entry-content"]',1)->children(1)->href;



//     $title3 = $htmlPosts->find('h2[class="entry-title"]', 2)->plaintext;
    
//     $img3 = $htmlPosts->find('div[class=post-image-wrap]',2);

//     $content3 = $htmlPosts->find('div[class="entry-content"]',2)->children(0)->plaintext;

//     $date3 = $htmlPosts->find('div[class="post-date"] span[class="posted-on"] time[class="entry-date published"]',2)->plaintext;

//     $link3 = $htmlPosts->find('div[class="entry-content"]',2)->children(1)->href;


    
//     $title4 = $htmlPosts->find('h2[class="entry-title"]', 3)->plaintext;
    
//     $img4 = $htmlPosts->find('div[class=post-image-wrap]',3);

//     $content4 = $htmlPosts->find('div[class="entry-content"]',3)->children(0)->plaintext;

//     $date4 = $htmlPosts->find('div[class="post-date"] span[class="posted-on"] time[class="entry-date published"]',3)->plaintext;

//     $link4 = $htmlPosts->find('div[class="entry-content"]',3)->children(1)->href;

    
//     $title5 = $htmlPosts->find('h2[class="entry-title"]', 4)->plaintext;
    
//     $img5 = $htmlPosts->find('div[class=post-image-wrap]',3);

//     $content5 = $htmlPosts->find('div[class="entry-content"]',4)->children(0)->plaintext;

//     $date5 = $htmlPosts->find('div[class="post-date"] span[class="posted-on"] time[class="entry-date published"]',4)->plaintext;

//     $link5 = $htmlPosts->find('div[class="entry-content"]',4)->children(1)->href;

    
//     $title6 = $htmlPosts->find('h2[class="entry-title"]', 5)->plaintext;
    
//     $img6 = $htmlPosts->find('div[class=post-image-wrap]',5);

//     $content6 = $htmlPosts->find('div[class="entry-content"]',5)->children(0)->plaintext;

//     $date6 = $htmlPosts->find('div[class="post-date"] span[class="posted-on"] time[class="entry-date published"]',5)->plaintext;

//     $link6 = $htmlPosts->find('div[class="entry-content"]',5)->children(1)->href;

    
//     $title7 = $htmlPosts->find('h2[class="entry-title"]', 6)->plaintext;
    
//     $img7 = $htmlPosts->find('div[class=post-image-wrap]',6);

//     $content7 = $htmlPosts->find('div[class="entry-content"]',6)->children(0)->plaintext;

//     $date7 = $htmlPosts->find('div[class="post-date"] span[class="posted-on"] time[class="entry-date published"]',6)->plaintext;

//     $link7 = $htmlPosts->find('div[class="entry-content"]',6)->children(1)->href;


//     $title8 = $htmlPosts->find('h2[class="entry-title"]', 7)->plaintext;
    
//     $img8 = $htmlPosts->find('div[class=post-image-wrap]',7);

//     $content8 = $htmlPosts->find('div[class="entry-content"]',7)->children(0)->plaintext;

//     $date8 = $htmlPosts->find('div[class="post-date"] span[class="posted-on"] time[class="entry-date published"]',7)->plaintext;

//     $link8 = $htmlPosts->find('div[class="entry-content"]',7)->children(1)->href;


//     $title9 = $htmlPosts->find('h2[class="entry-title"]', 8)->plaintext;
    
//     $img9 = $htmlPosts->find('div[class=post-image-wrap]',8);

//     $content9 = $htmlPosts->find('div[class="entry-content"]',8)->children(0)->plaintext;

//     $date9 = $htmlPosts->find('div[class="post-date"] span[class="posted-on"] time[class="entry-date published"]',8)->plaintext;

//     $link9 = $htmlPosts->find('div[class="entry-content"]',8)->children(1)->href;


//     $title10 = $htmlPosts->find('h2[class="entry-title"]', 9)->plaintext;
    
//     $img10 = $htmlPosts->find('div[class=post-image-wrap]',9);

//     $content10 = $htmlPosts->find('div[class="entry-content"]',9)->children(0)->plaintext;

//     $date10 = $htmlPosts->find('div[class="post-date"] span[class="posted-on"] a time[class="entry-date published"]',9)->plaintext;

//     $link10 = $htmlPosts->find('div[class="entry-content"]',9)->children(1)->href;


//     $htmlPosts = file_get_html('http://www.mesquita.rj.gov.br/pmm/categoria/covid-19/page/2/','id="primary" class="content-area');


    
//     $title11 = $htmlPosts->find('h2[class="entry-title"]', 0)->plaintext;
    
//     $img11 = $htmlPosts->find('div[class=post-image-wrap]',0);

//     $content11 = $htmlPosts->find('div[class="entry-content"]',0)->children(0)->plaintext;

//     $date11 = $htmlPosts->find('div[class="post-date"] span[class="posted-on"] time[class="entry-date published"]',0)->plaintext;
//     $link11 = $htmlPosts->find('div[class="entry-content"]',0)->children(1)->href;

//     $title12 = $htmlPosts->find('h2[class="entry-title"]', 1)->plaintext;
    
//     $img12 = $htmlPosts->find('div[class=post-image-wrap]',1);

//     $content12 = $htmlPosts->find('div[class="entry-content"]',1)->children(0)->plaintext;

//     $date12 = $htmlPosts->find('div[class="post-date"] span[class="posted-on"] time[class="entry-date published"]',1)->plaintext;

//     $link12 = $htmlPosts->find('div[class="entry-content"]',1)->children(1)->href;



//     $title13 = $htmlPosts->find('h2[class="entry-title"]', 2)->plaintext;
    
//     $img13 = $htmlPosts->find('div[class=post-image-wrap]',2);

//     $content13 = $htmlPosts->find('div[class="entry-content"]',2)->children(0)->plaintext;

//     $date13 = $htmlPosts->find('div[class="post-date"] span[class="posted-on"] time[class="entry-date published"]',2)->plaintext;

//     $link13 = $htmlPosts->find('div[class="entry-content"]',2)->children(1)->href;


    
//     $title14 = $htmlPosts->find('h2[class="entry-title"]', 3)->plaintext;
    
//     $img14 = $htmlPosts->find('div[class=post-image-wrap]',3);

//     $content14 = $htmlPosts->find('div[class="entry-content"]',3)->children(0)->plaintext;

//     $date14 = $htmlPosts->find('div[class="post-date"] span[class="posted-on"] time[class="entry-date published"]',3)->plaintext;

//     $link14 = $htmlPosts->find('div[class="entry-content"]',3)->children(1)->href;

    
//     $title15 = $htmlPosts->find('h2[class="entry-title"]', 4)->plaintext;
    
//     $img15 = $htmlPosts->find('div[class=post-image-wrap]',3);

//     $content15 = $htmlPosts->find('div[class="entry-content"]',4)->children(0)->plaintext;

//     $date15 = $htmlPosts->find('div[class="post-date"] span[class="posted-on"] time[class="entry-date published"]',4)->plaintext;

//     $link15 = $htmlPosts->find('div[class="entry-content"]',4)->children(1)->href;

    
//     $title16 = $htmlPosts->find('h2[class="entry-title"]', 5)->plaintext;
    
//     $img16 = $htmlPosts->find('div[class=post-image-wrap]',5);

//     $content16 = $htmlPosts->find('div[class="entry-content"]',5)->children(0)->plaintext;

//     $date16 = $htmlPosts->find('div[class="post-date"] span[class="posted-on"] time[class="entry-date published"]',5)->plaintext;

//     $link16 = $htmlPosts->find('div[class="entry-content"]',5)->children(1)->href;

    
//     $title17 = $htmlPosts->find('h2[class="entry-title"]', 6)->plaintext;
    
//     $img17 = $htmlPosts->find('div[class=post-image-wrap]',6);

//     $content17 = $htmlPosts->find('div[class="entry-content"]',6)->children(0)->plaintext;

//     $date17 = $htmlPosts->find('div[class="post-date"] span[class="posted-on"] time[class="entry-date published"]',6)->plaintext;

//     $link17 = $htmlPosts->find('div[class="entry-content"]',6)->children(1)->href;


//     $title18 = $htmlPosts->find('h2[class="entry-title"]', 7)->plaintext;
    
//     $img18 = $htmlPosts->find('div[class=post-image-wrap]',7);

//     $content18 = $htmlPosts->find('div[class="entry-content"]',7)->children(0)->plaintext;

//     $date18 = $htmlPosts->find('div[class="post-date"] span[class="posted-on"] time[class="entry-date published"]',7)->plaintext;

//     $link18 = $htmlPosts->find('div[class="entry-content"]',7)->children(1)->href;


//     $title19 = $htmlPosts->find('h2[class="entry-title"]', 8)->plaintext;
    
//     $img19 = $htmlPosts->find('div[class=post-image-wrap]',8);

//     $content19 = $htmlPosts->find('div[class="entry-content"]',8)->children(0)->plaintext;

//     $date19 = $htmlPosts->find('div[class="post-date"] span[class="posted-on"] time[class="entry-date published"]',8)->plaintext;

//     $link19 = $htmlPosts->find('div[class="entry-content"]',8)->children(1)->href;


//     $title20 = $htmlPosts->find('h2[class="entry-title"]', 9)->plaintext;
    
//     $img20 = $htmlPosts->find('div[class=post-image-wrap]',9);

//     $content20 = $htmlPosts->find('div[class="entry-content"]',9)->children(0)->plaintext;

//     $date20 = $htmlPosts->find('div[class="post-date"] span[class="posted-on"] a time[class="entry-date published"]',9)->plaintext;

//     $link20 = $htmlPosts->find('div[class="entry-content"]',9)->children(1)->href;
   



    $vac = file_get_html('http://vacinometro.mesquita.rj.gov.br/vacinado_list.php');



    $vac1 = $vac->find('span[class="bs-number"]',0)->plaintext;


