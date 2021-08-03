<?php
 $res = '{"885":{"idad":"2306"},"0":{"idad":"2306"},"15":{"idad":"2307"},"2":{"idad":"2308"},"3":{"idad":"2309"},"4":{"idad":"2310"}}';

$jsdecode = json_decode($res, true);

$keys = array_keys($jsdecode);

// end
echo $keys[count($jsdecode) - 1];