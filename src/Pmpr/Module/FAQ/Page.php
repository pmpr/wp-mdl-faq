<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65fff5598e3e6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\FAQ; use Pmpr\Common\Foundation\Page\Page as BaseClass; use Pmpr\Module\FAQ\Model\Question; class Page extends BaseClass { public function __construct() { $this->slug = "\146\x61\x71"; $this->isPrivate = false; $this->hasBreadcrumb = true; parent::__construct(); } public function gogaagekwoisaqgu() { $this->title = __("\106\162\x65\x71\x75\x65\x6e\x74\x6c\x79\x20\x41\163\153\145\144\40\121\165\145\x73\x74\151\157\156\x73", PR__MDL__FAQ); } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { if (!($ouuscogyemygyuyi = Question::symcgieuakksimmu())) { goto asmecuqiyyswueqe; } $cuueaykuqqkueici = $ouuscogyemygyuyi->cwkywyqksyucoyia([self::ciywsqoeiymemsys => self::wmmucsiyiyusmssm, self::iuqumwggccmcuyem => [self::ciyoccqkiamemcmm => self::eeccqomoaqsawouy, self::euoaaiqkqcqcgeco => self::cqcimoqckgmaacyw]]); $suuagcecoyuweoqk = ''; foreach ($cuueaykuqqkueici as $cgiaqqwoogcwuuwq) { $suuagcecoyuweoqk .= $this->iuygowkemiiwqmiw("\x71\x75\x65\163\164\151\157\x6e", ["\x71\165\x65\x73\164\x69\157\156" => $cgiaqqwoogcwuuwq]); myoicgcuugciueis: } qwigomakwmyiwkgo: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\160\x61\x67\x65", ["\154\x69\x73\x74" => $suuagcecoyuweoqk, "\x71\x75\x65\163\x74\x69\x6f\156\163" => $cuueaykuqqkueici, self::ssmskyqgcmeiayco => $ewgwqamkygiqaawc]); asmecuqiyyswueqe: return parent::qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post); } }
