<?php

echo 'blubberman';
shell_exec('gpio -g mode 25 out');
shell_exec('gpio -g write 25 1');
