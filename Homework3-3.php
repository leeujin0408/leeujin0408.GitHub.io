<?php
function fibonacci($n) {
    $fib = array();
    $fib[0] = 1;
    $fib[1] = 1;
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib;
}

function printFibonacciProportion($fib) {
    $n = count($fib);
    echo "i  fi  fi+1  /  fi\n";
    for ($i = 0; $i < $n - 1; $i++) {
        $proportion = $fib[$i + 1] / $fib[$i];
        echo ($i + 1) . "  " . $fib[$i] . "  " . $fib[$i + 1] . "  " . $proportion . "\n";
    }
}

$n = 6; // 원하는 수열의 길이를 입력하세요
$fibonacciSequence = fibonacci($n);
printFibonacciProportion($fibonacciSequence);
?>
