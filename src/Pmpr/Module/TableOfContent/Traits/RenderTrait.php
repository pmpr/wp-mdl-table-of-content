<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d4ad87cfe1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\TableOfContent\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\TableOfContent\Generator; use Pmpr\Module\TableOfContent\Setting; use Pmpr\Module\TableOfContent\TableOfContent; trait RenderTrait { public function eeisgyksyecuceue(array $ywmkwiwkosakssii = []) : array { $qookweymeqawmcwo = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::qescuiwgsyuikume => __("\x54\141\142\154\x65\40\157\146\40\x43\157\156\164\145\x6e\x74", PR__MDL__TABLE_OF_CONTENT), "\x68\x69\x64\145\x5f\x74\151\164\154\x65" => __("\x43\154\157\x73\145", PR__MDL__TABLE_OF_CONTENT), "\x73\x68\157\167\137\164\151\x74\x6c\x65" => __("\123\x68\x6f\x77", PR__MDL__TABLE_OF_CONTENT), Constants::ayscagukkeoucmoe => true]); $post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get(); $qookweymeqawmcwo = $this->sscegwueamckwmcy(TableOfContent::qmkskkcukqigsimq . "\162\145\156\144\145\162\137\160\x61\162\x61\x6d\145\x74\145\x72\x73", $qookweymeqawmcwo, $post); if ($eaekkwggowaaogiu = Generator::symcgieuakksimmu()) { $qookweymeqawmcwo["\x68\145\141\x64\151\x6e\147\x73"] = $eaekkwggowaaogiu->uioymssscymciyca($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->souwykwwmyygqyqi($post, false), $ywmkwiwkosakssii); } return $qookweymeqawmcwo; } public function uiqcwsowwswommka() : bool { $cuakwceieagskoaa = false; if ($post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu()) { $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $sqeykgyoooqysmca = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($post); $cuakwceieagskoaa = in_array($sqeykgyoooqysmca, $ykquycoiqesuckco->giiuwsmyumqwwiyq(Constants::miemwgakuokqyoqo, []), true) && !in_array($post, $ykquycoiqesuckco->giiuwsmyumqwwiyq(Constants::qgiwmgmeaagqwgkw, []), true); } return $this->ocksiywmkyaqseou(TableOfContent::qmkskkcukqigsimq . "\141\x6c\154\x6f\x77\x5f\162\x65\x6e\x64\x65\x72", $cuakwceieagskoaa, $post); } }
