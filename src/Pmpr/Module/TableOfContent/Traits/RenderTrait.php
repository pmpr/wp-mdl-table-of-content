<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65ae3d899d066             |
    |_______________________________________|
*/
 namespace Pmpr\Module\TableOfContent\Traits; use Pmpr\Module\TableOfContent\Generator; use Pmpr\Module\TableOfContent\Setting; use Pmpr\Module\TableOfContent\TableOfContent; trait RenderTrait { public function eeisgyksyecuceue(array $ywmkwiwkosakssii = []) : array { $qookweymeqawmcwo = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [self::qescuiwgsyuikume => __("\124\x61\x62\154\145\40\x6f\146\x20\x43\x6f\156\x74\145\156\x74", PR__MDL__TABLE_OF_CONTENT), "\x68\151\144\145\137\164\x69\x74\x6c\x65" => __("\x43\154\x6f\x73\x65", PR__MDL__TABLE_OF_CONTENT), "\x73\x68\x6f\167\137\x74\x69\x74\154\145" => __("\123\x68\157\167", PR__MDL__TABLE_OF_CONTENT), self::ayscagukkeoucmoe => true]); $post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get(); $qookweymeqawmcwo = $this->sscegwueamckwmcy(self::qmkskkcukqigsimq . "\x72\x65\156\144\145\162\x5f\160\141\162\141\x6d\x65\x74\145\162\x73", $qookweymeqawmcwo, $post); if (!($eaekkwggowaaogiu = Generator::symcgieuakksimmu())) { goto asmecuqiyyswueqe; } $qookweymeqawmcwo["\x68\145\x61\x64\x69\156\x67\x73"] = $eaekkwggowaaogiu->uioymssscymciyca($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->souwykwwmyygqyqi($post, false), $ywmkwiwkosakssii); asmecuqiyyswueqe: return $qookweymeqawmcwo; } public function uiqcwsowwswommka() : bool { $cuakwceieagskoaa = false; if (!($post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu())) { goto csscmcacoikwsecs; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $sqeykgyoooqysmca = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($post); $cuakwceieagskoaa = in_array($sqeykgyoooqysmca, $ykquycoiqesuckco->giiuwsmyumqwwiyq(self::miemwgakuokqyoqo, []), true) && !in_array($post, $ykquycoiqesuckco->giiuwsmyumqwwiyq(self::qgiwmgmeaagqwgkw, []), true); csscmcacoikwsecs: return $this->ocksiywmkyaqseou(self::qmkskkcukqigsimq . "\x61\x6c\x6c\x6f\x77\137\x72\x65\156\x64\x65\x72", $cuakwceieagskoaa, $post); } }
