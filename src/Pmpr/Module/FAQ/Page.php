<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63d830c8df135             |
    |_______________________________________|
*/
 namespace Pmpr\Module\FAQ; use Pmpr\Common\Foundation\Page\Page as BaseClass; use Pmpr\Module\FAQ\Model\Question; class Page extends BaseClass { public function __construct() { $this->slug = "\146\141\x71"; $this->isPrivate = false; $this->hasBreadcrumb = true; parent::__construct(); } public function gogaagekwoisaqgu() { $this->title = __("\106\x72\x65\161\165\145\156\x74\154\x79\40\x41\163\x6b\145\144\40\x51\x75\x65\x73\x74\151\x6f\x6e\x73", PR__MDL__FAQ); } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { if (!($ouuscogyemygyuyi = Question::symcgieuakksimmu())) { goto qgoiooayqmqqsiok; } $cuueaykuqqkueici = $ouuscogyemygyuyi->cwkywyqksyucoyia([self::ciywsqoeiymemsys => self::wmmucsiyiyusmssm, self::iuqumwggccmcuyem => [self::ciyoccqkiamemcmm => self::eeccqomoaqsawouy, self::euoaaiqkqcqcgeco => self::cqcimoqckgmaacyw]]); $suuagcecoyuweoqk = ''; foreach ($cuueaykuqqkueici as $cgiaqqwoogcwuuwq) { $suuagcecoyuweoqk .= $this->iuygowkemiiwqmiw("\x71\165\x65\x73\164\x69\157\x6e", ["\x71\165\145\163\x74\x69\157\156" => $cgiaqqwoogcwuuwq]); qogqewiwmwiwskgm: } qiaqsassksqiuyae: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x70\x61\147\145", ["\x6c\151\163\164" => $suuagcecoyuweoqk, "\x71\165\145\x73\x74\x69\x6f\x6e\x73" => $cuueaykuqqkueici, self::ssmskyqgcmeiayco => $ewgwqamkygiqaawc]); qgoiooayqmqqsiok: return parent::qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post); } }
