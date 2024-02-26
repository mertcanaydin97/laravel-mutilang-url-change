<?php

function changeUrlLocale($lang){
    $route['name'] = request()->route()->getName();
    $current_params = request()->route()->parameters();
    $newparams = [];
    if($route['name'] == 'choose-cargo'){
        if($lang == 'en'){
            $route['name'] = 'choose-cargo';
        }else if($lang == 'es'){
            $route['name'] = 'elige-tu-carga';
        }else if($lang == 'tr'){
            $route['name'] = 'kargonu-sec';
        }
    }else if($route['name'] == 'elige-tu-carga'){
        if($lang == 'en'){
            $route['name'] = 'choose-cargo';
        }else if($lang == 'es'){
            $route['name'] = 'elige-tu-carga';
        }else if($lang == 'tr'){
            $route['name'] = 'kargonu-sec';
        }
    }else if($route['name'] == 'kargonu-sec'){
        if($lang == 'en'){
            $route['name'] = 'choose-cargo';
        }else if($lang == 'es'){
            $route['name'] = 'elige-tu-carga';
        }else if($lang == 'tr'){
            $route['name'] = 'kargonu-sec';
        }
    }
    if($route['name'] == 'cargo'){
        if($lang == 'en'){
            $route['name'] = 'cargo';
        }else if($lang == 'es'){
            $route['name'] = 'cargoes';
        }else if($lang == 'tr'){
            $route['name'] = 'cargotr';
        }
    }else if($route['name'] == 'cargoes'){
        if($lang == 'en'){
            $route['name'] = 'cargo';
        }else if($lang == 'es'){
            $route['name'] = 'cargoes';
        }else if($lang == 'tr'){
            $route['name'] = 'cargotr';
        }
    }else if($route['name'] == 'cargotr'){
        if($lang == 'en'){
            $route['name'] = 'cargo';
        }else if($lang == 'es'){
            $route['name'] = 'cargoes';
        }else if($lang == 'tr'){
            $route['name'] = 'cargotr';
        }
    }
foreach($current_params as $key=>$item){
    $newparams[$key] = $item;
}
$newparams['lang'] = $lang;
return route($route['name'], $newparams);
}

function changeUrlLocale('de')
?>
