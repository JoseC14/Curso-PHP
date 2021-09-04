<?php

$texto="Curso de PHP";
$nome="Bruno";
$canal="vlog do fessor bruno";

echo "<a href=pg1.php?px=".urlencode($texto)."&no=".urlencode($nome)."&on=".urlencode($canal)." target=_self>Abre pg1</a>";