<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             654a2da6f33ba             |
    |_______________________________________|
*/
 namespace Pmpr\Module\TableOfContent; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Module\TableOfContent\Interfaces\CommonInterface; class TableOfContent extends ComponentInitiator implements CommonInterface { public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x54\141\x62\154\145\x20\x6f\x66\40\103\x6f\156\x74\145\156\x74", PR__MDL__TABLE_OF_CONTENT); }, self::wuowaiyouwecckaw => false]); } public function mameiwsayuyquoeq() { Widget::symcgieuakksimmu(); $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); if (!$owaoeyikmqaeegma->eewqyocggsagyuis()) { goto qogqewiwmwiwskgm; } Frontend::symcgieuakksimmu(); qogqewiwmwiwskgm: if (!$owaoeyikmqaeegma->euqowsuwmgokuqqo()) { goto qgoiooayqmqqsiok; } Translator::symcgieuakksimmu(); qgoiooayqmqqsiok: if (!$owaoeyikmqaeegma->mcgoysmkqsqooceq()) { goto qwigomakwmyiwkgo; } Ajax::symcgieuakksimmu(); qwigomakwmyiwkgo: } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\160\x5f\x69\x6e\x73\x65\x72\x74\x5f\160\157\x73\x74\137\x64\141\164\141", [$this, "\x73\147\155\x69\x65\165\x61\161\155\151\147\x75\145\151\x71\147"]); } public function sgmieuaqmigueiqg($icwicymcioeyeyek) { return $this->iumiqmcwkquqecso($icwicymcioeyeyek, true); } public function iumiqmcwkquqecso($icwicymcioeyeyek, bool $cwwowqyuwccuykom = false) { $iueymcwwscwqkiyq = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, self::gikuasuikwemyqoq); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if (!(self::wmmucsiyiyusmssm === $iueymcwwscwqkiyq)) { goto asmecuqiyyswueqe; } if (!in_array($seumokooiykcomco->gueasuouwqysmomu($icwicymcioeyeyek), Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(self::miemwgakuokqyoqo, []), true)) { goto myoicgcuugciueis; } $icwicymcioeyeyek = Generator::symcgieuakksimmu()->goeuwocuuigcicgu($icwicymcioeyeyek, $cwwowqyuwccuykom); myoicgcuugciueis: asmecuqiyyswueqe: return $icwicymcioeyeyek; } }
