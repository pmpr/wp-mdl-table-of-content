<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65ae3d899d066             |
    |_______________________________________|
*/
 namespace Pmpr\Module\TableOfContent; use DateTime; class Generator extends Container { public function eycawuocyiikycoe() { return $this->weysguygiseoukqw(Setting::skqaqgkgaueeyosa, []); } public function wmemoiyeycwgyaee() { return $this->weysguygiseoukqw(Setting::ugsawkoagcgismmc, 1); } public function ygcwyiyqoioacksa($ewgwqamkygiqaawc) : array { $meyiiwcswqmuggyg = []; if (!$ewgwqamkygiqaawc) { goto qmiwsequckckoaei; } if (!preg_match_all("\x2f\50\x3c\150\x28\x5b\x32\x2d\x36\x5d\x7b\x31\x7d\x29\x5b\136\76\x5d\x2a\x3e\51\x28\x2e\52\51\74\134\x2f\150\134\x32\76\x2f\x6d\x73\x75\x55", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg, PREG_SET_ORDER)) { goto qgegkeomwscwwiuw; } $xwwgygqkqwuaqwsa = $this->eycawuocyiikycoe(); if (!(5 !== count($xwwgygqkqwuaqwsa))) { goto meawswgwagoqgkye; } $usewmcecmksoaaoy = []; $ciyackuwsqkoqese = 0; $magakwkyyugoyiue = count($meyiiwcswqmuggyg); goacqqsgaaigyuaw: if (!($ciyackuwsqkoqese < $magakwkyyugoyiue)) { goto cggowoquuiwqkyew; } if (!in_array($meyiiwcswqmuggyg[$ciyackuwsqkoqese][2], $xwwgygqkqwuaqwsa, true)) { goto yiwiqaqmwiogawym; } $usewmcecmksoaaoy[] = $meyiiwcswqmuggyg[$ciyackuwsqkoqese]; yiwiqaqmwiogawym: ocokwuuquaokmasc: $ciyackuwsqkoqese++; goto goacqqsgaaigyuaw; cggowoquuiwqkyew: $meyiiwcswqmuggyg = $usewmcecmksoaaoy; meawswgwagoqgkye: $usewmcecmksoaaoy = []; $ciyackuwsqkoqese = 0; $magakwkyyugoyiue = count($meyiiwcswqmuggyg); egasokooagakisiy: if (!($ciyackuwsqkoqese < $magakwkyyugoyiue)) { goto wcesymwqykqoyuqk; } if (!(trim(strip_tags($meyiiwcswqmuggyg[$ciyackuwsqkoqese][0])) != false)) { goto mswsoaimesegiiic; } $usewmcecmksoaaoy[] = $meyiiwcswqmuggyg[$ciyackuwsqkoqese]; mswsoaimesegiiic: usqgaogkqgemuima: $ciyackuwsqkoqese++; goto egasokooagakisiy; wcesymwqykqoyuqk: if (!(count($meyiiwcswqmuggyg) !== count($usewmcecmksoaaoy))) { goto kecwuwwcwokuksyq; } $meyiiwcswqmuggyg = $usewmcecmksoaaoy; kecwuwwcwokuksyq: qgegkeomwscwwiuw: qmiwsequckckoaei: return $meyiiwcswqmuggyg; } public function yasiwmiysyuokqki($meqocwsecsywiiqs, bool $mcmaiqckgiuqayau = false) { $ksaameoqigiaoigg = false; if (!$meqocwsecsywiiqs) { goto sukskmcwsoysiuqu; } $ksaameoqigiaoigg = trim(strip_tags($meqocwsecsywiiqs)); $ksaameoqigiaoigg = remove_accents($ksaameoqigiaoigg); $ksaameoqigiaoigg = str_replace(array("\xd", "\12", "\12\xd", "\xd\xa", "\x26\141\x6d\160\x3b"), array("\40", "\x20", "\40", "\40", ''), $ksaameoqigiaoigg); if ($this->caokeucsksukesyo()->gyecsegqciqykomu()->qeegmakycwwycmcm($ksaameoqigiaoigg)) { goto ygkcacsyyckescqs; } if ($mcmaiqckgiuqayau) { goto ickcmqoiosquugwe; } $ksaameoqigiaoigg = ''; goto qmeoaqmsuseueqiy; ickcmqoiosquugwe: $kcqgsouywoiekwak = $this->ymkuuqeicqgkwaqw($ksaameoqigiaoigg); if ($kcqgsouywoiekwak !== $ksaameoqigiaoigg) { goto goeoymmqqqeeoime; } $ksaameoqigiaoigg = ''; goto eiawsoasmscmqswa; goeoymmqqqeeoime: $ksaameoqigiaoigg = $kcqgsouywoiekwak; eiawsoasmscmqswa: qmeoaqmsuseueqiy: ygkcacsyyckescqs: if (!$ksaameoqigiaoigg) { goto cgewcsueoyaeikgm; } $ksaameoqigiaoigg = preg_replace("\x2f\133\x5e\x61\x2d\172\x41\55\132\x30\x2d\71\x20\134\x2d\137\135\52\x2f", '', $ksaameoqigiaoigg); if (!is_string($ksaameoqigiaoigg)) { goto cuoqqgaygogsmmic; } $ksaameoqigiaoigg = rtrim($ksaameoqigiaoigg); $ksaameoqigiaoigg = str_replace(["\40\40", "\40"], "\137", $ksaameoqigiaoigg); $ksaameoqigiaoigg = rtrim($ksaameoqigiaoigg, "\x2d\x5f"); $ksaameoqigiaoigg = strtolower($ksaameoqigiaoigg); $ksaameoqigiaoigg = str_replace(["\x5f", "\55\55"], "\55", $ksaameoqigiaoigg); cuoqqgaygogsmmic: cgewcsueoyaeikgm: sukskmcwsoysiuqu: return $ksaameoqigiaoigg; } public function ymkuuqeicqgkwaqw($cmwygeyygwqaemaq) { return $this->ocksiywmkyaqseou("\141\160\x69\x5f\164\162\141\156\x73\154\141\164\145", $cmwygeyygwqaemaq, "\x65\x6e", "\x66\x61"); } public function goeuwocuuigcicgu($post, bool $cwwowqyuwccuykom = false) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if (!in_array($seumokooiykcomco->gueasuouwqysmomu($post), $this->esciskwmewkgwaik(), true)) { goto twkmiuomimomscew; } $aokagokqyuysuksm = $seumokooiykcomco->iooowgsqoyqseyuu($post); $semuyuaomycumuss = true; if ($cwwowqyuwccuykom) { goto mqccmesakuemceqi; } $gkkcwyoekkkuemwm = $seumokooiykcomco->igawqaomowicuayw(self::eggmsegugikoumgg, $aokagokqyuysuksm, true); if (!$gkkcwyoekkkuemwm instanceof DateTime) { goto igymseewwyiocoug; } $keaccasqgkaqawwm = new DateTime("\164\157\x64\x61\171"); $asuaciiookaciacq = $keaccasqgkaqawwm->diff($gkkcwyoekkkuemwm); $semuyuaomycumuss = $asuaciiookaciacq->d <= 0; igymseewwyiocoug: mqccmesakuemceqi: if (!($semuyuaomycumuss && !$this->qakiyayqiysiqqeo($post))) { goto eyiamcekkgkiawqy; } $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ksmqawcowkmegigw(self::eggmsegugikoumgg, new DateTime("\x74\x6f\x6d\x6f\162\x72\157\167"), $aokagokqyuysuksm); eyiamcekkgkiawqy: twkmiuomimomscew: return $post; } public function qakiyayqiysiqqeo(&$post) : bool { $ecukkacusqswqoem = false; if (!($ewgwqamkygiqaawc = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($post, self::egkuckyqcaygmymg))) { goto qwcegcuowwgiccos; } $ewgwqamkygiqaawc = stripslashes($ewgwqamkygiqaawc); $miuewyumoowsegya = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(self::meawmmkyieiykykg) === self::ON; if ($this->gmiiaymeiwkykcym($ewgwqamkygiqaawc, $miuewyumoowsegya)) { goto kooskuwkuayiuose; } $ksiyqouuaoymsycg = []; $moyaaaascoeowegu = []; $this->eqqgsimcmcmskccs($ksiyqouuaoymsycg, $moyaaaascoeowegu, $ewgwqamkygiqaawc, $ecukkacusqswqoem, $miuewyumoowsegya); $ewgwqamkygiqaawc = $this->mugwuiaqwqwwgscm($ksiyqouuaoymsycg, $moyaaaascoeowegu, $ewgwqamkygiqaawc); $post = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->set($post, [self::egkuckyqcaygmymg => $ewgwqamkygiqaawc]); kooskuwkuayiuose: qwcegcuowwgiccos: return $ecukkacusqswqoem; } public function uioymssscymciyca($ewgwqamkygiqaawc, array $ywmkwiwkosakssii = []) : string { $ggauoeuaesiymgee = ["\154\151\137\141\x74\x74\x72\163" => ["\143\154\141\x73\163" => "\x63\x6d\x73\55\164\157\143\x2d\x6c\x69\163\164\55\151\164\145\155"], "\x6c\x69\x6e\153\137\141\x74\164\x72\163" => ["\143\154\x61\163\x73" => "\143\x6d\x73\55\x74\157\143\x2d\154\151\156\153"], "\x75\154\x5f\x61\x74\164\162\x73" => ["\x63\x6c\141\x73\163" => "\x63\x6d\163\55\164\157\x63\55\154\x69\163\x74"], "\163\x70\x61\156\x5f\x61\x74\164\162\163" => []]; $ggauoeuaesiymgee = $this->ocksiywmkyaqseou("\164\157\143\x5f\145\x78\164\162\141\x63\164\145\144\x5f\x69\164\145\155\x73\137\x61\162\x67\x73", $ggauoeuaesiymgee, $ywmkwiwkosakssii, $ewgwqamkygiqaawc); $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $ggauoeuaesiymgee); $nsmgceoqaqogqmuw = ''; $meyiiwcswqmuggyg = $this->ygcwyiyqoioacksa($ewgwqamkygiqaawc); if (!(count($meyiiwcswqmuggyg) >= $this->wmemoiyeycwgyaee())) { goto ycakugokkqkuqyiu; } $gemkcygmuiegaeka = $this->weysguygiseoukqw(Setting::igcuqkcuaqkusggc, false); $ciyackuwsqkoqese = 0; $magakwkyyugoyiue = count($meyiiwcswqmuggyg); coywmiyqgsweuiic: if (!($ciyackuwsqkoqese < $magakwkyyugoyiue)) { goto qcessicwuikwqsis; } $igqsaukqcqscimok = $meyiiwcswqmuggyg[$ciyackuwsqkoqese][0]; if (!(is_string($igqsaukqcqscimok) && !$gemkcygmuiegaeka)) { goto ieumumsgyguceusy; } $nsmgceoqaqogqmuw .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq("\154\151", $ywmkwiwkosakssii["\154\x69\137\141\x74\164\162\163"], $this->qmgcisuuikgmqcsu($meyiiwcswqmuggyg[$ciyackuwsqkoqese], $ywmkwiwkosakssii["\154\x69\156\x6b\x5f\141\x74\x74\162\163"], $ywmkwiwkosakssii["\x73\x70\x61\x6e\x5f\141\x74\x74\162\163"])); ieumumsgyguceusy: yssscwioiyygssec: $ciyackuwsqkoqese++; goto coywmiyqgsweuiic; qcessicwuikwqsis: if (!$gemkcygmuiegaeka) { goto siqagquguiemuoku; } $nsmgceoqaqogqmuw = $this->okwmkqcuoakucmyu($meyiiwcswqmuggyg, $ywmkwiwkosakssii); siqagquguiemuoku: ycakugokkqkuqyiu: return $nsmgceoqaqogqmuw; } public function okwmkqcuoakucmyu($meyiiwcswqmuggyg, array $ywmkwiwkosakssii = []) : string { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $iyuskgqygaeqsewm = $swqimwqeweekeusq->qgsekwygcgawekeq("\165\x6c", $ywmkwiwkosakssii["\165\154\x5f\141\x74\164\162\x73"], false); $soagokkgcagacgac = $swqimwqeweekeusq->qgsekwygcgawekeq("\154\151", $ywmkwiwkosakssii["\154\x69\x5f\141\164\164\162\163"], false); $nsmgceoqaqogqmuw = ''; $kwiicckswgyuqegs = 100; $cmokcaggeciqumig = null; $ciyackuwsqkoqese = 0; $magakwkyyugoyiue = count($meyiiwcswqmuggyg); kciouyuaqkyqomam: if (!($ciyackuwsqkoqese < $magakwkyyugoyiue)) { goto oouoqimaaqcmccay; } if (!($kwiicckswgyuqegs > $meyiiwcswqmuggyg[$ciyackuwsqkoqese][2])) { goto gygawoqywkukmqee; } $kwiicckswgyuqegs = (int) $meyiiwcswqmuggyg[$ciyackuwsqkoqese][2]; gygawoqywkukmqee: sycygoiaiqqageym: $ciyackuwsqkoqese++; goto kciouyuaqkyqomam; oouoqimaaqcmccay: $cmokcaggeciqumig = $kwiicckswgyuqegs; $ciyackuwsqkoqese = 0; $magakwkyyugoyiue = count($meyiiwcswqmuggyg); eegqyykygiccaoeo: if (!($ciyackuwsqkoqese < $magakwkyyugoyiue)) { goto wwkgkaecgiwggcck; } if (!($kwiicckswgyuqegs === (int) $meyiiwcswqmuggyg[$ciyackuwsqkoqese][2])) { goto qsygcycwieukkgwc; } $nsmgceoqaqogqmuw .= $soagokkgcagacgac; qsygcycwieukkgwc: if (!($kwiicckswgyuqegs !== (int) $meyiiwcswqmuggyg[$ciyackuwsqkoqese][2])) { goto gimmuoqwckiseaik; } $kwiicckswgyuqegs; iqcogmsguwoikame: if (!($kwiicckswgyuqegs < (int) $meyiiwcswqmuggyg[$ciyackuwsqkoqese][2])) { goto kiwqkcaekqqyuegq; } $nsmgceoqaqogqmuw .= $iyuskgqygaeqsewm . $soagokkgcagacgac; quwcqmyokicssyew: $kwiicckswgyuqegs++; goto iqcogmsguwoikame; kiwqkcaekqqyuegq: gimmuoqwckiseaik: if (!in_array($meyiiwcswqmuggyg[$ciyackuwsqkoqese][2], $this->eycawuocyiikycoe(), true)) { goto cmqucgoewuyieoyk; } $nsmgceoqaqogqmuw .= $this->qmgcisuuikgmqcsu($meyiiwcswqmuggyg[$ciyackuwsqkoqese], $ywmkwiwkosakssii["\154\151\x6e\153\137\x61\x74\x74\162\x73"], $ywmkwiwkosakssii["\x73\160\x61\x6e\137\x61\164\164\162\163"]); cmqucgoewuyieoyk: if ($ciyackuwsqkoqese !== count($meyiiwcswqmuggyg) - 1) { goto qkcyqocqqwmqgqww; } $kwiicckswgyuqegs; ssoucoucsgccekwe: if (!($kwiicckswgyuqegs >= $cmokcaggeciqumig)) { goto kqksuugcgsyeoayy; } $nsmgceoqaqogqmuw .= "\74\57\154\x69\76"; if (!($kwiicckswgyuqegs != $cmokcaggeciqumig)) { goto qqewoyookaskiuek; } $nsmgceoqaqogqmuw .= "\74\57\x75\154\x3e"; qqewoyookaskiuek: iggyqogweyosuikc: $kwiicckswgyuqegs--; goto ssoucoucsgccekwe; kqksuugcgsyeoayy: goto miyqyeiwquwsacsm; qkcyqocqqwmqgqww: if (!($kwiicckswgyuqegs > (int) $meyiiwcswqmuggyg[$ciyackuwsqkoqese + 1][2])) { goto omugkkesagcyagmk; } $kwiicckswgyuqegs; mosqsmqimqgqoase: if (!($kwiicckswgyuqegs > (int) $meyiiwcswqmuggyg[$ciyackuwsqkoqese + 1][2])) { goto yqykqysmiquwoasu; } $nsmgceoqaqogqmuw .= "\x3c\57\154\x69\x3e\x3c\57\165\154\x3e"; ayyweymyuuiauamo: $kwiicckswgyuqegs--; goto mosqsmqimqgqoase; yqykqysmiquwoasu: omugkkesagcyagmk: if (!($kwiicckswgyuqegs == (int) @$meyiiwcswqmuggyg[$ciyackuwsqkoqese + 1][2])) { goto ygcsmkuycoagwyou; } $nsmgceoqaqogqmuw .= "\74\x2f\x6c\151\76"; ygcsmkuycoagwyou: miyqyeiwquwsacsm: umgaesggesswoaqe: $ciyackuwsqkoqese++; goto eegqyykygiccaoeo; wwkgkaecgiwggcck: return $nsmgceoqaqogqmuw; } public function qmgcisuuikgmqcsu($igqsaukqcqscimok, $agcckwqauosguaqs = [], $aqqkqgisgmqegkuu = []) : string { $akesyikoueogakwq = $this->caokeucsksukesyo()->gkksucgseqqemesc()->waecsyqmwascmqoa($igqsaukqcqscimok[0], "\150{$igqsaukqcqscimok[2]}", "\151\x64"); $meqocwsecsywiiqs = $igqsaukqcqscimok[3]; if (!$meqocwsecsywiiqs) { goto wmmggowmigekyoso; } $kqywgoqsmuswammk = "\163\160\141\x6e"; $wwgucssaecqekuek = $aqqkqgisgmqegkuu; if (!$akesyikoueogakwq) { goto ywqgcegomwaiuquc; } $wwgucssaecqekuek = $agcckwqauosguaqs; $kqywgoqsmuswammk = "\x61"; $wwgucssaecqekuek["\150\x72\x65\146"] = "\43{$akesyikoueogakwq}"; ywqgcegomwaiuquc: $akesyikoueogakwq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq($kqywgoqsmuswammk, $wwgucssaecqekuek, $meqocwsecsywiiqs); wmmggowmigekyoso: return $akesyikoueogakwq; } public function mugwuiaqwqwwgscm($ksiyqouuaoymsycg = false, $moyaaaascoeowegu = false, string $ewgwqamkygiqaawc = '') : string { if (!(is_array($ksiyqouuaoymsycg) && $ksiyqouuaoymsycg && is_array($moyaaaascoeowegu) && $moyaaaascoeowegu && $ewgwqamkygiqaawc)) { goto kymkucucyeoeikim; } if (function_exists("\x6d\142\x5f\163\x74\162\160\157\163")) { goto iekumemscwieugqw; } foreach ($ksiyqouuaoymsycg as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (!isset($moyaaaascoeowegu[$uusmaiomayssaecw])) { goto foeeqckqsyockkak; } $ewgwqamkygiqaawc = substr_replace($ewgwqamkygiqaawc, $moyaaaascoeowegu[$uusmaiomayssaecw], strpos($ewgwqamkygiqaawc, $eqgoocgaqwqcimie), strlen($eqgoocgaqwqcimie)); foeeqckqsyockkak: oqugqwcyomiaaoqu: } eeqesooyqagwawae: goto hoeeyiowekaeemko; iekumemscwieugqw: foreach ($ksiyqouuaoymsycg as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (!isset($moyaaaascoeowegu[$uusmaiomayssaecw])) { goto suswcqoyyqkkquuo; } $ewgwqamkygiqaawc = mb_substr($ewgwqamkygiqaawc, 0, mb_strpos($ewgwqamkygiqaawc, $eqgoocgaqwqcimie)) . $moyaaaascoeowegu[$uusmaiomayssaecw] . mb_substr($ewgwqamkygiqaawc, mb_strpos($ewgwqamkygiqaawc, $eqgoocgaqwqcimie) + mb_strlen($eqgoocgaqwqcimie)); suswcqoyyqkkquuo: acaqummmoyiemqss: } soqqemyioggmoakg: hoeeyiowekaeemko: kymkucucyeoeikim: return $ewgwqamkygiqaawc; } public function eqqgsimcmcmskccs(&$ksiyqouuaoymsycg, &$moyaaaascoeowegu, $ewgwqamkygiqaawc, bool &$icimsyceeegakcaw = true, bool $mcmaiqckgiuqayau = false) { $ogwecsececckqomu = 4; $ksiyqouuaoymsycg = $moyaaaascoeowegu = []; $meyiiwcswqmuggyg = $this->ygcwyiyqoioacksa($ewgwqamkygiqaawc); if (!(count($meyiiwcswqmuggyg) >= $this->wmemoiyeycwgyaee())) { goto wiysogeqqwgioyka; } $icimsyceeegakcaw = true; $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); $ciyackuwsqkoqese = 0; $magakwkyyugoyiue = count($meyiiwcswqmuggyg); soaccwqimeksgwiw: if (!($ciyackuwsqkoqese < $magakwkyyugoyiue)) { goto usquiuuyiyqaeyiu; } $iuimqckcgwwkgygo = $meyiiwcswqmuggyg[$ciyackuwsqkoqese][0]; $kqywgoqsmuswammk = "\x68{$meyiiwcswqmuggyg[$ciyackuwsqkoqese][2]}"; $meqocwsecsywiiqs = $meyiiwcswqmuggyg[$ciyackuwsqkoqese][3]; if (!($meqocwsecsywiiqs && is_string($meqocwsecsywiiqs))) { goto suqkuqygkkgwyaie; } $iakkeikwceeomgyq = $iuimqckcgwwkgygo; $iuimqckcgwwkgygo = stripcslashes($iuimqckcgwwkgygo); $aokagokqyuysuksm = $smuykqsageuocuos->waecsyqmwascmqoa($iuimqckcgwwkgygo, $kqywgoqsmuswammk, self::gouqcwikiiygyasc); $kcqgsouywoiekwak = self::ioyokcgwaowoqskk; if (strlen($aokagokqyuysuksm) <= $ogwecsececckqomu) { goto uqqaiagaeqgqgaiy; } $akesyikoueogakwq = $aokagokqyuysuksm; goto esuiysskoweawsue; uqqaiagaeqgqgaiy: if (!($akesyikoueogakwq = $this->yasiwmiysyuokqki($meqocwsecsywiiqs, $mcmaiqckgiuqayau))) { goto uguigkcmukuouway; } $kcqgsouywoiekwak = self::wiquocqckkqkmayo; uguigkcmukuouway: esuiysskoweawsue: if ($akesyikoueogakwq) { goto gaomwagkcciesyqy; } $akesyikoueogakwq = $yyauwyaeewsickwk->uniqid($ogwecsececckqomu); $icimsyceeegakcaw = false; gaomwagkcciesyqy: if (!isset($moyaaaascoeowegu[$akesyikoueogakwq])) { goto aegysmeecgcgayyw; } $akesyikoueogakwq = $akesyikoueogakwq . "\55" . $yyauwyaeewsickwk->uniqid($ogwecsececckqomu); aegysmeecgcgayyw: $ksiyqouuaoymsycg[$akesyikoueogakwq] = $iakkeikwceeomgyq; $moyaaaascoeowegu[$akesyikoueogakwq] = $smuykqsageuocuos->igmaewykumgwoaoy($iuimqckcgwwkgygo, [$kqywgoqsmuswammk => [self::gouqcwikiiygyasc => $akesyikoueogakwq, "\x64\141\164\x61\x2d\x74\x72\x61\x6e\163\154\141\164\x65" => $kcqgsouywoiekwak]]); suqkuqygkkgwyaie: qicwaskssogcokgm: $ciyackuwsqkoqese++; goto soaccwqimeksgwiw; usquiuuyiyqaeyiu: wiysogeqqwgioyka: } }
