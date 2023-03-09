<?php
function inversul($x) {
    if (!$x) {
        throw new Exception('Impartirea la zero nu se poate.');
    }
    return 1/$x;
}

try {
    echo inversul(5) . "\n";
} catch (Exception $e) {
    echo 'Mesalul de exceptie: ',  $e->getMessage(), "\n";
} finally {
    echo "Primul finally.\n";
}

try {
    echo inversul(0) . "\n";
} catch (Exception $e) {
    echo 'Mesalul 2  de exceptie: ',  $e->getMessage(), "\n";
} finally {
    echo "Al 2-lea finally.\n";
}

// executia codului nu se intrerupe
echo "Salut\n";